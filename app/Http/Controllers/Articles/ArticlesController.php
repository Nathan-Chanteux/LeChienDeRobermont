<?php
/*
 * \Http\Controllers\Articles\ArticlesController.php
 */
namespace App\Http\Controllers\Articles;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ArticlesController extends Controller {
/*
 * Spécifie que ce controlleur n'est accessible que si l'on est connecter
 */     
    public function __construct() {
        $this->middleware('auth');
    }
/*
 * Demande les données nécessaire pour créé le formulaire d'ajout des articles
 * 
 * Retourne les données à la vue CreateArticle.blade.php
 * 
 * Requête : Rubriques::get() => Va chercher tout le contenu de la table Rubriques
 *      @params: / 
 * 
 * @params: /
 * @return: array $listeRubriques
 */ 
    public function create(){
            
        $listeRubriques = \App\Entity\Rubriques\Rubriques::get();
        
        return View('Admin\Articles\CreateArticle', array('listeRubriques' => $listeRubriques));
    }
    
/*
 * Envois les données nécessaire pour sauvegarder le nouvel ajout
 * 
 * Requête : $article->save() => Va sauvegarder les données en base de données
 *      @params: / 
 * 
 * @params: /
 * @return: /
 */ 
       public function store(Request $request){
           
           $article = new \App\Entity\Articles\Articles;
           $article->titre = $request->input('titre');
           $article->texte = $request->input('texte');
           $article->rubriques_id = $request->input('RubriqueId');
           $article->home = $request->input('home');
           $article->slug = $this->creerSlug($request->input('titre'));
           
           //var_dump($request->input('photo'));
           if(null !== $request->file('photo')):
               $nomPhoto = $article->slug.'.'.$request->file('photo')->getClientOriginalExtension();
               $request->file('photo')->move(base_path().'/public/img/Upload/',$nomPhoto);
               $article->photo = $nomPhoto;
               var_dump($nomPhoto);
           endif;
           
           
           $article->save();
           
           return redirect('/admin/article/ajout')->with('message', 'L\'article à bien été ajouter.');        
       }
/*
 * Demande les données nécessaire pour créé la liste d'articles pouvant-être modifier/supprimer
 * 
 * Retourne les données à la vue ShowArticle.blade.php
 * 
 * Requête : Rubriques::get() => Va chercher tout le contenu de la table Rubriques
 *      @params: / 
 *         : Articles::get() => Va chercher tout le contenu de la table Articles
 * 
 * @params: /
 * @return: array $listeRubriques, array $listeArticles
 */ 
        public function show(){
            
            $listeRubriques = \App\Entity\Rubriques\Rubriques::get();
            $listeArticles = \App\Entity\Articles\Articles::get();
        
            return View('Admin\Articles\ShowArticle', array('listeRubriques' => $listeRubriques, 'listeArticles' => $listeArticles));
            
        }

/*
 * Demande les données nécessaire pour créé le formulaire de modification d'un article
 * 
 * Retourne les données à la vue EditArticle.blade.php
 * 
 * Requête : Rubriques::get() => Va chercher tout le contenu de la table Rubriques
 *      @params: / 
 *         : Articles::where() => Va chercher l'article dont le slug correspond au slug envoyé en paramètre
 *      @params: string $slug
 * 
 * @param: string $slug
 * @return: array $listeRubriques, array $article
 */
        public function edit($slug)
        {
            $article = \App\Entity\Articles\Articles::where('slug',$slug)->firstOrFail();
            $listeRubriques = \App\Entity\Rubriques\Rubriques::get();
            
            //var_dump($article->titre);
            
            return View('Admin\Articles\EditArticle', array('article' => $article, 'listeRubriques' => $listeRubriques));
        }

/*
 * Envois les données nécessaire pour sauvegarder la modification
 * 
 * Requête : $article->save() => Va sauvegarder les données en base de données
 *      @params: / 
 * 
 * @params: /
 * @return: /
 */ 
        public function update(Request $request){
            
            $article = \App\Entity\Articles\Articles::where('slug',$request->input('slugArticle'))->firstOrFail();
            
            //var_dump($request->input('titre'));
            $article->titre = $request->input('titre');
            $article->texte = $request->input('texte');
            $article->home = $request->input('home');
            $article->slug = $this->creerSlug($request->input('titre'));

            //var_dump($request->file('photo'));
            if(null !== $request->file('photo')):
               $nomPhoto = $article->slug.'.'.$request->file('photo')->getClientOriginalExtension();
               $request->file('photo')->move(base_path().'/public/img/Upload/',$nomPhoto);
               $article->photo = $nomPhoto;
               var_dump($nomPhoto);
           endif;
            
            $article->rubriques_id = $request->input('rubriques_id');
            
            $article->save();
            
            return redirect('/admin/article')->with('message', 'L\'article à bien été modifier.');
        }

/*
 * Demande les données nécessaire pour la suppression d'un article
 * Supprime l'article correspondant au slug
 * 
 * Requête : Articles::where() => Va chercher l'article dont le slug correspond au slug envoyé en paramètre
 *      @params: string $slug
 *         : $article->delete() => Va supprimer l'aricle correspondant au slug
 * 
 * @params: /
 * @return: /
 */ 
        public function destroy($slug){
            
            $article = \App\Entity\Articles\Articles::where('slug',$slug)->firstOrFail();
            $article->delete();
            
            return redirect('/admin/article')->with('message', 'L\'article à bien été supprimer.');
        }
/*
 * Crée un slug en fonction de la variable $texte
 * Retourne le slug
 *  
 * @param: string $texte
 * @return: string $texte
 */  
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