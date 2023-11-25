<?php
include('db_connect.php'); // 데이터베이스 연결 코드 포함

// 세션 시작
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 실제로는 입력값의 유효성 검사와 보안 강화를 위해 다양한 처리가 필요합니다.

    // 예제에서는 간단하게 아이디와 비밀번호를 테스트합니다.
    $sql = "SELECT * FROM member WHERE member_id = '$username' AND member_pwd = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // 로그인 성공 시 세션에 사용자 아이디 저장
        $_SESSION['user_id'] = $username;

        // 프로필 페이지로 리다이렉트
        header('Location: profile.php');
        exit();
    } else {
        echo "로그인 실패. 아이디 또는 비밀번호가 일치하지 않습니다.";
    }
}

// 연결 종료
$conn->close();
?>