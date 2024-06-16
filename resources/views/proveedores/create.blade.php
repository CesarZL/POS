<x-app-layout>
    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-semibold leading-tight mb-4">Crear proveedor</h2>
                    <form method="POST" action="{{ route('proveedores.store') }}">
                        @csrf
                        <div class="mb-4">
                            <x-input-label for="nombre" :value="__('Nombre')" />
                            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus />
                            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                        </div>
                        
                        <div class="mb-4">
                            <x-input-label for="nombre_contacto" :value="__('Nombre de contacto')" />
                            <x-text-input id="nombre_contacto" class="block mt-1 w-full" type="text" name="nombre_contacto" :value="old('nombre_contacto')" required />
                            <x-input-error :messages="$errors->get('nombre_contacto')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="correo" :value="__('Correo electrónico')" />
                            <x-text-input id="correo" class="block mt-1 w-full" type="email" name="correo" :value="old('correo')" required />
                            <x-input-error :messages="$errors->get('correo')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="telefono" :value="__('Teléfono')" />
                            <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required />
                            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                        </div>
                       
                        <div class="flex justify-end">
                            <x-primary-button>
                                {{ __('Crear proveedor') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>