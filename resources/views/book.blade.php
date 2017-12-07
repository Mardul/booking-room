@extends('layout.app')



@section('body')
<br>

<div class="flex center position ref"></div>
  
  <div class="col-lg-4">
    <center><h1>SPACE OUT</h1></center>
   <ul class="list-group">

<div class="flex center position ref"></div>
    <div class="col-lg-6">

      @if($errors)
          @foreeach($errors->all() as $error)
          <p>{{ $error}}</p>
          @endforeach
      @endif

      
     <form>
       <fieldset>

  
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted"></small>
          </div>
        <div class="form-group">
              <label for="exampleInputPassword1"> Create Password</label>
               <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" Create Password">
        </div>
        <div class="form-group">
              <label for="exampleInputPassword1">booking password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="booking password">
    
    <!--  -->
           <div class="container">
                <center><a href="book/create" class="btn btn-succes" role="button">LOGIN
                </div></a></center><br>
                </div>
             <div class="container">
                 <a href="book/create" class="btn btn-succes" role="button">SIGN UP
              </div></a>
</div>
@endsection
