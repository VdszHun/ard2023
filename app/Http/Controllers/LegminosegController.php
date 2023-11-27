<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legminoseg;
use Illuminate\Support\Facades\Validator;

class LegminosegController extends Controller
{
    public function index(){
        $legminosegek = Legminoseg::orderBy('l_id', 'DESC')->paginate(10);
        return view('legminoseg',['legminosegek' => $legminosegek]);
    }

    //API
    public function create(Request $req){
        $legvalidalas = Validator::make(
            $req->all(),
            [
                "legminoseg" => "required",
            ],
            [
                "legminoseg.required" => "Hiányzó légminőség",
            ]
        );
        if($legvalidalas->fails()){
            $data['message'] = "Hibás adatok";
            $data['errorList'] = $legvalidalas->messages();
            return response()->json($data,400);
        }else{
            //Adatbázisba szúrni az adatokat
            $legminoseg = new Legminoseg;
            $legminoseg->legminoseg = $req->input('legminoseg');
            $legminoseg->legmeres_ideje = date('Y-m-d H:i:s');
            $legminoseg->save();
            return response()->json($legminoseg,201);
        }
    }
}
