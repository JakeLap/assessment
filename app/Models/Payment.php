<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'amount'];

    public function getClient(){
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function formatAmount(){
        return $this->amount/100;
    }

}
