<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerbitModel extends Model
{
    use HasFactory;
    protected $table="penerbit";
     protected $primaryKey="id_penerbit";
     public $timestamps = false;
}
