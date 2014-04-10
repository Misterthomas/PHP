{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="statstics" assign="obj"}

<table cellspacing="0" cellpadding="0" class="blogheading">
      <tr>
        <td>Statstics</td>
        <td align="right"></td>
      </tr>
     </table>
     <table class="blogentryodd">
     
      <tr>
       <td>
       <strong> Number of posts:</strong> {$obj->post_number}<br>
       <strong> Number of users:</strong> {$obj->user_number}<br>
      <strong>  Number of comments:</strong> {$obj->comments_number}<br>
        </td>
        
      </tr>

      </table>


</table>
