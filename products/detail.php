<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>クラフトショップ - 商品詳細</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
  <header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6">
      <h1 class="text-3xl font-bold text-gray-800">Craftsman Shop</h1>
      <nav class="mt-4">
        <ul class="flex space-x-4">
          <li><a href="../" class="text-gray-600 hover:text-gray-800">ホーム</a></li>
          <li><a href="./" class="text-gray-600 hover:text-gray-800">商品</a></li>
          <li><a href="../artisan/" class="text-gray-600 hover:text-gray-800">職人紹介</a></li>
          <li><a href="../register/" class="text-gray-600 hover:text-gray-800">ユーザ登録</a></li>
          <li><a href="../user/" class="text-gray-600 hover:text-gray-800">ユーザページ</a></li>
          <li><a href="../cart/" class="text-gray-600 hover:text-gray-800">カート</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
      <div class="md:flex">
        <div class="md:flex-shrink-0">
          <img src="../images/spoon.jpg" alt="Product Image" class="w-full h-64 object-cover md:w-64">
        </div>
        <div class="p-8">
          <h2 class="text-2xl font-bold text-gray-800">Product Name</h2>
          <p class="text-gray-600 mt-4">This is a detailed description of the product. It includes all the necessary information about the product, such as its features, materials used, and any other relevant details that would be useful for the customer to know.</p>
          <p class="text-gray-600 mt-4">Artisan: <a href="artisan/detail.php" target="_blank">Adam</a></p>
          <div class="mt-4">
            <span class="text-3xl font-bold text-gray-800">¥5,000</span>
          </div>
          <div class="mt-6">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">カートに追加</button>
            <a href="./" class="text-blue font-bold py-2 px-4 rounded">Back</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="bg-white shadow mt-12">
    <div class="container mx-auto px-4 py-6 text-center">
      <p class="text-gray-600">&copy; 2024 Craftsman Shop. All rights reserved.</p>
    </div>
  </footer>
  <script defer src="js/app.js"></script>
</body>

</html>