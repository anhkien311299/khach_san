<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    protected $table = 'tbl_nhanvien';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
