<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas'; // pastikan tabelnya benar
    protected $guarded = ['id'];

    // ✅ Tambahkan untuk UUID
    protected $keyType = 'string';
    public $incrementing = false;

    // Relasi ke user
    public function user()
    {
        return $this->hasMany(UserModel::class, 'kelas_id');
    }

    public function getKelas()
    {
        return $this->all();
    }

    // ✅ Generate UUID otomatis setiap create
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
