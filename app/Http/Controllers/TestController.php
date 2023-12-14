<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Test;

class TestController extends Controller {
    public function index() {

        dd(Language::all()[0]->characters);

        return view('test', [
            'test' => Test::all()
        ]);
    }

}
