<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class generalController extends Controller
{
    public function login_logic(Request $request)
    {
        $password = $request->password;
        $nbi = $request->nbi;
        $data = DB::select(DB::raw("SELECT u.nbi, u.password, r.name as role FROM user as u JOIN role as r on u.id_role = r.id_role WHERE u.nbi='$nbi' AND u.password = '$password';"));
        if ($data == null) {
            return redirect('/');
        } else {
            if ($data[0]->role == "aslab") {
                return redirect('/aslab');
            } else if ($data[0]->role == "kalab") {
                return redirect('/kalab');
            } else if ($data[0]->role == "dosbim") {
                return redirect('/dosbim');
            } else if ($data[0]->role == "praktikan") {
                $nbi = (string)$data[0]->nbi;
                return redirect('/praktikan/$nbi');
            } else {
                return redirect('/');
            }
        }
    }
    public function add_user(Request $request)
    {
        DB::table('user')->insert([
            'nbi' => $request->nbi,
            'nama' => $request->nama,
            'password' => $request->password,
            'id_role' => $request->role,
            'id_kelas' => $request->kelas,
            'id_dosbim' => $request->dosbim,
        ]);
        return redirect('/aslab');
    }

    public function addvalue(Request $request)
    {
        DB::select(DB::raw("INSERT INTO `detail_nilai` (`id_detail_nilai`, `nbi`, `id_daftar_tugas`, `keterangan`, `nilai`) VALUES (NULL, '$request->nbi', '1', NULL, '$request->nilai1');"));
        DB::select(DB::raw("INSERT INTO `detail_nilai` (`id_detail_nilai`, `nbi`, `id_daftar_tugas`, `keterangan`, `nilai`) VALUES (NULL, '$request->nbi', '2', NULL, '$request->nilai2');"));
        return redirect('/aslab');
    }

    // INSERT INTO `user` (`nbi`, `nama`, `password`, `id_role`, `id_kelas`, `id_dosbim`) VALUES ('999', 'test', 'test999', '4', '1', '321');
}
