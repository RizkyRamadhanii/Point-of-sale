<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;

    protected $table = 'detail_penjualans';
    protected $fillable = [
        'invoice_id',
        'product_id',
        'jumlah',
        'total_harga',
        'dibayar',
        'kembalian',
        'status',
    ];

    protected $casts = [
        'product_id' => 'array',
    ];
}
