<?php
require_once '../../app.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit;
}
// try {
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute($_POST);
// } catch (PDOException $e) {

// }

header('Location: ./');
