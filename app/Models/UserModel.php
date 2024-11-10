<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    // Kolom yang diizinkan untuk diisi
    protected $allowedFields = [
        'full_name', 'username', 'email', 'whatsapp_number', 
        'position_id', 'password', 'created_at', 'updated_at'
    ];

    protected $useTimestamps = true; // Menggunakan timestamp otomatis
}