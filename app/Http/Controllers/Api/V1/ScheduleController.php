<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Models\Schedule;
use App\Models\Person;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ScheduleResource;
use App\Http\Resources\V1\ScheduleCollection;
use Illuminate\Http\Request;
use App\Filters\V1\ScheduleFilter;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $filter = new ScheduleFilter();
        $filterItems = $filter->transform($request); // [['column, 'operator', 'value']]

        $detail = $request->query('detail');

        $schedules = Schedule::where($filterItems);

        if ($detail) {
            $schedules = $schedules->with(['persons', 'municipios']);
        }

        return new ScheduleCollection($schedules->get());
        
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
    public function store(StoreScheduleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        return new ScheduleResource($schedule);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
