<?php
require_once '../app.php';
?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'head.php' ?>

<body class="bg-gray-100">
    <?php include COMPONENT_DIR . 'nav.php' ?>

    <div class="container mx-auto p-4">
        <section class="bg-white rounded-lg shadow-md p-4">
            <h1 class="text-4xl font-bold text-center mb-8" id="artisan-name">John Doe</h1>
            <div class="flex flex-col lg:flex-row">
                <img id="artisan-image" class="rounded-lg w-full lg:w-1/3 mb-4 lg:mb-0 lg:mr-4" src="images/artisan_1.webp" alt="Artisan Image">
                <div class="lg:w-2/3">
                    <h2 class="text-2xl font-bold mb-2" id="artisan-specialty">Pottery</h2>
                    <p class="text-gray-700 mb-4" id="artisan-description">John has been crafting exquisite pottery for over 20 years.</p>
                    <h3 class="text-xl font-semibold mb-2">Contact Information</h3>
                    <p class="text-gray-600" id="artisan-contact">Email: artisan@example.com</p>
                </div>
            </div>
        </section>

        <section>
            <div id="product" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="images/spoon.jpg" alt="Product 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-xl font-bold text-gray-800">Product 1</h4>
                        <p class="text-gray-600">Description of Product 1</p>
                        <p class="text-gray-600">Price: &yen;33,000</p>
                        <div class="mt-4">
                            <span class="text-lg font-bold text-gray-800">¥5,000</span>
                            <a href="product/detail.php?id=1" class="block mt-2 text-blue-500 hover:underline">More...</a>
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
                            <a href="product/detail.php?id=1" class="block mt-2 text-blue-500 hover:underline">More...</a>
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
                            <a href="product/detail.php?id=1" class="block mt-2 text-blue-500 hover:underline">More...</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="artisan/" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 inline-block">職人紹介</a>
            </div>
        </section>

    </div>
</body>

</html>