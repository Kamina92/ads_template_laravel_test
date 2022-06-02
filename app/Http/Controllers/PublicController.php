<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function getHome(){
        return view('welcome');
    }
    public function getProd(){
        $products=json_decode(file_get_contents(public_path().'/MOCK_DATA.json'));
        foreach($products as &$product){
            $product=(array)$product;
        }
        return view('products',['prodotti'=>$products]);
    }
}
