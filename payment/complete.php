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
      <h2 class="text-4xl font-bold text-gray-800 mb-4">購入完了</h2>
    </section>

    <section>
      <div class="bg-white shadow-md rounded-lg overflow-hidden max-w-lg mx-auto p-6 text-center">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">ご購入ありがとうございます！</h3>
        <p class="text-gray-700 mb-6">お客様の注文が正常に処理されました。商品の発送準備が整い次第、ご連絡いたします。</p>
        <div class="space-y-4">
          <a href="product/" class="block bg-blue-500 text-white py-2 px-4 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">商品一覧に戻る</a>
          <a href="user/" class="block bg-gray-500 text-white py-2 px-4 rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">マイページに戻る</a>
        </div>
      </div>
    </section>
  </main>

  <?php include COMPONENT_DIR . 'footer.php' ?>
</body>

</html>