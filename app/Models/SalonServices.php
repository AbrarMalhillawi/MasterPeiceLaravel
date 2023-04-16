<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Salon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalonServices extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function Salon(){
        return $this->belongsTo(Salon::class);
    }

    protected $fillable = [
        'SalonId',
        'ServiceName',
        'ServiceDescription',
        'ServicePrice',
        'ServiceTime',
        'ServiceImage',

    ];
}
