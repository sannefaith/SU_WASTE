<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'account_id',
        'student_id',
        'points',
        'status',
        
        
    ];
    protected $casts = [
        'account_created_at' => 'datetime',
    
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function transaction() {
        return $this->hasMany('App\Models\Transaction');
    }
    public function redeem() {
        return $this->hasMany('App\Models\Redeem');
    }
}
