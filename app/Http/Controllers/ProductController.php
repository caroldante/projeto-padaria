<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Obtém todos os produtos
        return view('products.index', compact('products')); // Retorna a view com os produtos
    }

    public function show($id)
    {
        $product = Product::findOrFail($id); // Encontra o produto ou falha com erro 404
        return view('products.show', compact('product')); // Retorna a view com o produto específico
    }
}
