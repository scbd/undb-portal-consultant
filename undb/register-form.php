<?php include(__DIR__ . '/partials/header.php'); ?>



<div class="center article">
	<h1>Register your Action</h1>
	<p>
		Please fill this form if you wish to register your Action for the United Nations Decade on Biodiversity 2011-2020. After your information is processed and posted online, you will receive a confirmation message. If you have difficulty filling the form, or if you have any questions please <a href="mailto:UNBiodiversity@cbd.int">contact us</a>.
	</p>
	<p>
		The Strategic Plan for Biodiversity 2011-2020 comprises a vision for 2050, five strategic goals and twenty ambitious yet achievable targets, collectively known as the Aichi Biodiversity Targets.
	</p>

	<h3>General contact information</h3>
	<p>
		Your personal details will not appear online, this is only for us to be able to contact you. If you wish to make multiple entries you can avoid repeating your contact details below by <a href="#">signing in</a> or <a href=""#>creating a CBD account</a>.
	</p>
	<p>
		Fields marked with a * are mandatory.
	</p>

	<form action="" class="single">
		<label for="" class="required">First name:</label>
		<input type="text" placeholder="Your first name">

		<label for="" class="required">Last name:</label>
		<input type="text" placeholder="Your last name">

		<div class="checkbox gender">
			Ms <span class="box radio"></span> Mr <span class="box radio"></span> (because we can't always tell by the name)
		</div>

		<label for="input_country" class="required">Country:</label>
		<select name="" id="" class="selectpicker" data-container="body" data-live-search="true">
			<option value="">Canada</option>
			<option value="">USA</option>
		</select>		

		<label for="" class="required">Address:</label>
		<input type="text" placeholder="Your address" class="wide">

		<label for="" class="required">Google maps link:</label>
		<input type="text" placeholder="Your address" class="wide">				

		<label for="" class="required">Email:</label>
		<input type="email" placeholder="Your email" class="invalid">			

		<label for="" class="required">Telephone:</label>
		<input type="text" placeholder="Your telephone number">

		<label for="" class="big">Comments or additional information (not visible online):</label>
		<textarea name="" id="" cols="30" rows="10" placeholder="300 characters"></textarea>	


		<h3>Information about your Action</h3>
		<p>
			The following information will appear online unless indicated otherwise.
		</p>
		<p class="darkGreen">
			Fields marked with a * are mandatory.
		</p>

		<label for="" class="required">Title:</label>
		<input type="text" placeholder="Org. name" class="wide">		

	
		<label for="" class="required">Date:</label>
		<div class="inlineInputs">
			<label for="" class="">From</label>
			<input type="text" placeholder="dd/mm/yyyy">				

			<label for="" class="">To</label>
			<input type="text" placeholder="dd/mm/yyyy">				
		</div>
		

		<label for="" class="">Time:</label>
		<div class="inlineInputs">
			<label for="" class="">From</label>
			<input type="text" placeholder="">				

			<label for="" class="">To</label>
			<input type="text" placeholder="">				
		</div>

		<label for="input_country" class="required">Country:</label>
		<select name="" id="" class="selectpicker" data-container="body" data-live-search="true">
			<option value="">Canada</option>
			<option value="">USA</option>
		</select>				

		<br>

		<label for="input_country" class="required">Location:</label>
		<div class="checkbox single">
			<span class="box"></span> Same as above
		</div>		
		<label for="" class="blank"></label>
		<div class="checkbox single">
			<span class="box"></span> Online only
		</div>				
		<br>
		<label for="" class="blank"></label>
		<input type="text" placeholder="Action Location">

		<label for="" class="required">Google maps link:</label>
		<input type="text" placeholder="Action Location">				

		<label for="" class="required">Email:</label>
		<input type="text" placeholder="Contact email" class="invalid">			

		<label for="" class="required">Telephone:</label>
		<input type="text" placeholder="Contact telephone number">

		<label for="" class="">Facebook:</label>
		<input type="text" placeholder="Action URL" class="wide">				

		<label for="" class="">Twitter:</label>
		<input type="text" placeholder="Action URL" class="wide">

		<label for="" class="">Youtube:</label>
		<input type="text" placeholder="Action URL" class="wide">		

		<label for="" class="required big">Short description of your organisation in one of the 6 United Nations languages (max. 1000 characters) :</label>
		<textarea class="long" name="" id="" cols="30" rows="10" placeholder="Briefly describe your organisation and your work related to the United Nations Decade on Biodiversity (max. 1000 characters)"></textarea>			

		<label for="" class="big">Short description of your organisation in your official language (max. 1000 characters) :</label>
		<textarea class="long" name="" id="" cols="30" rows="10" placeholder="Briefly describe your organisation and your work related to the United Nations Decade on Biodiversity (max. 1000 characters)"></textarea>					

		<label for="" class="big">Comments or additional information (not visible online) :</label>
		<textarea class="" name="" id="" cols="30" rows="10" placeholder="300 characters"></textarea>					


		<div class="formContainer">
			<label for="" class="big small-margin">Please attach a logo or image of your Action (max. 500KB).
				<br>The image on the profile will be fitted into 200 x 200 px.
			</label>
			<input type="text" placeholder="File Name" disabled>	
			<button type="button" class="browseFile">Browse....</button>
			<!-- <input type="file">	 -->
		</div>

		<label for="" class="blank"></label>
		<input type="submit" value="Submit">

		<label for="" class="blank"></label>
		<input type="submit" value="Submit" class="invalid">		


		<div class="errorMessage">
			Error Message
		</div>

		<div class="successMessage">
			<h6>Thank you for submitting your information</h3>
			<p>
				Once we have reviewed it we will send you a confirmation message. In the meantime we invite you to start using the logo of the United Nations Decade on Biodiversity on your website, information materials, etc., and join us on <a href="#">facebook</a> and <a href="#">twitter</a>.
			</p>
			<p>
				Please don’t hesitate to <a href="#">contact us</a> if you have any questions.
			</p>
		</div>
	</form>	
</div>



<?php include(__DIR__ . '/partials/footer.php'); ?>
