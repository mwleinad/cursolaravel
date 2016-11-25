<?php

namespace App\Http\Services;

use App\Models\Product;

class ProductService
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function paginate()
    {
        return $this->product->all();
    }

    public function save($data)
    {
        if(!$product = $this->product->create($data))
        {
            return false;
        }

        return view('product.row', compact("product", $product))->render();
    }

    public function delete($id)
    {
        if(!$this->product->destroy($id))
        {
            return false;
        }

        return true;
    }

    public function update($data)
    {
        $product = $this->product->find($data["id"]);

        if(!$product->update($data))
        {
            return false;
        }

        $data["view"] = view('product.row', compact("product", $product))->render();
        $data["id"] = $product->id;

        return $data;
    }

    //TODO tener el patron de repositorios nos permitiria injectar el patron directamente al controlador y no tener esta funcion en service
    public function find($id)
    {
        return $this->product->find($id);
    }

}