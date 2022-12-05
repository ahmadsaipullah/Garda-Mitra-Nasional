<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Gaji, User, Gender, Level};
use Barryvdh\DomPDF\Facade\Pdf;
use Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'user' => User::get(),
            'payrol' => User::get(),
            'genders' => Gender::all(),
            'gaji' => Gaji::all(),
            'active' => 'dashboard'
        ]);
    }
    
    public function download(Request $request){
        // dd($request->all());
        $params = $request->post();
        $bulan = substr($params['bulan'], 5);
        $tahun = substr($params['bulan'],0,4);
        // dd($bulan,$tahun);
        $nip = Auth::user()->nip;
        $gaji = Gaji::with('user')->where('nip', $nip)
                ->whereYear('bulan', '=', $tahun)
                ->whereMonth('bulan', '=', $bulan)
                ->first();
        // dd($gaji);
        // dd($bulan);
        if(!$gaji){
            return redirect()->back()->with('gaji','Slip Gaji Tidak Di Temukan');
        }
        // $bulan = $gaji->bulan;
        $bulan = Carbon::parse($gaji->bulan)->isoFormat('MMMM Y');
        // return view('admin.gaji.slip_gaji', compact('gaji','bulan'));
        // dd($params['bulan']);
        $pdf = PDF::loadView('admin.gaji.slip_gaji', compact('gaji','bulan'))->setPaper('legal', 'potrait');
        return $pdf->download('Slip-gaji.pdf');
    }
    
    public function cetak($id){
        $gaji = Gaji::with('user')->where('id', $id)
                ->first();
        // dd($gaji);
        // $bulan = $gaji->bulan->isoFormat('dddd, D MMMM Y');
        $bulan = Carbon::parse($gaji->bulan)->isoFormat('MMMM Y');
        // dd($bulan);
                
        $pdf = PDF::loadView('admin.gaji.slip_gaji', compact('gaji','bulan'));

        return $pdf->stream('Slip-gaji.pdf');
        // return view('admin.gaji.slip_gaji', compact('gaji'));
    }
}

