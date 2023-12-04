<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreLogRequest;
use App\Http\Requests\UpdateLogRequest;
use App\Models\Log;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\LogResource;
use App\Http\Resources\V1\LogCollection;
use Illuminate\Http\Request;
use App\Filters\V1\LogFilter;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new LogFilter();
        $queryItems = $filter->transform($request); // [['column, 'operator', 'value']]

        if (count($queryItems) == 0) {
            return new LogCollection(Log::all());
        } else {
            return new LogCollection(Log::where($queryItems)->get());
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
    public function store(StoreLogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Log $log)
    {
        return new LogResource($log);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Log $log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLogRequest $request, Log $log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Log $log)
    {
        //
    }
}
