<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bottle;
use App\Http\Resources\BottleCollection;

class BottleController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get bottles
        $bottles = Bottle::paginate(20);

        // Return collection of bottles as a resource
        return BottleCollection::collection($bottles);
    }
    /**
     * Display the specified resource
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get a single bottle
        $bottle = Bottle::findOrFail($id);

        // Return the single bottle as a resource
        return new BottleCollection($bottle);
    }

    /**
     * Create new bottle entry
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate request

        // Create new bottle instance
        $bottle = new Bottle;

        // Assign all attributes
        $bottle->name = $request->name;
        $bottle->origin = $request->origin;
        $bottle->package = $request->package;
        $bottle->unit_type = $request->unit_type;
        $bottle->volume = $request->unit_volume;
        $bottle->alcohol_content = $request->alcohol_content;
        $bottle->sugar_content = $request->sugar_content;
        $bottle->producer = $request->producer_name;
        $bottle->release_date = $request->request_date;
        $bottle->is_seasonal = $request->is_seasonal;
        $bottle->is_kosher = $request->is_kosher;
        $bottle->description = $request->description;
        $bottle->pairing = $request->pairing;
        $bottle->tasting_notes = $request->tasting_notes;
        $bottle->img_url = $request->img_url;
        $bottle->varietal = $request->varietal;
        $bottle->style = $request->style;
        $bottle->sku = $request->sku;

        // Save bottle to database
        $bottle->save();
    }
}