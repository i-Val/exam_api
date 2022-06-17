<?php

namespace App\Models;

use Illuminate\Pipeline\Pipeline;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'surname',
        'id_number',
        'role',
        'email',
        'class',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function allStudents(){
         $students = app(Pipeline::class)
                ->send(User::query())
                ->through([
                    \App\QueryFilters\Role::class,
                    \App\QueryFilters\Sort::class,
                    \App\QueryFilters\Limit::class,
                ])
                ->thenReturn()
                ->paginate(3);

                return $students;
                //For pagination, add in view
    // {{ $students->appends(request()->input())->links() }}
    }
}
