<div class="shadow sm:overflow-hidden sm:rounded-md">
    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-3">
                <label for="confirmation" class="block text-sm font-medium text-gray-700">
                    Escribe "confirmar" para eliminar
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="confirmation" wire:model="confirmation" id="confirmation"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                           focus:ring-indigo-500 sm:text-sm">
                </div>
                @error('confirmation') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent
                bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none
                focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" wire:click="delete">Eliminar</button>
    </div>
</div>
