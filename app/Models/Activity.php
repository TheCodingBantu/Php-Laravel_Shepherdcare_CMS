<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    public function getActivityRelation(){
        return $this->belongsTo('App\Models\Member','member_id','id');
    }
}
