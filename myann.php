<?php

	require ('head.php');
	


if(isset($_POST['id'])){
	$user_id=$_POST['id'];


$query = "SELECT * FROM jobs WHERE id = $user_id";
$res = mysqli_query($conn, $query);
if(mysqli_num_rows($res)>0){
while($row= mysqli_fetch_array($res)){

                      ?>
                      <div class="container">
                        <div class="row">

                       <div class="col-lg-9">
                      <div class="row">
              <div class='col-md-12 col-xs-12'>
                  <h3 style='color:#ff0000;'>Latest Jobs</h3>
              </div>
                <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="job.php?id=<?php echo $row['id']; ?>"><img class="card-img-top" src="<?php echo $row['image']; ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                      <a href="job.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                  </h4>
                                      <h5><?php echo $row['company_name']."( ".$row['city']." )"; ?></h5>

                  <h5>Salary: <?php echo $row['salary']."$"; ?></h5>
                </div>
                <div class="card-footer">
                    <center>
                    <a href='job.php?id=<?php echo $row['id']; ?>'><b >Read More</b></a>
                    </center>
                </div>
              </div>
            </div>
              <?php
                  }
              }else{
                  ?>
              <h3 class='wrong'>No Jobs Addeded</h3>
              
              <?php
              } 
              }else{
                   $query="select * from jobs order by date DESC limit 6";
              $result= mysqli_query($conn, $query);
              if(mysqli_num_rows($result)>0){
                  while($row= mysqli_fetch_array($result)){
                      ?>

                 <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="job.php?id=<?php echo $row['id']; ?>"><img class="card-img-top" src="<?php echo $row['image']; ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                      <a href="job.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                  </h4>
                                      <h5><?php echo $row['company_name']."( ".$row['city']." )"; ?></h5>

                  <h5>Salary: <?php echo $row['salary']."$"; ?></h5>
                </div>
                <div class="card-footer">
                    <center>
                    <a href='job.php?id=<?php echo $row['id']; ?>'><b >Read More</b></a>
                    </center>
                </div>
              </div>
            </div>
              <?php
                  }
              }else{
                  ?>
              <h3 class='wrong'>No Jobs Addeded</h3>
              
              <?php
              } 
              }
             ?>
      
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<?php require 'footer.php'; ?>