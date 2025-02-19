<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'is_on',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function commands() {
        return $this->belongsToMany(Command::class, 'command_device');
    }
}
