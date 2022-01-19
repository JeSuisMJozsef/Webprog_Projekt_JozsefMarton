<?php
    
    use App\Http\Controllers\CategoryController;
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\UserController;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;
    
    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */
    
    Route::get('/', function () {
        return view('welcome');
    })->name('/');
    
    Auth::routes();
    
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        
        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::get('users/create', [UserController::class, 'create'])->name('users.create');
        Route::get('users/{user}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('users', [UserController::class, 'store'])->name('users.store');
        Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
        Route::delete('users/{user}', [UserController::class, 'delete'])->name('users.delete');
        
        
        Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::get('categories/{category}]', [CategoryController::class, 'show'])->name('categories.show');
        Route::get('categories/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
        Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('categories/{category}', [CategoryController::class, 'delete'])->name('categories.delete');
        
        Route::get('products', [ProductController::class, 'index'])->name('products.index');
        Route::get('products/search/', [ProductController::class, 'search'])->name('products.search');
        Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
        Route::get('products/{product}', [ProductController::class, 'edit'])->name('products.edit');
        Route::post('products', [ProductController::class, 'store'])->name('products.store');
        Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('products/{product}', [ProductController::class, 'delete'])->name('products.delete');
        
    });
