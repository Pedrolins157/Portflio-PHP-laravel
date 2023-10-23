<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\UpdateClientRequest
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        return Client::all();
    }
    
    public function create(Request $request)
    {
        
        return Client::create($request->all());   
    }
    
    public function update(Request $request)
    {
        $client = Client::find($request->id);
    
        if (!$client) {
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }
    
        $client = $this->setData($client, $request);
    
        $client->save();
    
        return $client;
    }
    
    public function delete(Request $request)
    {
        $client = Client::find($request->id);
    
        if (!$client) {
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }
    
        $client->delete();
    
        return response()->json(['message' => 'Cliente excluído com sucesso']);
    }
    
    
    

    protected function setData(Client $client, Request $request)
    {
        $client->nome = $request->nome;
        $client->email = $request->email;
        $client->cpf = $request->cpf;
        $client->estadocivil = $request->estadocivil;
    
        return $client;
    }
}
