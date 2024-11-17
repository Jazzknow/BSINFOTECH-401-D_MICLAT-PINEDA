<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; //students means yung table na need natin iaccess

    protected $fillable = [  // means kung ano yung mga data ba need fillupan
        'product_name',
        'sub_name',
        'description',
        'price',
        'photo',
    ];

}
