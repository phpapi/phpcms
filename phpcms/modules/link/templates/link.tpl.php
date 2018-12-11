<?php
defined('IN_ADMIN') or exit('No Permission resources.');
$show_dialog = 1;
include $this->admin_tpl('header', 'admin');
?>
<table width="100%" cellspacing="0" class="search-form">
    <tbody>
    <tr>
        <td><div class="explain-col">
                <?php echo L('all_linktype')?>: &nbsp;&nbsp; <a href="?m=link&c=link"><?php echo L('all')?></a> &nbsp;&nbsp;
                <a href="?m=link&c=link&typeid=0">默认分类</a>&nbsp;
                <?php
                if(is_array($type_arr)){
                    foreach($type_arr as $typeid => $type){
                        ?><a href="?m=link&c=link&typeid=<?php echo $typeid;?>"><?php echo $type;?></a>&nbsp;
                    <?php }}?>
            </div>
        </td>
    </tr>
    </tbody>
</table>