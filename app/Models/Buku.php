<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    /** @use HasFactory<\Database\Factories\BukuFactory> */
    use HasFactory;

    protected $table = 'buku';

    public function penerbit() {
        return $this->belongsTo(Penerbit::class, 'penerbit_id');
    }
}
