<?php

namespace App\Models;

use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'date_of_birth',
        'date_hired',
        'email',
        'zip_code',
        'address',
        'country_id',
        'state_id',
        'city_id',
        'department_id',
    ];

    public function country():BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function state():BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function city():BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function department():BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
