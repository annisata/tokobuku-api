<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kategori extends Model
{
    /** @use HasFactory<\Database\Factories\<BookFactory></BookFactory> */
    use HasFactory;
    protected $table = 'kategoris';
    protected $fillable = ['nama_kategori'];
}
