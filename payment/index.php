<?php
require_once '../app.php';
?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'head.php' ?>

<body class="bg-gray-100">
    <?php include COMPONENT_DIR . 'nav.php' ?>

    <main class="container mx-auto px-4 py-8">
        <section class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">決済</h2>
        </section>

        <section>
            <div class="bg-white shadow-md rounded-lg overflow-hidden max-w-lg mx-auto p-6">
                <form action="payment/process.php" method="POST" class="space-y-6">
                    <div>
                        <label for="credit_card" class="block text-gray-700">クレジットカード番号</label>
                        <input type="text" value="xxxx-xxxx-xxxx-xxxx" id="credit_card" name="credit_card" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="expiration_date" class="block text-gray-700">有効期限 (MM/YY)</label>
                        <input type="text" value="02/2028" id="expiration_date" name="expiration_date" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="cvv" class="block text-gray-700">CVV</label>
                        <input type="text" value="xxxx" id="cvv" name="cvv" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="address" class="block text-gray-700">住所</label>
                        <input type="text" value="東京都新宿区新宿1-1-1" id="address" name="address" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700">電話番号</label>
                        <input type="text" value="xxx-xxxx-xxxx" id="phone" name="phone" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white shadow-md rounded">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="py-2 px-4 text-left">Name</th>
                                    <th class="py-2 px-4 text-left">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="py-2 px-4">Product1</td>
                                    <td class="py-2 px-4">&yen;33,000</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-2 px-4">Product2</td>
                                    <td class="py-2 px-4">&yen;18,000</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="mt-4 text-right">
                            <span class="text-xl font-bold text-gray-800">合計: &yen;51,000</span>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="w-full bg-indigo-500 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">決済する</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <?php include COMPONENT_DIR . 'footer.php' ?>
</body>

</html>