<?php

namespace App\Controllers;

use App\Models\DepartmentModel;
use CodeIgniter\Controller;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('departments/index');
    }

    public function getDepartments()
    {
        $model = new DepartmentModel();
        $request = service('request');

        $search = $request->getVar('search')['value'] ?? '';
        $start = (int)($request->getVar('start') ?? 0);
        $length = (int)($request->getVar('length') ?? 10);
        $orderColumnIndex = $request->getVar('order')[0]['column'] ?? 0;
        $orderDir = $request->getVar('order')[0]['dir'] ?? 'asc';
        $columns = ['department_name', 'department_code'];
        $orderColumn = $columns[$orderColumnIndex] ?? 'id';

        $totalData = $model->countAllResults();
        $totalFiltered = $model->like('department_name', $search)
                               ->orLike('department_code', $search)
                               ->countAllResults();
        $data = $model->like('department_name', $search)
                      ->orLike('department_code', $search)
                      ->orderBy($orderColumn, $orderDir)
                      ->findAll($length, $start);

        $result = [
            "draw" => intval($request->getVar('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        ];

        return $this->response->setJSON($result);
    }

    public function create()
    {
        return view('departments/create');
    }

    public function store()
    {
        $model = new DepartmentModel();
        $model->save([
            'department_name' => $this->request->getPost('department_name'),
            'department_code' => $this->request->getPost('department_code'),
            'department_head_id' => $this->request->getPost('department_head_id')
        ]);

        return redirect()->to('/departments')->with('success', 'Department berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $model = new DepartmentModel();
        $data['department'] = $model->find($id);
        return view('departments/edit', $data);
    }

    public function update($id)
    {
        $model = new DepartmentModel();
        $model->update($id, [
            'department_name' => $this->request->getPost('department_name'),
            'department_code' => $this->request->getPost('department_code'),
            'department_head_id' => $this->request->getPost('department_head_id')
        ]);

        return redirect()->to('/departments')->with('success', 'Department berhasil diperbarui.');
    }

    public function delete($id)
    {
        $model = new DepartmentModel();
        $model->delete($id);

        return redirect()->to('/departments')->with('success', 'Department berhasil dihapus.');
    }
}