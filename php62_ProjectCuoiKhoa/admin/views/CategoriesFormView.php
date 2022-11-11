<?php 
	// load file layout vao day
	$layout = "Layout.php";
 ?>
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit Category</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $action; ?>">
				<!-- rows -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2">Name</div>
					<div class="col-md-10">
						<input type="text" value="<?php echo isset($record->name)?$record->name:''; ?> " name="name" class="form-control" required>
					</div>
				</div>
				<!-- end rows -->
				<!-- rows -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2">Parent</div>
					<div class="col-md-10">
						<?php 
						// lay cac ket noi
						$conn = Connection::getInstance();
						$query = $conn->query("select * from categories where parent_id = 0 order by id desc");
						$categories = $query->fetchAll(PDO::FETCH_OBJ);
						 ?>

						 <select name="parent_id">
							<option value="0"></option>
							<?php foreach($categories as $rows): ?>
							<option <?php if(isset($record->parent_id)&&$record->parent_id == $rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<!-- end rows -->
			
				<!-- rows -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<input type="submit" value="Process" class="btn btn-primary">
					</div>
				</div>
				<!-- end rows -->
			</form>
		</div>
	</div>
</div>