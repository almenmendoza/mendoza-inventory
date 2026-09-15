<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the inventory dashboard with real statistics.
     */
    public function index()
    {
        // Part 7: Calculate real-time database statistics
        $totalProducts = Product::count();
        $lowStockCount = Product::whereColumn('quantity', '<=', 'reorder_level')
                                ->where('quantity', '>', 0)
                                ->count();
        $outOfStockCount = Product::where('quantity', '<=', 0)->count();
        $totalValue = Product::selectRaw('SUM(quantity * unit_price) as total')->value('total') ?? 0;

        // Fetch recent products added
        $recentProducts = Product::latest()->take(5)->get();

        return view('dashboard', compact(
            'totalProducts',
            'lowStockCount',
            'outOfStockCount',
            'totalValue',
            'recentProducts'
        ));
    }
}