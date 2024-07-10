<?php
require_once '../../app.php';
$product = [];
if (isset($_SESSION[APP_NAME]['product'])) {
    $product = $_SESSION[APP_NAME]['product'];
}
?>
<!DOCTYPE html>
<html lang="ja">

<?php include('../../components/admin_head.php') ?>

<body class="bg-gray-100">
    <?php include('../../components/admin_nav.php') ?>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">New Product</h1>
        <form method="POST" action="admin/product/add.php" class="bg-white p-6 rounded shadow-md">
            <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <input type="text" name="name" value="<?= @$product['name'] ?>" class="mt-1 block p-2 w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">category</label>
                <select name="category_id" class="mt-1 p-2 block w-full border">
                    <option value="0">-- Category --</option>
                    <option value="1">Leather</option>
                    <option value="2">Gold</option>
                    <option value="2">Silver</option>
                    <option value="2">Bronze</option>
                    <option value="3">Wood</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Artisan</label>
                <select name="artisan_id" class="mt-1 p-2 block w-full border">
                    <option value="0">-- Artisan --</option>
                    <option value="1">Alice</option>
                    <option value="2">Bob</option>
                    <option value="3">Chris</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Price</label>
                <input type="number" name="price" value="<?= @$product['price'] ?>" class="mt-1 block p-2 w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Stock</label>
                <input type="number" name="stock" value="<?= @$product['stock'] ?>" class="mt-1 block p-2 w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Summary</label>
                <textarea name="summary" class="mt-1 block p-2 w-full border rounded" required><?= @$product['summary'] ?></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Description</label>
                <textarea name="description" class="mt-1 block p-2 w-full border rounded" required><?= @$product['description'] ?></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Image</label>
                <input type="file" name="image" class="mt-1 block p-2 w-full border rounded">
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Create</button>
                <a href="admin/product/" class="text-blue-500 border border-blue-500 py-2 px-4 rounded">Back</a>
            </div>
        </form>
    </div>
</body>

</html>