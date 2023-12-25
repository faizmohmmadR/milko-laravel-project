<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function address(){
        return $this->belongsTo(Address::class,'customerAddress','id');
    }

    public function branchInfo(){
        return $this->belongsTo(Branch::class,'branch','id');
    }

    public function sales(){
        return $this->hasMany(Sales::class,'customerID','id');
    }

    public function purches(){
        return $this->belongsTo(Purchese::class,'customerID','id');
    }
    protected $fillable = ['customerName','customerFatherName','customerPhone','customerType','customerAddress','branch'];
}
