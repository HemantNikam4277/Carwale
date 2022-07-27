	<div class="row mb-4">
		<div class="col-lg-10 my-auto">
			<h4>New Resource</h4>
		</div>
	</div>

	<div class="row mb-4">
		<div class="col-lg-10 my-auto">
			<?php $validation = \Config\Services::validation(); ?>
			<form method="POST" action="<?php echo base_url('profile/insert-resource'); ?>" enctype="multipart/form-data">
				<div class="mb-3">
				    <input type="text" class="form-control rounded-3" id="title" name="title" placeholder="Title">
				</div>
				<?php if($validation->getError('title')) {?>
                          <p class='text-danger mt-2'>
                            <?= $error = $validation->getError('title'); ?>
                          </p>
                <?php }?>
				<div class="mb-3">
					<select class="form-select rounded-3" name="type" aria-label="Default select example">
					  <option value="">Select Type</option>
					  <option value="Whitepapers">Whitepapers</option>
					  <option value="Infographics">Infographics</option>
					  <option value="Webinars">Webinars</option>
					</select>
				</div>
				<?php if($validation->getError('type')) {?>
                          <p class='text-danger mt-2'>
                            <?= $error = $validation->getError('type'); ?>
                          </p>
                <?php }?>
				<div class="mb-3">
					<select class="form-select rounded-3" name="series" aria-label="Default select example">
					  <option value="">Select Series</option>
					  <option value="Adtech edge series">Adtech Edge series</option>
					  <option value="Hrtech edge series">Hrtech Edge series</option>
					  <option value="Eventech edge series">Eventech Edge series</option>
					  <option value="Martech edge series">Martech Edge series</option>
					</select>
				</div>
				<?php if($validation->getError('series')) {?>
                          <p class='text-danger mt-2'>
                            <?= $error = $validation->getError('series'); ?>
                          </p>
                <?php }?>
				<div class="mb-3">
					<select class="form-select rounded-3" name="topics" aria-label="Default select example">
					  <option value="">Select Topic</option>
					  <option value="IT">IT</option>
					  <option value="Marketing">Marketing</option>
					  <option value="Sales">Sales</option>
					  <option value="HR">HR</option>
					  <option value="Finance">Finance</option>
					  <option value="Customer Support">Customer Support</option>
					</select>
				</div>
				<?php if($validation->getError('topics')) {?>
                          <p class='text-danger mt-2'>
                            <?= $error = $validation->getError('topics'); ?>
                          </p>
                <?php }?>
				<div class="mb-3">
				    <textarea class="form-control rounded-3" id="mytextarea" rows="5" name="content" placeholder="Content"></textarea>
				</div>
				<?php if($validation->getError('email')) {?>
	                  <p class='text-danger mt-2'>
	                    <?= $error = $validation->getError('email'); ?>
	                  </p>
	            <?php }?>
				<div class="mb-3">
				    <input type="file" class="form-control rounded-3" id="image" name="image">
				    <div id="image" class="form-text">For better resources, upload image in png,webp format. Keep image size 1024x768 or less.</div>
				</div>
				<?php if($validation->getError('image')) {?>
	                  <p class='text-danger mt-2'>
	                    <?= $error = $validation->getError('image'); ?>
	                  </p>
	            <?php }?>
				<div class="mb-3">
					<button type="submit" class="btn btn-red rounded-3">Submit</button>
				</div>
			</form>

		</div>
	</div>