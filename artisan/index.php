<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold text-gray-800">Craftsman Shop</h1>
            <nav class="mt-4">
                <ul class="flex space-x-4">
                    <li><a href="../" class="text-gray-600 hover:text-gray-800">ホーム</a></li>
                    <li><a href="../products/" class="text-gray-600 hover:text-gray-800">商品</a></li>
                    <li><a href="../artisan/" class="text-gray-600 hover:text-gray-800">職人紹介</a></li>
                    <li><a href="../register/" class="text-gray-600 hover:text-gray-800">ユーザ登録</a></li>
                    <li><a href="../user/" class="text-gray-600 hover:text-gray-800">ユーザページ</a></li>
                    <li><a href="../cart/" class="text-gray-600 hover:text-gray-800">カート</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center mb-8">Artisan List</h1>
        <div id="artisan-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="../images/artisan_1.webp" alt="John Doe" class="rounded-t-lg w-full">
                <h2 class="text-xl font-bold mt-4">John Doe</h2>
                <p class="text-gray-600">Pottery</p>
                <p class="text-gray-700 mt-2">John has been crafting exquisite pottery for over 20 years.</p>
                <a class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 inline-block" href="detail.php">詳細を見る</a>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="../images/artisan_2.webp" alt="Jane Smith" class="rounded-t-lg w-full">
                <h2 class="text-xl font-bold mt-4">Jane Smith</h2>
                <p class="text-gray-600">Woodworking</p>
                <p class="text-gray-700 mt-2">Jane creates beautiful wooden sculptures and furniture.</p>
                <a class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 inline-block" href="detail.php">詳細を見る</a>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="../images/artisan_1.webp" alt="Emily Johnson" class="rounded-t-lg w-full">
                <h2 class="text-xl font-bold mt-4">Emily Johnson</h2>
                <p class="text-gray-600">Textile Art</p>
                <p class="text-gray-700 mt-2">Emily is known for her intricate textile designs.</p>
                <a class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 inline-block" href="detail.php">詳細を見る</a>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="../images/artisan_2.webp" alt="Michael Brown" class="rounded-t-lg w-full">
                <h2 class="text-xl font-bold mt-4">Michael Brown</h2>
                <p class="text-gray-600">Metalwork</p>
                <p class="text-gray-700 mt-2">Michael's metalwork pieces are both functional and artistic.</p>
                <a class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 inline-block" href="detail.php">詳細を見る</a>
            </div>
        </div>
    </div>
</body>

</html>