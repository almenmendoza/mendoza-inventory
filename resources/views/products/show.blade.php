<x-app-layout>
    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow sm:rounded-lg space-y-4">
                <div class="flex justify-between items-center border-b pb-4">
                    <h2 class="text-2xl font-bold text-[#0d5c3e]">{{ $product->name }}</h2>
                    <span class="font-mono text-sm bg-gray-100 px-3 py-1 rounded">SKU: {{ $product->sku }}</span>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div><strong>Category:</strong> {{ $product->category }}</div>
                    <div><strong>Supplier:</strong> {{ $product->supplier ?? 'N/A' }}</div>
                    <div><strong>Quantity in Stock:</strong> {{ $product->quantity }}</div>
                    <div><strong>Reorder Level:</strong> {{ $product->reorder_level }}</div>
                    <div><strong>Unit Price:</strong> ₱{{ number_format($product->unit_price, 2) }}</div>
                    <div><strong>Total Inventory Value:</strong> ₱{{ number_format($product->total_value, 2) }}</div>
                </div>

                <div class="pt-2">
                    <strong>Description:</strong>
                    <p class="text-gray-600 mt-1">{{ $product->description ?? 'No description provided.' }}</p>
                </div>

                <div class="flex justify-end space-x-2 pt-4 border-t">
                    <a href="{{ route('products.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded">Back to List</a>
                    <a href="{{ route('products.edit', $product) }}" class="px-4 py-2 bg-blue-600 text-white rounded">Edit</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>