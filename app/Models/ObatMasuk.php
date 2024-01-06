<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatMasuk extends Model
{
    use HasFactory;

    protected $table ="tb_obat_masuk";

    protected $primaryKey = "id_masuk";

    protected $guarded = [];
}
