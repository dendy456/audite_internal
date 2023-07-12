<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    public function isAdmin()
    {
    return $this->role_user == 'ADMIN';
    }
    public function isAuditee()
    {
    return $this->role_user == 'AUDITEE';
    }
    public function isAuditor()
    {
    return $this->role_user == 'AUDITOR';
    }


    public function admin()
    {
        return $this->hasOne(Admin::class, 'id_user');
    }
    public function ketuaAuditor()
    {
        return $this->hasMany(KetuaAuditor::class, 'id_user');
    }
    public function auditor()
    {
        return $this->hasOne(Auditor::class, 'id_user');
    }
    public function auditee()
    {
        return $this->hasOne(Auditee::class, 'id_user');
    }
    
    // public function sampah()
    // {
    //     return $this->hasMany(Sampah::class, 'id_user');
    // }
    protected $fillable = [
        'username',
        'email',
        'no_telp',
        'role_user',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
