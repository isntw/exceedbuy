<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Messages\StoreMessageRequest;
use App\Message;

class MessageController extends Controller {

    public function index() {
        
    }

    public function store(StoreMessageRequest $request) {
        //  dd($request->all());
        Message::create($request->only('name', 'email', 'phone', 'text'));
        return redirect()->back();
    }

}
