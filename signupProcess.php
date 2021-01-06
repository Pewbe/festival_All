<?php
ini_set('display_errors', true);
$conn = mysqli_connect('localhost', 'root', 'Acute3062!', 'scaduler');
$hashedPassword = password_hash($_POST['first-password'], PASSWORD_DEFAULT);
echo $hashedPassword;
$sql = "
    INSERT INTO users
    (userid, password, user_name, grade, class, number, created)
    VALUES('{$_POST['first-id']}', '{$hashedPassword}', '{$_POST['user-name']}', '{$_POST['grade']}', '{$_POST['class']}', '{$_POST['class-number']}', NOW()
    )";
echo $sql;
$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "회원가입에 실패하였습니다.";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("회원가입이 완료되었습니다");
        location.href = "calender_mainpage.html";
    </script>
<?php
}
?>