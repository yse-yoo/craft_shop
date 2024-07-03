<?php
require_once '../app.php';
?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'head.php' ?>

<body class="bg-gray-100">
  <?php include COMPONENT_DIR . 'nav.php' ?>

  <main class="container mx-auto px-4 py-8">
    <section class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">カート</h2>
    </section>

    <section>
        <div id="products" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/spoon.jpg" alt="Product 2" class="w-full h-48 object-cover">
            <div class="p-4">
              <h4 class="text-xl font-bold text-gray-800">Product 2</h4>
              <p class="text-gray-600">Price: &yen;21,000</p>
              <div class="mt-4">
                <span class="text-lg font-bold text-gray-800">¥6,000</span>
                <a href="cart/remove.php?id=2" class="block mt-2 text-blue-500 hover:underline">削除</a>
              </div>
            </div>
          </div>
          <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/spoon.jpg" alt="Product 3" class="w-full h-48 object-cover">
            <div class="p-4">
              <h4 class="text-xl font-bold text-gray-800">Product 3</h4>
              <p class="text-gray-600">Price: &yen;48,000</p>
              <div class="mt-4">
                <span class="text-lg font-bold text-gray-800">¥7,000</span>
                <a href="cart/remove.php?id=3" class="block mt-2 text-blue-500 hover:underline">削除</a>
              </div>
            </div>
          </div>
        </div>

      <form action="payment/" method="POST">
        <div class="mt-8 text-center">
          <p class="text-2xl font-bold text-gray-800">合計: ¥13,000</p>
          <button type="submit" class="mt-4 bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">決済へ</button>
        </div>
      </form>
    </section>
  </main>

  <?php include COMPONENT_DIR . 'footer.php' ?>
</body>

</html>