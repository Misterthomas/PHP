{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="admin_view" assign="obj"}
{include file="head.tpl"}

<body>
<table class="adminheader" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="adminlogo">ADMIN</td>
    <td class="bordercolor" width="1px"></td>
    <td align="right" class="adminlogin">Welcome {$obj->username} ! , <a href="login.php?page=logout">Logout</a></td>
  </tr>
</table>
<table cellpadding="0" cellspacing="0" class="topseperator">
 <tr>
  <td></td>
 </tr>
</table>
<table class="admincontent" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" class="adminnavbar"><table cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="middle" class="navitems"><a href="admin.php?v=post" class="admin_link">POSTS</a></td>
      </tr>
      <tr>
        <td align="center" valign="middle" class="navitems"><a href="admin.php?v=comments" class="admin_link">COMMENTS</a></td>
      </tr>
      <tr>
        <td align="center" valign="middle" class="navitems"><a href="admin.php?v=users" class="admin_link">USERS</a></td>
      </tr>
      <tr>
        <td align="center" valign="middle" class="navitems"><a href="admin.php?v=statstics" class="admin_link">STATSTICS</a></td>
      </tr>
      
      
    </table></td>
    <td class="bordercolor" width="1px"></td>
    <td align="center" valign="top" class="adminmaincontent">
    {include file=$obj->mContentsCell}   
<table border="0" cellspacing="0" cellpadding="0" class="adminfooter">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>