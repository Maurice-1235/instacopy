   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Login/Register</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <form action="db/dblogin.php" method="POST">
                   <div class="modal-body">
                       <div class="row">
                           <div class="col-4">
                               <b>Login</b>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-4">
                               <div class="form-label">Username</div>
                           </div>
                           <div class="col-8">
                               <input type="text" name="username" id="">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-4">
                               <div class="form-label">Password</div>
                           </div>
                           <div class="col-8">
                               <input type="password" name="password" id="">
                           </div>
                       </div>
                       <br>
                       <div class="modal-footer">
                           <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                           <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                           <input type="submit" value="Login" class="btn btn-primary">
                       </div>
               </form>
               <hr>
               <form action="db/dbregister.php" method="POST">
                   <div class="modal-body">
                       <div class="row">
                           <div class="col-4">
                               <b>Register</b>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-4">
                               <div class="form-label">Username</div>
                           </div>
                           <div class="col-8">
                               <input type="text" name="username" id="">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-4">
                               <div class="form-label">Password</div>
                           </div>
                           <div class="col-8">
                               <input type="password" name="password" id="">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-4">
                               <div class="form-label">Confirm Password</div>
                           </div>
                           <div class="col-8">
                               <input type="password" name="passwordconf" id="">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-4">
                               <div class="form-label">About me</div>
                           </div>
                           <div class="col-8">
                               <input type="text" name="about" id="">
                           </div>
                       </div>
                       <br>
                       <div class="modal-footer">
                           <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                           <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                           <input type="submit" value="Register" class="btn btn-primary">
                       </div>
               </form>
           </div>
       </div>
   </div>