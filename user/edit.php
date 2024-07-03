<?php
require_once '../app.php';

// ユーザ情報を取得する仮のデータ
$user = [
    'name' => '山田 太郎',
    'email' => 'taro.yamada@example.com',
    'address' => '東京都新宿区新宿1-1-1',
    'phone' => '090-1234-5678'
];
?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'head.php' ?>

<body class="bg-gray-100">
  <?php include COMPONENT_DIR . 'nav.php' ?>

  <main class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
      <h2 class="text-2xl font-bold mb-4">ユーザ情報編集</h2>
      <form action="user/update.php" method="POST" class="space-y-4">
        <div>
          <label for="name" class="block text-gray-700">ユーザ名</label>
          <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div>
          <label for="email" class="block text-gray-700">Email</label>
          <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div>
          <label for="address" class="block text-gray-700">住所</label>
          <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($user['address']); ?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div>
          <label for="phone" class="block text-gray-700">電話番号</label>
          <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div>
          <button type="submit" class="w-full bg-indigo-500 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">保存する</button>
        </div>
      </form>
    </div>
  </main>

  <?php include COMPONENT_DIR . 'footer.php' ?>
</body>

</html>