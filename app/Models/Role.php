<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable =[
        'title',
        'slug',
        'description'
       ];
}
