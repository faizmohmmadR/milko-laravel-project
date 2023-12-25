<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function  branch(){
        return $this->belongsTo(Branch::class,'branchID','id');
    }

    public function sales(){
        return $this->belongsToMany(Sales::class,'_products__sales','salesID ','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'userID','id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'categoryID','id');
    }

    public function purches(){
        return $this->belongsTo(Purchese::class,'productID','id');
    }

    protected $fillable = ['ProductName',	'description',	'price',	'quantity',	'unite',	'userID',	'branchID',	'categoryID',];
}
