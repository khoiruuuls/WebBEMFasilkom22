<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;

    protected $table = 'acara';

    protected $fillable = [
        'nama',
        'bulan',
        'tanggal',
    ];

    public static function bulan()
    {
        return [
            'Januari 2022' => 'Januari 2022',
            'Februari 2022' => 'Februari 2022',
            'Maret 2022' => 'Maret 2022',
            'April 2022' => 'April 2022',
            'Mei 2022' => 'Mei 2022',
            'Juni 2022' => 'Juni 2022',
            'Juli 2021' => 'Juli 2023',
            'Agustus 2023' => 'Agustus 2023',
            'September 2023' => 'September 2023',
            'Oktober 2023' => 'Oktober 2023',
            'November 2023' => 'November 2023',
            'Desember 2023' => 'Desember 2023',
        ];
    }
}
