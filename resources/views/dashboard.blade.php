<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Statistics Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-[#0d5c3e]">
                    <div class="text-sm font-medium text-gray-500">Total Products</div>
                    <div class="text-3xl font-bold text-gray-800 mt-1">{{ $totalProducts }}</div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-yellow-500">
                    <div class="text-sm font-medium text-gray-500">Low Stock Items</div>
                    <div class="text-3xl font-bold text-yellow-600 mt-1">{{ $lowStockCount }}</div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-red-600">
                    <div class="text-sm font-medium text-gray-500">Out of Stock</div>
                    <div class="text-3xl font-bold text-red-600 mt-1">{{ $outOfStockCount }}</div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-blue-600">
                    <div class="text-sm font-medium text-gray-500">Total Inventory Value</div>
                    <div class="text-3xl font-bold text-blue-600 mt-1">₱{{ number_format($totalValue, 2) }}</div>
                </div>
            </div>

            <!-- Header & Action Button -->
            <div class="flex justify-between items-center">
                <h3 class="text-xl font-bold text-[#0d5c3e]">Recently Added Items</h3>
                <a href="{{ route('products.index') }}" class="px-4 py-2 bg-[#0d5c3e] text-white rounded hover:bg-[#09422c] transition">
                    View Full Inventory →
                </a>
            </div>

            <!-- Recent Products Table -->
            <div class="bg-white shadow sm:rounded-lg overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-[#0d5c3e] text-white">
                        <tr>
                            <th class="px-4 py-3 text-left">SKU</th>
                            <th class="px-4 py-3 text-left">Product Name</th>
                            <th class="px-4 py-3 text-left">Category</th>
                            <th class="px-4 py-3 text-left">Quantity</th>
                            <th class="px-4 py-3 text-left">Unit Price</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($recentProducts as $product)
                            <tr>
                                <td class="px-4 py-3 font-mono text-sm">{{ $product->sku }}</td>
                                <td class="px-4 py-3 font-medium">{{ $product->name }}</td>
                                <td class="px-4 py-3">{{ $product->category }}</td>
                                <td class="px-4 py-3">
                                    {{ $product->quantity }}
                                    @if($product->isOutOfStock())
                                        <span class="ml-2 px-2 py-0.5 text-xs bg-red-100 text-red-800 rounded font-bold">Out of Stock</span>
                                    @elseif($product->isLowStock())
                                        <span class="ml-2 px-2 py-0.5 text-xs bg-yellow-100 text-yellow-800 rounded font-bold">Low Stock</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3">₱{{ number_format($product->unit_price, 2) }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-4 text-center text-gray-500">Walang kamakailang products sa system.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>