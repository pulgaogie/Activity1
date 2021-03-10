
<div class="inner cover">
      <h1 class="cover-heading">Admin Portal</h1>

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    
     <form action="<?php echo site_url('account/admin_register');?>" method="POST">
       <div class="panel panel-default">
            <div class="panel-heading"></div>
             <div class="panel-body">
               <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Email" required/>
              </div>
              

              <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required/>
              </div>

            <div class="panel-footer">   
              <input type="submit" name="submit" values="Log In" class="btn btn-success btn-block btn-sm" >
            </div>


            </div>

          </div>
    </form>
</div>
    </div>

         