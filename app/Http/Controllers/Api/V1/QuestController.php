<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreQuestRequest;
use App\Http\Requests\UpdateQuestRequest;
use App\Models\Quest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\QuestResource;
use App\Http\Resources\V1\QuestCollection;
use Illuminate\Http\Request;
use App\Filters\V1\QuestFilter;

class QuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new QuestFilter();
        $queryItems = $filter->transform($request); // [['column, 'operator', 'value']]

        if (count($queryItems) == 0) {
            return new QuestCollection(Quest::all());
        } else {
            return new QuestCollection(Quest::where($queryItems)->get());
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
    public function store(StoreQuestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Quest $quest)
    {
        return new QuestResource($quest);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quest $quest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestRequest $request, Quest $quest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quest $quest)
    {
        //
    }
}
