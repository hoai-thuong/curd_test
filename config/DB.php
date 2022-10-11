<?php
require_once __DIR__.'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

class DB
{
    protected $connection;

    public function __construct ()
    {

    }

    public function getConnection ()
    {
        if ($this->connection == null) {
            try {
//                var_dump($_ENV['DB_HOST']);
                $this->connection = new PDO(
                    'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'], $_ENV['USER_NAME'], $_ENV['USER_PASSWORD']
                );
            } catch (Exception $exception) {
                throw new Exception(" connection fail");
            }
        }
        return $this->connection;
    }

    public function execute ($sql, $data = [])
    {
        //Khởi tạo Prepared Statement từ biến $conn ở phần trước
//        $statement = DB::getConnection()->prepare($sql);

        $statement = $this->getConnection()->prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute($data);
        $result = [];

        //Hiển thị kết quả, vòng lặp sau đây sẽ dừng lại khi đã duyệt qua toàn bộ kết quả
        while ($item = $statement->fetch()) {
            $result[] = $item;
        }
        return $result;
    }
}

//$DB = new DB();
//////$DB->
////print_r($DB->getConnection()->query("select * from users"));
//print_r($DB->execute("select name from users"));