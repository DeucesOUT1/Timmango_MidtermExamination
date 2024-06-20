<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products =[
            
            [
                'title' => 'The Alchemist',
                'author' => 'Paulo Coelho',
                'price' =>'799.99'
            ],
            [
                'title' => 'Percy Jackson:The Lightning Thief',
                'author' => 'Rick Riordan',
                'price' =>'599.99'
            ],
            [
                'title' => 'Odd Thomas',
                'author' => 'Dean Koontz',
                'price' =>'699.99'
            ],
           
            ];
            return view('products',compact('products'));
    }
}
