<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klien extends Model
{
    use HasFactory;
    protected $table = 'klien';
    protected $fillable = ['NIK','Nama','Tanggal_Lahir','Gender','Kategori'];
}
