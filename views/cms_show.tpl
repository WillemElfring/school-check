  {foreach from=$result item=oneItem}
<tr>      

        <td><h1>{$oneItem.title}</h1></td>
        <td><content>{$oneItem.content}</content></td>
        <td><a href="?action=admin&cms_action=edit">Edit</a></td>
        <td><a href="?action=admin&cms_action=delete&id={$oneItem.id}">delete</a></td>
        
           
    </tr>  
    {/foreach}