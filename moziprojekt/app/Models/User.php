<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * A mass assignment-nél engedélyezett mezők.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * Az elrejtett mezők.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Típuskonverziók.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Szerepkör ellenőrző segédfüggvények.
     */
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isRegistered(): bool
    {
        return $this->role === 'registered';
    }

    public function isUser(): bool
    {
        return $this->role === 'user';
    }
}
