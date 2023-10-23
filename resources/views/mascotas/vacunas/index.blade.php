<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      <a href="{{ route('mascotas.show', ['mascota' => $mascota]) }}">&larr; Vacunas de {{ $mascota->nombre }}</a>
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <x-primary-button class="float-right">
            <a href="{{ route('mascotas.vacunas.create', ['mascota' => $mascota]) }}">Agregar vacuna</a>
          </x-primary-button>
          <div class="relative overflow-x-auto pt-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">ID</th>
                  <th scope="col" class="px-6 py-3 ">Nombre</th>
                  <th scope="col" class="px-6 py-3">Fecha de aplicación</th>
                  <th scope="col" class="px-6 py-3">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($mascota->vacunas as $vacuna)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <td class="px-6 py-4">{{ $vacuna->id }}</td>
                  <td class="px-6 py-4">{{ $vacuna->nombre }}</td>
                  <td class="px-6 py-4">{{ $vacuna->pivot->fecha_aplicacion }}</td>
                  <td class="px-6 py-4">
                    <form class="inline-block"
                      action="{{ route('mascotas.vacunas.destroy', ['mascota'=> $mascota, 'vacuna' => $vacuna]) }}"
                      method="POST">
                      @csrf
                      @method('DELETE')
                      <x-danger-button class="small">Eliminar</x-danger-button>
                    </form>
                  </td>
                </tr>
                @empty
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <td class="px-6 py-4" colspan="4">
                    <span class="font-bolder text-lg">No hay vacunas registradas</span>
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