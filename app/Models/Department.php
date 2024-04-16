<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cctv;

class Department extends Model
{
    use HasFactory;

    protected $fillable =[

        'name',
    ];


    public function cctv()
    {
        return $this->hasMany(Cctv::class, 'department_id', 'id');

    }
}
