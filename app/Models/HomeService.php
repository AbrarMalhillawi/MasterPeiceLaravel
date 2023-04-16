<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HomeServices_Services;
class HomeService extends Model
{
    
    use HasFactory;

    public function HomeServices_Services(){
        return $this->hasMany(HomeServices_Services::class);
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
