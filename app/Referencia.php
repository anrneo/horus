<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
    protected $fillable = [
        "num_id",
        "id_prestador",
        "id_paci",
        "tipo_id",
        "primer_nom",
        "segundo_nom",
        "primer_ape",
        "segundo_ape",
        "fecha_naci",
        "sexo",
        "nom_dpto",
        "nom_muni",
        "direccion",
        "telefono",
        "celular",
        "email",
        "tipo_usuario",
        "cedula_madre",
        "nombre_madre",
        "cedula_padre",
        "nombre_padre",
        "triage",
        "hora_urgencia",
        "nom_prest",
        "habi_remitido",
        "dpto_remitido",
        "muni_remitido",
        "origen_atencion",
        "enti_solicita",
        "des_paci",
        "text1",
        "TBC_remi",
        "Consulta Externa",
        "servi_hosp",
        "cama_ubipaci",
        "cod_habi",
        "dpto_hospitalizacion",
        "muni_hospitalizacion",
        "ori_atencion",
        "giagnostico_hospi",
        "priori_atencion",
        "tipo_servicio",
        "cantidad",
        "cup",
        "cantidad",
        "text2",
        "ubi_paci_remi",
        "Prioridad_remi",
        "Complejidad_remi",
        "Especialidad_remi",
        "tbc",
        "TBC_remi",
        "Aislamiento",
        "Glasglow",
        "num_glasglow",
        "presion_sistolica",
        "presion_diastolica",
        "fre_cardiaca",
        "fre_respiratoria",
        "ambulancia",
        "req_oxigeno",
        "text3",
        "medico_Soli",
        "Espe_Médico_Soli",
        "Id_medico_Soli",
        "Re_medico_Soli",
        "tipoid_User_Repo",
        "idusers_reporta",
        "nom_user_report",
        "cargo_user_report",
        "tel_user_report",
        "cel_user_report",
        "adjunto",
        "des_adjunto",
    ];

    public function cups()
    {
        return $this->belongsToMany(Cups::class);
    }
}
