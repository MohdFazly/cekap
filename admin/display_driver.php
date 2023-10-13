<?php include('connect.php'); ?>
<?php error_reporting(0); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
<title>Admin | Driver </title>
<div class="container">
	<div class="sample">
		<h1 class="page-header text-center">All Driver</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
		<div class="sample2">
        <a href="#addDriver" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Driver</a>
		</div>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-bordered" style="background-color: #fcfcfc;">
			<colgroup>
                <col width="40%">
                <col width="20%">
                <col width="20%">
                <col width="20%">
            </colgroup>
			<thead>
				<th>Driver Name</th>
                <th>License Number</th>
                <th>Phone Number</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
					$sql="select * from driver order by DriverID asc";
					$query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['DriverName']; ?></td>
                            <td><?php echo $row['LicenseNumber']; ?></td>
                            <td><?php echo $row['PhoneNumber']; ?></td>
                            
                            <td>
							<div>
								<a href="#editdriver<?php echo $row['DriverID']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || <a href="#deletedriver<?php echo $row['DriverID']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							</div>
								<?php include('driver_edit_delete.php'); ?>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php include('add.php'); ?>
</body>
</html>