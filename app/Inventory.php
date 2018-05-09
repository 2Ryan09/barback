<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    use SoftDeletes;

    /**
     * Change primary id
     *
     * @var barback id
     */
    protected $primaryKey = 'bbid';

    /**
     * Set to use barback_bws database
     *
     * @var barback_bws database
     **/
    protected $connection = 'inv';

    /**
     * Change table to be modeled
     *
     * @var table name
     **/
    protected $table = 'inventory';

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
}
