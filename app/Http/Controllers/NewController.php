<?php

namespace App\Http\Controllers;

use App\Http\Services\NewService;

class NewController extends Controller
{
    private $newService;

    public function __construct(NewService $newService)
    {
        $this->newService = $newService;
    }

    public function index()
    {
        echo $this->newService->sum(1,2);
    }

    public function view()
    {
        $sum = $this->newService->sum(2,3);
        $data = [
            "sum" => $sum
        ];

        return view('new.view', $data);
    }

}