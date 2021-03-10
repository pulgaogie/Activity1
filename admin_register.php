<div class="inner cover">


  <h1 class ="cover-heading">REGISTER</h1>

 

  <form action="<?php echo site_url('account/admin_info');?>" method="POST">
    
          
              <div class="form-group">
                  <input type="text" class="form-control" name="fullname" placeholder="Fullname" required/>
             
               </div>

              <div class="form-group">
                  <input type="text" class="form-control" name="address" placeholder="address"required/>
              
                   </div>


              <div class="form-group">
                  <input type="number" class="form-control" name="contact" placeholder="Contact Number" required/>
               </div>

              <div class="avatar"> <input type="file" name="profile" placeholder= "Upload Image" required/> </div>
            

            </div>

          </div>
          <div class="inner cover">
     <center> <h1 class="cover-heading">Create Account</h1></center>

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    
     
   
       <div class="panel panel-default">
            <div class="panel-heading"></div>
             <div class="panel-body">
               <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Email" required/>
              </div>
              

              <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required/>
              </div>
               <div class="form-group">
                  <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required/>
              </div>
          </div>

            <div class="panel-footer">   
              <input type="submit" name="save" values="Create" class="btn btn-success btn-block btn-sm" >
            </div>
               
        </div>
            </div>

          </div>
    </form>
</div

    

   
