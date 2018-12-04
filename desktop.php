<!DOCTYPE html>

<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!-->
<html>

<?php
	
	include 'includes/mobileScript.php';
	include 'includes/desktopNav.php';
?>
<!--<![endif]-->
	
	<meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css" type="text/css">
	
<head>
	<title>Desktop Game Examples</title>
</head>
<body>
	<div id="mainHeader">
		<h1>Desktop Game Examples</h1>
	</div>

	<table>
		<tr id="tableHeader">
			<th>Disc Cover</th>
			<th>Game Description</th>
		</tr>
		<tr>
			<td>		
				<img class="discCover" src="images/diablo.png" alt="Image of Diablo 3 game case">
			</td>
			<td>
				<p class="gameDescription">
				Diablo III is a dungeon crawler action role-playing video game developed and published by Blizzard Entertainment. It is the third installment in the Diablo franchise and was released on May 15, 2012 for Microsoft Windows and macOS. In the game, players choose one of seven character classes – Barbarian, Crusader, Demon Hunter, Monk, Necromancer, Witch Doctor or Wizard (with the Crusader being unavailable unless the player has purchased the expansion pack, Diablo III: Reaper of Souls and the Necromancer added later as separate online purchase) – and are tasked with defeating the Lord of Terror, Diablo.
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<img class="discCover" src="images/fallout76.jpg" alt="Image of Fallout 76 game case">
			</td>
			<td class="gameDescription">
				<p>
					Fallout 76 is Bethesda Game Studios's first multiplayer game; players explore the open world, which has been torn apart by nuclear war, with others. Bethesda developed the game using a modified version of its Creation Engine, which allowed the accommodation of multiplayer gameplay and a more detailed game world. Fallout 76 was released to generally mixed reviews, with many criticizing the game's numerous technical issues, overall design, lack of gameplay purpose, and absence of human non-playable characters.	
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<img class="discCover" src="images/golf.jpg" alt="Image of Golf It game case">
			</td>
			<td class="gameDescription">
				<p>
					Golf It! is a multiplayer Minigolf game with focus on a dynamic, fun and creative multiplayer experience. One of the most exciting features is a Multiplayer Editor, where you can build and play custom maps together with your friends.
				</p>
			</td>
		</tr>
	</table>

</body>
<footer>
	<?php
		include 'includes/desktopFooter.php';
	?>
</footer>
</html>