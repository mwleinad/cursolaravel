<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;

class ProductController extends Controller
{
    private $product;
    private $client;

    public function __construct(Product $product, Client $client)
    {
        $this->product = $product;
        $this->client = $client;
    }

    public function view()
    {
        //TODO usar patron repositorio en vez de usar elocuent directamente
        $data["products"] = $this->product->all();

        $data["clients"] = $this->client->all();

        return view('product.view', $data);
    }
}