<x-app-layout>
    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-semibold leading-tight mb-4">Crear producto</h2>
                    <form method="POST" action="{{ route('productos.store') }}">
                        @csrf
                        <div class="mb-4">
                            <x-input-label for="nombre" :value="__('Nombre')" />
                            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus />
                            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="categoria_id" :value="__('Categoría')" />
                            <x-select-input id="categoria_id" class="block mt-1 w-full" name="categoria_id" :value="old('categoria_id')" required>
                                <option value="" disabled selected>{{ __('Selecciona una categoría') }}</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                @endforeach
                            </x-select-input>
                            <x-input-error :messages="$errors->get('categoria_id')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="precio_venta" :value="__('Precio de venta')" />
                            <x-text-input id="precio_venta" class="block mt-1 w-full" type="number" name="precio_venta" :value="old('precio_venta')" required />
                            <x-input-error :messages="$errors->get('precio_venta')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="precio_compra" :value="__('Precio de compra')" />
                            <x-text-input id="precio_compra" class="block mt-1 w-full" type="number" name="precio_compra" :value="old('precio_compra')" required />
                            <x-input-error :messages="$errors->get('precio_compra')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="color" :value="__('Color')" />
                            <x-text-input id="color" class="block mt-1 w-full" type="text" name="color" :value="old('color')" required />
                            <x-input-error :messages="$errors->get('color')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="descripcion_corta" :value="__('Descripción corta')" />
                            <x-textarea-input id="descripcion_corta" class="block mt-1 w-full" name="descripcion_corta" :value="old('descripcion_corta')" required />
                            <x-input-error :messages="$errors->get('descripcion_corta')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="descripcion_larga" :value="__('Descripción larga')" />
                            <x-textarea-input id="descripcion_larga" class="block mt-1 w-full" name="descripcion_larga" :value="old('descripcion_larga')" required />
                            <x-input-error :messages="$errors->get('descripcion_larga')" class="mt-2" />
                        </div>

                        <div class="flex justify-end">
                            <x-primary-button>
                                {{ __('Crear producto') }}
                            </x-primary-button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>