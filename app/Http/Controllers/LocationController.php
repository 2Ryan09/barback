<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Location;
use App\Http\Resources\Location as LocationResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::channel('location')->info('Locations shown.', ['user' => Auth::user()]);

        // Get articles
        return Location::all();
    }

    /**
     * Display the specified resource
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Log::channel('location')->info('Location shown.', ['user' => Auth::user(), 'id' => $id]);

        // Get a single location
        $location = Location::findOrFail($id);

        // Return the single location as a resource
        return new LocationCollection($location);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Location::create($request->all());
    }

    /**
     * Create new offering entry
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        Log::channel('location')->info('Location created.', [
            'location' => $request->all(),
            'user' => Auth::user()
        ]);

        return Location::create($request->all());
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
        $location = Location::find($id);
        $deleted = $location->delete();

        if ($deleted) {
            Log::channel('location')->info('Location deleted.', [
                'location' => $location,
                'user' => Auth::user()
            ]);

            return response()->json(['status' => 'success', 'message' => 'location_deleted']);
        } else {
            return response()->json(['status' => 'error',
                'message' => 'location_not_found', ], 422);
        }
    }
}
