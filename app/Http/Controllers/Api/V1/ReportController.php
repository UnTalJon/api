<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use App\Models\Report;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ReportResource;
use App\Http\Resources\V1\ReportCollection;
use Illuminate\Http\Request;
use App\Filters\V1\ReportFilter;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ReportFilter();
        $queryItems = $filter->transform($request); // [['column, 'operator', 'value']]

        if (count($queryItems) == 0) {
            return new ReportCollection(Report::all());
        } else {
            return new ReportCollection(Report::where($queryItems)->get());
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
    public function store(StoreReportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        return new ReportResource($report);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
