<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'email', 'tel'];

    public function getPayments(){
        return $this->hasMany(Payment::class);
    }

    public function getFullName(){
        return $this->firstname.' '.$this->lastname;
    }
}
