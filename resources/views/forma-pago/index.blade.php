{{-- 
    $table->string('tipo');
    $table->timestamps();
}); --}}

<x-app-layout>
    <div class="py-12">
        <div class="max-w-full px-10 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-semibold leading-tight">Formas de pago</h2>
                        <a href="{{ route('forma-pago.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Nueva forma de pago
                        </a>
                    </div>
                    <div class=" overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipo</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha de creación</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha de actualización</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($formasdepago as $formadepago)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $formadepago->tipo }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $formadepago->created_at }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $formadepago->updated_at }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a class="text-blue-600 hover:text-blue-900" href="{{ route('forma-pago.show', $formadepago->id) }}">Ver</a>
                                            <a class="text-yellow-600 hover:text-yellow-900 ml-4" href="{{ route('forma-pago.edit', $formadepago->id) }}">Editar</a>
                                            <form method="POST" class="inline" action="{{ route('forma-pago.destroy', $formadepago->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
