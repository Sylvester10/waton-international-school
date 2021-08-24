<div class="report_body" id="">

	<table class="table table-no-border">

		<tr>
			<td>
				<div class="pull-right">
					<img class="report_passport_square" src="<?php echo user_avatar; ?>" />
				</div>
			</td>

			<td>
				<div class="report_header">
					<h3 class="text-bold"><?php echo strtoupper(school_name); ?></h3>
					<div class="text-bold">
						<i class="fa fa-map-marker"></i> <?php echo strtoupper(school_address); ?>. <br> <i class="fa fa-phone"></i> <?php echo school_phone_number; ?>, <?php echo school_phone_number2; ?>
					</div>
					<div class="text-bold">
						Motto: <em><?php echo sub_tagline; ?></em>
					</div>
				</div><!--/.report_header-->
			</td>
			
			<td>
				<div class="">
					<img class="report_school_logo" src="<?php echo school_logo; ?>" />
				</div>
			</td>
		</tr>

	</table>

	<div class="form_header text-center">
		<h3> REGISTRATIONFORM FOR <?php echo strtoupper($y->class); ?> </h3>
	</div>

	<table class="table table-no-border">
		<tr>
			<td>
				<div class="text-bold form_title">
					Child's Name: <span class="report_data"> <?php echo $y->student_name; ?></span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Date of Birth: <span class="report_data"> <?php echo $y->date_of_birth; ?>  </span>
				</div>
			</td>
			
			<td>
				<div class="text-bold form_title">
					Gender: <span class="report_data"><?php echo $y->sex; ?> </span>
				</div>
			</td>
		</tr>
	</table>
	
	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Religion: <span class="report_data"> <?php echo $y->religion; ?> </span>
				</div>
			</td>
			
			<td>
				<div class="text-bold form_title">
					State Of Origin: <span class="report_data"><?php echo $y->state_of_origin; ?></span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Name of Father:<span class="report_data"> <?php echo $y->father_name; ?></span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Address:<span class="report_data"> <?php echo $y->father_address; ?></span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Occupation: <span class="report_data"> <?php echo $y->occupation; ?> </span>
				</div>
			</td>
			<td>
				<div class="text-bold form_title">
					Phone Number: <span class="report_data"><?php echo $y->father_number; ?></span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>	
				<div class="text-bold form_title">
					Active Email address:<span class="report_data"> <?php echo $y->father_email; ?></span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Office Address:<span class="report_data"> <?php echo $y->father_office_address; ?></span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Name of Mother:<span class="report_data"> <?php echo $y->mother_name; ?></span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Address:<span class="report_data"> <?php echo $y->mother_address; ?></span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
						Occupation: <span class="report_data"> <?php echo $y->mother_occupation; ?> </span>
				</div>
			</td>
			<td>
				<div class="text-bold form_title">	
						Phone Number: <span class="report_data"><?php echo $y->mother_number; ?></span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Active Email address:<span class="report_data"> <?php echo $y->mother_email; ?></span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Office Address:<span class="report_data"> <?php echo $y->mother_office_address; ?></span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Who to call if parents cannot be reached:<span class="report_data"> <?php echo $y->emergency_contact; ?></span>
				</div>
			</td>
		</tr>
	</table>

	<div class="medical">
		<h4>MEDICAL HISTORY</h4>
	</div>

	<table class="table table-no-border">
		<tr>
			<td>
				<div class="text-bold form_title">
					Please state if the child has any Deformity or Health Challenge:<span class="report_data"> <?php echo $y->medical_history; ?></span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Name of Family Doctor (If any):<span class="report_data"> <?php echo $y->family_doctor; ?></span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Phone Number: <span class="report_data"> <?php echo $y->doctor_number; ?> </span>
				</div>
			</td>
			<td>
				<div class="text-bold form_title">
					In case of any emergency, should the family doctor be consulted? : <span class="report_data"> <?php echo $y->contact_doctor; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Please attach photocopy of all immunization taken: <span class="report_data"> <?php echo $y->immunization_info; ?> </span>
				</div>
			</td>
		</tr>
	</table>
							
	<h4> EATING </h4>	

	<table class="table table-no-border">
		<tr>
			<td>
				<div class="text-bold form_title">
					Is your child on any special diet? : <span class="report_data"> <?php echo $y->special_diet; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					If yes, please indicate : <span class="report_data"> <?php echo $y->special_diet_info; ?> </span>
				</div>
			</td>
			<td>
				<div class="text-bold form_title">
					Mode of food preparation eg. Warm, hot, thick, etc: <span class="report_data"> <?php echo $y->food; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					What does your child use to drink? : <span class="report_data"> <?php echo $y->drink; ?> </span>
				</div>
			</td>
			<td>
				<div class="text-bold form_title">	
						What does your child use to drink? : <span class="report_data"> <?php echo $y->drink_others; ?>
					</span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					How often does your child eat? : <span class="report_data"> <?php echo $y->food_frequency; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<h4> SLEEPING </h4>

	<table class="table table-no-border">
		<tr>
			<td>
				<div class="text-bold form_title">
					Does your child nap? : <span class="report_data"> <?php echo $y->sleep; ?> </span>
				</div>
			</td>
			<td>
				<div class="text-bold form_title">	
					How many times per day? : <span class="report_data"> <?php echo $y->sleep_frequency; ?> </span>
				</div>
			</td>
			<td>
				<div class="text-bold form_title">
					How long? : <span class="report_data"> <?php echo $y->sleep_interval; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Does your child sleep with a special blanket, toy or pacifier? : <span class="report_data"> <?php echo $y->special_sleep; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Are there specific bedtime routines at home? : <span class="report_data"> <?php echo $y->sleep_routine; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<h4> TOILETING </h4>

	<table class="table table-no-border">
		<tr>
			<td>
				<div class="text-bold form_title">
					Does your child use diapers? : <span class="report_data"> <?php echo $y->diapers; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Does your child use a potty or the toilet? : <span class="report_data"> <?php echo $y->potty_toilet; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					How does your child let you know that it’s time “to go”? : <span class="report_data"> <?php echo $y->potty_alert; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Does your child need regular reminders to use the bathroom? : <span class="report_data"> <?php echo $y->potty_reminder; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<div class="development">
		<h4> DEVELOPMENT </h4>
	</div>

	<table class="table table-no-border">
		<tr>
			<td>
				<div class="text-bold form_title">
					Do you have any concerns about your child’s development? : <span class="report_data"> <?php echo $y->child_development_concern; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					If yes, please indicate: <span class="report_data"> <?php echo $y->child_development_info; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					What is your child’s primary spoken language? : <span class="report_data"> <?php echo $y->child_primary_language; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Are there other languages being used with your child : <span class="report_data"> <?php echo $y->other_language; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<h4> SOCIAL AND EMOTIONAL DEVELOPMENT </h4>

	<table class="table table-no-border">
		<tr>
			<td>
				<div class="text-bold form_title">
					Has your child been in child care before?: <span class="report_data"> <?php echo $y->child_care; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					How would you describe your child’s temperament and personality? : <span class="report_data"> <?php echo $y->child_temperament; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					What soothes your child when crying? : <span class="report_data"> <?php echo $y->cry_soother; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Does your child have any favorite songs or games that comfort them?: <span class="report_data"> <?php echo $y->fav_song_game; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					Does your child have any Pet name eg Chu chu?: <span class="report_data"> <?php echo $y->pet_name; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold form_title">
					What are your expectations or hopes for your child at Waton International School?: <span class="report_data"> <?php echo $y->child_expectations; ?> </span>
				</div>
			</td>
		</tr>
	</table>

	<div class="pickup">
		<h4> PICK UPS </h4>
	</div>

	<div class="text-bold form_title">
		<p> Please provide a succinct information for persons other than you authorized to pick up your child(ren). </p>
	</div>

	<div class="col-md-6 col_6_margin">
		
		<div style="padding-bottom: 20px;">
			<img class="report_passport_square" src="<?php echo user_avatar; ?>" />
		</div>

		<div class="text-bold form_title" style="margin-bottom: 10px;">
			Name : <span class="report_data"> <?php echo $y->pickup_name; ?> </span>
		</div>

		<div class="text-bold form_title" style="margin-bottom: 10px;">
			Relationship: <span class="report_data"> <?php echo $y->pickup_relationship; ?> </span>
		</div>

		<div class="text-bold form_title" style="margin-bottom: 10px;">
			Address : <span class="report_data"> <?php echo $y->pickup_address; ?> </span>
		</div>

		<div class="text-bold form_title" style="margin-bottom: 10px;">
			Mobile line : <span class="report_data"> <?php echo $y->pickup_number; ?> </span>
		</div>

		<div class="text-bold form_title" style="margin-bottom: 10px;">
			Signature : <p class="signature_pickup">  </p>
		</div>
	</div>

	<div class="col-md-6 col_6_margin">

		<div style="padding-bottom: 20px;">
			<img class="report_passport_square" src="<?php echo user_avatar; ?>" />
		</div>

		<div class="text-bold form_title" style="margin-bottom: 10px;">
			Name : <span class="report_data"> <?php echo $y->pickup_name2; ?> </span>
		</div>

		<div class="text-bold form_title" style="margin-bottom: 10px;">
			Relationship: <span class="report_data"> <?php echo $y->pickup_relationship2; ?> </span>
		</div>

		<div class="text-bold form_title" style="margin-bottom: 10px;">
			Address : <span class="report_data"> <?php echo $y->pickup_address2; ?> </span>
		</div>

		<div class="text-bold form_title" style="margin-bottom: 10px;">
			Mobile line : <span class="report_data"> <?php echo $y->pickup_number2; ?> </span>
		</div>

		<div class="text-bold form_title" style="margin-bottom: 10px;">
			Signature : <p class="signature_pickup">  </p>
		</div>
	</div>

	<table class="table table-no-border">
		<tr>
			<td>
				<div class="text-bold form_title">
					<span class="report_data"> We agree that the School will not be held liable for handing over your child(ren) to any person Whose name and photograph appears on this form. </span>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-no-border table_margin">
		<tr>
			<td>
				<div class="text-bold">
					<div class="signature"> </div> <br> Father’s Signature/Date
				</div>
			</td>
			<td>
				<div class="text-bold">
					<div class="signature"> </div> <br> Mother’s Signature/Date
				</div>
			</td>
		</tr>
	</table>

</div>


<button class="btn-print" onclick="window.print() ;"><i class="fa fa-print"></i>Print</button>


