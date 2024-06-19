<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan Detail</title>
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
        <h1 class="text-4xl font-bold text-center mb-8" id="artisan-name">John Doe</h1>
        <div class="bg-white rounded-lg shadow-md p-4">
            <div class="flex flex-col lg:flex-row">
                <img id="artisan-image" class="rounded-lg w-full lg:w-1/3 mb-4 lg:mb-0 lg:mr-4" src="../images/artisan_1.webp" alt="Artisan Image">
                <div class="lg:w-2/3">
                    <h2 class="text-2xl font-bold mb-2" id="artisan-specialty">Pottery</h2>
                    <p class="text-gray-700 mb-4" id="artisan-description">John has been crafting exquisite pottery for over 20 years.</p>
                    <h3 class="text-xl font-semibold mb-2">Contact Information</h3>
                    <p class="text-gray-600" id="artisan-contact">Email: artisan@example.com</p>
                </div>
            </div>

            <a href="./" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 inline-block">戻る</a>
        </div>
    </div>
</body>

</html>