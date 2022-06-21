<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class praktikumCont extends Controller
{
    public function kalabAslab()
    {
        return view('kalabAslab');
    }

    public function aslab()
    {
        $data = DB::select(DB::raw("SELECT u.nbi, u.nama, k.nama as kelas, r.name as role FROM user as u left JOIN kelas as k ON u.id_kelas = k.id JOIN role as r on r.id_role=u.id_role;"));
        return view('aslab', ['data' => $data]);
    }

    public function adduser()
    {
        $role = DB::table('role')->get();
        $dosbim = DB::select(DB::raw("SELECT * FROM user as u WHERE u.id_role=3;"));
        $kelas = DB::table('kelas')->get();
        return view('add_user', ['role' => $role, 'kelas' => $kelas, 'dosbim' => $dosbim]);
    }
    public function edituser($nbi)
    {
        $role = DB::table('role')->get();
        $kelas = DB::table('kelas')->get();
        $dosbim = DB::select(DB::raw("SELECT * FROM user as u WHERE u.id_role=3;"));
        $data = DB::select(DB::raw("SELECT u.nbi, u.password, u.nama FROM user as u JOIN role as r on u.id_role = r.id_role WHERE u.nbi='$nbi';"));
        return view('edit_user', ['role' => $role, 'kelas' => $kelas, 'data' => $data, 'dosbim' => $dosbim]);
    }
    public function dosbim()
    {
        return view('dosbim');
    }
    public function addvalue($nbi)
    {
        $tugas = DB::table('daftar_tugas')->get();
        return view('add_value', ["tugas"=>$tugas, "nbi"=>$nbi]);
    }
    // 
    public function report($nbi)
    {
        $data = DB::select(DB::raw("SELECT dn.nilai, dt.name FROM detail_nilai as dn JOIN daftar_tugas as dt ON dt.id=dn.id_daftar_tugas where dn.nbi='$nbi';"));
        return view('praktikan', ["data"=>$data]);
    }
    public function login()
    {
        return view('login');
    }
}
