<?php
$connect = mysqli_connect("localhost", "root", "", "jobs_hub");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM job_post
	WHERE job_catagory LIKE '%".$search."%'
	OR job_type LIKE '%".$search."%'
	OR salary LIKE '%".$search."%'
	OR cname LIKE '%".$search."%'
	OR job_location LIKE '%".$search."%'
	
	";
}
else
{
	$query = "";
}
if($query==""){

}
else{
	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Company Name</th>
							<th>job type</th>
							<th>Salary</th>
							<th>Job location</th>
							<th>Category</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{

if(isset($_SESSION['utype'])){

		$output .= '
			<tr>
				<td>'.$row["cname"].'</td>
				<td>'.$row["job_type"].'</td>
				<td>'.$row["salary"].'</td>
				<td>'.$row["job_location"].'</td>
				<td>'.$row["job_catagory"].'</td>
				
		<td>	<a href="job-details.php?jobid='.$row["id"].'&cid='.$row["company_id"].'" class="btn btn-success">Apply Now</a></td>
			</tr>';
		}
			else{
$output .= '
			<tr>
				<td>'.$row["cname"].'</td>
				<td>'.$row["job_type"].'</td>
				<td>'.$row["salary"].'</td>
				<td>'.$row["job_location"].'</td>
				<td>'.$row["job_catagory"].'</td>
				
		<td>	<a href="../home/job-details.php?jobid='.$row["id"].'&cid='.$row["company_id"].'" class="btn btn-success">Apply Now</a></td>
			</tr>'
		;}


		;



	}
	echo $output;
}
else
{
	
	 $error = '<div class="alert alert-danger">Data not found!!</div>';
	 echo $error;
}
}

?>
