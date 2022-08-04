
<?php
error_reporting(0);
include('includes/config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Blood Bank Management System | Become A Donar </title>
		
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	
	<link rel="stylesheet" href="css/bootstrap-social.css">
	
	<link rel="stylesheet" href="css/bootstrap-select.css">
	
	<link rel="stylesheet" href="css/fileinput.min.css">
	
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	
	<link rel="stylesheet" href="css/style.css">
    <style>
    
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>

</head>

<body>

<?php include('includes/header.php');?>

  <div class="ts-main-content">

 <?php include('includes/leftbar.php');?>
     
    <div class="content-wrapper">
     
       <div class="container-fluid">

        <h1 class="mt-4 mb-3">Search Donor</h1>

            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        
        <form name="donar" method="post">
<div class="row">

<div class="col-lg-4 mb-4">
<div class="font-italic" style="font-size:24px;">Blood Group<span style="color:red;font-size:22px;">*</span> 
</div>
<div><select name="bloodgroup" class="form-control" required>
<?php $sql = "SELECT * from  tblbloodgroup ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
<option value="<?php echo htmlentities($result->BloodGroup);?>"><?php echo htmlentities($result->BloodGroup);?></option>
<?php }} ?>
</select>
</div>
</div>


<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>
</div>
 
</form>   

        <div class="row">
                   

                                                        <div class="panel panel-default">
							<div class="panel-heading">Donors Info</div>
							<div class="panel-body">
							
				
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>S.NO</th>
											<th>Name</th>
											<th>Mobile No</th>
											<th>Email</th>
											<th>Age</th>
					
											<th>Gender</th>
											<th>Blood Group</th>
											
											
										</tr>
									</thead>
									
									<tbody>

<?php 
if(isset($_POST['submit']))
{
$status=1;
$bloodgroup=$_POST['bloodgroup'];
$sql = "SELECT * from tblblooddonars where (status=:status and BloodGroup=:bloodgroup)";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->FullName);?></td>
											<td><?php echo htmlentities($result->MobileNumber);?></td>
											<td><?php echo htmlentities($result->EmailId);?></td>
											
											<td><?php echo htmlentities($result->Age);?></td>                                                      							
											<td><?php echo htmlentities($result->Gender);?></td>                                                   
											<td><?php echo htmlentities($result->BloodGroup);?></td>
				
											
										


										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table>

						

							</div>
					    </div>
            <?php }
else
{
echo htmlentities("*********Record Not Found******");


            } ?>
          
        </div>

</div>
      
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>


