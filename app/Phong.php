<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    protected $table = 'tbl_phong';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
