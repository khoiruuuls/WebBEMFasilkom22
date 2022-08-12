<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'report';

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'keterangan',
        'status',
    ];

    public const PENDING = 0;
    public const DIPROSES = 1;
    public const SELESAI = 2;
    public const DITOLAK = 3;

    public const STATUS = [
        self::PENDING => 'Pending',
        self::DIPROSES => 'Diproses',
        self::SELESAI => 'Selesai',
        self::DITOLAK => 'Ditolak',
    ];

    public static function status()
    {
        return self::STATUS;
    }

    public function statusLabel()
    {
        $status = $this->status();

        return isset($this->status) ? $status[$this->status] : null;
    }
}
