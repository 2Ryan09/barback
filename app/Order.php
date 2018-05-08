<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    /**
     * Change table to be modeled
     *
     * @var table name
     **/
    protected $table = 'orders';

    /**
     * Set to use barback_bws database
     *
     * @var barback_bws database
     **/
    protected $connection = 'mysql';

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
