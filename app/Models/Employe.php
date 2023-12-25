<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employe extends Model
{
    use HasFactory;
    
    public function userInfo(){
        return $this->hasOne(User::class,'employeID','id');
    }

    public function branchInfo(){
        return $this->belongsTo(Branch::class,'branch','id');
    }

    public function address(){
        return $this->belongsTo(Address::class,'employeAddress','id');
    }

    // public function purches(){
    //     return $this->BelongsTo(Purchese::class,'userID','id');
    // }
    
    protected $fillable = ['employeName', 'employeLastName', 'employeFatherName', 'employePhone', 'employeEmail', 'employeSSN', 'employeJobType', 'employeAddress', 'branch'];
}
