<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_material',
        'id_kelas',
        'start',
        'end',
        'date',
        'teaching_role',
        'duration',
    ];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
