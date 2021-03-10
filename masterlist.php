<section>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  
  
     
    <form class="form-inline my-2 my-lg-0" action="<?php echo site_url('account/search_student');?>" method="POST">
      <input class="form-control mr-sm-2" type="text" name="student_num" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="search">Search</button>
    </form>

</nav>
    <div class="container">
  <h1><center>Student Information List</center></h1>
  <table class="table table-striped">
  <thread>
    <tr>
      <th scope="col">Student number</th>
      <th scope="col">Fullname</th>
      <th scope="col">Course</th>
      <th scope="col">Year level</th>
      <th scope="col">Contact</th>
      <th scope="col">Image</th>
      <th scope="col">Guardian</th>
      
      
    </tr>
  </thread>
  <tbody>
    <?php 
    foreach ($register->result() as $row): {
    ?>
    <tr>
      <td><?php echo $row->student_num;?></td>
      <td><?php echo $row->fullname;?></td>
      <td><?php echo $row->course;?></td>
      <td><?php echo $row->yrlevel;?></td>
      <td><?php echo $row->contact;?></td>
      <td><?php echo $row->image;?></td>
      <td><?php echo $row->guardian;?></td>

     
    </tr>


  <?php } endforeach; ?>

 

 
   <div class="container">
  <table class="table table-striped">
  <thread>
    <tr>
      
     
      <th scope="col">Signed</th>
      <th scope="col">Date signed</th>
     
      
    </tr>
  </thread>
  
    <?php 
    foreach ($entrance->result() as $row): {
    ?>
    <tr>
    
      <td><?php echo $row->signed;?></td>
      <td><?php echo $row->date_signed;?></td>
    </tr>


  <?php } endforeach; ?>
 

  </tbody>
  </table>

 </div>
  </div>

  </section>