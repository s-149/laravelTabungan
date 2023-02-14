<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\siswa;
class tabunganmasuk extends Model
{
    use HasFactory;
    
protected $guarded = [
        'id',
    ];

    public function siswa()
    {
        return $this->belongsTo(siswa::class);
    }
}
