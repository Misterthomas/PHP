{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="login_master" assign="obj"}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Metallica Fan Site - Home</title>
<link href="./Styles/style1.css" rel="stylesheet" type="text/css" />
</head>

<body>
{include file="header.tpl"}
{include file="menu.tpl"} 
<table class="gap"  cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table class="maincontentcontainer" cellpadding="0" cellspacing="0">
  <tr>
    <td class="socialmediasection"></td>
    <td class="line"></td>
    <td class="maincontent"><a href="index.html">Metallica Fan Site</a> > <a href="index.html">Home</a><br /><br />
    {include file=$obj->mContentsCell} 
    </td>
    <td class="ads"></td>
  </tr>
</table>
<table class="footer">
 <tr>
  <td><samp id="footer_text">Copyright © Metallica Fan Site 2012</samp></td>
 </tr>
</table>
</body>
</html>
