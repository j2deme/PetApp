<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      <a href="{{ route('mascotas.index') }}">&larr; Nueva Mascota</a>
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <form action="{{ route('mascotas.store') }}" method="POST" class="mt-6 space-y-6">
            @csrf
            <div>
              <x-input-label for="nombre" value="Nombre" />
              <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" />
            </div>
            <div>
              <x-input-label for="especie" value="Especie" />
              <x-text-input id="especie" name="especie" type="text" class="mt-1 block w-full" />
            </div>
            <div>
              <x-input-label for="fecha_nacimiento" value="Fecha de nacimiento" />
              <x-text-input id="fecha_nacimiento" name="fecha_nacimiento" type="date" class="mt-1 block w-full" />
            </div>
            <x-primary-button>Guardar</x-primary-button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>