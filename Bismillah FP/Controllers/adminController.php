<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\RegistForm;

class adminController extends Controller
{
    public function registform()
    {

        // memanggil view tambah
        return view('registform');

    }
    public function template()
    {

        // memanggil view tambah
        return view('template');

    }

    public function upload(){
		$regist_forms = DB::table('regist_forms')->get();
		return view('database',['regist_forms' => $regist_forms]);

	}

	public function uploadproses(Request $request){
		$this->validate($request, [
			'idcard' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'payproof' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'poster' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			//'keterangan' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$idcard = $request->file('idcard');
		$nama_idcard = $idcard->getClientOriginalName();

      	    // isi dengan nama folder tempat kemana file diupload
		$tujuan_idcard = 'ID_CARD_DB';
		$idcard->move($tujuan_idcard,$nama_idcard);

        $payproof = $request->file('payproof');
		$nama_payproof = $payproof->getClientOriginalName();
        $tujuan_payproof = 'PAYMENT_PROOF_DB';
		$payproof->move($tujuan_payproof,$nama_payproof);

        $poster = $request->file('poster');
		$nama_poster = $poster->getClientOriginalName();
        $tujuan_poster = 'POSTER_EVENT_DB';
		$poster->move($tujuan_poster,$nama_poster);

		DB::table('regist_forms')->insert([
            'idForm' => $request->id,
            'organizer' => $request->organizer,
            'address' => $request->address,
            'contact' => $request->contact,
            'email' => $request->email,
            'identityCard' => $idcard,
            'title' => $request->title,
            'eventLocation' => $request->eventlocation,
            'category' => $request->category,
            'ticketPrice' => $request->ticketprice,
            'startDate' => $request->startdate,
            'endDate' => $request->enddate,
            'eventDetail' => $request->eventdetail,
            'accountNumber' => $request->accountNumber,
			'PaymentProof' => $payproof,
            'eventPoster' => $poster
		]);

		return redirect()->back()->with('message','Event Registered');
	}

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $rf = DB::table('regist_forms')->where('idForm',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['regist_forms' => $regist_forms]);

    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('regist_forms')->where('idForm',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/database');
    }

    public function dashboard_admin()
    {
        $regist_forms = DB::table('regist_forms')->get();
        // memanggil view tambah
        return view('dashboardadmin',['regist_forms' => $regist_forms]);

    }

    public function database()
    {
        $regist_forms = DB::table('regist_forms')->get();

    	// mengirim data pegawai ke view index
    	return view('database',['regist_forms' => $regist_forms]);
        // memanggil view tambah


    }
	
	public function refundForm($id) {
	        // mengambil data event dari Regist Form berdasarkan id yang dipilih
	        $regist_form = DB::table('regist_form')->where('id_form',$id)->get();
	
	        // passing data dari Regist Form ke refundForm.blade.php
	        return view('refundForm',['regist_form' => $regist_form]);
    	}

    public function uploadRefund(Request $request) {

        $this->validate($request, [
		'refund_proof' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
	]);

        // menyimpan data file yang diupload ke variabel $file
	$file = $request->file('refund_proof');
        $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        // ini insert ke database yang TANPA model
        DB::table('refund_form')->insert([
            'issue' => $request->issue,
            'refund_proof' => $nama_file,
            'id_form' => $request->id_form
        ]);

        // kembali ke page dashboard admin
        return redirect('/admin/dashboard');

    }
}
