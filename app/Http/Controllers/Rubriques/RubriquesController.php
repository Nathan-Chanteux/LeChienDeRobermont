<?php
/*
 * \Http\Controllers\Rubriques\RubriquesController.php
 */
namespace App\Http\Controllers\Rubriques;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RubriquesController extends Controller {
        
/*
 * Demande les données nécessaire pour afficher le détail des rubriques
 * Demande les données des articles
 * 
 * Retourne les données à la vue Rubriques.blade.php
 * 
 * Requête : Rubriques::get() => Va chercher tout le contenu de la table Rubriques
 *      @param: /
 *         : Articles::get() => Va chercher tout le contenu de la table Articles
 *      @param: / 
 * 
 * @param: /
 * @return: array $listeRubriques, array $listeArticles
 */   
        public function afficheRubriquesAction(){
            
            $listeRubriques = \App\Entity\Rubriques\Rubriques::get();
            $listeArticles = \App\Entity\Articles\Articles::get();
            
            return View('Rubriques\Rubriques', array('listeRubriques' => $listeRubriques, 'listeArticles' => $listeArticles));
            //return \App\Entity\Rubriques\Rubriques::where('slug', $slugRubrique)->get();
        }
/*
 * Demande les données nécessaire pour afficher le menu principale du site
 * 
 * Retourne les données à la vue MenuRubriques.blade.php
 * 
 * Requête : Rubriques::get() => Va chercher tout le contenu de la table Rubriques
 *      @param: /
 * 
 * @param: /
 * @return: array $listeRubriques
 */
	public function afficheMenuAction()
	{
		//
            $listeRubriques = \App\Entity\Rubriques\Rubriques::get();
            return View('Rubriques\MenuRubriques', array('listeRubriques' => $listeRubriques));
            //return \App\Entity\Rubriques\Rubriques::get();
            //return $listeRubriques;
	}
}
