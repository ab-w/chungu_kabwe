<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cctv extends Model
{
    use HasFactory;

    protected $fillable = [

        'cctv',
        'biometric',
        'working_well',
        'faulty',
        'biometric',
        'date_installed',
        'last_maintenance',
        'department_id',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
