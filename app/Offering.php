<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offering extends Model
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
     * Get the product associated with this offering
     **/
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    /**
     * Get the bottles associated with this offering
     **/
    public function bottles()
    {
        return $this->hasMany('App\Bottle');
    }
}
