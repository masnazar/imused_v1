<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends Model
{
    protected $table = 'settings';
    protected $primaryKey = 'id';
    protected $allowedFields = ['key', 'value'];
    protected $useTimestamps = true;

    // Mendapatkan pengaturan berdasarkan kunci tertentu
    public function getSetting($key)
    {
        // Ambil data dari database
        $setting = $this->where('key', $key)->first();

        // Jika data ada, kembalikan hanya nilai 'value'
        return $setting ? $setting['value'] : null;
    }

    // Memperbarui atau menyisipkan pengaturan baru
    public function updateSetting($key, $value)
    {
        $setting = $this->where('key', $key)->first();
        
        if ($setting) {
            return $this->update($setting['id'], ['value' => $value]);
        } else {
            return $this->insert(['key' => $key, 'value' => $value]);
        }
    }
}
