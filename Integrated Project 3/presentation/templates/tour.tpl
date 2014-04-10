{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="tour" assign="obj"}

{if $obj->tour}

  {section name=i loop=$obj->tour}
   
   <div>
         {$obj->tour[i].Tour_Title}
         {$obj->tour[i].Location}
         {$obj->tour[i].Venue}
         {$obj->tour[i].Box_OfficeNo}
         {$obj->tour[i].Tour_Date}
        </div> 

         
         
       
     
  {/section}

{* End post list *}
{/if}