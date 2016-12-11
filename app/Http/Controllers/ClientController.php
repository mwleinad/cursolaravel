<?php

namespace App\Http\Controllers;

use App\Http\Services\ClientService;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $clientService;

    public function __construct(Request $request, ClientService $clientService)
    {
        $this->request = $request;
        $this->clientService = $clientService;
    }

    public function view()
    {
        $data["clients"] = $this->clientService->paginate();

        return view('client.view', $data);
    }

    public function create()
    {
        return view('client.create');
    }

    public function store()
    {
        $data = $this->request->all();

        if(!$response = $this->clientService->save($data))
        {
            return $this->errorResponse($response, 401);
        }

        return $this->successResponse($response);
    }

    public function delete()
    {
        $id = $this->request->get("id");

        if(!$response = $this->clientService->delete($id))
        {
            return $this->errorResponse($response, 401);
        }

        return $this->successResponse($response);
    }

    public function edit($id)
    {
        $client = $this->clientService->find($id);
        return view('client.edit', compact("client", $client));
    }

    public function update()
    {
        $data = $this->request->all();

        if(!$response = $this->clientService->update($data))
        {
            return $this->errorResponse($response, $data);
        }

        return $this->successResponse($response);
    }


}