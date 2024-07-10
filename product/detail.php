<?php
require_once '../app.php';
if (empty($_GET['id'])) {
    header('Location: ./');
}
$product = new Product();
$product->findByID($_GET['id']);
?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'head.php' ?>

<body class="bg-gray-100">
  <?php include COMPONENT_DIR . 'nav.php' ?>

  <main class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden max-w-md mx-auto">
      <div class="flex">
        <img src="<?= PRODUCTS_IMAGE_BASE_URL . $product->value['image_name'] ?>" alt="Product Image" class="w-full object-cover">
      </div>
      <div class="p-8">
        <h2 class="text-2xl font-bold text-gray-800"><?= $product->value['name'] ?></h2>
        <p class="text-gray-600 mt-4"><?= nl2br($product->value['description']) ?></p>
        <p class="text-gray-600 mt-4">Artisan: <a href="artisan/detail.php" target="_blank"></a></p>
        <div class="mt-4">
          <span class="text-3xl font-bold text-gray-800">&yen;<?= number_format($product->value['price']) ?></span>
        </div>
        <div class="mt-6">
          <a href="cart/add.php?procut_id=1" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Cart</a>
          <a href="product/" class="text-blue font-bold py-2 px-4 rounded">商品一覧</a>
        </div>
      </div>
    </div>
  </main>

  <?php include COMPONENT_DIR . 'footer.php' ?>
</body>

</html>
