<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shop';

    public function postcode() {
        return $this->hasMany('App\Models\Postcode');
    }
}
