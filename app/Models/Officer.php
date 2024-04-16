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

        public function officer()
        {
            return $this->hasMany(Officer::class, 'officer_id', 'id');
        }

}
