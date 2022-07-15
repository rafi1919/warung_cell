<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    use HasFactory;
    public $table = "brg_klr";

    protected $fillable = [
        'no_brg_klr',
        'id_barang',
        'tgl_brg_klr',
        'jml_brg_klr',
        'total',
        'created_at',
        'updated_at',
    ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
