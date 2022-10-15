<?php
require 'user.php';

if(isset($_GET['deleteid'])){

    $id=$_GET['deleteid'];
    $sql="DELETE FROM projects WHERE idprojects='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:index.php');

    }else{
        die(mysqli_error($conn));  
    }
}
elseif(isset($_POST['submit'])){
    
    $projectref=$_POST['projectref'];
    $projecttitle=$_POST['title'];
    $grant=$_POST['grants'];
    $sdate=$_POST['sdate'];
    $cdate=$_POST['cdate'];
    $NAP=$_POST['readiness'];
    $readiness=$_POST['types'];
    $disbursment=$_POST['fdisb'];
    $status=$_POST['status'];
    $durations=$_POST['durations'];

    $sql="UPDATE projects SET title= '$projecttitle',grants='$grant',startdate='$sdate',
    datecgf='$cdate',readiness='$NAP',typeofreadiness='$readiness',first_disb='$disbursment',statuss=
    '$status'
    WHERE (projectref='$projectref')";
    $result=mysqli_query($conn,$sql);
    if($result){

        header('location:index.php');
    }else{
        die(mysqli_error($conn));  
    }
   
} 
    
?>