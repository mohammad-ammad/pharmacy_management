<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relation with roles
    public function role()
    {
        return $this->belongsTo(Roles::class, 'role_id', 'role_id');
    }
    // Relation with products
    public function products()
    {
        return $this->hasMany(Product::class, 'product_id');
    }
    //relation with order table
    public function orders()
    {
        return $this->hasMany(Order::class, 'patient_id');
    }
    public function appointmentsAsDoctor()
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }
    public function appointmentsAsPatient()
    {
        return $this->hasMany(Appointment::class, 'patient_id');
    }
    public function doctorInfo()
    {
        return $this->hasOne(DoctorInfo::class);
    }
}


