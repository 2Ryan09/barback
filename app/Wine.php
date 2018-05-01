<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wine extends Model
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
     * Create new wine entry
     *
     * @param Request $request
     * @return Response
     */
    public function userImport(Request $request)
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
