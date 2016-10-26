<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelance extends Model
{
   // protected $table = 'freelances';
    protected $fillable = ['name', 'dni', 'location', 'country', 'birthdate', 'emails', 'phonenumbers', 'externallinks', 'languages', 'priceperhourmin', 'priceperhournormal','comments'];

    public function tecnologies()
    {
        return $this->belongsToMany('App\Tecnology')->withPivot('grade', 'experience');
    }
}
