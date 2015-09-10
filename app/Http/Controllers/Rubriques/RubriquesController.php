<?php namespace App\Http\Controllers\Rubriques;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RubriquesController extends Controller {
        
        /**
         * 
         */
    
        public function afficheRubriquesAction(){
            
            $listeRubriques = \App\Entity\Rubriques\Rubriques::get();
            $listeArticles = \App\Entity\Articles\Articles::get();
            
            return View('Rubriques\Rubriques', array('listeRubriques' => $listeRubriques, 'listeArticles' => $listeArticles));
            //return \App\Entity\Rubriques\Rubriques::where('slug', $slugRubrique)->get();
        }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function afficheMenuAction()
	{
		//
            $listeRubriques = \App\Entity\Rubriques\Rubriques::get();
            return View('Rubriques\MenuRubriques', array('listeRubriques' => $listeRubriques));
            //return \App\Entity\Rubriques\Rubriques::get();
            //return $listeRubriques;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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

}
