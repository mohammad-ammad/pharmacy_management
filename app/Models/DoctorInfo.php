<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorInfo extends Model
{
    use HasFactory;
    protected $table = 'doctor_info';
    protected $fillable = [
        'user_id',
        'doctor_reg_id',
        'licence',
    ];
    //Relation with users table 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
