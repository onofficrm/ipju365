<?php
// 제작: 홈짱닷컴 (Homzzang.com) (230920)

// 내 아이피만 접속 허용 (※ 아이피를 내 아이피로 수정.)
if($_SERVER['REMOTE_ADDR'] != '116.33.180.136') exit;

include "_common.php";

// 최고관리자 비밀번호 변경
if(isset($_POST['password']) && $_POST['password']) {
	$sql = "UPDATE {$g5['member_table']} SET mb_password = '".get_encrypt_string($_POST['password'])."' WHERE mb_id = '{$config['cf_admin']}'";
	if(sql_query($sql)) alert("패스워드 변경완료. FTP 접속해 이 파일을 제거하세요.");
}
?>
<html>
<head>
<style>
body {max-width:320px; margin:50px auto 0;}
input {padding:5px 10px;}
</style>
<head>

<body>
<h1>최고관리자 계정관리</h1>
<form method="post">
	<input type="type" name="mb_id" value="<?php echo $config['cf_admin'];?>">
	<input type="password" name="password" id="password" value="" placeholder="새 비밀번호 입력">
	<input type="submit" value="확인">
</form>

<p><a href="<?php echo G5_URL?>">홈으로 이동</a><p>
<p>PS1. 패스워드는 (특수문자/대문자/소문자/숫자) 혼합해 8자리 이상 권장.<p>
<p>PS2. 로그인 후, 관리자 페이지에서 패스워드 한번 더 새로 변경 권장.<p>


<script>
var pwd = document.getElementById("password");
var pwdMsg = pwd.getAttribute("placeholder");

// 포커스 이벤트
pwd.addEventListener("focus", function() {
	if (pwd.value === "") {
		pwd.setAttribute("placeholder", "");
	}
});

// 블러 이벤트
pwd.addEventListener("blur", function() {
	if (pwd.value === "") {
		pwd.setAttribute("placeholder", pwdMsg);
	}
});
</script>
<body>
</html>