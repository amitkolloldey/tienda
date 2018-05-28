<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use TCG\Voyager\Traits\Resizable;

class Product extends Model
{

    use Sluggable,SluggableScopeHelpers,Resizable;
    protected $guarded=[];

    public function product_category(){
        return $this->belongsToMany('App\ProductCategory');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
