<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Settings;

class SettingsController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        $settings = Settings::first();
        return view('admin.pages.settings', compact('settings'));
    }

    public function update() {
        
    }

}
