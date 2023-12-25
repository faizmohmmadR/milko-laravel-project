<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    use HasFactory;

    public function customer(){
        return $this->HasMany(Customer::class,'customerAddress','id');
    }

    public function employe(){
        return $this->hasMany(Employe::class,'employeAddress','id');
    }
    protected $fillable = ['streetNumber','streetName','district'];
}
