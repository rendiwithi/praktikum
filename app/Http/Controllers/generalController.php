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
            } else {
                return redirect('/');
            }
        }
    }
}
