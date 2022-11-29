<div>
    @if(count($fieldsToShow) > 0)
        @foreach($fieldsToShow as $category => $fieldsByCategory)
            @if(count($fieldsByCategory) > 0)
                <div class="text-2xl sm:text-4xl font-medium text-green-700 mt-5 flex items-center border-b border-green-700 pb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                    <div class="ml-3">
                        {{ \App\Models\WeedingForm::$categories[$category]['name'] }}
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4 sm:gap-8 mt-3 sm:mt-5 items-center">
                    @foreach($fieldsByCategory as $key => $field)
                        @if($field['show'])
                            @if($field['type'] == 'input')
                                <div>
                                    <label class="block text-gray-700 text-lg font-medium mb-2">
                                        {{ $field['label'] }}
                                    </label>
                                    <input wire:model="form.{{ $key }}"
                                           class="w-full no-shadow appearance-none border border-green-600 bg-white rounded py-2 px-3 text-gray-700 leading-tight"
                                           @if(isset($field['placeholder'])) placeholder="{{ $field['placeholder'] }}" @endif>
                                    @error('form.'.$key)
                                    <div class="text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            @elseif($field['type'] == 'date')
                                <div>
                                    <label class="block text-gray-700 text-lg font-medium mb-2">
                                        {{ $field['label'] }}
                                    </label>
                                    <x-input.datetimepicker wire:model.defer="form.{{ $key }}" autocomplete="off"/>
                                    @error('form.'.$key)
                                    <div class="text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            @elseif($field['type'] == 'select')
                                <div>
                                    <label class="block text-gray-700 text-lg font-medium mb-2">
                                        {{ $field['label'] }}
                                    </label>
                                    <div class="inline-block relative w-full">
                                        <select wire:model="form.{{ $key }}"
                                                class="w-full no-shadow appearance-none border border-green-600 bg-white rounded py-2 px-3 text-gray-700 leading-tight">
                                            @if(count($field['values']) > 0)
                                                @foreach($field['values'] as $keyValue => $value)
                                                    <option value="{{ $keyValue }}">{{ $value }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('form.'.$key)
                                    <div class="text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            @elseif($field['type'] == 'textarea')
                                <div>
                                    <label class="block text-gray-700 text-lg font-medium mb-2">
                                        {{ $field['label'] }}
                                    </label>
                                    <textarea wire:model="form.{{ $key }}" rows="6"
                                              class="w-full no-shadow appearance-none border border-green-600 bg-white rounded py-2 px-3 text-gray-700 leading-tight"
                                              @if(isset($field['placeholder'])) placeholder="{{ $field['placeholder'] }}" @endif></textarea>
                                    @error('form.'.$key)
                                    <div class="text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            @elseif($field['type'] == 'checkbox')
                                <div>
                                    <div class="grid grid-cols-8 gap-4 items-center">
                                        <input wire:model="form.{{ $key }}" id="checkbox_{{ $key }}" type="checkbox" class="accent-green-700 h-5 w-5">
                                        <label class="col-span-7 text-sm" for="checkbox_{{ $key }}">
                                            {{ $field['label'] }}
                                            @error('form.'.$key)
                                            <div class="text-sm text-red-500">{{ $message }}</div>
                                            @enderror
                                        </label>
                                    </div>
                                </div>
                            @elseif($field['type'] == 'radio')
                                <div>
                                    @if(count($field['values']) > 0)
                                        <label class="block text-gray-700 text-lg font-medium mb-2">
                                            {{ $field['label'] }}
                                        </label>
                                        <div class="flex justify-start items-center">
                                            @foreach($field['values'] as $keyValue => $value)
                                                <div class="grid grid-cols-8 gap-4 items-center">
                                                    <input wire:model="form.{{ $key }}" id="{{ $key }}_{{ $keyValue }}"
                                                           class="appearance-none rounded-full h-4 w-4 border border-green-700 bg-white checked:bg-green-700 checked:border-green-700"
                                                           type="radio" value="{{ $keyValue }}">
                                                    <label class="inline-block text-gray-700" for="{{ $key }}_{{ $keyValue }}">
                                                        {{ $value }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                        @error('form.'.$key)
                                        <div class="text-sm text-red-500">{{ $message }}</div>
                                        @enderror
                                    @endif
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
            @endif
        @endforeach
    @endif
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-12 mt-10 @if($weedingFormId) mb-5 @endif">
        <button wire:click="submit"
                class="bg-green-800 font-medium text-lg text-gray-100 p-2 rounded tracking-widefont-semibold font-display focus:outline-none focus:shadow-outline hover:bg-green-600 shadow-lg">
            @if($weedingFormId)
                Zapisz zmiany
            @else
                Wyślij formularz
            @endif
        </button>
    </div>
</div>
