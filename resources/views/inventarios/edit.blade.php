<x-app-layout>
    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-semibold leading-tight mb-4">Editar entrada de inventario</h2>
                    <form method="POST" action="{{ route('inventarios.update', $inventario->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <x-input-label for="producto_id" :value="__('Producto')" />
                            <x-select-input id="producto_id" class="block mt-1 w-full" name="producto_id" :value="old('producto_id')" required>
                                <option value="" disabled selected>{{ __('Selecciona un producto') }}</option>
                                @foreach ($productos as $producto)
                                    <option value="{{ $producto->id }}" {{ $inventario->producto_id == $producto->id ? 'selected' : '' }}>{{ $producto->nombre }}</option>
                                @endforeach
                            </x-select-input>
                            <x-input-error :messages="$errors->get('producto_id')" class="mt-2" />
                        </div> 
                        <div class="mb-4">
                            <x-input-label for="movimiento" :value="__('Movimiento')" />
                            <x-select-input id="movimiento" class="block mt-1 w-full" name="movimiento" :value="old('movimiento')" required>
                                <option value="" disabled selected>{{ __('Selecciona un movimiento') }}</option>
                                <option value="Entrada" {{ $inventario->movimiento == 'Entrada' ? 'selected' : '' }}>Entrada</option>
                                <option value="Salida" {{ $inventario->movimiento == 'Salida' ? 'selected' : '' }}>Salida</option>
                            </x-select-input>
                            <x-input-error :messages="$errors->get('movimiento')" class="mt-2" />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="motivo" :value="__('Motivo')" />
                            <x-text-input id="motivo" class="block mt-1 w-full" type="text" name="motivo" :value="old('motivo', $inventario->motivo)" required />
                            <x-input-error :messages="$errors->get('motivo')" class="mt-2" />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="cantidad" :value="__('Cantidad')" />
                            <x-text-input id="cantidad" class="block mt-1 w-full" type="number" step="1" name="cantidad" :value="old('cantidad', $inventario->cantidad)" required />
                            <x-input-error :messages="$errors->get('cantidad')" class="mt-2" />
                        </div>
                        <div class="flex justify-end">
                            <x-primary-button>
                                {{ __('Actualizar Entrada') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>