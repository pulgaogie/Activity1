<div class="inner cover">
      <h1 class="cover-heading">Enter Student</h1>
 <form action="<?php echo site_url('account/enter');?>" method="POST">
    
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    
    
       <div class="panel panel-default">
            <div class="panel-heading"></div>
             <div class="panel-body">
               <div class="form-group">
                  <input type="text" class="form-control" name="studentnum" placeholder="Student number" required/>
              </div>

            <div class="panel-footer">   
              <input type="submit" name="exit" value="In" class="btn btn-success btn-block btn-sm" >
              <input type="submit" name="enter" value="Out" class="btn btn-success btn-block btn-sm" >
            </div>


            </div>

          </div>
    </form>
</div>
    </div>

     <script type="text/javascript"></script>    