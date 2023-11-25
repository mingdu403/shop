<?php
include('db_connect.php'); // 데이터베이스 연결 코드 포함

// 세션 시작
session_start();

// 로그인 여부 확인
if (!isset($_SESSION['user_id'])) {
    header('Location: index.html'); // 로그인되지 않은 경우 로그인 페이지로 리다이렉트
    exit();
}

$user_id = $_SESSION['user_id'];

// 사용자 정보 조회
$sql = "SELECT * FROM member WHERE member_id = '$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $member_id = $row['member_id'];
    $member_name = $row['member_name'];
    $member_addr = $row['member_addr'];
    $member_phone = $row['member_phone'];
    $member_age = $row['member_age'];
    $member_gender = $row['member_gender'];
} else {
    echo "사용자 정보를 찾을 수 없습니다.";
    exit();
}

// 연결 종료
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }

        table {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        td span {
            font-weight: bold;
        }

        p {
            margin-top: 20px;
        }

        a {
            color: #4caf50;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>속성</th>
            <th>값</th>
        </tr>
        <tr>
            <td>ID</td>
            <td><span><?php echo $member_id; ?></span></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><span><?php echo $member_name; ?></span></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><span><?php echo $member_addr; ?></span></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><span><?php echo $member_phone; ?></span></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><span><?php echo $member_age; ?></span></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><span><?php echo $member_gender; ?></span></td>
        </tr>
    </table>

    <p><a href="logout.php">Logout</a></p>
</body>
</html>
