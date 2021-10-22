<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopsAndBranches extends Model
{
    use SoftDeletes;    
    protected $table = 'shops_and_branches';
    public $timestamps = true;
    protected $guarded = [];
    protected $dates = ['deleted_at'];
}
