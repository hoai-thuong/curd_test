<?php

namespace App\Models;
class Product extends BaseModel
{
    public function getLimited ($startRow, $pageSize)
    {
        $productSpl = "select * from product limit $startRow, $pageSize";
        $productData = $this->DB->getConnection()->query($productSpl);
        return $productData;
//        var_dump($product_data);
    }

    public function show ($id)   //id nay la bien mk truyen vao
    {
        $productSpl = "select * from product where id = :id";   //select id = id truyen vao
        $dataCheck = ['id' => $id];  //
        $productData = $this->DB->execute($productSpl, $dataCheck);
        return count($productData) > 0 ? $productData[0] : [];
    }

    public function search ($keyword)
    {
        $product_spl = "SELECT * FROM product WHERE `name` LIKE '%" . $keyword . "%'";
//        $product_data = DB::execute($product_spl);
        $product_data = $this->DB->execute($product_spl);
        return $product_data;
    }
}

