<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/productos', function () {
        return view('productos.index');
    })->name('productos.index');

    Route::get('/categorias', function () {
        return view('categorias.index');
    })->name('categorias.index');

    Route::get('/ventas', function () {
        return view('ventas.index');
    })->name('ventas.index');

    Route::get('/inventarios', function () {
        return view('inventarios.index');
    })->name('inventarios.index');

    Route::get('/clientes', function () {
        return view('clientes.index');
    })->name('clientes.index');

    Route::get('/compras', function () {
        return view('compras.index');
    })->name('compras.index');

    Route::get('/proveedores', function () {
        return view('proveedores.index');
    })->name('proveedores.index');

    Route::get('/forma-pago', function () {
        return view('forma-pago.index');
    })->name('forma-pago.index');

    Route::get('/vendedores', function () {
        return view('vendedores.index');
    })->name('vendedores.index');

    Route::get('/cotizaciones', function () {
        return view('cotizaciones.index');
    })->name('cotizaciones.index');
    Route::get('/productos/create', function () {
        return view('productos.create');
    })->name('productos.create');

    Route::get('/categorias/create', function () {
        return view('categorias.create');
    })->name('categorias.create');

    Route::get('/ventas/create', function () {
        return view('ventas.create');
    })->name('ventas.create');

    Route::get('/inventarios/create', function () {
        return view('inventarios.create');
    })->name('inventarios.create');

    Route::get('/clientes/create', function () {
        return view('clientes.create');
    })->name('clientes.create');

    Route::get('/compras/create', function () {
        return view('compras.create');
    })->name('compras.create');

    Route::get('/proveedores/create', function () {
        return view('proveedores.create');
    })->name('proveedores.create');

    Route::get('/forma-pago/create', function () {
        return view('forma-pago.create');
    })->name('forma-pago.create');

    Route::get('/vendedores/create', function () {
        return view('vendedores.create');
    })->name('vendedores.create');

    Route::get('/cotizaciones/create', function () {
        return view('cotizaciones.create');
    })->name('cotizaciones.create');

    
});

require __DIR__.'/auth.php';
