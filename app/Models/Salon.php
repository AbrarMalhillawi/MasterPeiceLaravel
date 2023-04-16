<?php

namespace App\Models;
use App\Models\SalonServices;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    use HasFactory;

    public function SalonServices(){
        return $this->hasMany(SalonServices::class);
    }

    protected $fillable = [
        'image',
        'name',
        'email',
        'phone',
        'desc',
        'work_hours',
        
    ];
}
