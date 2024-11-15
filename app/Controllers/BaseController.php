<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\SettingsModel;  // Pastikan SettingsModel di-import
use Config\Services;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];

    /**
     * Property for the SettingsModel instance.
     *
     * @var SettingsModel
     */
    protected $settingsModel;

    /**
     * Property for the company logo URL.
     *
     * @var string
     */
    protected $company_logo;

    /**
     * Initialize the BaseController with required models and services.
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param LoggerInterface $logger
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Initialize SettingsModel to access application settings
        // Tambahkan inisialisasi model
        $this->settingsModel = new SettingsModel();

        // Retrieve company logo from settings
        $logoFilename = $this->settingsModel->getSetting('logo');

// Cek apakah path udah lengkap atau belum
if (strpos($logoFilename, 'uploads/logos/') === false) {
    $logoPath = FCPATH . 'public/uploads/logos/' . $logoFilename;
    $this->company_logo = base_url('public/uploads/logos/' . $logoFilename);
} else {
    $logoPath = FCPATH . 'public/' . $logoFilename;
    $this->company_logo = base_url('public/' . $logoFilename);
}

if (!file_exists($logoPath)) {
    $this->company_logo = base_url('assets/images/brand-logos/desktop-logo.png');
}

        // Make the company logo available in all views by adding it to the renderer service
        // Set company_logo globally across all views
        Services::renderer()->setData(['company_logo' => $this->company_logo], 'raw');
    }
}
