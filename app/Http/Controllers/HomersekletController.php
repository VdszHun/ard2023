<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homerseklet;
use Illuminate\Support\Facades\Validator;

class HomersekletController extends Controller
{
    public function index(){
        $homersekletek = Homerseklet::orderBy('h_id', 'DESC')->paginate(10);
        return view('homerseklet',['homersekletek' => $homersekletek]);
    }

    //API
    public function create(Request $req){
        $validalas = Validator::make(
            $req->all(),
            [
                "homerseklet" => "required",
                "paratartalom" => "required"
            ],
            [
                "homerseklet.required" => "Hiányzó hőmérséklet",
                "paratartalom.required" => "Hiányzó páratartalom"
            ]
        );
        if($validalas->fails()){
            $data['message'] = "Hibás adatok";
            $data['errorList'] = $validalas->messages();
            return response()->json($data,400);
        }else{
            //Adatbázisba szúrni az adatokat
            $homerseklet = new Homerseklet;
            $homerseklet->hofok = $req->input('homerseklet');
            $homerseklet->paratartalom = $req->input('paratartalom');
            $homerseklet->meres_ideje = date('Y-m-d H:i:s');
            $homerseklet->save();
            return response()->json($homerseklet,201);
        }
    }
}
