{{-- $table->foreignId('proveedor_id')->constrained('proveedores')->onDelete('cascade'); // Nombre explícito de la tabla
$table->foreignId('producto_id')->constrained()->onDelete('cascade');
$table->integer('cantidad');
$table->decimal('precio', 8, 2);
$table->date('fecha_compra');
$table->decimal('descuento', 8, 2)->nullable();
$table->timestamps(); --}}

<x-app-layout>
    <div class="py-12">
        <div class="max-w-full px-10 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-semibold leading-tight">Compras</h2>
                        <a href="{{ route('compras.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Nueva compra
                        </a>
                    </div>
                    <div class=" overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Proveedor</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Producto</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cantidad</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Precio</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha de compra</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descuento</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">Proveedor</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Producto</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Cantidad</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Precio</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Fecha de compra</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Descuento</td>
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
    </div>
</x-app-layout>
