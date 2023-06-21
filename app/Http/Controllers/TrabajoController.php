<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Routing\Controller;
use Jenssegers\Mongodb\Eloquent\Model;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Trabajo;
class TrabajoController extends Controller
{
    public function index(){
        $Trabajo = Trabajo::all();

        return response()->json([
            "result"=>$Trabajo
        ],Response::HTTP_OK);
    }

    public function store(Request $request){
        $Trabajo = new Trabajo();

        $Trabajo->Id_Trabajo = $request ->Id_Trabajo;
        $Trabajo->Fecha=$request->Fecha;
        $Trabajo->Descripcion=$request->Descripcion;
        $Trabajo->Costo = $request->Costo;
        $Trabajo->Total = $request->Total;
        // $Contrato = array(
        //     'Id_Contrato' =>$request->Id_Contrato,
        //     'Costo_Correcion' => $request->Costo_Correcion,
        //     'Parte_Empresa' => $request ->Parte_Empresa,
        // );
        $Trabajo->Contrato = $request->Contrato;
        $Trabajo->save();

        return response()->json(['result'=>$Trabajo],Response::HTTP_CREATED);

    }
    public function update(Request $request,$id){
        $Trabajo = Trabajo::findOrFail($request->id);
         
        $Trabajo->Id_Trabajo = $request ->Id_Trabajo;
        $Trabajo->Fecha=$request->Fecha;
        $Trabajo->Descripcion=$request->Descripcion;
        $Trabajo->Costo = $request->Costo;
        $Trabajo->Total = $request->Total;
        // $Contrato = array(
        //     'Id_Contrato' =>$request->Id_Contrato,
        //     'Costo_Correcion' => $request->Costo_Correcion,
        //     'Parte_Empresa' => $request ->Parte_Empresa,
        // );
        $Trabajo->Contrato = $request->Contrato;
        $Trabajo->save();


        return response()->json(['result'=>$Trabajo],Response::HTTP_CREATED);
    }
}
