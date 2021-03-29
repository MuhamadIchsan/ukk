<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'nis','nama','jk','ttl','alamat','asal_sekolah','kelas','jurusan'
    ];
}
