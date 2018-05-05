<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Extraneous extends Model
{
	use SoftDeletes;

	/**
	 * The table associated with the model
	 *
	 * @var string
	 */
	protected $table = 'Extraneous';
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
     * Create new extraneous entry
     *
     * @param Request $request
     * @return Response
     */
    public function userImport(Request $request)
    {
        // Validate request

        $extraneous = new extraneous;

        $extraneous->name = $request->name;
        $extraneous->origin = $request->origin;
        $extraneous->package = $request->package;
        $extraneous->unit_type = $request->unit_type;
        $extraneous->volume = $request->unit_volume;
        $extraneous->alcohol_content = $request->alcohol_content;
        $extraneous->sugar_content = $request->sugar_content;
        $extraneous->producer = $request->producer_name;
        $extraneous->release_date = $request->request_date;
        $extraneous->is_seasonal = $request->is_seasonal;
        $extraneous->is_kosher = $request->is_kosher;
        $extraneous->description = $request->description;
        $extraneous->pairing = $request->pairing;
        $extraneous->tasting_notes = $request->tasting_notes;
        $extraneous->img_url = $request->img_url;
        $extraneous->varietal = $request->varietal;
        $extraneous->style = $request->style;
        $extraneous->sku = $request->sku;

        $extraneous->save();
    }
}
