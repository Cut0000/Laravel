<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        // return "Nah jadi ini method index di dalam DosenController";
        $nama = "Zenta Hapsari Elfariani";
        $pelajaran = ["PABW","SJK","Matematika Lanjut"];
        return view('biodata',['nama' =>$nama, 'matkul'=>$pelajaran]);
    }
}
