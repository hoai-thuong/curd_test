<?php
namespace Config;
use \PDO;
class DB
{
    protected $connection;
    const DB_TYPE = "mysql";
    const DB_HOST = "localhost";
    const DB_NAME = "curd";
    const USER_NAME = "root";
    const USER_PASSWORD = "";

    public function __construct ()
    {
//        $this->connection = new
    }

    public function getConnection ()
    {
        if ($this->connection == null) {
            try {

                $this->connection = new PDO(self::DB_TYPE . ":host=" . self::DB_HOST . ";dbname=" . self::DB_NAME, self::USER_NAME, self::USER_PASSWORD);
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
////$DB->
//print_r($DB->getConnection()->query("select * from users"));
//print_r($DB->execute("select name from users"));