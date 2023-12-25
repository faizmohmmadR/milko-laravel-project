<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    
    public function product(){
        return $this->hasOne(Product::class,'branchID','id');
    }

    public function customer(){
        return $this->hasMany(Customer::class,'branch','id');
    }

    public function employe(){
        return $this->hasMany(Employe::class,'branch','id');
    }

    public function sales(){
        return $this->hasMany(Sales::class,'branchID','id');
    }

    public function purchse(){
        return $this->belongsTo(Purchese::class,'branchID','id');
    }

    protected $fillable = ['branchName','branchAddress'];
}
