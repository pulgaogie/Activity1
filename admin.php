
<div class="inner cover">
      <center><h1 class="cover-heading">Admin Portal</h1></center>

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    
    <form action="<?php echo site_url('account/');?>" method="POST">
    
       <div class="panel panel-default">
            <div class="panel-heading"></div>
             <div class="panel-body">
               <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Username" required/>
              </div>
              

              <div class="form-group">
                  <input type="text" class="form-control" name="password" placeholder="Password" required/>
              </div>

            <div class="panel-footer">   
              <input type="submit" name="admin" values="Log In" class="btn btn-success btn-block btn-sm" >
            </div>
               &emsp; &emsp; &emsp; &emsp;<h3>New?<a href="admin_register">register</a></h3>

            </div>

          </div>
    </form>
</div>
    </div>

         