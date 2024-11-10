<?php

namespace App\Controllers;

use App\Models\SettingsModel;
use CodeIgniter\Controller;

class SettingsController extends Controller
{
    protected $settingsModel;

    public function __construct()
    {
        $this->settingsModel = new SettingsModel();
    }

    public function index()
    {
        $data = [
            'company_name' => $this->settingsModel->getSetting('company_name'),
            'company_address' => $this->settingsModel->getSetting('company_address'),
            'company_contact' => $this->settingsModel->getSetting('company_contact'),
            'default_language' => $this->settingsModel->getSetting('default_language'),
            'timezone' => $this->settingsModel->getSetting('timezone'),
            'logo' => $this->settingsModel->getSetting('logo')
        ];

        return view('settings/index', $data);
    }

    public function update()
{
    $settings = $this->request->getPost('settings');
    $logoFile = $this->request->getFile('logo');

    // Upload logo jika file diunggah
    if ($logoFile && $logoFile->isValid()) {
        // Simpan file ke direktori 'public/uploads/logos'
        $logoPath = $logoFile->move('uploads/logos'); // Pindahkan ke 'public/uploads/logos'
        $this->settingsModel->updateSetting('logo', 'uploads/logos/' . $logoFile->getName());
    }

    // Update pengaturan lain
    foreach ($settings as $key => $value) {
        $this->settingsModel->updateSetting($key, $value);
    }

    return redirect()->back()->with('swal_success', 'Pengaturan berhasil diperbarui.');
}

public function serveLogo($filename)
{
    $path = WRITEPATH . 'uploads/logos/' . $filename;

    if (!is_file($path)) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    $mimeType = mime_content_type($path);
    header("Content-Type: $mimeType");
    readfile($path);
    exit;
}

}
