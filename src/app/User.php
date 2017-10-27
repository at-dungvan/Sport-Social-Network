<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use Notifiable;

    const ITEMS_PER_PAGE =10;
    const ADMIN_USER = 1;
    const REGULAR_USER = 0;
    const MALE = 1;
    const FEMALE = 0;
    const STR_MALE = 'male';
    const STR_FEMALE = 'female';

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'is_admin',
        'phone',
        'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        return $this->is_admin === User::ADMIN_USER;
    }

    public function setGenderAttribute($gender)
    {
        return $gender == User::STR_FEMALE ? User::FEMALE : User::MALE;
    }

    public function getGenderAttribute($gender)
    {
        return $gender == User::MALE ? User::STR_MALE : User::STR_FEMALE;
    }
}
