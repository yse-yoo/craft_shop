<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>クラフトショップ</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
  <header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6">
      <h1 class="text-3xl font-bold text-gray-800">Craftsman Shop</h1>
      <nav class="mt-4">
        <ul class="flex space-x-4">
          <li><a href="./" class="text-gray-600 hover:text-gray-800">ホーム</a></li>
          <li><a href="./products/" class="text-gray-600 hover:text-gray-800">商品</a></li>
          <li><a href="./artisan/" class="text-gray-600 hover:text-gray-800">職人紹介</a></li>
          <li><a href="./register/" class="text-gray-600 hover:text-gray-800">ユーザ登録</a></li>
          <li><a href="./user/" class="text-gray-600 hover:text-gray-800">ユーザページ</a></li>
          <li><a href="./cart/" class="text-gray-600 hover:text-gray-800">カート</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container mx-auto px-4 py-8">
    <section class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">職人の手作り作品をお届けします</h2>
      <p class="text-gray-600">当店では、伝統的な技法で作られた職人の手作り作品を取り揃えています。<br>質の高い商品をお届けします。</p>
    </section>

    <h3 class="text-2xl font-bold text-gray-800 mb-6">おすすめ商品</h3>
    <section>
      <h3 class="text-2xl font-bold text-gray-800 mb-6">商品一覧</h3>
      <div id="products" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="images/spoon.jpg" alt="Product 1" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="text-xl font-bold text-gray-800">Product 1</h4>
            <p class="text-gray-600">Description of Product 1</p>
            <p class="text-gray-600">Price: &yen;33,000</p>
            <div class="mt-4">
              <span class="text-lg font-bold text-gray-800">¥5,000</span>
              <a href="#" class="block mt-2 text-blue-500 hover:underline">詳細を見る</a>
            </div>
          </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="images/spoon.jpg" alt="Product 2" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="text-xl font-bold text-gray-800">Product 2</h4>
            <p class="text-gray-600">Description of Product 2</p>
            <p class="text-gray-600">Price: &yen;21,000</p>
            <div class="mt-4">
              <span class="text-lg font-bold text-gray-800">¥6,000</span>
              <a href="#" class="block mt-2 text-blue-500 hover:underline">詳細を見る</a>
            </div>
          </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="images/spoon.jpg" alt="Product 3" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="text-xl font-bold text-gray-800">Product 3</h4>
            <p class="text-gray-600">Description of Product 3</p>
            <p class="text-gray-600">Price: &yen;48,000</p>
            <div class="mt-4">
              <span class="text-lg font-bold text-gray-800">¥7,000</span>
              <a href="#" class="block mt-2 text-blue-500 hover:underline">詳細を見る</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer class="bg-white shadow mt-12">
    <div class="container mx-auto px-4 py-6 text-center">
      <p class="text-gray-600">&copy; 2024 Craftsman Shop. All rights reserved.</p>
    </div>
  </footer>
</body>

</html>