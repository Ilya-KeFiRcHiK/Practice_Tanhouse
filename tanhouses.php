<?php
require_once 'link.php';

function getTownhouses() {
    global $conn;
    
    $sql = "SELECT * FROM tanhouses";
    $result = $conn->query($sql);
    
    $townhouses = [];
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $townhouses[] = $row;
        }
    }
    
    return $townhouses;
}
?>

