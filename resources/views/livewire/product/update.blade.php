<div>
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Editar producto</h1>
    </div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow sm:rounded-md">
            <div class="bg-white px-4 py-5 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nombre del producto</label>
                        <input type="text" name="name" wire:model="name" id="name" class="mt-1 block w-full rounded-md
                        border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('name') <span class="text-sm font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="price" class="block text-sm font-medium text-gray-700">Precio del producto</label>
                        <input type="number" name="price" wire:model="price" id="price"class="mt-1 block w-full
                        rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('price') <span class="text-sm font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="unitsContains" class="block text-sm font-medium text-gray-700">
                            Unidades que contiene el producto
                        </label>
                        <input type="number" name="unitsContains" wire:model="unitsContains" id="unitsContains"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                               focus:ring-indigo-500 sm:text-sm">
                        @error('unitsContains')
                        <span class="text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="unitPrice" class="block text-sm font-medium text-gray-700">
                            Precio por unidad de producto
                        </label>
                        <input type="number" name="unitPrice" wire:model="unitPrice" id="unitPrice"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                               focus:ring-indigo-500 sm:text-sm">
                        @error('unitPrice') <span class="text-sm font-medium text-red-500">
                            {{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent
                bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none
                focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" wire:click="update">Save</button>
            </div>
        </div>
    </div>
</div>
