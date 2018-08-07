<?php

namespace App\Http\Controllers\CompanyProfile;


use App\Http\Controllers\Controller,
    Illuminate\Support\Facades\DB as DB,
    App\Http\Controllers\CompanyProfile\Blog\BlogListController as Blog,
    Illuminate\Http\Request;

use Session;

class BlogController extends Controller
{
  public function getList() {
          $data = (new Blog)->getList();
          return view('blog')->with('data',$data);
  }

  public function store(Request $request){
          $blog = new Blog();
          $blog->title        = $request->title;
          $blog->content      = $request->content;
          $blog->created_by   = 1;
          $blog->create();
          return redirect()->back();
  }

  public function delete(Request $request){
      $blog = new Blog($request->code);
      $blog->delete();
      return redirect()->back();
  }

  public function edit($code){
      $blog = new Blog($code);
      return view('edit-blog')->with('blog',$blog);
  }

  public function update(Request $request){
    $blog               = new Blog($request->code);
    $blog->title        = $request->title;
    $blog->content      = $request->content;
    $blog->update();
    return redirect('blog');
  }


}
