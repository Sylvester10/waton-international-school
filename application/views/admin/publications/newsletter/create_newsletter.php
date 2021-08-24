
<div class="row">
	<div class="col-md-6 col-sm-12 col-xs-12">

		<?php echo form_open_multipart('newsletter/create_newsletter_action'); ?>

			<div class="form-group">
				<label class="form-control-label">Title</label>
				<?php $custom_title = date('F Y') . ' Newsletter'; ?>
				<input type="text" name="title" value="<?php echo set_value('title', $custom_title); ?>" class="form-control" required />
				<div class="form-error"><?php echo form_error('title'); ?></div>
			</div>
				
			<div class="form-group">
				<label class="form-control-label">Upload Newsletter </label><br />
				<small>Only PDF files allowed (max 5MB).</small>
				<input type="file" name="the_file" class="form-control" accept=".pdf" required />
				<div class="form-error"><?php echo $error; ?></div>
			</div>
			
			<div class="form-group">       
				<button type="submit" name="submit_type" value="create_only" class="btn btn-primary m-t-5" title="Create newsletter draft and publish later">Create Only</button>
				<button type="submit" name="submit_type" value="create_publish" class="btn btn-primary m-t-5" title="Create and publish now. Parents will be emailed instantly">Create & Publish</button>
			</div>

		<?php echo form_close(); ?>	
			
	</div><!--/.col-md-6-->
</div><!--/.row-->
	

