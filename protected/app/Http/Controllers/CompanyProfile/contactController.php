<?php

namespace App\Http\Controllers\CompanyProfile;


use App\Http\Controllers\Controller,
    Illuminate\Support\Facades\DB as DB,
    App\Http\Controllers\CompanyProfile\Contact\ContactListController as Contact,
    Illuminate\Http\Request;

use Session;

class contactController extends Controller
{

  public function store(Request $request){
          $contact = new Contact();
          $contact->name      = $request->name;
          $contact->judul     = $request->subject;
          $contact->instansi  = $request->asal;
          $contact->no_hp     = $request->nohp;
          $contact->email     = $request->email;
          $contact->pesan     = $request->message;
          $contact->create();
          Session::flash('success','Terima kasih. Pesan Anda berhasil kami kirim kepada pengurus Madrasah Relawan.');
          return redirect()->back();
  }

  public function get_list(){
      $all_msg = DB::table('message')
          ->orderBy('created_at','desc')
          ->get();

      return view('view_all_messages')->with('all_msg',$all_msg);
  }
}
