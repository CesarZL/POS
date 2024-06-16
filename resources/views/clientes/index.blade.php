{{-- $table->string('nombre');
$table->string('correo');
$table->string('telefono');
$table->string('direccion');
$table->string('rfc');
$table->string('razon_social');
$table->string('cp');
$table->string('regimen_fiscal');
$table->timestamps(); --}}

<x-app-layout>
    <div class="py-12">
        <div class="max-w-full px-10 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-semibold leading-tight">Clientes</h2>
                        <a href="{{ route('categorias.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Nuevo cliente
                        </a>
                    </div>
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                                <th class="w-1/6 px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Correo</th>
                                <th class="w-1/6 px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Telefono</th>
                                <th class="w-1/6 px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Direccion</th>
                                <th class="w-1/6 px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">RFC</th>
                                <th class="w-1/6 px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Razon Social</th>
                                <th class="w-1/6 px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">CP</th>
                                <th class="w-1/6 px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Regimen Fiscal</th>
                                <th class="w-1/6 px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">Nombre de cliente</td>
                                <td class="px-6 py-4 whitespace-nowrap">Correo de cliente</td>
                                <td class="px-6 py-4 whitespace-nowrap">Telefono de cliente</td>
                                <td class="px-6 py-4 whitespace-nowrap">Direccion de cliente</td>
                                <td class="px-6 py-4 whitespace-nowrap">0000000000000</td>
                                <td class="px-6 py-4 whitespace-nowrap">Razon Social de cliente</td>
                                <td class="px-6 py-4 whitespace-nowrap">87070</td>
                                <td class="px-6 py-4 whitespace-nowrap">Regimen Fiscal de cliente</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="" class="text-blue-600 hover:text-blue-900">Ver</a>
                                    <a href="" class="text-yellow-600 hover:text-yellow-900 ml-4">Editar</a>
                                    <form action="" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>