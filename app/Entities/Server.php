<?php

namespace FXM\Entities;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $fillable = ['name', 'description', 'hostname', 'ip_address'];

    public function commands()
    {
        return $this->hasOne(Command::class);
    }
}
