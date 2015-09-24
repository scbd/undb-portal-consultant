<?php include(__DIR__ . '/partials/header.php'); ?>


<div class="center article">
	<h1>Calendar</h1>
	<p>
		This calendar contains all actions happening during the United Nations Decade on biodiversity. If you would like your action included, please <a href="">register</a> it by filling the form or <a href="mailto:UNBiodiversity@cbd.int">contact us</a>.
	</p>
</div>


<div class="wideBackground">
	<div class="center small">
		<div class="searchTitle">
			<?php include(__DIR__ . '/img/icon/loupe.svg'); ?>
			<h3>Search Criteria</h3>
		</div>		
		<form action="" class="double-column">
			<div class="form-column">
				<label for="input_country">Country:</label>
				<select name="" id="" class="selectpicker" data-container="body" data-live-search="true">
					<option value="">Canada</option>
					<option value="">USA</option>
				</select>

				<label for="input_country">Year:</label>
				<select name="" id="" class="selectpicker" data-container="body">
					<option value="">2016</option>
					<option value="">2015</option>
				</select>

				<label for="input_country">Month:</label>
				<select name="" id="" class="selectpicker" data-container="body">
					<option value="">October</option>
					<option value="">November</option>
				</select>				

			</div>
			<div class="form-column">
				<label for="input_title_countains">Title Contains:</label>
				<input type="text" name="" id="input_title_countains">

				<label for="input_title_countains">Description:</label>
				<input type="text" name="" id="input_title_countains">		

				<input type="submit" value="Search">
			</div>					
		</form>
	</div>
</div>


<div class="search-result center small">
	<div class="found col-xs-12 col-sm-6">2 results found</div>

	<nav class="col-xs-12 col-sm-6">
	  <ul class="pagination">
	    <li>
	      <a href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo; Previous</span>
	      </a>
	    </li>
	    <li><a href="#">1</a></li>
	    <li><a href="#">2</a></li>
	    <li><a href="#">3</a></li>
	    <li><a href="#">4</a></li>
	    <li><a href="#">5</a></li>
	    <li>
	      <a href="#" aria-label="Next">
	        <span aria-hidden="true">Next &raquo;</span>
	      </a>
	    </li>
	  </ul>
	</nav>


	<h4>Upcoming Meetings</h4>
	<table class="calendar-result">
		<!-- Header -->		
		<tr>
			<th>Dates and Venue</th>
			<th>Meeting</th>
		</tr>

		<!-- Section -->
		<tr class="section">
			<td colspan="2">July 2015</td>
		</tr>

		<!-- Lines -->
		<tr>
			<td>
				<span class="darkGreen">8 July 2015</span>
				<span class="textGray">Paris, France</span>
				<span class="darkGreen">Confirmed</span>
			</td>
			<td>
				<p>Fifth meeting of the Liaison Group on the Global Strategy for Plant Conservation</p>
				<a href="#">» Documents</a>
			</td>
		</tr>

		<tr>
			<td>
				<span class="darkGreen">8 July 2015</span>
				<span class="textGray">Paris, France</span>
				<span class="darkGreen">Confirmed</span>
			</td>
			<td>
				<p>Fifth meeting of the Liaison Group on the Global Strategy for Plant Conservation</p>
				<a href="#">» Documents</a>
			</td>
		</tr>		
	</table>
</div>

<?php include(__DIR__ . '/partials/footer.php'); ?>
