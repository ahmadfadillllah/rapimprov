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

    public function importpush(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataCertificate', $namaFile);

        Excel::import(new CertificateImport, public_path('/DataCertificate/'.$namaFile));

        return redirect('/')->with('success', 'Data Berhasil Di Import');
    }
}
