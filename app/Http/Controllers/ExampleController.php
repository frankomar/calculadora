<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    function get() {
        return "hola";
    }
    function suma(Request $data) {
        $valores = $data->json()->all();
        return $valores;
    }


}
