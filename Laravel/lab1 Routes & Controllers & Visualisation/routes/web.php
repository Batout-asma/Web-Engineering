<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

// Route GET - Basic GET route
Route::get('/welcome', function () {
    return "Bienvenue sur la route GET!";
});

// Route POST - Handles form submission or data sending via POST
Route::post('/submit', function () {
    return "Données envoyées via POST!";
});



// Route POST - Handles form submission or data sending via POST
Route::get('/home', function () {
    return view('home');
});


Route::get('/submit-form', function () {
    return view('submit'); // This loads the 'submit.blade.php' view
});


// Route PUT - Used for updating resources, requires an ID as parameter
Route::put('/update/{id}', function ($id) {
    return "Mise à jour de l'élément avec l'ID : $id";
});

// Route DELETE - Used for deleting resources, requires an ID as parameter
Route::delete('/delete/{id}', function ($id) {
    return "Suppression de l'élément avec l'ID : $id";
});

// Route with mandatory parameter (name)
Route::get('/user/{name}', function ($name) {
    return "Bonjour, $name!";
});

// Route with optional parameter (age)
Route::get('/profile/{age?}', function ($age = 'inconnu') {
    return "Votre âge est : $age";
});

// Route with closure
Route::get('/fermeture', function () {
    return "Ceci est une route fermée avec une fermeture!";
});

// Named route for dashboard
Route::get('/dashboard', function () {
    return "Bienvenue sur le tableau de bord";
})->name('dashboard');

// Route using a controller method (MyController)
Route::get('/example', [MyController::class, 'index']);

// Grouped routes with 'admin' prefix
Route::prefix('admin')->group(function () {
    // Admin dashboard route
    Route::get('/dashboard', function () {
        return "Bienvenue sur le tableau de bord de l'administrateur";
    });

    // Admin users route
    Route::get('/users', function () {
        return "Liste des utilisateurs pour l'administrateur";
    });
});
