<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends Model
{
    protected $table = 'settings';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'key', 'value', 'logo', 'company_name', 'company_address', 'company_contact', 'default_language', 'timezone'
    ];
    protected $useTimestamps = true;

    public function getSetting($key)
{
    $setting = $this->where('key', $key)->first();
    return $setting ? $setting['value'] : null; // Mengambil 'value' secara langsung
}

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
