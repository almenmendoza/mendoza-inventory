<x-app-layout>
    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow sm:rounded-lg">
                <h2 class="text-xl font-bold mb-6 text-[#0d5c3e]">Add New Product</h2>

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('products.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Product Name *</label>
                        <input type="text" name="name" value="{{ old('name') }}" required class="mt-1 block w-full rounded border-gray-300">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">SKU Code *</label>
                        <input type="text" name="sku" value="{{ old('sku') }}" required class="mt-1 block w-full rounded border-gray-300">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Category *</label>
                        <input type="text" name="category" value="{{ old('category') }}" required class="mt-1 block w-full rounded border-gray-300">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Supplier</label>
                        <input type="text" name="supplier" value="{{ old('supplier') }}" class="mt-1 block w-full rounded border-gray-300">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Quantity *</label>
                        <input type="number" name="quantity" value="{{ old('quantity', 0) }}" min="0" required class="mt-1 block w-full rounded border-gray-300">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Reorder Level *</label>
                        <input type="number" name="reorder_level" value="{{ old('reorder_level', 5) }}" min="0" required class="mt-1 block w-full rounded border-gray-300">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Unit Price (₱) *</label>
                        <input type="number" step="0.01" name="unit_price" value="{{ old('unit_price') }}" min="0" required class="mt-1 block w-full rounded border-gray-300">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" rows="3" class="mt-1 block w-full rounded border-gray-300">{{ old('description') }}</textarea>
                    </div>
                    <div class="md:col-span-2 flex justify-end space-x-2 mt-4">
                        <a href="{{ route('products.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded">Cancel</a>
                        <button type="submit" class="px-4 py-2 bg-[#0d5c3e] text-white rounded hover:bg-[#09422c]">Save Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>