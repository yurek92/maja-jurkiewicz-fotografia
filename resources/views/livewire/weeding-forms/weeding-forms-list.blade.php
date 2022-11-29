<div class="flex flex-col mt-5">
    <div class="overflow-x-auto sm:mx-6 lg:mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="border-b bg-green-800">
                    <tr>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            #
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            Para Młoda
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            Termin ślubu
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($weedingForms as $weedingForm)
                        <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-light text-gray-900">
                                {{ ($weedingForms->currentpage() - 1) * $weedingForms->perpage() + $loop->iteration }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $weedingForm->para_mloda }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $weedingForm->termin_slubu }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex items-center justify-end">

                                <form action="{{ route('forms.generate.pdf', [$weedingForm->id]) }}" target="_blank">
                                    <button type="submit"
                                            class="mr-3 bg-green-800 font-medium text-xs text-gray-100 p-2 rounded tracking-widefont-semibold font-display focus:outline-none focus:shadow-outline hover:bg-green-600 shadow-lg">
                                        PDF
                                    </button>
                                </form>
                                <form action="{{ route('forms.edit', [$weedingForm->id]) }}">
                                    <button class="mr-3 bg-gray-800 font-medium text-xs text-gray-100 p-2 rounded tracking-widefont-semibold font-display focus:outline-none focus:shadow-outline hover:bg-gray-600 shadow-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </button>
                                </form>
                                <button wire:click.prevent="delete({{ $weedingForm->id }})"
                                        onclick="confirm('Czy na pewno usunąć wybrany formularz?') || event.stopImmediatePropagation()"
                                        class="bg-red-800 font-medium text-xs text-gray-100 p-2 rounded tracking-widefont-semibold font-display focus:outline-none focus:shadow-outline hover:bg-red-600 shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                            <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">Brak formularzy ślubnych</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div>
                    {{ $weedingForms->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
