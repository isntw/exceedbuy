<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller {
    
    
    public function index() {
        
    }
    public function store() {
        $this->validate(request(), [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'text' => 'required',
        ]);

        Message::create(request(['name', 'email', 'phone', 'text']));

        return redirect('/');
    }

}
