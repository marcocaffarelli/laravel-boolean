<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPagina extends Controller
{
    
    /**
     * Mostra la pagina Home
     * @return view home
     */
    public function home(){
        return view('home');
    }

      /**
     * Mostra la pagina about
     * @return view about
     */
    public function about(){
        return view('about');
    }


  /**
     * Mostra la pagina blog
     * @return view blog
     */
    public function blog(){
        return view('blog');
    }

}
