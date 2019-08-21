<h1>Site Settings</h1>	

<div class="row">

	<div class="col-md-12">
		
		<?php if(isset($message)) { echo $message; } ?>	

		<?php

			$q = "SELECT * FROM settings ORDER BY id ASC";
			$r = mysqli_query($dbc, $q);

			while($opened = mysqli_fetch_assoc($r)) { ?>      
			
				<form class="form-inline" action="index.php?page=settings&id=<?php echo $opened['id']; ?>" method="post" role="form">

					<div class="form-group">

						<label class="sr-only" for="id">ID:</label>
						<input class="form-control" type="text" name="id" id="id" value="<?php echo $opened['id']; ?>" placeholder="id-name" autocomplete="off">

					</div>
					
					<div class="form-group">

						<label class="sr-only" for="label">Label:</label>
						<input class="form-control" type="text" name="label" id="label" value="<?php echo $opened['label']; ?>" placeholder="Label" autocomplete="off">

					</div>

					<div class="form-group">

						<label class="sr-only" for="value">Value</label>
						<input class="form-control" type="text" name="value" id="value" value="<?php echo $opened['value']; ?>" placeholder="value" autocomplete="off">

					</div>


					<button type="submit" class="btn btn-default">save</button>	
					<input type="hidden" name="submitted" value="1">
					
					<input type="hidden" name="openedid" value="<?php echo $opened['id']; ?>">
					
				</form>

		<?php  } ?>
		
	</div>

</div>
