
<!-- #create -->
<div class="container">
   <div class="form">
     <form role="form" method="POST" action="blog/create" >
       {{ csrf_field() }}
       <div class="form-row">
         <div class="form-group col-md-12">
           <input type="text" name="title" class="form-control" id="name" placeholder="Nama Lengkap*" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
           <div class="validation"></div>
         </div>

       <div class="form-group">
         <textarea class="form-control" name="content" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Write Here !!" required></textarea>
         <div class="validation"></div>
       </div>
       <div class="text-center"><button type="submit" name="submit">Post</button></div>
     </form>
   </div>
 </div>
</div>
<!-- #create -->


<!-- #List -->
@foreach($data as $content)
  Title : {{ $content->title }}
  <br>
  Created_at : {{ $content->created_at }}
  <br>
  Created_by : {{ $content->created_by }}
  <br>
  content : {{ $content->content }}
  <br>
  <div class="form">
    <form role="form" method="POST" action="blog/delete" >
      {{ csrf_field() }}
      <input type="hidden" name="code" value= "{{ $content->id }}" required autofocus>
      <div class="text-center"><button type="submit" name="submit">Delete</button></div>
    </form>
  <a href="blog/edit/{{ $content->id }}"> Edit</a>
  </div>
  <br>
  <br>
  <br>
@endforeach
<!-- List -->
