<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable = ['salary_amount', 'daily_hours', 'days_per_week'];
}
