<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    function mostrarNombre(Request $request){
    	return view("calculadora",[
    		'nombre' => $request->input("nombre")
    	]);
    }//recive todos los request
    public function operacion(Request $request){

    	$nombre= $request->input("nombre");
    	$operacion = $request->input("operacion");
    	$numero1 = $request->input("numero1");
    	$numero2 = $request->input("numero2");
    	$view = "calculadora";

    	if ($numero1!=null && $numero2!=null) {
    		switch ($operacion) {
    		case 'sumar':
    		$resultado = $numero1 + $numero2;    	
    			break;
    		case 'restar':
    		$resultado = $numero1 - $numero2;
    			break;
    		case 'multiplicar':
    		$resultado = $numero1 * $numero2;
    			break;		
    		case 'dividir':
    		if ($numero2!=0) {
    			$resultado = $numero1 / $numero2;
    		}else{
    			$resultado = "No se puede dividir entre 0";
    		}
    		
    			break;
    		default:
    			echo 'Error vuelve a introducir';
    			break;
    		}
    	}else{
    		$resultado ="Tienes que introducir un numero en las dos casillas"; 
    	}
    	
    	return view($view, ['resultado'=>$resultado,'nombre'=>$nombre]);
    	/*return $request->all();*/
    }
    
}
