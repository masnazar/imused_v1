<?php

namespace App\Controllers;

use App\Models\RoleModel;
use App\Models\RolePermissionModel;
use App\Models\PermissionModel;
use CodeIgniter\Controller;

class RoleController extends Controller
{
    // Menampilkan halaman daftar role
    public function index()
    {
        return view('roles/index');
    }

    // Mengambil data role untuk server-side processing di DataTables
    public function getRoles()
    {
        $model = new RoleModel();
        $request = service('request');

        // Ambil parameter dari request untuk server-side processing
        $search = $request->getVar('search')['value'] ?? '';
        $start = (int)($request->getVar('start') ?? 0);
        $length = (int)($request->getVar('length') ?? 10);
        $orderColumnIndex = $request->getVar('order')[0]['column'] ?? 0;
        $orderDir = $request->getVar('order')[0]['dir'] ?? 'asc';

        // Kolom yang diurutkan, sesuai urutan pada DataTables
        $columns = ['role_name', 'description'];
        $orderColumn = $columns[$orderColumnIndex] ?? 'id';

        // Mengambil data dengan metode dari model
        $totalData = $model->countAllData();
        $totalFiltered = $model->countFilteredData($search);
        $data = $model->getDataTables($search, $start, $length, $orderColumn, $orderDir);

        // Format data untuk DataTables
        $result = [
            "draw" => intval($request->getVar('draw')),
            "recordsTotal" => $totalData,
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ];

        return $this->response->setJSON($result);
    }

    // Menampilkan form untuk membuat role baru
    public function create()
    {
        return view('roles/create');
    }

    // Menyimpan role baru ke database
    public function store()
    {
        $roleModel = new RoleModel();
        $data = [
            'role_name' => $this->request->getPost('role_name'),
            'description' => $this->request->getPost('description')
        ];

        if ($roleModel->insert($data)) {
            return redirect()->to('/roles')->with('success', 'Role berhasil ditambahkan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan role.')->withInput();
        }
    }

    // Menampilkan form edit untuk role tertentu
    public function edit($id)
    {
        $roleModel = new RoleModel();
        $data['role'] = $roleModel->find($id);

        if (!$data['role']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Role dengan ID $id tidak ditemukan");
        }

        return view('roles/edit', $data);
    }

    // Menyimpan perubahan data role ke database
    public function update($id)
    {
        $roleModel = new RoleModel();
        $data = [
            'role_name' => $this->request->getPost('role_name'),
            'description' => $this->request->getPost('description')
        ];

        if ($roleModel->update($id, $data)) {
            return redirect()->to('/roles')->with('success', 'Role berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui role.')->withInput();
        }
    }

    // Menghapus role dari database
    public function delete($id)
    {
        $roleModel = new RoleModel();

        if ($roleModel->delete($id)) {
            return redirect()->to('/roles')->with('success', 'Role berhasil dihapus.');
        } else {
            return redirect()->to('/roles')->with('error', 'Gagal menghapus role.');
        }
    }

    // Menampilkan halaman pengaturan hak akses per role
    public function managePermissions($roleId)
{
    $roleModel = new RoleModel();
    $permissionModel = new PermissionModel();
    $rolePermissionModel = new RolePermissionModel();

    // Ambil data role berdasarkan ID
    $role = $roleModel->find($roleId);
    if (!$role) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException("Role dengan ID $roleId tidak ditemukan");
    }

    // Ambil semua permissions
    $data['permissions'] = $permissionModel->findAll();

    // Ambil permissions yang sudah dimiliki oleh role ini
    $assignedPermissions = $rolePermissionModel->where('role_id', $roleId)->findAll();
    $data['assignedPermissions'] = array_column($assignedPermissions, 'permission_id');

    // Kirim data role dan permissions ke view
    $data['roleName'] = $role['role_name'];
    $data['roleId'] = $roleId;

    return view('roles/manage_permissions', $data);
}

    // Menyimpan perubahan permissions untuk role tertentu
    public function assignPermissionToRole($roleId)
    {
        $rolePermissionModel = new RolePermissionModel();
        $permissions = $this->request->getPost('permissions'); // Dapatkan permissions yang dipilih dari form

        // Hapus semua permissions lama yang terkait dengan role ini
        $rolePermissionModel->where('role_id', $roleId)->delete();

        // Tambahkan permissions baru ke role ini
        if ($permissions) {
            foreach ($permissions as $permissionId) {
                $rolePermissionModel->insert([
                    'role_id' => $roleId,
                    'permission_id' => $permissionId
                ]);
            }
        }

        return redirect()->to('/roles')->with('success', 'Hak akses berhasil diperbarui untuk role ini.');
    }
}