<?php

require("user.php");

if(isset($_POST['submit'])){

    $projectref=$_POST['projectref'];
    $projecttitle=$_POST['projecttitle'];
    $grant=$_POST['grant'];
    $sdate=$_POST['sdate'];
    $cdate=$_POST['cdate'];
    $duration=$_POST['duration'];
    $NAP=$_POST['readiness'];
    $readiness=$_POST['readinesstype'];
    $disbursment=$_POST['disbusment'];
    $status=$_POST['status'];

    

    $sql="INSERT INTO projects(projectref,title,duration,grants,startdate,datecgf,readiness,typeofreadiness,first_disb,statuss) VALUES
    ('$projectref','$projecttitle','$duration','$grant','$sdate','$cdate','$NAP','$readiness','$disbursment','$status')";

    $result=mysqli_query($conn,$sql);
    if($result){
        echo 'data inserted successfully';

    }else
        die(mysqli_error($conn));

} 

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
   
     <style>


#form{

    margin-left:130px;
}

.form-inline label {
  margin: 5px 10px 5px 0;
 
}
.container{
margin-left:1px;
margin-right:1px;
}


    </style>
    <title>Projects</title>
  </head>
  <body>
    
<div class= container>

    <form class= "row g-3" id="form" method="post" action="projects.php" name='projects'>
        <div class="col-md-6">
                <div class="form-group">
                    <label for="projectref">Project Reference</label>
                    <input type="text"  class="form-control" name="projectref" id="projectref" placeholder="enter reference number">
                </div>
        </div>
        <div class="col-md-6">
                <div class="form-group">
                    <label for="projecttitle">Project Title</label>
                    <input type="textarea"  class="form-control" name='projecttitle' id="projecttitle" placeholder="enter project title">
                </div>
        </div>
        <div class="col-md-4">
                <div class="form-group">
                    <label for="projectref">Grant</label>
                    <input type="number" min="1" class="form-control" name='grant' id="grant" placeholder="enter grant amount">
                </div>
        </div>
        <div class="col-md-4">
                <div class="form-group">
                    <label for="startdate">Start Date</label>
                    <input type="date" class="form-control" name='sdate' id="sdate" placeholder="start date">
                </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="DatesGCF"> Date from CFG</label>
                <input type="date" class="form-control" name='cdate' id="cdate" placeholder="start date">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="Duration"> Duration</label>
                <input type="number" min="1" class="form-control" name='duration' id="duration" placeholder="project duration">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="NAP">NAP/Readiness</label>
                <input type="text"  class="form-control" list="NAP/ready" name='readiness' id="readiness" placeholder="NAP or readiness">
                <datalist id="NAP/ready">
                <option value="">
                    <option value="NAP" class="form-control">
                    <option value="Readiness" class="form-control">
                <datalist>
            </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="fdisbursment"> Type of readiness</label>
        <input type="text"  class="form-control" list="type" name='readinesstype' id="readinesstype" placeholder="NAP or readiness">
            <datalist id="type">
            <option value="">
                <option value="Capacity Building" class="form-control">
                <option value="FI/TNA/other" class="form-control">
                <option value="NAP" class="form-control">
                <option value="REDD+" class="form-control">
            <datalist>
        </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="fdisbursment"> Disbusment Amount</label>
                <input type="number" min="1" class="form-control" name="disbusment" id="disbusment" placeholder="disbursment amount">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <label for="fdisbursment"> Status</label>
            <input type="text" class="form-control" list="statuses" name='status' id="status" placeholder="status">
                <datalist id="statuses">
                    <option value="">
                    <option value="Complete" class="form-control">
                    <option value="Under Implementation" class="form-control">
                    
                </datalist>
            </div>
        </div>


        <div class="col-md-12">
            <div class="form-group">
                <input type="submit" class="form-control btn btn-success">
            </div>
        </div>
             
        
    </form>
 
    
<table class="table" id='tbl' >
  <thead>
    <tr>
    <th scope="col" >id</th>
      <th scope="col" >projectref</th>
      <th scope="col">Title</th>
      <th scope="col">Duration</th>
      <th scope="col">Grants</th>
      <th scope="col">sdate</th>
      <th scope="col">cdate</th>
      <th scope="col">readiness</th>
      <th scope="col">types</th>
      <th scope="col">first_disb</th>
      <th scope="col">status</th>
      <th scope="col">update</th>
      <th scope="col">delete</th>


    </tr>
  </thead>
  <tbody>
    <?php 
    $sql2="SELECT * FROM project.projects";
    $results2=mysqli_query($conn,$sql2);
    if($results2){

        while($row=mysqli_fetch_assoc($results2)){
            $id=$row['idprojects'];
            $projectr=$row['projectref'];
            $titless=$row['title'];
            $durationss=$row['duration'];
            $grantss=$row['grants'];
            $sdatess=$row['startdate'];
            $cdatess=$row['datecgf'];
            $readines=$row['readiness'];
            $typess=$row['typeofreadiness'];
            $firstdisb=$row['first_disb'];
            $sts=$row['statuss'];

            echo '<tr >
            <th scope="row">'.$id.'</th>
            <form action="operations.php" method="post">
            <td ><input type="text" name="projectref" style="width:100px;margin-left:-10px;" value='.$projectr.'></td>
            <td ><input type="text" name="title" style="width:100px;margin-left:-10px;" value='.$titless.'></td>
            <td ><input type="text" name="durations" style="width:100px;margin-left:-10px;" value='.$durationss.'></td>
            <td ><input type="text" name="grants" style="width:100px;margin-left:-10px;" value='.$grantss.'></td>
            <td ><input type="text" name="sdate" style="width:100px;margin-left:-10px;" value='.$sdatess.'></td>
            <td ><input type="text"  name="cdate" style="width:100px;margin-left:-10px;" value='.$cdatess.'></td>
            <td ><input type="text" name="readiness" style="width:100px;margin-left:-10px;" value='.$readines.'></td>
            <td ><input type="text" name="types" style="width:100px;margin-left:-10px;" value='.$typess.'></td>
            <td ><input type="text" name="fdisb" style="width:100px;margin-left:-10px;" value='.$firstdisb.'></td>
            <td ><input type="text" name="status" style="width:100px;margin-left:-10px;" value='.$sts.'></td>
            <td>
            <button class="btn btn-primary" name="submit" type="submit"><a class="text-light">Update</a></button>
            </td>
            <td>
            <button class="btn btn-danger"><a class="text-light" href="operations.php?deleteid='.$id.'">Delete</a></button>
            
            </td>
            </form>
            </tr>';
        }
        
    }


    ?>
  </tbody>
</table>
<
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type='text/javascript' src='./js/app.js'></script>

</body>
  
   
</html>