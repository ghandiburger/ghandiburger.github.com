<?php
	function menu_item($name,$url,$pageName) {
		if($page==$pageName) { $selected="class='selected'"; }

<ul>
	<li>
	<a href='index.php'  <?php if($page == 'home') { echo "class='selected'"; } ?>>
	HOME</a></li>
	<li>
	<a href='away.php' <?php if($page == 'away') { echo "class='selected'"; } ?>>
	AWAY</a></li>
</ul>