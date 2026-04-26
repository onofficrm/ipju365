(function () {
    var WIDGET_ID = 'rb-translate-widget';
    var ELEMENT_ID = 'rb-google-translate-element';
    var STORAGE_KEY = 'rb-translate-lang';
    var COOKIE_NAME = 'googtrans';
    var SCRIPT_ID = 'rb-google-translate-script';
    var initialized = false;

    function setCookie(name, value, domain) {
        var cookie = name + '=' + encodeURIComponent(value) + '; path=/; max-age=31536000';
        if (domain) {
            cookie += '; domain=' + domain;
        }
        document.cookie = cookie;
    }

    function getRootDomain() {
        var host = window.location.hostname;
        var parts = host.split('.');

        if (parts.length <= 2 || /^\d+\.\d+\.\d+\.\d+$/.test(host) || host === 'localhost') {
            return '';
        }

        return '.' + parts.slice(-2).join('.');
    }

    function setGoogTransCookie(lang) {
        var value = '/ko/' + lang;
        setCookie(COOKIE_NAME, value, '');

        var rootDomain = getRootDomain();
        if (rootDomain) {
            setCookie(COOKIE_NAME, value, rootDomain);
        }
    }

    function getStoredLanguage() {
        try {
            var stored = window.localStorage.getItem(STORAGE_KEY);
            if (stored === 'ko' || stored === 'en') {
                return stored;
            }
        } catch (e) {}

        var matches = document.cookie.match(/(?:^|;\s*)googtrans=([^;]+)/);
        if (!matches) {
            return 'ko';
        }

        var decoded = decodeURIComponent(matches[1]);
        if (decoded.slice(-3) === '/en') {
            return 'en';
        }

        return 'ko';
    }

    function persistLanguage(lang) {
        try {
            window.localStorage.setItem(STORAGE_KEY, lang);
        } catch (e) {}

        setGoogTransCookie(lang);
    }

    function updateActiveState(lang) {
        var widget = document.getElementById(WIDGET_ID);
        if (!widget) {
            return;
        }

        widget.querySelectorAll('[data-rb-lang]').forEach(function (button) {
            button.classList.toggle('is-active', button.getAttribute('data-rb-lang') === lang);
            button.setAttribute('aria-pressed', button.getAttribute('data-rb-lang') === lang ? 'true' : 'false');
        });
    }

    function getTranslateSelect() {
        return document.querySelector('.goog-te-combo');
    }

    function dispatchChange(element) {
        element.dispatchEvent(new Event('change'));
    }

    function applyLanguage(lang, attemptsLeft) {
        var select = getTranslateSelect();
        persistLanguage(lang);
        updateActiveState(lang);

        if (select) {
            if (select.value !== lang) {
                select.value = lang;
                dispatchChange(select);
            } else if (lang === 'ko') {
                dispatchChange(select);
            }
            return;
        }

        if ((attemptsLeft || 0) > 0) {
            window.setTimeout(function () {
                applyLanguage(lang, attemptsLeft - 1);
            }, 300);
            return;
        }

        window.location.reload();
    }

    function createWidget() {
        if (document.getElementById(WIDGET_ID)) {
            return;
        }

        var widget = document.createElement('div');
        widget.id = WIDGET_ID;
        widget.className = 'rb-translate-widget notranslate';
        widget.setAttribute('translate', 'no');
        widget.setAttribute('role', 'group');
        widget.setAttribute('aria-label', 'Language switcher');
        widget.innerHTML =
            '<span class="rb-translate-label">LANG</span>' +
            '<div class="rb-translate-actions">' +
                '<button type="button" class="rb-translate-button" data-rb-lang="ko" aria-pressed="false">KO</button>' +
                '<button type="button" class="rb-translate-button" data-rb-lang="en" aria-pressed="false">EN</button>' +
            '</div>';

        widget.addEventListener('click', function (event) {
            var button = event.target.closest('[data-rb-lang]');
            if (!button) {
                return;
            }

            applyLanguage(button.getAttribute('data-rb-lang'), 10);
        });

        document.body.appendChild(widget);
    }

    function createElementContainer() {
        if (document.getElementById(ELEMENT_ID)) {
            return;
        }

        var container = document.createElement('div');
        container.id = ELEMENT_ID;
        container.className = 'rb-translate-element';
        container.setAttribute('aria-hidden', 'true');
        document.body.appendChild(container);
    }

    function loadTranslateScript() {
        if (document.getElementById(SCRIPT_ID)) {
            return;
        }

        var script = document.createElement('script');
        script.id = SCRIPT_ID;
        script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
        script.async = true;
        document.body.appendChild(script);
    }

    window.googleTranslateElementInit = function () {
        if (initialized || !window.google || !window.google.translate || !window.google.translate.TranslateElement) {
            return;
        }

        initialized = true;

        new window.google.translate.TranslateElement({
            pageLanguage: 'ko',
            includedLanguages: 'ko,en',
            autoDisplay: false,
            layout: window.google.translate.TranslateElement.InlineLayout.SIMPLE
        }, ELEMENT_ID);

        window.setTimeout(function () {
            applyLanguage(getStoredLanguage(), 2);
        }, 500);
    };

    function boot() {
        createWidget();
        createElementContainer();
        updateActiveState(getStoredLanguage());
        loadTranslateScript();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', boot);
    } else {
        boot();
    }
})();
