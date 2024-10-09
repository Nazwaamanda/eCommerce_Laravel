<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;  // Pastikan namespace model sesuai
use App\Models\User;
use App\Models\Skripsi;

class ListController extends Controller
{
    public function index()
    {
        // Ambil semua data admin dan user
        $admins = Admin::all();
        $users = User::all();
        $skripsis = Skripsi::all();
         // Perbaiki pemanggilan User::()

        // Mengirim data ke view 'welcome'
        return view('welcome', compact('admins','users' ));
    }
}
