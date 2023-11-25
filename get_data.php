<?php
include('db_connect.php'); // 데이터베이스 연결 코드 포함

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $member_id = $_POST['member_id'];

    // 데이터베이스에서 데이터 가져오기
    $sql = "SELECT * FROM member WHERE member_id = '$member_id'";
    $result = $conn->query($sql);

    // 데이터 출력
    echo "<h3>회원 정보</h3>";
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Password</th><th>Name</th><th>Address</th><th>Phone</th><th>Age</th><th>Gender</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["member_id"]."</td><td>".$row["member_pwd"]."</td><td>".$row["member_name"]."</td><td>".$row["member_addr"]."</td><td>".$row["member_phone"]."</td><td>".$row["member_age"]."</td><td>".$row["member_gender"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "회원 정보가 없습니다.";
    }

    // 연결 종료
    $conn->close();
}
?>