<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Senior extends Model
{
    protected $fillable = [
        'name', 'age', 'hobby', 'need_person', 'message', 'img_name', 'public_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
