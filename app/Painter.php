<?php
/**
 * Created by PhpStorm.
 * User: MithiMithu
 * Date: 8/20/2015
 * Time: 12:02 PM
 */

namespace App\Models;




class Painter extends Eloquent {
    public function paintings() {
        return $this->hasMany('Painting');
    }
}

