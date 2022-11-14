<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pemasukanpengeluaran;

class Jenis extends Model
{
    use HasFactory;
    protected $table   = 'jenis';
    protected $guarded = ['id'];

    public function pemsukanpengeluaran()
    {
        return $this->hasMany(Pemasukanpengeluaran::class);
    }
}
