<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HomeService;

class HomeServices_Services extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function HomeService(){

        return $this->belongsTo(HomeService::class);
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
