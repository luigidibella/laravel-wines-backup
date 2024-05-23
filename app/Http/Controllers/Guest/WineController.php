<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wine;
use App\Functions\Helper as Help;
use App\Http\Requests\WineRequest;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wines = Wine::orderByDesc('id')->get();
        return view('wines.index', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WineRequest $request)
    {
        $form_data = $request->all();
        $form_data['slug'] = Help::generateSlug($form_data['wine'], new Wine());

        $new_wine = new Wine();
        $new_wine->fill($form_data);
        /* dd($new_wine); */
        $new_wine->save();

        return redirect()->route('wines.index', $new_wine);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
