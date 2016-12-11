<?php

namespace App\Http\Services;

use App\Models\Client;

class ClientService
{
    private $product;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function paginate()
    {
        return $this->client->all();
    }

    public function save($data)
    {
        if(!$client = $this->client->create($data))
        {
            return false;
        }

        return view('client.row', compact("client", $client))->render();
    }

    public function delete($id)
    {
        if(!$this->client->destroy($id))
        {
            return false;
        }

        return true;
    }

    public function update($data)
    {
        $client = $this->client->find($data["id"]);

        if(!$client->update($data))
        {
            return false;
        }

        $data["view"] = view('client.row', compact("client", $client))->render();
        $data["id"] = $client->id;

        return $data;
    }

    //TODO tener el patron de repositorios nos permitiria injectar el patron directamente al controlador y no tener esta funcion en service
    public function find($id)
    {
        return $this->client->find($id);
    }

}