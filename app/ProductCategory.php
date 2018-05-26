<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use TCG\Voyager\Traits\Resizable;

class ProductCategory extends Model
{
    use Sluggable,SluggableScopeHelpers,Resizable;

   protected $guarded=[];

    public function product(){
        return $this->hasMany('App\Product');
    }
    public function parentId()
    {
        return $this->belongsTo('App\ProductCategory');
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
