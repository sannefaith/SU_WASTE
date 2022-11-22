<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waste extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'item_id',
        'item_name',
        'points', 
    ];
  
}
