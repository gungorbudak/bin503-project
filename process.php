<?php

	include "inc/init.php";
	
	if (isset($_POST)) {
		
		$text = mysql_real_escape_string($_POST['query']);
		
		$data = '<table id="results_table">';
		$data .= '<tr class="results_table_header">';

		for ($j = 0; $j < count($_POST) - 1; $j++) {
		
			$data .= '<td>' .$_POST[$j]. '</td>';
			}

		$data .= '</tr>';
		
		$query = "SELECT given.*, created.*
				FROM given, created
				WHERE given.hgnc_symbol = created.hgnc_symbol AND
				((given.hgnc_symbol LIKE '%".$text."%'))
				";
		
		$result = mysql_query($query);
		$i = 0;
		while ($row = mysql_fetch_array($result)) {
			$data .= '<tr';
			if ($i%2) {
				$data .= ' class="even_result"';
			}
			$data .= '>';
			
			for ($j = 0; $j < count($_POST) - 1; $j++) {
		
				$data .= '<td>'.$row[$_POST[$j]].'</td>';
				}

			$data .= '</tr>';
			$i++;
		}
		
		$data .= '</table><a href="#" class="clear_results">Clear results</a>';
		
		if ($i) {		
			echo $data;
		} else {
			echo "<div class='no_results'>No results found for <strong>".$text."</strong></div>";
		}
		
	}

?>