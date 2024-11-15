<?php

namespace App\Controllers;

use App\Models\SettingsModel;
use CodeIgniter\Controller;

class SettingsController extends BaseController
{
    protected $settingsModel;

    public function __construct()
    {
        $this->settingsModel = new SettingsModel();
    }

    public function index()
    {
        // Default ke halaman Pengaturan Bisnis
        return redirect()->to('/settings/business');
    }

    public function business()
    {
        $data = [
            'company_name' => $this->settingsModel->getSetting('company_name'),
            'company_address' => $this->settingsModel->getSetting('company_address'),
            'company_contact' => $this->settingsModel->getSetting('company_contact'),
            'logo' => $this->settingsModel->getSetting('logo'),
            'active_tab' => 'business' // Menandakan tab aktif
        ];

        return view('settings/index', $data);
    }

    public function system()
    {
        $data = [
            'default_language' => $this->settingsModel->getSetting('default_language'),
            'timezone' => $this->settingsModel->getSetting('timezone'),
            'active_tab' => 'system' // Menandakan tab aktif
        ];

        return view('settings/index', $data);
    }

    public function notification()
    {
        $data = [
            'active_tab' => 'notification' // Menandakan tab aktif
        ];

        return view('settings/index', $data);
    }

    public function update($type)
    {
        $settings = $this->request->getPost();
        $logoFile = $this->request->getFile('logo');

        // Allowed MIME types and extensions
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        // Validasi file logo
        if ($logoFile && $logoFile->isValid() && !$logoFile->hasMoved()) {
            if (in_array($logoFile->getMimeType(), $allowedTypes) && in_array($logoFile->getExtension(), $allowedExtensions)) {
                // Valid file, proceed with upload
                $newName = $logoFile->getRandomName();
                $logoFile->move('public/uploads/logos', $newName);
                $this->settingsModel->updateSetting('logo', 'uploads/logos/' . $newName);
            } else {
                // Jika file bukan gambar, beri notifikasi kesalahan
                return redirect()->back()->with('swal_error', 'Hanya file gambar dengan format JPEG, PNG, atau GIF yang diizinkan.');
            }
        }

        // Update pengaturan lainnya berdasarkan tipe
        foreach ($settings as $key => $value) {
            if ($key !== 'logo') {
                $this->settingsModel->updateSetting($key, $value);
            }
        }

        return redirect()->back()->with('swal_success', 'Pengaturan berhasil diperbarui.');
    }
}