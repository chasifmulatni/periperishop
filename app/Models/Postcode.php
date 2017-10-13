<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postcode extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'postcode';

    public function shop() {
        return $this->belongsTo('App\Models\Shop');
    }
}
