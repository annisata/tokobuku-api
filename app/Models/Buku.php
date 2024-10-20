<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Buku extends Model
{
    /** @use HasFactory<\Database\Factories\<BookFactory></BookFactory> */
    use HasFactory;
    protected $table = 'bukus';
    protected $fillable = ['judul', 'penulis', 'harga', 'stok', 'kategori_id'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
    //
}
