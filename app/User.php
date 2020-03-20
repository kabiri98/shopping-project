<?php

namespace App;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletingTrait;


class User extends Authenticatable
{
   
    use Notifiable;
    // use SoftDeletes;
    protected $date=['deleted_at'];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Role(){
        return $this->belongsToMany('App\Models\Role');
    }

    public function Comments(){

        return $this->hasMany('App\Model\Comments');
    }

    public function photos(){
        
        return $this->morphMany('App\Models\Photos','imageable');
   }
    public function isAdmin(){
        // dd($this->Role[0]);
        if(isset($this->Role[0])&& $this->Role[0]->role_name=="Administrator"){
            return true;
        }else
        {
            return false;
        }
    }
    
}
