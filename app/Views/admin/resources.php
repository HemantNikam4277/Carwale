	<div class="row mb-4">
		<div class="col-lg-10 my-auto">
			<h4>Resources</h4>
		</div>
		<div class="col-lg-2 text-end">
			<a href="<?php echo base_url('profile/add-resource'); ?>" class="btn btn-outline-secondary btn-sm"><i class="fas fa-plus"></i> Add Resource</a>
		</div>
	</div>

	<?php if(session()->getTempdata('resource_err')):?>
	        <div class="alert alert-success">
	           <?= session()->getTempdata('resource_err') ?>
	        </div>
	  <?php endif;?>

	<div class="row mb-4">
		<div class="col-lg-12 my-auto">
			<table class="table">
			  <thead>
			    <tr>
			      <td>No</td>
			      <td>Title</td>
			      <td>Posted By</td>
			      <td></td>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php

			  		$i=0;
			  		foreach ($resources as $r) {
			  		$i++;
			  	?>

			  		<tr>
				      <th scope="row"><?php echo $i; ?></th>
				      <td><?php echo $r->r_title; ?></td>
				      <td><?php echo $r->r_author; ?></td>
				      <td class="text-end">
				      	<img src="<?php echo base_url('resources/'.$r->r_img); ?>" width="100">
				      </td>
				    </tr>

			  	<?php

			  		}

			  	?>
			  </tbody>
			</table>
		</div>
	</div>
	

