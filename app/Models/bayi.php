<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Bayi extends Model
{
       protected $table="bayi"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps= false; 
    protected $primaryKey = 'no_urut'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'no_urut',
    'no_urut',
        'nama',
            'alamat',
            'tgl_lahir',
            'bb_lahir',
            'tb_lahir',
    ];
    
}
