<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanModel extends Model
{
    use HasFactory;
    protected $table="peminjaman";
     protected $primaryKey="id_peminjam";
     public $timestamps = false;
}
