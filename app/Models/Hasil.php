<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil extends Model
{
    use HasFactory;

 /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'hasil';
    protected $guarded = ['id'];
}
