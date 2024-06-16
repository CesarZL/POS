<?php

namespace App\Http\Controllers;

use App\Models\FormaDePago;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class FormaDePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formasdepago = FormaDePago::all();
        return view('forma-pago.index', [
            'formasdepago' => $formasdepago
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forma-pago.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required'
        ]);

        FormaDePago::create($request->all());

        return redirect()->route('forma-pago.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(FormaDePago $formaPago)
    {
        return view('forma-pago.show', compact('formaPago'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormaDePago $formaPago)
    {
        return view('forma-pago.edit', compact('formaPago'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormaDePago $formaPago)
    {
        $request->validate([
            'tipo' => 'required'
        ]);

        $formaPago->update($request->all());

        return redirect()->route('forma-pago.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormaDePago $formaPago)
    {
        $formaPago->delete();
        return redirect()->route('forma-pago.index');
    }
}
