<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','value','obs'];

    public function category() {
        $this->hasOne(Product::class, 'id', 'category_id');
    }
}
