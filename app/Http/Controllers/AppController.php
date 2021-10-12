<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skors;

class AppController extends Controller
{
    public function index()
    {
        $skors = Skors::paginate(6);
        return view('all', [
            'skors' => $skors
        ]);
    }

    public function tabelFrekuensi()
    {
        $min = Skors::min();
        $max = Skors::max();
        $avg = Skors::avg();
        $skor = Skors::getFreqTable();

        return view('single', [
            'min' => $min,
            'max' => $max,
            'avg' => $avg,
            'skor' => $skor,
        ]);
    }

    public function dataBergolong()
    {
        $min = Skors::min();
        $max = Skors::max();
        $avg = Skors::avg();
        $jmlData = Skors::all()->count();
        $jangkauan = Skors::jangkauan();
        $jmlKelas = Skors::jmlKelas();
        $pjgKelas = Skors::pjgKelas();

        $skor = Skors::getDataBergolong();
        return view('bergolong', [
            'min' => $min,
            'max' => $max,
            'avg' => $avg,
            'jmlData' => $jmlData,
            'jangkauan' => $jangkauan,
            'jmlKelas' => $jmlKelas,
            'pjgKelas' => $pjgKelas,
            'skor' => $skor,
        ]);
    }

    public function formTambah()
    {
        return view('tambah');
    }

    public function tambah(Request $req)
    {
        Skors::create(['skor' => $req->skor]);
        return redirect('tambah-skor');
    }

    public function formEdit($id)
    {
        $skor = Skors::find($id);
        return view('edit', [
            'skor' => $skor,
        ]);
    }

    public function update(Request $req)
    {
        $skor = Skors::find($req->id);
        $skor->skor = $req->skor;
        $skor->save();
        return redirect('/');
    }

    public function destroy(Request $req)
    {
        $skor = Skors::find($req->id);
        $skor->delete();
        return back();
    }
}
