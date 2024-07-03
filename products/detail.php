<?php
require_once '../app.php';
?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'head.php' ?>

<body class="bg-gray-100">
  <?php include COMPONENT_DIR . 'nav.php' ?>

  <main class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden max-w-md mx-auto">
      <div class="flex">
        <img src="images/spoon.jpg" alt="Product Image" class="w-full object-cover">
      </div>
      <div class="p-8">
        <h2 class="text-2xl font-bold text-gray-800">Product Name</h2>
        <p class="text-gray-600 mt-4">This is a detailed description of the product. It includes all the necessary information about the product, such as its features, materials used, and any other relevant details that would be useful for the customer to know.</p>
        <p class="text-gray-600 mt-4">Artisan: <a href="artisan/detail.php" target="_blank">Adam</a></p>
        <div class="mt-4">
          <span class="text-3xl font-bold text-gray-800">¥5,000</span>
        </div>
        <div class="mt-6">
          <a href="cart/add.php?procut_id=1" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Cart</a>
          <a href="products/" class="text-blue font-bold py-2 px-4 rounded">商品一覧</a>
        </div>
      </div>
    </div>
  </main>

  <?php include COMPONENT_DIR . 'footer.php' ?>
</body>

</html>
