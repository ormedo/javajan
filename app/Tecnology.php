<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnology extends Model
{
    protected $fillable = ['name', 'active'];
    public function freelances()
    {
        return $this->belongsToMany('App\Freelance')->withPivot('grade', 'experience');
    }
}
