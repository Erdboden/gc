<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    public $table = "domains";

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}
