<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravel\Scout\Searchable;
use TCG\Voyager\Traits\Resizable;

class ProductCategory extends Model
{
    use Searchable,Sluggable,SluggableScopeHelpers,Resizable;

   protected $guarded=[];


    public function searchableAs()
    {
        return 'name';
    }


    public function products(){
        return $this->belongsToMany('App\Product','product_category');
    }
    public function parentId()
    {
        return $this->belongsTo(self::class);
    }

    public function sub_categories($parent_id)
    {
        return $this::where('parent_id',$parent_id)->get();
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
