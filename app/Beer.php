<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
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
     * Create new beer entry
     *
     * @param Request $request
     * @return Response
     */
    public function userImport(Request $request)
    {
        // Validate request

        $beer = new beer;

        $beer->name = $request->name;
        $beer->origin = $request->origin;
        $beer->package = $request->package;
        $beer->unit_type = $request->unit_type;
        $beer->volume = $request->unit_volume;
        $beer->alcohol_content = $request->alcohol_content;
        $beer->sugar_content = $request->sugar_content;
        $beer->producer = $request->producer_name;
        $beer->release_date = $request->request_date;
        $beer->is_seasonal = $request->is_seasonal;
        $beer->is_kosher = $request->is_kosher;
        $beer->description = $request->description;
        $beer->pairing = $request->pairing;
        $beer->tasting_notes = $request->tasting_notes;
        $beer->img_url = $request->img_url;
        $beer->varietal = $request->varietal;
        $beer->style = $request->style;
        $beer->sku = $request->sku;

        $beer->save();
    }
}
