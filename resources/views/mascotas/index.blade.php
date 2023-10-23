<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      Mis Mascotas
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <x-primary-button>
            <a href="{{ route('mascotas.create') }}">Crear mascota</a>
          </x-primary-button>
          <div class="relative overflow-x-auto pt-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">ID</th>
                  <th scope="col" class="px-6 py-3 ">Nombre</th>
                  <th scope="col" class="px-6 py-3">Especie</th>
                  <th scope="col" class="px-6 py-3">Fecha de nacimiento</th>
                  <th scope="col" class="px-6 py-3">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($mascotas as $mascota)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <td class="px-6 py-4">{{ $mascota->id }}</td>
                  <td class="px-6 py-4">{{ $mascota->nombre }}</td>
                  <td class="px-6 py-4">{{ $mascota->especie }}</td>
                  <td class="px-6 py-4">{{ $mascota->fecha_nacimiento }}</td>
                  <td class="px-6 py-4">
                    <x-secondary-button>
                      <a href="{{ route('mascotas.show', ['mascota' => $mascota]) }}">Ver</a>
                    </x-secondary-button>
                    <x-secondary-button>
                      <a href="{{ route('mascotas.edit', ['mascota' => $mascota]) }}">Editar</a>
                    </x-secondary-button>
                    <form class="inline-block" action="{{ route('mascotas.destroy', ['mascota' => $mascota]) }}"
                      method="POST">
                      @csrf
                      @method('DELETE')
                      <x-danger-button class="small">Eliminar</x-danger-button>
                    </form>
                  </td>
                </tr>
                @empty
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <td class="px-6 py-4" colspan="5">
                    <span class="font-bolder text-lg">No hay mascotas registradas</span>
                  </td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>