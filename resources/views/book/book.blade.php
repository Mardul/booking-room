@extends('layout.app')



@section('body')

<form method="action={{URL::to('/book/store') }}" method="POST">  <form>
    <label for="name">name</label>
            <input type="text"  class="form-control" id="name" placeholder="name" =""><br>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label><br>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">.</small>
            </div>
          <div class="form-group">
             <label for="exampleInputPassword1">booking Password</label>
             <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="container">
               <button type="submit" class="btn btn-success">Login</button><br>
               </div><br>
              <div class="container">
              <a href="book/create" ="submit"  class="btn btn-info" role="button">sign up</a>
          </div> 
      
@endsection
