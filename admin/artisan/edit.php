<?php 
require_once '../../app.php';
?>

<!DOCTYPE html>
<html lang="ja">

<?php include('../../components/admin_head.php') ?>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Edit Artisan</h1>
        <form method="POST" action="admin/artisan/add.php" class="bg-white p-6 rounded shadow-md">
        <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <input type="text" name="name" class="mt-1 block p-2 w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Country</label>
                <input type="text" name="country" class="mt-1 block p-2 w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Summary</label>
                <textarea name="summary" class="mt-1 block p-2 w-full border rounded" required></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Description</label>
                <textarea name="description" class="mt-1 block p-2 w-full border rounded" required></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Image URL</label>
                <input type="text" name="image_url" class="mt-1 block p-2 w-full border rounded" required>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Create</button>
                <a href="admin/artisan/" class="text-blue-500 border border-blue-500 py-2 px-4 rounded">Back</a>
            </div>
        </form>
    </div>
</body>

</html>