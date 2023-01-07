<div>
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Nueva compra</h1>
    </div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow sm:rounded-md">
            <div class="bg-white px-4 py-5 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="saleDate" class="block text-sm font-medium text-gray-700">
                            Fecha de venta
                        </label>
                        <input type="date" name="saleDate" wire:model="saleDate" id="saleDate"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                               focus:ring-indigo-500 sm:text-sm">
                        @error('saleDate')
                        <span class="text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="product" class="block text-sm font-medium text-gray-700">Producto</label>
                        <select id="product" name="product" wire:model="product" class="mt-1 block w-full rounded-md
                        border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none
                        focus:ring-indigo-500 sm:text-sm">
                            <option>Seleccionar</option>
                            @foreach($products as $item)
                                <option value="{{ $item->slug }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('name') <span class="text-sm font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="amount" class="block text-sm font-medium text-gray-700">
                            Unidades o cantidad que se vendio del producto
                        </label>
                        <input type="number" name="amount" wire:model="amount" id="amount"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                               focus:ring-indigo-500 sm:text-sm">
                        @error('amount')
                        <span class="text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent
                bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none
                focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" wire:click="store">Guardar
                </button>
            </div>
        </div>
    </div>
</div>
