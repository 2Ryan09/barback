<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Spirit extends Model
{
	use SoftDeletes;

    /**
     * Change primary id
     *
     * @var barback id
     */
    protected $primaryKey = 'bbid';

    /**
     * The attributes that aren't mass assignable
     *
     * @var array of attributes
     */
    protected $guarded = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array of attributes
     */
    protected $dates = ['deleted_at'];


    /**
     * Create new spirit entry
     *
     * @param Request $request
     * @return Response
     */
    public function userImport(Request $request)
    {
        // Validate request

        $spirit = new spirit;

        $spirit->name = $request->name;
        $spirit->origin = $request->origin;
        $spirit->package = $request->package;
        $spirit->unit_type = $request->unit_type;
        $spirit->volume = $request->unit_volume;
        $spirit->alcohol_content = $request->alcohol_content;
        $spirit->sugar_content = $request->sugar_content;
        $spirit->producer = $request->producer_name;
        $spirit->release_date = $request->request_date;
        $spirit->is_seasonal = $request->is_seasonal;
        $spirit->is_kosher = $request->is_kosher;
        $spirit->description = $request->description;
        $spirit->pairing = $request->pairing;
        $spirit->tasting_notes = $request->tasting_notes;
        $spirit->img_url = $request->img_url;
        $spirit->varietal = $request->varietal;
        $spirit->style = $request->style;
        $spirit->sku = $request->sku;

        $spirit->save();
    }
