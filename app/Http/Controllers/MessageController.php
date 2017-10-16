<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller {

    public function store() {
        Message::create(request(['name','email','phone','text']));
        
        return redirect('/');
    }

}
