<?php

namespace App\Http\Controllers;

use App\Imports\CertificateImport;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    //
    public function index()
    {
        $certificate = Certificate::all();
        return view('welcome', compact('certificate'));
    }

    public function show(Request $request)
    {
        $certificate = Certificate::where('nomor','like',"%".$request->nomor."%");
        dd($certificate);
        // return Certificate::search($request->nomor)->get();
    }

    public function import()
    {
        return view('import');
    }

    public function hapus()
    {
        $certificate = Certificate::all();
        return view('hapus', compact('certificate'));
    }

    public function importpush(Request $request)
    {
        $date = date('gis');

        try {
            $barang = new Certificate;
            $barang->nomor = $request->nomor;
            $barang->nama = $request->nama;
            if($request->hasFile('file')){
                $request->file('file')->move('DataCertificate/', $date.$request->file('file')->getClientOriginalName());
                $barang->file = $date.$request->file('file')->getClientOriginalName();
                $barang->save();
            }
            return redirect()->back()->with('success', 'Sertifikat Berhasil di Upload');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Sertifikat Gagal di Upload');
        }
    }

    public function destroy($id)
    {
        try {
            Certificate::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Sertifikat berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
