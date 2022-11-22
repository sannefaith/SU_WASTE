<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transcaction extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'transaction_id',
        'account_id',
        'points',
        'waste_item',
        'session_id',
        
    ];
  
    public function account() {
        return $this->belongsTo('App\Models\Account');
    }
}
