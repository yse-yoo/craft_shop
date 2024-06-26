<?php require_once '../../app.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php include('../../components/admin_head.php') ?>

<body class="bg-gray-100">
    <?php include('../../components/admin_nav.php') ?>

    <main class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Admin Products</h1>
        <div class="mt-3 mb-3">
            <a href="admin/product/input.php" class="bg-blue-500 text-white py-2 px-4 rounded">New</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="py-2 px-4 text-left">Action</th>
                        <th class="py-2 px-4 text-left">Name</th>
                        <th class="py-2 px-4 text-left">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-2 px-4"><a href="admin/product/edit.php?id=1" class="text-blue-500 hover:underline">Edit</a></td>
                        <td class="py-2 px-4">Product1</td>
                        <td class="py-2 px-4">&yen;33,000</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4"><a href="admin/product/edit.php?id=2" class="text-blue-500 hover:underline">Edit</a></td>
                        <td class="py-2 px-4">Product2</td>
                        <td class="py-2 px-4">&yen;18,000</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4"><a href="admin/product/edit.php?id=3" class="text-blue-500 hover:underline">Edit</a></td>
                        <td class="py-2 px-4">Product3</td>
                        <td class="py-2 px-4">&yen;15,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>