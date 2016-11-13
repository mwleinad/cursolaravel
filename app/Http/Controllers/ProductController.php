<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function view()
    {
        //TODO usar patron repositorio en vez de usar elocuent directamente
        $data["products"] = $this->product->all();

        return view('product.view', $data);
    }
}