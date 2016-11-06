<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use App\Http\Services\HelperService;

class ProductController extends Controller
{
    private $productService;
    private $helperService;

    public function __construct(ProductService $productService,
                                HelperService $helperService)
    {
        $this->productService = $productService;
        $this->helperService = $helperService;
    }

    public function view()
    {
        $this->productService->multiply(1,2); //2
        $this->productService->sum(2,2); //4

        $array = [5,3];

        $this->helperService->sumArray($array); //error

        $sum = $this->productService->sum(2,3); //5

        $list = [
            "a" => "a",
            "b" => "b",
            "c" => "c",
        ];
        $data = [
            "data" =>"dato que envio",
            "data_hello" =>"hello",
            "sum" => $sum,
            "list" => $list
        ];

        return view('product.view', $data);
    }
}