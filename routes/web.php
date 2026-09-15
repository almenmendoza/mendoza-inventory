<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

// Redirect root URL to Login
Route::get('/', function () {
    return redirect()->route('login');
});

// Protected Routes (Authentication Required)
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Dashboard Route with Analytics & Data
    Route::get('/dashboard', function () {
        $recentProducts = Product::latest()->take(5)->get();
        $totalProducts = Product::count();
        $lowStockCount = Product::whereColumn('quantity', '<=', 'reorder_level')
                                ->where('quantity', '>', 0)
                                ->count();
        $outOfStockCount = Product::where('quantity', '<=', 0)->count();
        $totalValue = Product::selectRaw('SUM(quantity * unit_price) as total')->value('total') ?? 0;

        return view('dashboard', compact(
            'recentProducts', 
            'totalProducts', 
            'lowStockCount', 
            'outOfStockCount', 
            'totalValue'
        ));
    })->name('dashboard');

    // Product Inventory Resource Routes (CRUD)
    Route::resource('products', ProductController::class);

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';