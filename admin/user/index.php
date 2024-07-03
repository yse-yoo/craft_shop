<?php
require_once '../../app.php';

// 仮のユーザリスト
$users = [
    ['id' => 1, 'name' => '山田 太郎', 'email' => 'taro.yamada@example.com', 'address' => '東京都新宿区新宿1-1-1', 'phone' => '090-1234-5678'],
    ['id' => 2, 'name' => '鈴木 花子', 'email' => 'hanako.suzuki@example.com', 'address' => '東京都渋谷区渋谷2-2-2', 'phone' => '080-8765-4321'],
    // 他のユーザデータもここに追加
];
?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'admin_head.php' ?>

<body class="bg-gray-100">
  <?php include COMPONENT_DIR . 'admin_nav.php' ?>

  <main class="container mx-auto px-4 py-8">
    <section class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">ユーザ一覧</h2>
    </section>

    <section>
      <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full bg-white">
          <thead class="bg-gray-100">
            <tr>
              <th class="py-2 px-4 text-left">ID</th>
              <th class="py-2 px-4 text-left">ユーザ名</th>
              <th class="py-2 px-4 text-left">Email</th>
              <th class="py-2 px-4 text-left">住所</th>
              <th class="py-2 px-4 text-left">電話番号</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
              <tr class="border-b">
                <td class="py-2 px-4"><?php echo htmlspecialchars($user['id']); ?></td>
                <td class="py-2 px-4"><?php echo htmlspecialchars($user['name']); ?></td>
                <td class="py-2 px-4"><?php echo htmlspecialchars($user['email']); ?></td>
                <td class="py-2 px-4"><?php echo htmlspecialchars($user['address']); ?></td>
                <td class="py-2 px-4"><?php echo htmlspecialchars($user['phone']); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <?php include COMPONENT_DIR . 'footer.php' ?>
</body>

</html>