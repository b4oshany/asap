<?php

Class DataVisualization{
	final public function __construct(){ ?>	
		 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<?php
	}

	public function AssociatedArrayIntoTable($array, $heading){
		echo '<br>';
		echo '<br>';
		echo '<table border="1">
		<tr>'.$heading.'</tr>';
		foreach($array as $item){
			echo '<tr>';
			foreach($item as $value)
			{
			//echo $value.'<br>';
				echo '
					<td>'.$value.'</td>
				'; 
			}
			echo '</tr>';		
		}		
		echo '</table>';		
	}
	
	public function LineGraph($datavalue){
	?>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          <?php echo $datavalue; ?>
        ]);	

        var options = {
          title: 'Company Performance',
		curveType:"function",
		  pointSize: 5,
		  backgroundColor: '#eee',
		  animation:{
			duration: 1000,
			easing: 'out'
			},
        };
		

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
	<?php
	
	}
	
	public function BarGraph($datavalue){
	echo 'oshj';
	?>
	<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          <?php echo $datavalue; ?>
        ]);

        var options = {
          title: 'Company Performance',
		   backgroundColor: '#eee',
          vAxis: {title: 'Year',  titleTextStyle: {color: 'red'}}
        };
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

	<?php
	}
	public function PieGraph($datavalue){
	?>
	<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          <?php echo $datavalue; ?>
        ]);

        var options = {
			backgroundColor: '#eee',
			title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
	
	<?php
	}
	public function ColumnGraph($datavalue){
	echo 'oshj';
	?>
	<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          <?php echo $datavalue; ?>
        ]);

        var options = {
			 backgroundColor: '#eee',
			title: 'Company Performance',
			vAxis: {title: 'Year',  titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
	
	<?php
	}
	
	public function SteppedGraph($datavalue){
	echo 'oshj';
	?>
	 <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        var data = google.visualization.arrayToDataTable([
          <?php echo $datavalue; ?>
        ]);
      
        var options = {
          width: 600, height: 400,
          title: 'The decline of \'The 39 Steps\'',
		   backgroundColor: '#eee',
          vAxis: {title: 'Accumulated Rating'},
          isStacked: true
        };
      
        var chart = new google.visualization.SteppedAreaChart(document.getElementById('visualization'));
        chart.draw(data, options);
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>

	<?php
	}
}
/*
$a = new DataVisualization;
$b = "['Year', 'Expenses'],
			  ['2012',   5],
			  ['2011',   3],
			  ['2010',  4]";
$a->BarGraph($b);
?>
<div id="chart_div" style="width: 900px; height: 500px;"></div>
*/
?>