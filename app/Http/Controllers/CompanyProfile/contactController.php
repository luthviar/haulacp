<?php

namespace App\Http\Controllers\CompanyProfile;


use App\Http\Controllers\Controller,
    Illuminate\Support\Facades\DB as DB,
    App\Http\Controllers\CompanyProfile\Contact\ContactListController as Contact,
    Illuminate\Http\Request;

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
          return redirect('/');
  }
}
