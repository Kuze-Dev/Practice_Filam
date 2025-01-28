<?php

namespace App\Models;

use App\Models\City;
use App\Models\Country;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class State extends Model
{
    //
    protected $fillable = ['country_id',
                            'name'];


    public function country():BelongsTo
    {
        return $this->belongsTo(Country::class);

    }

    public function employee():HasOne
    {
        return $this->hasOne(Employee::class);
    }

    public function city():HasOne
    {
        return $this->hasOne(City::class);
    }


}
