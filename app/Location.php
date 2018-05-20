<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

class Location extends Model
{
    use SoftDeletes;
    use NodeTrait;
    
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
     * Get the offering associated with this product
     **/
    public function offering()
    {
        return $this->hasMany('App\Bottle');
    }
}
