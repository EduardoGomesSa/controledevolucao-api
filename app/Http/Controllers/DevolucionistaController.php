<?php

namespace App\Http\Controllers;

use App\Http\Requests\DevolucionistaRequest;
use App\Http\Resources\DevolucionistaResource;
use App\Models\Devolucionista;
use Illuminate\Http\Request;

class DevolucionistaController extends Controller
{
    private $devolucionista;

    public function __construct(Devolucionista $devolucionista)
    {
        $this->devolucionista = $devolucionista;
    }

    public function index(){
        return DevolucionistaResource::collection(
            $this->devolucionista->all()
        );
    }

    public function store(DevolucionistaRequest $request){
        $devolucionistaExiste = $this->devolucionista->where('nome', $request->nome)
            ->where('data_nascimento', $request->data_nascimento)
            ->first();

        if($devolucionistaExiste){

        }
    }
}
