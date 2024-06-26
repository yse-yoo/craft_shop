<?php
require_once '../../app.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit;
}
$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$summary = $_POST['summary'];
$description = $_POST['description'];
$image_url = $_POST['image_url'];
$artisan_id = $_POST['artisan_id'];

// $sql = "INSERT INTO products (name, price, stock, summary, description, image_url, artisan_id, created_at, updated_at)
//                 VALUES (:name, :price, :stock, :summary, :description, :image_url, :artisan_id, NOW(), NOW())";

// try {
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute($_POST);
// } catch (PDOException $e) {

// }

header('Location: ./');
