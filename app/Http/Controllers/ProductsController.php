<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// $title = 'Welcome to Products Page';
// $x = 1;
// $y = 2;
// truyền dữ liệu từ controller sang view
// return view('products.index', compact('title', 'x', 'y'));

// $name = 'Nguyen Van A';
// return view('products.index')->with('name', $name);
class ProductsController extends Controller
{
    //tạo hàm index
    public function index()
    {
        // tham số truyền vào view là đường dẫn đến file view
        // nếu controller có tên gì thì trong views sẽ có thư múc tương tự

        $myphone = [
            'name' => 'Iphone 12',
            'price' => 1000,
            'isFavor' => true
        ];
        // return view('products.index', compact('myphone'));
        //send directly
        // print_r(route('products'));
        return view('products.index', ['myphone' => $myphone]);
    }

    public function findNameProduct($productName)
    {
        $phones = [
            'iphone' => 'iphone',
            'samsung' => 'samsung',
            'nokia' => 'nokia'
        ];


        return view('products.findnameproduct', [
            'products' => $phones[$productName] ??  'Product not found'
        ]);
    }

    public function detail($productname,$id)
    {

        return view('products.productdetail', ['id' => $id], ['productname' => $productname]);
    }


}
