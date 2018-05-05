<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NonAlcoholic extends Model
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
     * Create new Non-Alcholic entry
     *
     * @param Request $request
     * @return Response
     */
    public function userImport(Request $request)
    {
        // Validate request

        $nonAlc = new nonAlc;

        $nonAlc->name = $request->name;
        $nonAlc->origin = $request->origin;
        $nonAlc->package = $request->package;
        $nonAlc->unit_type = $request->unit_type;
        $nonAlc->volume = $request->unit_volume;
        $nonAlc->alcohol_content = $request->alcohol_content;
        $nonAlc->sugar_content = $request->sugar_content;
        $nonAlc->producer = $request->producer_name;
        $nonAlc->release_date = $request->request_date;
        $nonAlc->is_seasonal = $request->is_seasonal;
        $nonAlc->is_kosher = $request->is_kosher;
        $nonAlc->description = $request->description;
        $nonAlc->pairing = $request->pairing;
        $nonAlc->tasting_notes = $request->tasting_notes;
        $nonAlc->img_url = $request->img_url;
        $nonAlc->varietal = $request->varietal;
        $nonAlc->style = $request->style;
        $nonAlc->sku = $request->sku;

        $nonAlc->save();
    }
}
