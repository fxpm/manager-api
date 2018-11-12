<?php

namespace FXM\Entities;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = ['type', 'reason', 'executed_at'];

    protected $dates = ['executed_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
