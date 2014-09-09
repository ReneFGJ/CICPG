<?
switch ($LANG)
	{
	default:
		$bt_submit = 'Submeter trabalho >>>';
		$texto  = '<P>Para o 3° Congresso Sul Brasileiro de Iniciação Científica e Pós-Graduação são consideradas duas modalidades de submissão: oral e pôster. No momento da submissão o autor deverá fazer a opção por uma das modalidades. Os trabalhos submetidos na modalidade oral poderão realizar a apresentação em português ou em inglês. </P>
                   <P> <B>Modalidade oral:</B> submeter o resumo estendido no idioma escolhido </P>
                   <P> <B>Modalidade pôster:</B> submeter o arquivo do pôster. No site está disponível template específico do evento, mas poderá ser utilizado pôster apresentado em outro evento. A impressão deverá ter o tamanho 90 x 120cm colorido, utilizando apenas uma página.</P>
                   <P></P>
                   <P>Disponibilizamos um modelo de <A HREF="file/template_slide_1.pptx" targer="_new">Poster</A> para os alunos que assim desejarem utilizar. Caso já tenha um postêr produzido em sua instituição, o mesmo será aceito.</P>
                   ';
        break;
	}
$tela = '';
$tela .= '<h1>Submissão de Trabalhos</h1>';
$tela .= '<h2>Data final de submissão 30/set./2014</h2>';
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
