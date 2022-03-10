<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;
    
    //テーブル名
    protected $table = 'products';

    //可変項目
    protected $fillable =
    [
        'product_name',
        'price',
        'stock',
        'manufacturer',
        'comment',
        'picture'
    ];

    public function company(){
        return $this->belongTo(Company::class); 
    }

    public function sale(){
        return $this->hasMany(Sale::class);
    }
}
