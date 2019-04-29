<?php

namespace App\Http\Controllers;



use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\IOFactory;
use Chumper\Zipper\Facades\Zipper;
use Response;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::all();

        return view('index_file',compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_file');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $file = $request->file('filepath');
        
         $filepath = $file->store('files');



       


         
         $files = new File();
         $files->name = $request->get('name');
         $files->filepath = $filepath;
         $files->save();

        return redirect('/files');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //files = File::find($file);

        return view('show_file', compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {    
       $filePath = storage_path('app/'.$file->filepath);

       Zipper::zip($filePath)->extractTo('dezip');
        
       //dd($filePath);

       $path = public_path('dezip/word/document.xml'); 

       $content = utf8_encode(file_get_contents($path)) ;
        
         preg_match_all('`\$.+?\$`', $content, $matches);
         //dd($matches[0]);
         $variables = $matches[0];


        return view('edit_file', compact('variables','file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {   
        //dd(request('config'));
       
      $file->config = $request->get('config');
    
            
      $file->save();

       return redirect('/files');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {   


         


          // 1 : Récuperer le fichier docx
           $filePath = storage_path('app/'.$file->filepath);

          // 2 : le dezipper
          Zipper::zip($filePath)->extractTo('zip');
          
         
          // 3 : remplacer les variables a l'interieur du fichier xml
          $path = public_path('zip/word/document.xml'); 


          $content = utf8_encode(file_get_contents($path));
          

          
                 
          //boucle de remplacement
          foreach ($file->config as $variable => $value) {

            $content = str_replace($variable,$value,$content);

          }

          file_put_contents($path,utf8_decode($content));

           // 4 : rezipper en docx
          $file_path = public_path('zip');

          $files = scandir($file_path);
          
          $file_output = public_path('document.zip');

          $zip =  Zipper::zip($file_output);

            foreach($files as $_file){
                $zip->add($file_path.'/'.$_file,$_file);


         }

         
          //Zipper::make()

          
           
          /* Storage::put('files/document.xml',$content);

           $fichier = storage_path('app/files/document.xml');
           
           $zip = Zipper::make($filePath);

           $zip->remove('word/document.xml');
           */

           //$zip->add($fichier);



          //stock le nouveau fichier dans le disque
          
          //Storage::put('files/document.xml',$content);
            
          //créer le chemin du fichier // 5 : telecharger le docx

          //$chemin = Storage::url('app/files/document.xml');

           // 5 : telecharger le docx

          //renvoie le fichier modifié
          //return Response::download('/home/cedric/work/website'.$chemin,$file->name);
            
          return Response::download($file_output,$file->name);

          
          
        
    }
}