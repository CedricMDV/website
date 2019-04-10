<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\IOFactory;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
        $documents = Document::all();
        

        return view('file_form',compact('documents'));
    }


    
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function parse(Request $request)
    {   
         $path = $request->file('filedoc');
         $filePath = $path->getRealPath();
         $content = utf8_encode(file_get_contents($filePath)) ;

         preg_match_all('`\$.+?\$`', $content, $matches);
         //dd($matches[0]);
         $variables = $matches[0];

         return view('variables_form', compact('variables'));
         /*$file = fopen($filePath, 'r');

         while(!feof($file)) {
           echo fgets($file). "<br>";
        }

        fclose($file);*/

        //$phpWord = IOFactory::createReader('Word2007')->load($request->file('filedoc')->path());

       
    }

    
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function replace(Request $request)
    {
        
        $path = $request->file('filedoc');
        $filePath = $path->getRealPath();
        $content = utf8_encode(file_get_contents($filePath));

         //preg_match_all('`\$.+?\$`', $content, $matches);
         //dd($matches[0]);

         //$variables = $matches;
         
         $pattern = '`\$.+?\$`';
         
         $tab = array();

         for ($i=0; $i < $content.length(); $i++) { 

            $tab[i] = preg_match($pattern,$content,$matches);
         }

         dd($tab[i]);

         /*for($j=0; $j<$variables.length() ;$j++){
                if(preg_match($pattern, $content, $matches)){
                         $tab[$j] = $matches[$j];
                     }

          }*/
        
         


         //return request()->all();
         //return response()->download($filePath);

         

         //On crée un tableau $vab qui stock les nouvelles valeurs des champs 

         // on fait preg_replace si le caractère lue est un $...$ 


         

    }

    
}
