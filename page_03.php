<?
switch ($LANG)
	{
	default:
		$bt_submit = 'Submeter trabalho >>>';
		$texto  = '<P>Para o 3� Congresso Sul Brasileiro de Inicia��o Cient�fica e P�s-Gradua��o s�o consideradas duas modalidades de submiss�o: oral e p�ster. No momento da submiss�o o autor dever� fazer a op��o por uma das modalidades. Os trabalhos submetidos na modalidade oral poder�o realizar a apresenta��o em portugu�s ou em ingl�s. </P>
                   <P> <B>Modalidade oral:</B> submeter o resumo estendido no idioma escolhido </P>
                   <P> <B>Modalidade p�ster:</B> submeter o arquivo do p�ster. No site est� dispon�vel template espec�fico do evento, mas poder� ser utilizado p�ster apresentado em outro evento. A impress�o dever� ter o tamanho 90 x 120cm colorido, utilizando apenas uma p�gina.</P>
                   <P></P>
                   <P>Disponibilizamos um modelo de <A HREF="file/template_slide_1.pptx" targer="_new">Poster</A> para os alunos que assim desejarem utilizar. Caso j� tenha um post�r produzido em sua institui��o, o mesmo ser� aceito.</P>
                   ';
        break;
	}
$tela = '';
$tela .= '<h1>Submiss�o de Trabalhos</h1>';
$tela .= '<h2>Data final de submiss�o 30/set./2014</h2>';
$tela .= '<div class="colunas">';
$tela .= $texto;
$tela .= '</div>';
$tela .= '<form method="get" action="http://www2.pucpr.br/reol/pb/index.php/cicpg?dd99=submit">';
$tela .= '<input type="submit" value="'.$bt_submit.'" class="bt_submit">';
$tela .= '</form>';


?>
<style>
	.colunas
	{
  		columns: 1;
  		-webkit-columns: 1;
  		-moz-columns: 1;
	}
	.cc2 {
		font-family: Tahoma, Arial, Verdana;
		font-size: 20px;
		color: #2D332D;
		text-align: center;
	}
	.bt_submit
		{
			width: 250px;
			height: 50px;
			background-color: #8B1217;
			color: #E0EFE0;
			font-size: 20px;
		}
	.pg03 { background-color: #EFFFEF; }
</style>
<div id="page03" class="page_min pg03">
	<A HREF="index.php#page01"><img src="img/icone_top.jpg" align="right" border=0 class="top" title="retorna ao menu"></A>
	<table width="98%" cellpadding=0 cellspacing=0 align="center" border=0 style="min-height:800px;">
		<TR valign="top">
			<TD><?php echo $tela; ?></TD>
			<TD align="center"><img src="img/logo.png" height="150"></TD>
		</TR>
	</table>
</div>
