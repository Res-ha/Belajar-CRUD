<?php

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\Controller;

class BarangController extends Controller
{
    public function index()
    {
        $barangModel = new BarangModel();
        $data['barang'] = $barangModel->findAll();

        return view('barang/index', $data);
    }
}
