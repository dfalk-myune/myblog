<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Post;
use PhpParser\Node\Expr\Cast\String_;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens; 

    public const ROLE_USER = 'user';
    public const ROLE_AUTHOR = 'author';
    public const ROLE_ADMIN = 'admin';


    



     /**
     * Check if the user has a specific role.
     */
    public function hasRole($role)
    {
        return $this->role === $role;
    }

    /**
     * Check if the user is an admin.
     */
    public function isAdmin()
    {
        return $this->role === self::ROLE_ADMIN;
    }

    /**
     * Check if the user is an author.
     */
    public function isAuthor()
    {
        return $this->role === self::ROLE_AUTHOR;
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function posts(): HasMany {
        return $this->hasMany(Post::class);
    }


    public function isWorking()
    {
        return "hey bob"; // Just for testing
    }
}
