

	<div class="modal fade" id="new_testimony" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content modal-form-sm">
				<div class="modal-header">
					<div class="pull-right">
						<button class="btn btn-danger btn-sm modal_close_btn" data-dismiss="modal" class="close" title="Close"> &times;</button>
					</div>
					<h4 class="modal-title">New Testimony</h4>
				</div><!--/.modal-header-->
				<div class="modal-body">
					<?php 
					$form_attributes = array("id" => "new_testimony_form");
					echo form_open('testimonial/add_new_testimonial_ajax', $form_attributes); ?>
					
						
						<div class="form-group">
							<label class="form-control-label">Name</label>
							<br/>
							<input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control" required />
							<div class="form-error"><?php echo form_error('name'); ?></div>
						</div>

						<div class="form-group">
							<label class="form-control-label">Testimony</label>
							<br/>
							<textarea name="testimony" value="<?php echo set_value('testimony'); ?>" class="form-control t100" required ></textarea>
							<div class="form-error"><?php echo form_error('testimony'); ?></div>
						</div>
						
						<div id="status_msg"></div>
						
						<div>
							<button class="btn btn-primary">Submit </button>
						</div>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div>
	</div>