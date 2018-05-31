<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $guarded=[];

    public function discount($value){
        if ($this->type == 'fixed'){
            return $this->fixed_amount;
        }
        elseif ($this->type == 'percent'){
            return ($this->percent_amount * $value) / 100;
        }
        else{
            return 0;
        }
    }
}
