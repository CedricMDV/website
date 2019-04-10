<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;


class ControllerCSV extends Controller
{
    public function index(){


    	return view('form');

    }

   public function store(request $request){
	   	
	   	

   		 
   		 $path = $request->file('file_csv');
   		 $filePath = $path->getRealPath();
   		 $file = fopen($filePath, 'r');

   		 //$header = fgetcsv($file);
   		 //dd($header);
   		 

   
		 while ($ARRAY=fgetcsv($file,1024,',')){
		 	 	
		 	 	$champs = count($ARRAY);
		 	 	for($i=0;$i<$champs;$i++){
		 	 		if($i == 1){
		 	 			echo $ARRAY[$i]. " ";

		 	 		}
		 	 	}
		 }   
                  
   
    	
    }

}
