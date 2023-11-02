<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
 
class EnviarDatosControlador extends Controller
{
    public function envioDatos(Request $request)
    {
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $edad = $request->input('edad');
        $numTlfno = $request->input('numTlfno');
    
        return view('printForm')->with(['edad'=>$edad,'numTlfno'=>$numTlfno]);
    }

    public function printarDatos($edad,$numTlfno = null)
    {
        return "Su edad es: $edad y el valor de telefono es: $numTlfno";
    }
}