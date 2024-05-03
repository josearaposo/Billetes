<x-app-layout>
    <div class="w-1/2 mx-auto">
        <form method="POST" action="{{ route('reservas.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Vuelo -->
            <div>
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Vuelo: {{Str::upper($vuelo->codigo)}}
                </h1>
            </div>

            <!-- Asientos -->
            <div>
                <x-input-label for="asiento" :value="'Asiento'" />
                <select id="asiento"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                    name="asiento" required>

                    {{ $asientos = $vuelo->reservas }}
                    @forelse ($asientos as $asiento)
                     {{ dd($asiento) }}
                        {{-- <option value="{{ $aeropuerto->id }}"
                            {{ old('aeropuerto_id') == $aeropuerto->id ? 'selected' : '' }}>
                            {{ $aeropuerto->nombre }}
                        </option> --}}

                    @empty
                        No existen aeropuertos
                    @endforelse
                </select>
                <x-input-error :messages="$errors->get('asiento')" class="mt-2" />

            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('reservas.index') }}">
                    <x-secondary-button class="ms-4">
                        Volver
                        </x-primary-button>
                </a>
                <x-primary-button class="ms-4">
                    Insertar
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
