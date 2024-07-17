<?php
require_once './app.php';
$product = new Product();
$product->get();
?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'head.php' ?>

<body class="bg-gray-100">
  <?php include COMPONENT_DIR . 'nav.php' ?>

  <main class="container mx-auto px-4 py-8">
    <section class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">職人の手作り作品をお届けします</h2>
      <p class="text-gray-600">当店では、伝統的な技法で作られた職人の手作り作品を取り揃えています。<br>質の高い商品をお届けします。</p>
    </section>

    <section class="p-6">
      <h3 class="text-2xl font-bold text-gray-800 mb-6">おすすめ商品</h3>
      <?php if ($product->values) : ?>
        <div id="product" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php foreach ($product->values as $value) : ?>
            <div class="bg-white rounded-lg shadow-lg p-6">
              <img class="w-full h-48 object-cover rounded-t-lg mb-4" src="<?= PRODUCTS_IMAGE_BASE_URL . $value['image_name'] ?>" alt="<?= $value['image_name'] ?>">
              <h4 class="text-xl font-bold text-gray-800"><?= $value['name'] ?></h4>
              <p class="text-gray-600 mt-2"><?= nl2br($value['summary']) ?></p>
              <p class="text-gray-800 font-bold mt-2">¥<?= number_format($value['price']) ?></p>
              <div class="mt-4">
                <a href="product/detail.php?id=<?= $value['id'] ?>" class="block mt-2 text-blue-500 hover:underline">More...</a>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      <?php endif ?>
    </section>

  </main>

  <?php include COMPONENT_DIR . 'footer.php' ?>
</body>

</html>