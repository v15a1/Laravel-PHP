<?php

// adding routing to different URI's

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', function () {
    // passing down an array using routers
    $names = ["Tony", "Steve", "John"];
    return view("home.contact", ["contacts" => $names]);
});

Route::get('master', function () {
    return view("home.master");
});

Route::get('about', function () {
    // passing down values using routers
    return view("home.about", ["title" => "About Us Page"]);
});
