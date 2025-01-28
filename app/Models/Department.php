<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Department extends Model
{
    //

    protected $fillable=[
        'name'
    ];

    public function employee():HasOne
    {
        return $this->hasOne(Employee::class);
    }
}
