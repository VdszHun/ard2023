<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tavolsag;
use Illuminate\Support\Facades\Validator;

class TavolsagController extends Controller
{
    public function index(){
        $tavolsagok = Tavolsag::orderBy('t_id', 'DESC')->paginate(10);
        return view('tavolsag',['tavolsagok' => $tavolsagok]);
    }

    //API
    public function tavcreate(Request $req){
        $tavvalidalas = Validator::make(
            $req->all(),
            [
                "tavolsag" => "required",
            ],
            [
                "tavolsag.required" => "Hiányzó távolság!",
            ]
        );
        if($tavvalidalas->fails()){
            $data['message'] = "Hibás adatok";
            $data['errorList'] = $tavvalidalas->messages();
            return response()->json($data,400);
        }else{
            //Adatbázisba szúrni az adatokat
            $tavolsag = new Tavolsag;
            $tavolsag->tavolsag = $req->input('tavolsag');
            $tavolsag->tavmeres_ideje = date('Y-m-d H:i:s');
            $tavolsag->save();
            return response()->json($tavolsag,201);
        }
    }
}
