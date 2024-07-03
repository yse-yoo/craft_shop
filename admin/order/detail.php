<?php
require_once '../app.php';

// 仮の注文データ
$order = [
    'id' => 1,
    'product_name' => 'クラフトスプーン',
    'price' => '¥5,000',
    'order_date' => '2024-07-01'
];
?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'head.php' ?>

<body class="bg-gray-100">
  <?php include COMPONENT_DIR . 'nav.php' ?>

  <main class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
      <h2 class="text-2xl font-bold mb-4">注文詳細</h2>
      <div class="space-y-4">
        <div>
          <label class="block text-gray-700">注文ID:</label>
          <p class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100"><?php echo htmlspecialchars($order['id']); ?></p>
        </div>
        <div>
          <label class="block text-gray-700">商品名:</label>
          <p class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100"><?php echo htmlspecialchars($order['product_name']); ?></p>
        </div>
        <div>
          <label class="block text-gray-700">価格:</label>
          <p class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100"><?php echo htmlspecialchars($order['price']); ?></p>
        </div>
        <div>
          <label class="block text-gray-700">注文日:</label>
          <p class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100"><?php echo htmlspecialchars($order['order_date']); ?></p>
        </div>
        <div class="mt-6">
          <a href="../orders/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">注文一覧に戻る</a>
        </div>
      </div>
    </div>
  </main>

  <?php include COMPONENT_DIR . 'footer.php' ?>
</body>

</html>