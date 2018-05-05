<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WineController extends Controller
{
    /**
     * Create new wine entry
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate request

        $wine = new Wine;

        $wine->name = $request->name;
        $wine->origin = $request->origin;
        $wine->package = $request->package;
        $wine->unit_type = $request->unit_type;
        $wine->volume = $request->unit_volume;
        $wine->alcohol_content = $request->alcohol_content;
        $wine->sugar_content = $request->sugar_content;
        $wine->producer = $request->producer_name;
        $wine->release_date = $request->request_date;
        $wine->is_seasonal = $request->is_seasonal;
        $wine->is_kosher = $request->is_kosher;
        $wine->description = $request->description;
        $wine->pairing = $request->pairing;
        $wine->tasting_notes = $request->tasting_notes;
        $wine->img_url = $request->img_url;
        $wine->varietal = $request->varietal;
        $wine->style = $request->style;
        $wine->sku = $request->sku;

        $wine->save();
    }
}
