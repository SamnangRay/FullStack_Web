<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    //
    protected $table = "departments";
    protected $fillable = ["name","description"];
    
    //using protected $casts to format the created_at and updated_at fields when retrieving data from the database.
    // protected $casts = [
    //     'created_at' => 'datetime:Y-m-d H:i:s',
    // ]
    }
