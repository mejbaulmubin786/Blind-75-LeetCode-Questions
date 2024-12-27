<?php

use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

//Basic Routing
Route::get('/greeting', function () {
    return 'Hello World';
});
//Available Router Methods
Route::post('/greeting', function () {
    return 'This is the post method';
})->withoutMiddleware([VerifyCsrfToken::class]);

Route::match(['get', 'post'], '/match', function () {
    return 'you can use get or post method here';
})->withoutMiddleware([VerifyCsrfToken::class]);

Route::any('/any', function () {
    return 'you can use any method here';
})->withoutMiddleware([VerifyCsrfToken::class]);

//Redirect Routes
Route::redirect('/here', '/greeting');

//View Routes
Route::view('/hello', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Mejbaul Mubin']);

/*
Use @isset if you confirm some routes may not have the given variable or some may have.
@isset($name)
{{ $name }}
@endisset
 */

// To show the Route List : php artisan route:list

/*By default, the route middleware that are assigned to each route will not be displayed in the
route:list output; however, you can instruct Laravel to display the route middleware and middleware group names by adding the -v
 */

// php artisan route:list -v

# Expand middleware groups...
// php artisan route:list -vv

# Route Parameters
Route::get('/user/{id}', function (string $id) {
    return 'User ' . $id;
});

Route::get('/posts/{postId}/comments/{commentId}', function (string $postId, string $commentId) {
    return "$postId = $commentId";
});

/*
If your route has dependencies that you would like the Laravel service container to automatically inject
into your route's callback, you should list your route parameters after your dependencies:
 */

Route::get('/new-user/{id}', function (Request $request, string $id) {
    return 'New-User ' . $id;
});

// Optional Parameters

Route::get('/user-name/{name?}', function (?string $name = null) {
    return $name;
});

Route::get('/student/{name?}', function (?string $name = 'Mejbaul Mubin') {
    return $name;
});

// Regular Expression Constraints

Route::get('/book/{name}', function (string $name) {
    return $name;
})->where('name', '[A-Za-z]+');

Route::get('/book/{id}', function (string $id) {
    return "Boosk's Id =: $id";
})->where('id', '[0-9]+');

Route::get('/user/{id}/{name}', function (string $id, string $name) {
    return "Id = $id and name = $name";
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']); // small case in name

// add pattern

Route::get('/book/{id}/{name}', function (string $id, string $name) {
    // ...
})->whereNumber('id')->whereAlpha('name');

Route::get('/book/{name}', function (string $name) {
    // ...
})->whereAlphaNumeric('name');

Route::get('/new-book/{id}', function (string $id) {
    // ...
})->whereUuid('id');

Route::get('/about-user/{id}', function (string $id) {
    //
})->whereUlid('id');

Route::get('/category/{category}', function (string $category) {
    // ...
})->whereIn('category', ['movie', 'song', 'painting']);

// Global Constraints

/*
If you would like a route parameter to always be constrained by a given regular expression, you may use the pattern
method. You should define these patterns in the boot method of your App\Providers\RouteServiceProvider class:
 */

/*

public function boot(): void
{
Route::pattern('id', '[0-9]+');
}

 */

//------------------------------------------------------------------------------
//--------------------Encoded Forward Slashes
//-------------------------------------------------------------------------------

// Named Routes

//Route Prefixes
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return "Route prefix";
    });

    Route::get('/users/dashboard', function () {
        return "Users Dashboard";
    });
});

//Route Name Prefixes
Route::name('admin.')->group(function () {
    Route::get('/users-name', function () {
        return "<h1>users-name page</h1>";
    })->name('users');
});
//

Route::get('/test', function () {
    return "<a href='" . route('admin.users') . "'>Go to users</a>";
});

//Route Model Binding
//Implicit Binding
