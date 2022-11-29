<div class="flex justify-center mt-5">
    <form wire:submit.prevent="submit" class="w-full sm:w-1/4 xxl:sm:w-1/5 px-8">
        <div class="mb-3">
            <label class="block text-gray-700 text-sm font-medium mb-2">
                Obecne hasło
            </label>
            <input wire:model="current_password" type="password" class="w-full no-shadow appearance-none border border-green-700 rounded py-2 px-3 text-gray-700 leading-tight">
            @error('current_password') <div class="text-sm text-red-500">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label class="block text-gray-700 text-sm font-medium mb-2">
                Nowe hasło
            </label>
            <input wire:model="new_password" type="password" class="w-full no-shadow appearance-none border border-green-700 rounded py-2 px-3 text-gray-700 leading-tight">
            @error('new_password') <div class="text-sm text-red-500">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label class="block text-gray-700 text-sm font-medium mb-2">
                Powtórz nowe hasło
            </label>
            <input wire:model="new_confirm_password" type="password" class="w-full no-shadow appearance-none border border-green-700 rounded py-2 px-3 text-gray-700 leading-tight">
            @error('new_confirm_password') <div class="text-sm text-red-500">{{ $message }}</div>@enderror
        </div>
        <div class="flex justify-end">
            <button type="submit"
                    class="bg-green-800 text-sm text-gray-100 p-2 w-1/2 rounded tracking-widefont-semibold font-display focus:outline-none focus:shadow-outline hover:bg-green-600 shadow-lg">
                Zapisz
            </button>
        </div>
    </form>
</div>
