<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_outlet extends Model
{
    protected $table="tb_outlet";
  
    protected $fillable= ['id','nama','alamat','aktifitas','hp','instagram','facebook','minat','info','tgl_janji','tgl_kunjung'];
    
    public $timestamps      = false;
}
