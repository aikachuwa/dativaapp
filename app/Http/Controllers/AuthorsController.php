<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    //
    public $restful=true;

    public function get_dativa(){

        $view=View::make('authors.dativa', array('name'=>'Dativa Chuwa'))
            ->with('age', '23');
        $view->location='Dar es Salaam';
        $view['speciality']='PHP';

        return $view;
    }
}
