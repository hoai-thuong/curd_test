<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController extends BaseController
{
    protected $product;

    public function __construct ()
    {
        $this->product = new Product();
    }

    public function getLimited ()
    {

        $pageSize = 4;
        $startRow = 0;
        if (isset($_GET['startRow'])) {
            $startRow = $_GET['startRow'];
            $product_data = $this->product->getLimited($startRow, $pageSize);

        } else {
            $product_data = $this->product->getLimited($startRow, $pageSize);
        }
        return $product_data;

    }

    public function show ()
    {
        if ($_GET['id']) {
            $id = $_GET['id'];
            $show_data = $this->product->show($id);//truyen id la cai mk nhap vao
            return $show_data;
        }
    }

    public function search ()
    {
        //search part
        $keyword = isset($_GET['name']) ? $_GET['name'] : "";  //fill in search box
//if exist keyword,
        if (isset($keyword)) {
            $_GET['name'] = $keyword;
            $search_data = $this->product->search($keyword);
        }
        return $search_data;

    }


}
