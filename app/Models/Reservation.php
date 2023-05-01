<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SalonServices;
use App\Models\User;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = ['first_name', 'last_name', 'User_Id','phoneNumber','email','res_date','price','status','comment','Salon_Services_Id'];
   

    public function SalonServices()
    {
        return $this->belongsTo(SalonServices::class,'Salon_Services_Id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
