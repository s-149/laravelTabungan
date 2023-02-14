<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\tabunganmasuk;
use App\Models\tabungankeluar;

class siswa extends Model
{
    use HasFactory;

    // field yg hanya bisa di isi

    // protected $fillable = [
    //     'nis',
    //     'nama',
    //     'kelas',
    //     'saldo',
    // ];

    // field yg tidak boleh di isi

    protected $guarded = ['id'];

    public function tabunganmasuk()
    {
        return $this->hasMany(tabunganmasuk::class);
    }

    public function tabungankeluar()
    {
        return $this->hasMany(tabungankeluar::class);
    }
}
