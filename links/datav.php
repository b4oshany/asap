<script type="text/javascript" src="load.js"></script>
<script type="text/javascript" src="../../links/load.js"></script>
<div class="row">
	<div class ="cell width-4 position-0" id="sidebar">
		<div class="row" >
			<h2>Filters</h2>
			View By:<br>
			<div class ="cell width-12 position-0">
				<form>
					<select name="courses" onchange="showSelect(this.value, 'display'), choData()">
						<option value="">Select a course:</option>
						<option value="COMP2240">COMP2240</option>
						<option value="COMP2250">COMP2250</option>
					</select>
				</form>
			</div>
		</div>
	</div>
	<div class ="cell width-12 position-4" id="display">		
	</div>
</div>
