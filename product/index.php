<?php
require_once '../app.php';

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
      <h2 class="text-4xl font-bold text-gray-800 mb-4">product</h2>
    </section>

    <section>
      <div id="product" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if ($product->values): ?>
        <?php foreach ($product->values as $value) : ?>
          <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <?php if ($value['image_name']) : ?>
              <img src="<?= PRODUCTS_IMAGE_BASE_URL . $value['image_name'] ?>" alt="<?= $value['image_name'] ?>" class="w-full h-48 object-cover">
            <?php endif ?>
            <div class="p-4">
              <h4 class="text-xl font-bold text-gray-800"><?= $value['name'] ?></h4>
              <p class="text-gray-600"><?= $value['summary'] ?></p>
              <div class="mt-4">
                <span class="text-lg font-bold text-gray-800">Price: &yen;<?= number_format($value['price']) ?></span>
                <a href="product/detail.php?id=<?= $value['id'] ?>" class="block mt-2 text-blue-500 hover:underline">More...</a>
              </div>
            </div>
          </div>
        <?php endforeach ?>
        <?php endif ?>
      </div>
    </section>
  </main>

  <?php include COMPONENT_DIR . 'footer.php' ?>
</body>

</html>