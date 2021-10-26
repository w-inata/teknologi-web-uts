<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoom extends Model
{
    use HasFactory;
    public $primarykey = 'id_user';

    protected $fillable = [
        'nama', 'telp', 'email', 'tgl_datang', 'tgl_pergi', 'pesan'
    ];
}
