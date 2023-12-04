<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreFindRequest;
use App\Http\Requests\UpdateFindRequest;
use App\Models\Find;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\FindResource;
use App\Http\Resources\V1\FindCollection;
use Illuminate\Http\Request;
use App\Filters\V1\FindFilter;

class FindController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new FindFilter();
        $queryItems = $filter->transform($request); // [['column, 'operator', 'value']]

        if (count($queryItems) == 0) {
            return new FindCollection(Find::all());
        } else {
            return new FindCollection(Find::where($queryItems)->get());
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
    public function store(StoreFindRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Find $find)
    {
        return new FindResource($find);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Find $find)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFindRequest $request, Find $find)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Find $find)
    {
        //
    }
}
