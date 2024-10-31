<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bioskop extends Model
{
    protected $table = 'bioskops';

    protected $fillable = [
        'nama','lokasi','kapasitas'
    ];
}
