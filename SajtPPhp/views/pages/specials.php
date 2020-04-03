<div class="content-bg">
<div class="wrap">
<div class="main">
<div class="content">
	<h2>Our Products</h2>
	<div class="select" id="sortiranje">
		<select id="selectPrductSort">
			<option value="0">Sort</option>
			<option value="1">Year: Low to High</option>
			<option value="2">Year: High to Low</option>
			<option value="3">Product Name: A to Z</option>
			<option value="4">Product Name: Z to A</option>
		</select>
	<div id="prikazProizvoda">
		
	</div>
		<div id='paginacija'>
			
		</div>	
	<div class="clear"></div>
</div>
</div>
<div class="sidebar">
<div class="sidebar-list">
	<h2>Filter By Categories</h2>
		<ul id="prikazKategorije">
			<?php
				include "views/pomocni/kategorije.php"
			?>
	</ul>
</div>
</div>
<div class="clear"></div>
</div>
</div>
</div>