{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="master" assign="obj"}
{include file="head.tpl"}
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

