<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      <a href="{{ route('mascotas.show', ['mascota' => $mascota]) }}">&larr; Nueva Vacuna para {{ $mascota->nombre
        }}</a>
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <form action="{{ route('mascotas.vacunas.store', ['mascota' => $mascota]) }}" method="POST"
            class="mt-6 space-y-6">
            @csrf
            <div>
              <x-input-label for="vacuna_id" value="Vacuna" />
              <select name="vacuna_id" id="vacuna_id" class="mt-1 block w-full">
                @foreach ($vacunas as $vacuna)
                <option value="{{ $vacuna->id }}">{{ $vacuna->nombre }}</option>
                @endforeach
              </select>
            </div>
            <div>
              <x-input-label for="fecha_aplicacion" value="Fecha de aplicación" />
              <x-text-input id="fecha_aplicacion" name="fecha_aplicacion" type="date" class="mt-1 block w-full" />
            </div>
            <x-primary-button>Guardar</x-primary-button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>