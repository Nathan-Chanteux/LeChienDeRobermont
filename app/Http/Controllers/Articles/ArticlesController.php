<?php

namespace App\Http\Controllers\Articles;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticlesController extends Controller {
    
    public function afficheListeAction(){
        
        $listeRubriques = \App\Entity\Rubriques\Rubriques::get();
        $listeArticles = \App\Entity\Articles\Articles::get();
        
        return View('Admin\Articles\ListeArticles', array('listeRubriques' => $listeRubriques, 'listeArticles' => $listeArticles));
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create(){
            
        $listeRubriques = \App\Entity\Rubriques\Rubriques::get();
        
        return View('Admin\Articles\CreateArticle', array('listeRubriques' => $listeRubriques));
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  Request  $request
    * @return Response
    */
       public function store(Request $request){
       
           $article = new \App\Entity\Articles\Articles;
           $article->titre = $request->input('titre');
           $article->texte = $request->input('texte');
           $article->RubriquesId = $request->input('RubriqueId');
           $article->home = $request->input('home');
           if(!empty($request->input('photo'))) $article->photo = $request->input('photo');
           $article->slug = $this->creerSlug($request->input('titre'));
           
           $article->save();
           
           //return redirect()->route('/admin/article');           
       }
    /**
    * Display the specified resource.
    *
    * @param  int  $slug
    * @return Response
    */
        public function show($slug){
        
            $article = \App\Entity\Articles\Articles::where('slug',$slug)->firstOrFail();
            $listeRubriques = \App\Entity\Rubriques\Rubriques::get();
            
            //var_dump($article->titre);
            
            return View('Admin\Articles\ShowArticle', array('article' => $article, 'listeRubriques' => $listeRubriques));
        }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
        public function edit($id)
        {
                //
        }

   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
        public function update($id)
        {
                //
        }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
        public function destroy($id)
        {
                //
        }
        
        
        public function creerSlug($texte){

            $tableau = array
            (
                'À'=>'a', 'Á'=>'a', 'Â'=>'a', 'Ã'=>'a', 'Ä'=>'a', 
                'Å'=>'a', 'à'=>'a', 'á'=>'a',  'â'=>'a',  'ã'=>'a', 
                'ä'=>'a', 'å'=>'a', 'Ç'=>'c', 'ç'=>'c', 'È'=>'e', 
                'É'=>'e', 'Ê'=>'e',  'Ë'=>'e', 'è'=>'e',  'é'=>'e', 
                'ê'=>'e', 'ë'=>'e', 'Ì'=>'i',  'Í'=>'i',  'Î'=>'i', 
                'Ï'=>'i', 'ì'=>'i',  'í'=>'i',  'î'=>'i',  'ï'=>'i', 
                'Ò'=>'o', 'Ó'=>'o', 'Ô'=>'o', 'Õ'=>'o', 'Ö'=>'o', 
                'ð'=>'o', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o',  'õ'=>'o', 
                'ö'=>'o', 'Ù'=>'u', 'Ú'=>'u', 'Û'=>'u', 'Ü'=>'u', 
                'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ü'=>'u', 'Ý'=>'y', 
                'ý'=>'y', 'ÿ'=>'y'
            );

            // Je remplace les caractères accentués par des caractères non accentués
            $texte = strtr($texte, $tableau);

            // Je mets en miniscule
            $texte = strtolower($texte);

             // Je remplace les caractères spéciaux par des -
            $texte = preg_replace('/([^.a-z0-9]+)/i', '-', $texte);
            // J'utilise la fonction trim pour supprimer les - en fin de slug
            $texte = trim($texte, '-');
            // Je retourne le slug
            return $texte;
        }
}