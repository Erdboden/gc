<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function domains()
    {
        return $this->belongsToMany(Domain::class);
    }
}
