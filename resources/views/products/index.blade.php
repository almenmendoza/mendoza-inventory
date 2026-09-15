<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-bold text-[#0d5c3e]">Product Inventory Records</h2>
                <a href="{{ route('products.create') }}" class="px-4 py-2 bg-[#0d5c3e] text-white rounded hover:bg-[#09422c] transition">
                    + Add New Product
                </a>
            </div>

            @if(session('success'))
                <div class="p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow sm:rounded-lg overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-[#0d5c3e] text-white">
                        <tr>
                            <th class="px-4 py-3 text-left">SKU</th>
                            <th class="px-4 py-3 text-left">Name</th>
                            <th class="px-4 py-3 text-left">Category</th>
                            <th class="px-4 py-3 text-left">Quantity</th>
                            <th class="px-4 py-3 text-left">Price</th>
                            <th class="px-4 py-3 text-left">Supplier</th>
                            <th class="px-4 py-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @forelse($products as $product)
                            <tr>
                                <td class="px-4 py-3 font-mono text-sm">{{ $product->sku }}</td>
                                <td class="px-4 py-3 font-semibold">{{ $product->name }}</td>
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
                                <td class="px-4 py-3">{{ $product->supplier ?? 'N/A' }}</td>
                                <td class="px-4 py-3 text-center space-x-2">
                                    <a href="{{ route('products.show', $product) }}" class="px-2 py-1 bg-green-600 text-white rounded text-xs hover:bg-green-700">View</a>
                                    <a href="{{ route('products.edit', $product) }}" class="px-2 py-1 bg-blue-600 text-white rounded text-xs hover:bg-blue-700">Edit</a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline" onsubmit="return confirm('Sigurado ka bang buburahin ito?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-2 py-1 bg-red-600 text-white rounded text-xs hover:bg-red-700">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-4 py-4 text-center text-gray-500">Walang laman ang inventory table.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>