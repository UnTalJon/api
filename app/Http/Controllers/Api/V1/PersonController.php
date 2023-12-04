<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use App\Models\Person;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PersonResource;
use App\Http\Resources\V1\PersonCollection;
use Illuminate\Http\Request;
use App\Filters\V1\PersonFilter;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new PersonFilter();
        $filterItems = $filter->transform($request); // [['column, 'operator', 'value']]

        $detail = $request->query('detail');

        $persons = Person::where($filterItems);

        if ($detail) {
            $persons = $persons->with('schedules');
        }

        return new PersonCollection($persons->get());
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
    public function store(StorePersonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        return new PersonResource($person);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonRequest $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
    }
}
