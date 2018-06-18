<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Offering;
use App\Product;
use App\Http\Resources\Offering as OfferingResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class OfferingController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::channel('offering')->info('Offerings shown.', ['user' => Auth::user()]);

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
        Log::channel('offering')->info('Offering shown.', ['user' => Auth::user()]);

        // Get a single offering
        return Offering::findOrFail($id);
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
     * Get the offering by searching name
     *
     * @param String $name
     * @return \Illuminate\Http\Response
     **/
    public function search($name)
    {
        $product = Product::where('name', 'LIKE', "%$name%")->first();

        $offering = $product->offering;

        return $product;
    }

    /**
     * Create new offering entry
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        Log::channel('offering')->info('Offering created.', [
            'offering' => $request->all(),
            'user' => Auth::user()
        ]);

        $offering = Product::show($request->id);

        Mail::to(User::find(1))->send(new NewOffering($offering);

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
            Log::channel('offering')->info('Offering deleted.', [
                'offering' => $offering,
                'user' => Auth::user()
            ]);

            return response()->json(['status' => 'success', 'message' => 'offering_deleted']);
        } else {
            return response()->json(['status' => 'error',
                'message' => 'offering_not_found', ], 422);
        }
    }

    /**
     * Get bottles associated with offering
     *
     * @return \Illuminate\Http\Response
     */
    public function getBottles($id)
    {
        $offering = Offering::find($id);
        return $offering->bottles;
    }
}
