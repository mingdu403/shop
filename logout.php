<?php
// 세션 시작
session_start();

// 세션 제거
session_unset();
session_destroy();

// 로그인 페이지로 리다이렉트
header('Location: index.html');
exit();
?>
