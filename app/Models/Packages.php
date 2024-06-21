<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    protected $table = 'packages';

    protected $guarded = [
        'id',
    ];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function images() {
        return $this->hasMany(Images::class, 'id_package');
    }

    public function Booking() {
        return $this->hasMany(Booing::class, 'id_package');
    }
}
