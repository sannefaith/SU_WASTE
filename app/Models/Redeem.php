<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redeem extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'account_id',
        'points',
        'session_id',
        
    ];

    public function account() {
        return $this->belongsTo('App\Models\Account');
    }

}
