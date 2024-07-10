<?php
require_once '../../app.php';
$product = [];
if (empty($_GET['id'])) {
    header('Location: ./');
}
$product = new Product();
$product->findByID($_GET['id']);
//TODO
// if (isset($_SESSION[APP_NAME]['product'])) {
//     $product = $_SESSION[APP_NAME]['product'];
// }

?>
<!DOCTYPE html>
<html lang="ja">

<?php include('../../components/admin_head.php') ?>

<body class="bg-gray-100">
    <?php include('../../components/admin_nav.php') ?>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">New Product</h1>
        <form method="POST" action="admin/product/update.php" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md">
            <input type="hidden" name="id" value="<?= $product->value['id'] ?>">

            <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <input type="text" name="name" value="<?= $product->value['name'] ?>" class="mt-1 block p-2 w-full border rounded" required>
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
                <input type="number" name="price" value="<?= $product->value['price'] ?>" class="mt-1 block p-2 w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Stock</label>
                <input type="number" name="stock" value="<?= $product->value['stock'] ?>" class="mt-1 block p-2 w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Summary</label>
                <textarea name="summary" class="mt-1 block p-2 w-full border rounded" required><?= $product->value['summary'] ?></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Description</label>
                <textarea name="description" rows="10" class="mt-1 block p-2 w-full border rounded" required><?= $product->value['description'] ?></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Image</label>
                <input type="file" name="image" class="mt-1 block p-2 w-full border rounded">
                <?php if ($product->value['image_name']): ?>
                <img src="<?= PRODUCTS_IMAGE_BASE_URL ?><?= $product->value['image_name'] ?>" alt="">
                <?php endif ?>
                <input type="hidden" name="image_name" value="<?= $product->value['image_name'] ?>">
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Update</button>
                <a href="admin/product/" class="text-blue-500 border border-blue-500 py-2 px-4 rounded">Back</a>
            </div>
        </form>
    </div>
</body>

</html>