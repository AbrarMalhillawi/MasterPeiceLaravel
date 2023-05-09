<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HomeService;
use App\Models\Home_Reservation;

class HomeServices_Services extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function HomeService(){

        return $this->belongsTo(HomeService::class);
    }

    
    public function HomeReservation(){
        return $this->hasMany(Home_Reservation::class);
    }
    protected $fillable = [
        'HomeServicesId',
        'ServiceName',
        'ServiceDescription',
        'ServicePrice',
        'ServiceTime',
        'ServiceImage',

    ];
}
