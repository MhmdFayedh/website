<?php

use App\Mail\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\{HomeController, PostController, WorkController};


Route::get('/', HomeController::class);

Route::resource('posts', PostController::class)->only([
    'index',
    'show'
]);

Route::resource('works', WorkController::class)->only([
    'index',
    'show'
]);

Route::post('/contact', function (Request $request) {
    
    // Take the subject, email and message and send it to your email 
    $contact = [
        'subject' => $request->subject, 
        'email' => $request->email, 
        'message' => $request->message, 
    ];

    
    Mail::to('mhmdfayedh@gmail.com')
    ->send(new Contact(title: $request->subject, email: $request->email, msg: $request->message));

    return back()->with('success', 'Your message has been sent!');
});