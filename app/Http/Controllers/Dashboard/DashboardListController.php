<?php

namespace App\Http\Controllers\Dashboard;

/**
 * @resource Hotel Content Management
 *
 * The Hotel Content Controller manage everything related to Hotel Service UI Content
 *
 * @author Faisal Rizky <isalriz9@gmail.com>
 * @copyright 2017 PipeApps
 */

use App\Http\Controllers\Controller,
  Illuminate\Support\Facades\DB as DB,
  Illuminate\Http\Request;


class DashboardListController extends Controller
{
  public $id;
  public $name;
  public $moduleID;
  public $icon;
  public $createdat;
  public $updatedat;
  public $exist;

   public function __construct($code = false)
   {
     $this->id = $code;
     if($code){
         $item = DB::table('MENU_ENTRY')
           ->where('menuEntryCode', $code)
           ->first();
             if($item){
                 $this->id           	= $item->id;
                 $this->name         	= $item->name;
                 $this->moduleID      = $item->moduleID;
                 $this->icon         	= $item->iconUrl;
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

  public function getList (){
      $data = [];
      $dashboards = DB::select(DB::raw("CALL CP_dashboards_read()"));
      foreach($dashboards as $row){
          $item = array(
              "id"            => $row->menuEntryCode,
              "name"          => $row->name,
              "moduleID"      => $row->moduleID,
              "icon"          => $row->icon,
          );
          array_push($data,$item);
      }
      return $data;
  }


}
