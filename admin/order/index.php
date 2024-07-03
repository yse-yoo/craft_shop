<?php
require_once '../../app.php';

// 仮の決済リスト
$orders = [
    ['id' => 1, 'user_name' => '山田 太郎', 'email' => 'taro.yamada@example.com', 'amount' => '¥51,000', 'order_at' => '2024-07-01', 'status' => '準備中', 'payment_status' => '成功'],
    ['id' => 2, 'user_name' => '鈴木 一郎', 'email' => 'ichiro.suzuki@example.com', 'amount' => '¥51,000', 'order_at' => '2024-07-01', 'status' => '準備中', 'payment_status' => '成功'],
    ['id' => 3, 'user_name' => '鈴木 花子', 'email' => 'hanako.suzuki@example.com', 'amount' => '¥33,000', 'order_at' => '2024-07-02', 'status' => '未処理', 'payment_status' => '失敗'],
    // 他の決済データもここに追加
];
?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'admin_head.php' ?>

<body class="bg-gray-100">
  <?php include COMPONENT_DIR . 'admin_nav.php' ?>

  <main class="container mx-auto px-4 py-8">
    <section class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">Order List</h2>
    </section>

    <section>
      <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full bg-white">
          <thead class="bg-gray-100">
            <tr>
              <th class="py-2 px-4 text-left"></th>
              <th class="py-2 px-4 text-left">注文日</th>
              <th class="py-2 px-4 text-left">ユーザ名</th>
              <th class="py-2 px-4 text-left">Email</th>
              <th class="py-2 px-4 text-left">金額</th>
              <th class="py-2 px-4 text-left">注文ステータス</th>
              <th class="py-2 px-4 text-left">決済ステータス</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($orders as $order): ?>
              <tr class="border-b">
                <td class="py-2 px-4"><a href="admin/order/detail.php?id=1">詳細</a></td>
                <td class="py-2 px-4"><?= $order['order_at']; ?></td>
                <td class="py-2 px-4"><?= $order['user_name']; ?></td>
                <td class="py-2 px-4"><?= $order['email']; ?></td>
                <td class="py-2 px-4"><?= $order['amount']; ?></td>
                <td class="py-2 px-4"><?= $order['status']; ?></td>
                <td class="py-2 px-4"><?= $order['payment_status']; ?></td>
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