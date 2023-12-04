<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreCollectiveRequest;
use App\Http\Requests\UpdateCollectiveRequest;
use App\Models\Collective;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CollectiveResource;
use App\Http\Resources\V1\CollectiveCollection;
use Illuminate\Http\Request;
use App\Filters\V1\CollectiveFilter;

class CollectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new CollectiveFilter();
        $queryItems = $filter->transform($request); // [['column, 'operator', 'value']]

        if (count($queryItems) == 0) {
            return new CollectiveCollection(Collective::all());
        } else {
            return new CollectiveCollection(Collective::where($queryItems)->get());
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
    public function store(StoreCollectiveRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Collective $collective)
    {
        return new CollectiveResource($collective);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collective $collective)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCollectiveRequest $request, Collective $collective)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collective $collective)
    {
        //
    }
}
