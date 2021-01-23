<?php

/*
    Proučite u ovom dokumentu sljedeće:
    1. kako su definirane 1 to many veze
    2. kako su definirane many to many veze
    3. proučiti https://laravel.com/docs/8.x/eloquent-relationships
       koji objašnjava detaljnije kako se definiraju veze.
*/

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Enums\RoleEnum;

class User extends Authenticatable
{
    // HasFactory,
    use Notifiable;

    /*
        Atributi kod kojih je dozvoljen INSERT
    */
    protected $fillable = [
        'name',
        'email',
        'password',
        'county_id',
        'role_id'
    ];

    /*
        Nikada nemoj poslati na frontend sljedeće atribute (kolone)
    */
    protected $hidden = [
        'password'
    ];

    /*
        Definiranje svih one to many veza:
    */
    public function role() { return $this->belongsTo(Role::class); }

    public function county() { return $this->belongsTo(County::class); }

    /* authorization */
    public function isAdmin() { return $this->role_id === RoleEnum::ADMIN; } // RoleEnum::ADMIN je 1
    public function isUser() { return $this->role_id === RoleEnum::USER; } // RoleEnum::USER je 2
    public function isGuest() { return $this->role_id === RoleEnum::GUEST; } // RoleEnum::GUEST je 3

}