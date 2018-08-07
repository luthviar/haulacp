<?php

namespace App\Http\Controllers\CompanyProfile\Blog;


use App\Http\Controllers\Controller,
  Illuminate\Support\Facades\DB as DB,
  Illuminate\Http\Request;


class BlogListController extends Controller
{
  public $id;
  public $title;
  public $content;
  public $created_by;
  public $createdat;
  public $updatedat;
  public $exist;

   public function __construct($id = false)
   {
     $this->id = $id;
     if($id){
         $item = DB::table('post')
           ->where('id', $id)
           ->first();
             if($item){
                 $this->id           	= $item->id;
                 $this->title         = $item->title;
                 $this->content       = $item->content;
                 $this->created_by    = $item->created_by;
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
       $blogList = DB::select(DB::raw("CALL post_read()"));
       return $blogList;
   }

    public function create(){
        DB::unprepared(DB::raw("CALL post_insert('$this->title','$this->content','$this->created_by')"));
    }

    public function update(){
        DB::unprepared(DB::raw("CALL post_update($this->id, '$this->title','$this->content')"));
    }

    public function delete(){
        DB::unprepared(DB::raw("CALL post_delete($this->id)"));
    }

}
