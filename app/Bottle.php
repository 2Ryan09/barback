<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bottle extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that aren't mass assignable
     *
     * @var array of attributes
     */
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array of attributes
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Get the offering associated with this bottle
     **/
    public function offering()
    {
        return $this->belongsTo('App\Offering');
    }

    /**
     * Get the location associated with this bottle
     **/
    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
