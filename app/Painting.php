<?php
namespace App\Models;
class Painting extends Eloquent {
    public function painter() {
        return $this->belongsTo('Painter');
    }
}

