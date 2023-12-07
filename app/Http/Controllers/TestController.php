<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller {
    public function show($slug) {
        return view('test', [
            'test' => Test::all()
        ]);
    }

}
