<?php
require_once 'db_connect.php'; // ไฟล์เชื่อมต่อ Database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash รหัสผ่าน
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    try {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, name, phone) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$username, $email, $password, $name, $phone]);
        echo "ลงทะเบียนสำเร็จ!";
        // Redirect ไปยังหน้า login หรือหน้าอื่นๆ หลังจากลงทะเบียนสำเร็จ
        header('Location: login.php'); 
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage(); 
    }
}
?> 

<?php require 'header.php'; ?> 
<body>
    <h2>ลงทะเบียน</h2>
    <form method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <label for="name">ชื่อ:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="phone">เบอร์โทรศัพท์:</label><br>
        <input type="tel" id="phone" name="phone"><br><br>
        <input type="submit" value="ลงทะเบียน">
    </form>
</body>
<?php require 'footer.php'; ?>