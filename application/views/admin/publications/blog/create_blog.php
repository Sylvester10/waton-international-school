
<?php echo flash_message_success('status_msg'); ?>
<?php echo flash_message_danger('status_msg_error'); ?>
<?php echo custom_validation_errors(); ?>

	
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		
			<?php echo form_open_multipart('blog/create_blog_action'); ?>
			
				<div class="row">
				
					<div class="col-md-7 col-sm-12 col-xs-12 p-b-20">
					
						<div class="form-group">
							<label class="form-control-label">Title</label>
							<input type="text" name="title" value="<?php echo set_value('title'); ?>" class="form-control" maxlength="120" required />
							<div class="form-error"><?php echo form_error('title'); ?></div>
						</div>
						
						<div class="form-group">
							<label class="form-control-label">Body</label>
							<p>Note: To add more images to post body, click on the <i class="fa fa-image"></i> icon and insert the image link into the <b>Source</b> field and click <b>Ok</b>. You can copy photo URL from <a class="underline-link" href="<?php echo base_url('gallery/photos'); ?>" target="_blank">gallery photos</a> or any other source.</p>
							<textarea name="body" class="form-control t300 textarea"><?php echo set_value('body'); ?></textarea>
							<div class="form-error upload_error"><?php echo form_error('body'); ?></div>
						</div>
						
					</div><!--/.col-md-6-->
					
					<div class="col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
						
						<div class="form-group">
							<label class="form-control-label">Upload Featured Image </label><br />
							<small>Only JPG and PNG files allowed (max 2MB).</small>
							<input type="file" name="featured_image" id="the_image" class="form-control" accept=".jpeg,.jpg,.png" required />
							<div class="form-error"><?php echo $error; ?></div>
						</div>
						
						<!-- Image preview-->
						<?php echo generate_image_preview(); ?>
						
						<div class="form-group">       
							<button type="submit" class="btn btn-primary m-t-5">Publish blog</button>
						</div>
						
					</div><!--/.col-md-6-->
					
				</div><!--/.row-->
				
			<?php echo form_close(); ?>	
			
		</div>
	</div>