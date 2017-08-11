<?php

namespace Tyondo\Career\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(config('tcareer.namespace').'User');
    }
}
