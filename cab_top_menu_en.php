<?
$menui = array();
switch ($LANG)
	{
	case 'en':
		break;
	default:
		array_push($menui,'Main Menu');
		array_push($menui,'Presentation');
		array_push($menui,'Submit work');
		break;
	}
?>
<div id="logo_pucpr"></div>
<nav id="menu">
	<div id="hamburger-helper">
		<div>
			<div id="ham1" class="barra"></div>
			<div id="ham2" class="barra"></div>
			<div id="ham3" class="barra"></div>
		</div>
	</div>
	<ul>
		<li>
			&nbsp;
		</li>
		<li>

		</li>
		<li><IMG SRC="img/icone_16.png" height="28">
		</li>
		<li>
			<a href="index_en.php#page00" class="menu_top">HOME</a>
		<li>
			<a href="index_en.php#page01" class="menu_top">MENU</a>
		<li>
			<a href="index_en.php#page05" class="menu_top">SCHEDULE</a>
		<li>
			<a href="index_en.php#page03" class="menu_top"><?php echo UpperCase($menui[2]);?></a>
		<li>
			<a href="index_en.php#page12" class="menu_top">FAQ</a>
						
	</ul>
	<div id="menus" class="menu_left menu_lateral">
	    	<div class="mobile-menu">
	    		<UL>
	    		<LI><a href="index_en.php#page01" class="y-out">Main menu</a></LI>
	    		<LI><a href="index_en.php#page02" class="y-out">Presentation</a></LI>
	    		<LI><a href="index_en.php#page03" class="y-out"><?php echo $menui[2];?></a></LI>
	    		<LI><a href="index_en.php#page04" class="y-out">Instrution for authors</a></LI>
	    		<LI><a href="index_en.php#page05" class="y-out">Schedule</a></LI>
	    		<LI><a href="index_en.php#page06" class="y-out">Contact</a></LI>
	    		<LI><a href="index_en.php#page03" class="y-out">Staff</a></LI>
	    		</UL>
	    	</div>
	</div>	
</nav>


<script>
	$("#hamburger-helper").click(function() {
		$("#ham1").toggleClass('barra_first');
		$("#ham2").toggleClass('barra_middle');
		$("#ham3").toggleClass('barra_last');
		$("#ham3").animate('barra_last');
		$("#menus").animate({
			opacity : 1,
			top : "50",
			height : "toggle"
		}, 500, function() {/* Animation complete. */
		});
	});

</script>