<?php
require_once '../../app.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit;
}
$_SESSION[APP_NAME]['product'] = $_POST;
$product = new Product();
$product->update($_POST);

header('Location: ./');