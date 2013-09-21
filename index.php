<?php include "inc/init.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>BIN503 Project</title>
	<link rel="stylesheet" type="text/css" href="inc/style.css">
</head>
<body>
<div id="site">
<h1>BIN503 Project</h1>

<div>
	<form>
	<input type='text' id='query' placeholder='Enter your query here... (e.g. MAST4 or TCF4)' class='form_query' autocomplete='off'>
	<a href="#" class="advanced_search_link" alt="Hidden">Show advanced search options</a>
	<div id="advanced_search">
		<span class='adv_items'><input type="checkbox" name="options" value="rsid" class='checkbox'> RSID</span>
		<span class='adv_items'><input type="checkbox" name="options" value="disease_class" class='checkbox'> Disease Class</span>
		<span class='adv_items'><input type="checkbox" name="options" value="hgnc_symbol" class='checkbox' checked="checked"> HGNC Symbol</span>
		<span class='adv_items'><input type="checkbox" name="options" value="entrez_gene_id" class='checkbox'> Entrez Gene ID</span>
		<span class='adv_items'><input type="checkbox" name="options" value="human_ensembl_gene_id" class='checkbox'> Human Ensembl Gene ID</span>
		<span class='adv_items'><input type="checkbox" name="options" value="chromosome_number" class='checkbox' checked="checked"> Chromosome Number</span>
		<span class='adv_items'><input type="checkbox" name="options" value="gene_start" class='checkbox' checked="checked"> Gene Start (bp)</span>
		<span class='adv_items'><input type="checkbox" name="options" value="gene_end" class='checkbox' checked="checked"> Gene End (bp)</span>
		<span class='adv_items'><input type="checkbox" name="options" value="human_pdb_id" class='checkbox'> Human PDB ID</span>
		<span class='adv_items'><input type="checkbox" name="options" value="mouse_ensembl_gene_id" class='checkbox'> Mouse Ensembl Gene ID</span>
		<span class='adv_items'><input type="checkbox" name="options" value="mouse_pdb_id" class='checkbox'> Mouse PDB ID</span>
	</div>
	</form>

	<div id="results"></div>
<div class="clear"></div>
</div>

<div id="footer">Yazagan & Budak<br /><br />This project has information from Biomart Ensembl in its database and it is just a demonstration of the tool. No commercial use. No copyright infringement is intended.</div>

<div class="clear"></div>
</div>

<script type="text/javascript" src="inc/jquery.js"></script>
<script type="text/javascript" src="inc/jscript.js"></script>
</body>
</html>