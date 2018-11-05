<?php

namespace App\Http\Controllers\Referencia;

use App\User;
use App\Referencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReferenciaController extends Controller
{
    public function index()
    {
        return view('referencias.index');
    }

    public function create(Request $request)
    {
        
    }

    public function store(Request $request)
    {
        $cc=$_POST['cc'];
        $paci = DB::connection('sqlsrv')->select("SELECT
        SOD.tipo_id,
        SOD.primer_nom,
        SOD.segundo_nom,
        SOD.primer_ape,
        SOD.segundo_ape,
        SOD.telefono,
        SOD.celular,
        SOD.direccion,
        SOD.email,
        SOD.num_id,
        SOD.fecha_naci,
        d.nombre as nom_dpto,
        m.nomMuni as nom_muni,
        SOD.nro_historia,
        tp.Nombre as tipo_usuario,
        SOD.nombre_padre,
        SOD.nombre_madre,
        SOD.entidad,
        SOD.cedula_padre,
        SOD.cedula_madre,
        SOD.estadoCivil,
        SOD.nom_responsable,
        SOD.ape_responsable,
        SOD.parentesco_responsable,
        SOD.telefono_responsable,
        SOD.direccion_responsable,
        SOD.sexo
       FROM sis_paci SOD
       INNER JOIN departamentos d ON d.codigo = SOD.cod_dep
       INNER JOIN municipiosView m ON m.codMuni = SOD.cod_muni
       INNER JOIN TipoAfiliado tp  ON tp.Id = SOD.tipo_afilia
       WHERE SOD.num_id = '$cc'
       AND EstadoAfiliado = 1
       ");
       //dd($paci);
        return $paci;
        
    }

    public function show($id)
    {
        //
    }

    public function newreferencia(Request $request)
    {
        Referencia::create($request->all());
        //dd($request->all());
        return back();
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
