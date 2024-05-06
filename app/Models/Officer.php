<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Occurrence;

class Officer extends Model
{
    use HasFactory;


        protected $fillable = [
            'name',
            'office_type',
            'address',
            'phone_number',
            'image',
            'badge_number',
            // Add other fields as needed
        ];
        public function occurrence()
        {
            return $this->hasMany(Occurrence::class, 'officer_id', 'id');
        }

        public function rapid()
        {
            return $this->hasMany(Rapid::class, 'officer_id', 'id');
        }

}
