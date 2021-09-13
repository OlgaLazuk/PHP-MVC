<?php


namespace App\Controllers;


use App\Core\DB;
use App\Models\Products;

class CatalogController
{

    public function index(){
      $products = Products::search();
      render('catalog/index', compact('products'));
    }

    public function showProduct(){
        echo 'showProduct';
    }
    public function addProduct()
    {
        render('catalog/add_product');
    }

    public function saveProduct()
    {
        $sql = "INSERT INTO products (`name`, `price`) 
                    VALUES('{$_POST['name']}', '{$_POST['price']}')";
        print_r($sql);
        DB::getConnection()->query($sql);
        //TODO save
    }

}