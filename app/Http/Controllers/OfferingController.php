<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Offering;
use App\Http\Resources\Offering as OfferingResource;
use Illuminate\Support\Facades\DB;

class OfferingController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get articles
        return Offering::paginate(15);
    }

    /**
     * Display the specified resource
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get a single offering
        $offering = Offering::findOrFail($id);

        // Return the single offering as a resource
        return new OfferingCollection($offering);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Offering::create($request->all());
    }

    /**
     * Create new offering entry
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        return Offering::create($request->all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offering = Offering::find($id);
        $deleted = $offering->delete();

        if ($deleted) {
            return response()->json(['status' => 'success', 'message' => 'offering_deleted']);
        } else {
            return response()->json(['status' => 'error',
                'message' => 'offering_not_found', ], 422);
        }
    }
}