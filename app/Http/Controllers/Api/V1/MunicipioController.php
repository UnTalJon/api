<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreMunicipioRequest;
use App\Http\Requests\UpdateMunicipioRequest;
use App\Models\Municipio;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\MunicipioResource;
use App\Http\Resources\V1\MunicipioCollection;
use Illuminate\Http\Request;
use App\Filters\V1\MunicipioFilter;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new MunicipioFilter();
        $queryItems = $filter->transform($request); // [['column, 'operator', 'value']]

        if (count($queryItems) == 0) {
            return new MunicipioCollection(Municipio::all());
        } else {
            return new MunicipioCollection(Municipio::where($queryItems)->get());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMunicipioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Municipio $municipio)
    {
        return new MunicipioResource($municipio);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Municipio $municipio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMunicipioRequest $request, Municipio $municipio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Municipio $municipio)
    {
        //
    }
}
