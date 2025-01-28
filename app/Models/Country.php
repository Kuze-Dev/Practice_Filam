<?php

namespace App\Models;

use App\Models\State;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Country extends Model
{
    //
    protected $fillable = ['name'];

    public function state(): HasOne
    {
        return $this->hasOne(State::class);
    }

    public function employees() :HasOne
    {
        return $this->hasOne(Employee::class);
    }

}
