<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * http://127.0.0.1:8000/api/noticias?page=2
     */
    public function index()
    {
        $noticias = Noticia::paginate(10);
        return $noticias;
    }

    /**
     * Display a listing of the resource.
     * @param  int  $page_number
     * @return \Illuminate\Http\Response
     * http://127.0.0.1:8000/api/noticias?page=2
     */
    public function page($page_number){
        //Indicamos q página debe ser al que debe devolver
        Paginator::currentPageResolver(function () use ($page_number) {
            return $page_number;
        });
        $noticias = Noticia::paginate(10);
        return $noticias;
    }

       /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        return $noticia;
    }

       /**
     * Muestra las noticias de una determinada categoría.
     *
     * @param  Integer  $categoriaId
     * @return \Illuminate\Http\Response
     * http://127.0.0.1:8000/api/categoria/1?page=2
     */
    public function categoria($categoriaId)
    {
        //$noticias = Noticia::all();
        $noticias = Noticia::where('categoriaId',$categoriaId)->paginate(10);
        return $noticias;
    }

      /**
     * Muestra las noticias de un determinado autor.
     *
     * @param  Integer  $autorId
     * @return \Illuminate\Http\Response
     * http://127.0.0.1:8000/api/autor/1?page=2
     */
    public function autor($autorId)
    {
        //$noticias = Noticia::all();
        $noticias = Noticia::where('autorId',$autorId)->paginate(10);
        
        return $noticias;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

 


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia)
    {
        //
    }
}
