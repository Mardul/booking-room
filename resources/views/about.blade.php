<!DOCTYPE html>
<html lang="{{app()->geetlocale}}>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BOOKING ROOM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         
        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/solar/bootstrap.min.css" rel="stylesheet" integrity="sha384-GC77SCz5O11gVtXl0sSfbQYEWSSznn1wPDHgL1BGUTFU9iEoUrG4IOJa5CBVY8kR" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <!-- username and email -->
          <meta name="viewport" content="width=device-width, initial-scale=1">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <!-- drop down menu for Hotels -->
           <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body><div class="flex-center position-ref full-height" >

                 <div class="content">
                      <div class="title m-b-md">
                        BOOKING 
                    </div>
                </div>

                     </div>
                    <div class="container">
                      <h2></h2>
                      <!-- Trigger the modal with a button -->
                      @section
                       <div class="flex-center top">
                      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">BOOK</button>

                      <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                                <div class="flex-center top">
                              


                              <h2 class="modal-title">BOOK</h2>
                            </div>


                            <div class="modal-is active">
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="form-control-label" placeholder="Date">Hotel name</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="form-control-label" placeholder="Date">Room no</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="form-control-label" placeholder="Date">Date</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="form-control-label" placeholder="Number of hours">number of hours 
                                            </label>
                                            <textarea class="form-control" id="message-text">
                                            </textarea>
                                        </div>
                                    </form>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                                        <button type="button" class="btn btn-primary"> Submit</button>
                                        
                                    </div>  
                                </div>
                            <div class="modal-body">
                              <p>Share the experience</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>        
                        </div>
                      </div><br>

                </div>
                    <div id="mySidenav" class="sidenav">
                       <a href="#" id="about">About</a><font color="black"></font>
                       <a href="#" id="blog">Blog</a><font color="black"></font>
                       <a href="#" id="projects">Booked</a><font color="black"></font>
                </div>




            <div>
                <div class="flex top-right">
                       

                        <form action="." id="new_user_form"><p>

                        <label for="user_name_input"  placeholder="name">Name</label><br>
                            <input type="text" id="user_name_input"><br><br>
                            <label for="user_email_input">Email</label><br>
                            <input type="text" id="user_email_input" autocapitalize="off"><br><br>
                            <label for="user_password_input">Password</label><br>
                            <input type="password" id="user_password_input"><br><br>
                            <label for="user_password_confirm_input">Confirm password</label><br>
                            <input type="password" id="user_password_confirm_input"><br><br>
                            <button type="signup" class="btn btn-default">Sign up</button><br><br>
                            <button  type="login" clas="btn btn-default"> login</button>
                      </form>
                        
                      </div>
                    </div>
                  </div>
                 </p>
               </form><br>
           </div>


           <div class="flex top-right">



           <div id="myNav" class="overlay">
             <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
             <div class="overlay-content">
              <h1>CHECK FOR AVAILABLE HOTELS</h1><br>
                 
             </div><br><br>
             <div class="container">
               <h2>Hotels</h2>
               <p>Have a nice time while sharing your experience together</p>                                         
               <div class="dropdown">
                 <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Hotels
                 <span class="caret"></span></button>
                 <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Safari park</a></li>
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hilton</a></li>
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Malibu</a></li>
                 </ul>
               </div>
             </div>
              <div class="container">
               <h2>Rooms</h2>
               <p>Get a room of your choice</p>                                         
               <div class="dropdown">
                 <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Rooms
                 <span class="caret"></span></button>
                 <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Room 1</a></li>
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Room 2</a></li>
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Room 3</a></li>
                 </ul>
               </div>
             </div><br><br>

             <form method="post" action="">
                 Event: <input type="text" name="event_name" class="form-control">
                 Date & Time: <input size="16" type="text" name="event_datetime" class="form-control" id="form_datetime" readonly><br><br>
                 <input type="submit" name="submit" class="btn button btn-success" value="SUBMIT" />
             </form>
           </div>

           <span style="font-size:50px;cursor:pointer" onclick="openNav()">&#9776; Hotels</span>

           <script>
           function openNav() {
               document.getElementById("myNav").style.width = "100%";
           }

           function closeNav() {
               document.getElementById("myNav").style.width = "0%";
           }
           </script>
       </div>

</body>
</html>