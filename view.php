<?php
require_once('link.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['name'], $_POST['phone'])) {

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $created_at = date('Y-m-d H:i:s');
        
        $sql = ("INSERT INTO view (name, phone, created_at) VALUES ('$name', '$phone', '$created_at')");
        $conn->query($sql);
        echo "Спасибо за обращение!";
        $conn->close();
    } else {
        echo "Пожалуйста, заполните все поля формы.";
    }
}
header('Location: index.php');
exit();
?>