<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
    private $beerValidation = [
        'name' => 'required|max:50',
        'brand' => 'required|max:50',
        'graduation' => 'required|numeric',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();
        return view('beers.index', compact('beers'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate($this->beerValidation);
        $data = $request->all();
        $beer = new Beer;
        // $beer->name = $data["name"];
        // $beer->brand = $data["brand"];
        // $beer->graduation = $data["graduation"];
        $beer->fill($data);
        $name = $beer->name;
        $beer->save();

        $beer = Beer::orderBy('id', 'desc')->first();

        return redirect()->route('beers.show', $beer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Beer $beer)
    {
        // $beer = Beer::find($id);  findOrFail
        return view('beers.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('beers.edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $data = $request->all();
        $data = $request->validate($this->beerValidation);
        $name = $beer->name;
        $beer->update($data);
        return redirect()->route('beers.index')->with('message', 'la birra'. ' '.  $name .' '.  ' è stata aggiornata correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        $name = $beer->name;
        $beer->delete();
        return redirect()->route('beers.index')->with('message', 'la birra'. ' '.  $name .' '.  ' è stata cancellata correttamente');

    }
}
