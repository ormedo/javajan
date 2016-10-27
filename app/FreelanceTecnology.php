<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class FreelanceTecnology extends Model
{
    protected $table="freelance_tecnology";
    protected $fillable = ['grade', 'experience'];
}
