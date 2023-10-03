<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    use HasFactory;
    protected $table = 'crud'; // Menentukan nama tabel yang benar

    protected $fillable = [
        'name',
        'nrp',
        'email',
        'created_at',
        'updated_at'
    
    ];
}
