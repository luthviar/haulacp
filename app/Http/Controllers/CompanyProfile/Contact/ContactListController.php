<?php

namespace App\Http\Controllers\CompanyProfile\Contact;


use App\Http\Controllers\Controller,
  Illuminate\Support\Facades\DB as DB,
  Illuminate\Http\Request;


class ContactListController extends Controller
{
  public $id;
  public $name;
  public $judul;
  public $instansi;
  public $no_hp;
  public $email;
  public $pesan;
  public $createdat;
  public $updatedat;
  public $exist;

   public function __construct($id = false)
   {
     $this->id = $id;
     if($id){
         $item = DB::table('message')
           ->where('id', $id)
           ->first();
             if($item){
                 $this->id           	= $item->menuEntryID;
                 $this->name          = $item->name;
                 $this->judul      		= $item->judul;
                 $this->instansi      = $item->instansi;
                 $this->no_hp     		= $item->no_hp;
                 $this->email     	  = $item->email;
                 $this->pesan      		= $item->pesan;
                 $this->createdat    	= $item->created_at;
                 $this->updatedat    	= $item->updated_at;
                 $this->exist        	= true;
             }
             else{
                 $this->exist    = false;
             }
     }
     else{

     }
   }

    public function create(){
        DB::unprepared(DB::raw("CALL message_insert('$this->name','$this->judul','$this->instansi','$this->no_hp','$this->email','$this->pesan')"));
    }

}
