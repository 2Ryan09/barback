<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bottle;
use App\Http\Resources\Bottle as BottleResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class BottleController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::channel('bottle')->info('Bottles shown.', ['user' => Auth::user()]);

        // Get articles
        return Bottle::paginate(15);
    }

    /**
     * Display the specified resource
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Log::channel('bottle')->info('Bottles shown.', ['user' => Auth::user()]);

        // Get a single bottle
        return Bottle::findOrFail($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Bottle::create($request->all());
    }

    /**
     * Get the bottle by searching name
     *
     * @param String $name
     * @return \Illuminate\Http\Response
     **/
    public function search($name)
    {
        $bottle = Bottle::where('name', 'LIKE', "%$name%")->orderBy('id')->first();

        $offering = $bottle->offering;

        return $bottle;
    }

    /**
     * Create new bottle entry
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        Log::channel('bottle')->info('Bottle created.', [
            'bottle' => $request->all(),
            'user' => Auth::user()
        ]);

        return Bottle::create($request->all());
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
        $bottle = bottle::find($id);
        $deleted = $bottle->delete();

        if ($deleted) {
            Log::channel('bottle')->info('Bottle deleted.', [
                'bottle' => $bottle,
                'user' => Auth::user()
            ]);

            return response()->json(['status' => 'success', 'message' => 'bottle_deleted']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'bottle_not_found', ], 422);
        }
    }
}
