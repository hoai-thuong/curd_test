<?php
namespace App\Controllers;
use App\Models\Product;

class ProductController extends BaseController
{
    protected $product;
    public function __construct()
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
    }
    public function show () {
        if ($_GET['id']) {
            $id = $_GET['id'];
            $show_data = $this->product->show($id);  //truyen id la cai mk nhap vao
        }
    }
}
