<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['password'];

    /**
     * Get the route key name for Laravel.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'username';
    }

    // Define role constants
    const ROLE_ADMIN = 'admin';
    const ROLE_GUDANG = 'gudang';
    const ROLE_PURCHASING = 'purchasing';
    const ROLE_SALES = 'sales';

    /**
     * Check if the user has a specific role.
     *
     * @param string $role
     * @return bool
     */
    public function hasRole($role)
    {
        return $this->role === $role;
    }

    /**
     * Check if the user is an admin.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->hasRole(self::ROLE_ADMIN);
    }

    /**
     * Check if the user is gudang.
     *
     * @return bool
     */
    public function isGudang()
    {
        return $this->hasRole(self::ROLE_GUDANG);
    }

    /**
     * Check if the user is purchasing.
     *
     * @return bool
     */
    public function isPurchasing()
    {
        return $this->hasRole(self::ROLE_PURCHASING);
    }

    /**
     * Check if the user is sales.
     *
     * @return bool
     */
    public function isSales()
    {
        return $this->hasRole(self::ROLE_SALES);
    }
}
