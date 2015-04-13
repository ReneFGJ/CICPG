<?
ob_start();
session_start();
global $email_adm;
$LANG = 'pt_BR';
$idioma = $LANG;

//$mostar_versao = 0;
//$include .= "../include/";
//$include = '../_include/_include/';
$inc = "../../include/";
if (is_dir($inc)) { $include = $inc; }
$inc = "../../_include/";
if (is_dir($inc)) { $include = $inc; }
$inc = "../_include/";
if (is_dir($inc)) { $include = $inc; }
//-------------------------------------- Paramentros para DEBUG
//ini_set('display_errors', 255);
//ini_set('error_reporting', 7);
$email_adm = "cicpg@pucpr.br";

//-------------------------------------- Diret�rios de Arquivos e Imagens
$dir = $_SERVER['DOCUMENT_ROOT'];
$dir_public = $dir . '/img/ic/';
$img_dir = '/img/ic/';
$img_pub_dir = '/img/ic/';
$http_site = '/img/ic/';
$http_public = '/img/ic/';
$tab_max = "98%";
$secu = "CICPG2014";
//----------------------------------------------------------
require($include."sisdoc_char.php"); 
require($include."sisdoc_sql.php"); 
//require($include.'sisdoc_debug.php');
//-------------------------------------- Defini��es Iniciais
define(site,'http://www.pucpr.br');
define(http,'http://www.pucpr.br/');
define(idioma,"pt_br");
define(path,''.$_SERVER['PATH_INFO']);
define(host,getServerHost());
define(secu,'cicpg2009');
$path = substr(path,1,100);
$charset = "ASCII";
//-------------------------------------- Leituras das Variaveis dd0 a dd99 (POST/GET)
$vars = array_merge($_GET, $_POST);
for ($k=0;$k < 100;$k++)
	{
	$varf='dd'.$k;
	$varf=$vars[$varf];
	//if (isset($varf) and ($k > 1)) {	//$varf = str_replace($varf,"A","�"); }
	$dd[$k] = troca($varf,"'","�");
	}
$acao = $vars['acao'];
$nocab = $vars['nocab'];
//-------------------------------------- Determina o Idioma de Navega��o
$idv = $vars['idioma'];
//-------------------------------------- Recuperar dados de GET / POST
function getServerHost() {
return isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST']
		: (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST']
		: (isset($_SERVER['HOSTNAME']) ? $_SERVER['HOSTNAME']
		: 'localhost'));
}
//require("db_cryogene.php");
$ip = $_SERVER['HTTP_HOST'];
if ($ip == 'localhost')
	{
		require("db_3cic.php");
	}
?>