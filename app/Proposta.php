<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{   
    protected $guarded = [];

    public function tags() {
        return $this->hasMany(Tag::class);
    }

    public function estudantes() {
        return $this->hasMany(Estudante::class);
    }
}
