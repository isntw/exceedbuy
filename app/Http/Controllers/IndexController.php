<?php

namespace App\Http\Controllers;
use App\Settings;

use Illuminate\Http\Request;

class IndexController extends Controller {

    public function index() {
        $settings = Settings::first();
        return view('web.index', compact('settings'));
    }

}
