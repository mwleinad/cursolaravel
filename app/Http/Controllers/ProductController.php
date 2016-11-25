<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $client;
    private $productService;

    public function __construct(Client $client, Request $request, ProductService $productService)
    {
        $this->client = $client;
        $this->request = $request;
        $this->productService = $productService;
    }

    public function view()
    {
        //TODO usar patron repositorio en vez de usar elocuent directamente
        $data["products"] = $this->productService->paginate();

        $data["clients"] = $this->client->all();

        return view('product.view', $data);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store()
    {
        $data = $this->request->all();

        if(!$response = $this->productService->save($data))
        {
            return $this->errorResponse($response, 401);
        }

        return $this->successResponse($response);
    }

    public function delete()
    {
        $id = $this->request->get("id");

        if(!$response = $this->productService->delete($id))
        {
            return $this->errorResponse($response, 401);
        }

        return $this->successResponse($response);
    }

    public function edit($id)
    {
        $product = $this->productService->find($id);
        return view('product.edit', compact("product", $product));
    }

    public function update()
    {
        $data = $this->request->all();

        if(!$response = $this->productService->update($data))
        {
            return $this->errorResponse($response, $data);
        }

        return $this->successResponse($response);
    }


}