<?php

namespace FXM\Entities;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    protected $fillable = ['reason', 'command', 'executed_at'];

    protected $dates = ['executed_at'];

    public function server()
    {
        return $this->belongsTo(Server::class);
    }
}
