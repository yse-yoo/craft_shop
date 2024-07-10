<?php
class DB
{
    public $pdo;
    public $table = "";
    public $value;
    public $values = [];
    public $errors = [];
    function __construct()
    {
        $db_connection = DB_CONNECTION;
        $db_name = DB_DATABASE;
        $db_host = DB_HOST;
        $db_port = DB_PORT;
        $db_user = DB_USERNAME;
        $db_password = DB_PASSWORD;

        $dsn = "{$db_connection}:dbname={$db_name};host={$db_host};charset=utf8;port={$db_port}";
        try {
            $this->pdo = new PDO($dsn, $db_user, $db_password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            echo "接続失敗: " . $e->getMessage();
            echo $dsn;
            exit;
        }
    }

    function sanitize(array $posts)
    {
        if (empty($posts)) return;
        foreach ($posts as $key => $value) {
            $value = trim($value);
            $posts[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        }
        return $posts;
    }
}