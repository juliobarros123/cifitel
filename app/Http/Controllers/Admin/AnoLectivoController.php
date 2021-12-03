<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnoLectivo;
use Illuminate\Http\Request;
use App\Models\Logger;


class AnoLectivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $Logger;
    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        //
        $anoslectivos = AnoLectivo::all();
        return view('admin.anolectivo.index', compact('anoslectivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.anolectivo.cadastrar.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {


            if ($request->ya_inicio > $request->ya_fim) {
                return redirect()->back()->with('aviso', '1');
            } else {

                AnoLectivo::create([
                    'ya_inicio' => $request->ya_inicio,
                    'ya_fim' => $request->ya_fim
                ]);
                $this->Logger->Log('info', 'Adicionou  Ano Lectivo');
                return redirect()->back()->with( 'status', 1 );
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('aviso', 1);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $anolectivo = AnoLectivo::find($id);
        return view('admin.anolectivo.visualizar.index', compact('anolectivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c = AnoLectivo::find($id);
        if ($response['anolectivo'] = AnoLectivo::find($id)) :
            $anolectivo = AnoLectivo::find($id);
            return view('admin.anolectivo.editar.index', compact('anolectivo'));
        else :
            return redirect('/admin/anolectivo/cadastrar');

        endif;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        AnoLectivo::find($id)->update([
            'ya_inicio' => $request->ya_inicio,
            'ya_fim' => $request->ya_fim
        ]);
        $this->Logger->Log('info', 'Actualizou  Ano Lectivo');
        return redirect()->route('admin/anolectivo')->with('status', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        AnoLectivo::find($id)->delete();
        $this->Logger->Log('info', 'Eliminou  Ano Lectivo');
        return redirect()->route('admin/anolectivo');
    }
}