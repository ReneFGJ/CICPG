<?php
require("cab.php");
?>


<div id="page09" class="page_min pg09">
	<img src="img/logo.png" height="150" style="width: 180px; height: auto; float: left;" />
	<span class="breadcrumb2"><a href="index.php">In�cio</a> > <a href="programacao.php">Programa��o</a></span>
	<h1>Apresenta��es por �rea <!--- 04/11--></h1>
	<!--<div class="caixa-nav-data">
		<h2 class="data-prox"><a href="">05/11 ></a></h2>
	</div>-->
	<div class="programacao-total2">
		<div class="nuvem-tags">
			<p>Procure os trabalhos pela �rea:</p>
			<ul>
				<? require("sumario_areas.php"); ?>
			</ul>
		</div>
	

		<div class="lista-trabalhos">
			<div id="medicina">
				<h3>Medicina - 2</h3>
			
				<a name="show"></a>
				<table class="apresentacoes-por-area" width="902" align="center">
					<?php
						$file = $dd[0];
						$file = "sumario_".$file.".php";
						
						if (file_exists($file))
							{
								require($file);
							}
					?>
					

				</table>

			</div>	
				

			</div>
		</div>
		</div>
<?php
require("foot.php");
?>