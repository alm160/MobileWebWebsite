<div>
	<div id="mySidepanel" class="sidepanel">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  		<a href="homepage.php">Homepage</a>
  		<a href="mobile.php">Mobile Game Examples</a>
  		<a href="board.php">Board Game Examples</a>
	</div>
	<button class="openbtn" onclick="openNav()">☰ Menu</button>
</div>

<script>
	function openNav() {
    	document.getElementById("mySidepanel").style.width = "320px";
	}

	function closeNav() {
    	document.getElementById("mySidepanel").style.width = "0";
	}
</script>