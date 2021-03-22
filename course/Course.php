<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $table = "course";
    //use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    
  
    protected $fillable = [
        'cname',
        'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   /* protected $hidden = [
        'password', 'remember_token',
    ]; */

     

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
  
}


