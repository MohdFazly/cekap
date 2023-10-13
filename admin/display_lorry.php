<?php include('connect.php'); ?>
<?php error_reporting(0); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
<body>
<title>Admin | Lorry </title>
<div class="container">
	<div class="sample">
		<h1 class="page-header text-center">All Lorry</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
		<div class="sample2">
        <a href="#addLorry" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Lorry</a>
		</div>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-bordered" style="background-color: #fcfcfc;">
			<colgroup>
                <col width="40%">
                <col width="20%">
                <col width="20%">
            </colgroup>
			<thead>
				<th>Lorry Number</th>
                <th>Status</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
					$sql="select * from lorry order by LorryNumber asc";
					$query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['LorryNumber']; ?></td>
                            <td><?php echo $row['Status']; ?></td>
                            
                            <td>
							<div>
								<a href="#editlorry<?php echo $row['LorryNumber']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || <a href="#deletedriver<?php echo $row['LorryNumber']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							</div>
								<?php include('lorry_edit_delete.php'); ?>
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