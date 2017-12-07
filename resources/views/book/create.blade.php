@extends('layout.app')

@section('body')
<br><br>
 <div class="flex top right">
    <center><a href="/book" class="btn btn-info" role="button">BACK
    </div></a></center><br><br>
 <div class="col-lg-4">
    <center><h1>BOOK</h1></center>
   <ul class="list-group">
 {{csrf_field()}}
      
 <div class="form-group"> 
                <div class="form-group" action="/book" method="post">
      <label for="exampleSelect1">Hotels</label>
      <select class="form-control" id="exampleSelect1">
        <option>Hilton</option>
        <option>Safari park</option>
        <option>Ruby</option>
        <option>Jacaranda</option>
        <option>kenya comfort hotels</option>
      </select>
    </div>
    <div class="form-group" action="/book" method="post">
      <label for="exampleSelect1">Room no</label>
      <select class="form-control" id="exampleSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group" action="/book" method="post">
      <label for="exampleSelect1">Room capacity</label>
      <select class="form-control" id="exampleSelect1">
        <option>0-50</option>
        <option>50-100</option>
        <option>100-150</option>
        <option>150-200</option>
        <option>200-250</option>
        <option>250-300</option>
        <option>350-400</option>
      </select>
    </div>
    <div class="form-group" action="/book" method="post">
      <label for="exampleSelect1">Duration in hours</label>
      <select class="form-control" id="exampleSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
      </select><br><div class="container">
      <center><a href="" class="btn btn-info" role="button">Show price</a></center>
    </div><br>
     <div class="form-group">
                  <label class="control-label">Estimated price </label>
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">Amount (in kenya shillings)</label>
                    <div class="input-group">
                      <div class="input-group-addon">ksh</div>
                      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                      <div class="input-group-addon">.00</div><br><br>
                  </div>
                </div>
      <div class="container">
      <div class="container">
        <center><button type="submit" class="btn btn-success btn-xs" role="button">Submit</center>
      </div>

@endsection
