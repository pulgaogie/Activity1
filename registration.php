<div class="inner cover">


  <h1 class ="cover-heading">REGISTER</h1>

 

  <form action="<?php echo site_url('account/registration_submit');?>" method="POST">
    
          
              <div class="form-group">
                  <input type="text" class="form-control" name="studentnum" placeholder="Student Number" required/>
             
               </div>

              <div class="form-group">
                  <input type="text" class="form-control" name="fullname" placeholder="Full Name"required/>
              
                   </div>
              <div class="form-group">
                <select class="form-control" name="course" placeholder="COURSE "required/>   
                  <option value="">Course</option>
                    <option value="BSIT">BSIT</option>
                    <option value="BSEntrep">BSEntrep</option>
                    <option value="BSMath">BSMath</option>
                    <option value="BTVTEd">BTVTEd</option>
                    <option value="AFA">AFA</option>
                    <option value="DTS">DTS</option>

                  </select>
              </div>

              <div class="form-group">
                  <select class="form-control" name="yrlevel" placeholder="Year Level" required/>
                    <option value="">Year Level</option>
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                    <option value="DTS">DTS</option>

                  </select>
             
                   </div>

              <div class="form-group">
                  <input type="number" class="form-control" name="contact" placeholder="Contact Number" required/>
               </div>

              <div class="avatar"> <input type="file" name="avatar" placeholder= "Upload Image" required/> </div>

              <div class="form-group">
                  <input type="text" class="form-control" name="guardian" placeholder="Guardian"required/>
              
             </div>
            

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
              <input type="submit" name="submit" values="Create" class="btn btn-success btn-block btn-sm" >
            </div>
               
        </div>
            </div>

          </div>
    </form>
</div

    

   
