<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HomeServices_Services;
use App\Models\User;
class Home_Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['first_name', 'last_name', 'User_Id','phoneNumber','email','res_date','price','status','comment','Home_Services_Id','HomeServicesName','code'];
    
    public function HomeServices_Services()
    {
        return $this->belongsTo(HomeServices_Services::class,'Home_Services_Id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
