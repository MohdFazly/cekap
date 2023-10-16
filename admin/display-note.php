<?php include('connect.php'); ?>
<?php error_reporting(0); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
<title>Admin | Note </title>
<div class="container">
	<div class="sample">
		<h1 class="page-header text-center">All Delivery-Note</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
		<div class="sample2">
        <!-- <a href="#addLorry" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Lorry</a> -->
		</div>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-bordered" style="background-color: #fcfcfc;">
			<colgroup>
                <col width="10%">
                <col width="10%">
                <col width="10%">
                <col width="20%">
                <col width="20%">
                <col width="10%">
                <col width="10%">
                <col width="10%">
            </colgroup>
			<thead>
				<th>Delivery Note</th>
                <th>Lorry Number</th>
				<th>Driver Name</th>
				<th>From Location</th>
				<th>To Location</th>
				<th>Total Logs</th>
				<th>Total Volume</th>
				<th>Delivery Date</th>
			</thead>
			<tbody>
				<?php
					$sql="select * from deliverydetails";
					$query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['DeliveryNote']; ?></td>
                            <td><?php echo $row['LorryNumber']; ?></td>
                            <td><?php echo $row['DriverName']; ?></td>
                            <td><?php echo $row['FromLocation']; ?></td>
                            <td><?php echo $row['ToLocation']; ?></td>
                            <td><?php echo $row['TotalLogs']; ?></td>
                            <td><?php echo $row['TotalVolume']; ?></td>
                            <td><?php echo $row['DeliveryDate']; ?></td>
                            
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<!-- <?php include('add.php'); ?> -->
</body>
</html>