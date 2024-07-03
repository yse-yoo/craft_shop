<?php
require_once '../app.php';
?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'head.php' ?>

<body class="bg-gray-100">
    <?php include COMPONENT_DIR . 'nav.php' ?>

    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center mb-8">Artisan List</h1>
        <div id="artisan-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="images/artisan_1.webp" alt="John Doe" class="rounded-t-lg w-full">
                <h2 class="text-xl font-bold mt-4">John Doe</h2>
                <p class="text-gray-600">Pottery</p>
                <p class="text-gray-700 mt-2">John has been crafting exquisite pottery for over 20 years.</p>
                <a class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 inline-block" href="artisan/detail.php?id=1">More...</a>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="images/artisan_2.webp" alt="Jane Smith" class="rounded-t-lg w-full">
                <h2 class="text-xl font-bold mt-4">Jane Smith</h2>
                <p class="text-gray-600">Woodworking</p>
                <p class="text-gray-700 mt-2">Jane creates beautiful wooden sculptures and furniture.</p>
                <a class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 inline-block" href="artisan/detail.php?id=1">More...</a>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="images/artisan_1.webp" alt="Emily Johnson" class="rounded-t-lg w-full">
                <h2 class="text-xl font-bold mt-4">Emily Johnson</h2>
                <p class="text-gray-600">Textile Art</p>
                <p class="text-gray-700 mt-2">Emily is known for her intricate textile designs.</p>
                <a class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 inline-block" href="artisan/detail.php?id=1">More...</a>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="images/artisan_2.webp" alt="Michael Brown" class="rounded-t-lg w-full">
                <h2 class="text-xl font-bold mt-4">Michael Brown</h2>
                <p class="text-gray-600">Metalwork</p>
                <p class="text-gray-700 mt-2">Michael's metalwork pieces are both functional and artistic.</p>
                <a class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 inline-block" href="artisan/detail.php?id=1">More...</a>
            </div>
        </div>
    </div>
</body>

</html>