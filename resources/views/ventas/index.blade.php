{{-- $table->foreignId('vendedor_id')->constrained('vendedores')->onDelete('cascade');
$table->foreignId('producto_id')->constrained()->onDelete('cascade');
$table->foreignId('categoria_id')->constrained()->onDelete('cascade');
$table->foreignId('cliente_id')->constrained()->onDelete('cascade');
$table->date('Fecha de venta');
$table->foreignId('pago_id')->constrained('forma_de_pago')->onDelete('cascade');
$table->decimal('Cambio', 8, 2);
$table->decimal('Subtotal', 8, 2);
$table->decimal('IVA', 8, 2);
$table->decimal('Total', 8, 2);
$table->timestamps(); --}}

<x-app-layout>
    <div class="py-12">
        <div class="max-w-full px-10 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-semibold leading-tight">Vendedores</h2>
                        <a href="{{ route('vendedores.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Nuevo vendendor
                        </a>
                    </div>
                    <div class=" overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vendedor</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Producto</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Categoría</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cliente</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha de venta</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Forma de pago</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cambio</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subtotal</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">IVA</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                    <th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">Vendedor</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Producto</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Categoría</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Cliente</td>
                                    <td class="px-6 py-4 whitespace-nowrap">00/00/0000</td>
                                    <td class="px-6 py-4 whitespace-nowrap">00/00/0000</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Cambio</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Subtotal</td>
                                    <td class="px-6 py-4 whitespace-nowrap">IVA</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Total</td>
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