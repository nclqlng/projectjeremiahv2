<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Counselor extends Model
{
    use HasFactory;
    //
    protected $guarded = [];

    public function schedules()
    {
        return $this->hasMany(CounselorSchedule::class);
    }
}
