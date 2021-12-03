<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\ClasseDisciplina;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
 {
    public function index( ClasseDisciplina $data )
 {
        $response['professores'] = User::where( 'vc_tipoUtilizador', 'Professor' )->get();
        $response['cds'] = $data->classes_disciplinas()->get();
        $response['uri'] = 'ops';
        return view( 'site.index', $response );
    }
}