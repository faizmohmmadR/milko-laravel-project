<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class, '_products__sales', 'salesID', 'productID');
    }

    public function customer(){
        return $this->belongsTo(Customer::class,'customerID','id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'categoryID','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'userID','id');
    }

    public function branch(){
        return $this->belongsTo(Branch::class,'branchID','id');
    }

    
    protected $fillable = ['productID,userID,branchID,categoryID,customerID,quantity,unite,unitePrice,totalPrice'];
}
