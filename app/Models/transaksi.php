<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $table = "tb_transaksi";

    protected $primaryKey = "id_transaksi";

    protected $guarded = [];

    protected $fillabel = ['id_transaksi', 'pas_id', 'obat_id', 'jumlah_transaksi'];
    
    public static $rules = [
        'pas_id' => 'required',
    ];

    protected $casts = [

    ];

    public function Pasien()
    {
        return $this->belongsTo(Pasien::class, 'pas_id', 'id_pasien');
    }

    public function Obat()
    {
        return $this->belongsTo(Obat::class, 'obat_id', 'id_obat');
    }
}
