<x-layout>
    <x-slot name="title">
        Editar reserva
      </x-slot>

<div class="bg-green-100 py-32 px-10 min-h-screen ">
    <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto shadow-xl">
        <div class="flex justify-center">
            <h1 class="text-2xl mb-8 text-gray-700 font-semibold ">Formulari edició de reserves</h1>
            </div>
        <form method="POST" action="{{ route('reservas.update', $reserva->id) }}">
            {{-- Método de seguridad --}}
            @csrf
            @method('PUT')

            <div class="flex items-center mb-5">
                <label for="client_id" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Seleccionar Cliente:</label>
                <select name="client_id" id="client_id" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none" disabled>
                    <option value="">Seleccionar Cliente</option>
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}" {{ $client->id == old('client_id', $reserva->client_id) ? 'selected' : '' }}>
                            {{ $client->nom }} {{ $client->cognom }}
                        </option>
                    @endforeach
                </select>
            </div>
            @error('client_id')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <div class="flex items-center mb-5">
                <label for="pis_id" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Seleccionar Piso:</label>
                <select name="pis_id" id="pis_id" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none" disabled>
                    <option value="">Seleccionar Piso</option>
                    @foreach($pisos as $pis)
                        <option value="{{ $pis->id }}" {{ $pis->id == old('pis_id', $reserva->pis_id) ? 'selected' : '' }}>
                            {{ $pis->nom_referencia }}
                        </option>
                    @endforeach
                </select>
            </div>
            @error('pis_id')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <div class="flex items-center mb-5">
                <label class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Data de Reserva:</label>
                <input type="text" value="{{ $reserva->data_reserva }}" class="flex-1 py-2 border-b-2 border-gray-400 text-gray-600 outline-none" disabled>
            </div>

            <div class="flex items-center mb-5">
                <label for="estat" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Estat:</label>
                <select name="estat" id="estat" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
                    <option value="Per revisar" {{ $reserva->estat == 'Per revisar' ? 'selected' : '' }}>Per revisar</option>
                    <option value="Aprovada" {{ $reserva->estat == 'Aprovada' ? 'selected' : '' }}>Aprovada</option>
                    <option value="Rebutjada" {{ $reserva->estat == 'Rebutjada' ? 'selected' : '' }}>Rebutjada</option>
                </select>
            </div>
            @error('estat')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <div class="text-right">
                <button type="submit" class="py-3 px-8 bg-green-700 text-white font-bold rounded-full hover:bg-green-500 transition duration-300">Actualitzar</button>
                <a href="{{ route('reservas.index') }}" class="ml-4 py-3 px-8 bg-gray-400 text-white font-bold rounded-full hover:bg-gray-500 transition duration-300">Cancelar</a>
              </div>
        </form>
    </div>
</div>
</x-layout>