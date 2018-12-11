<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
?>
<script type="text/javascript">
    <!--
    var charset = '<?php echo CHARSET?>';
    var uploadurl = '<?php echo pc_base::load_config('system','upload_url')?>';
    //-->
</script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH?>content_addtop.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH?>colorpicker.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH?>cookie.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH?>swfupload/swf2ckeditor.js"></script>
<div class="pad-10">
    <form action="?m=test&c=gametype&a=edit&id=<?php echo $id; ?>" method="post" id="myform">
        <fieldset>
            <legend><?php echo L('comments_module_configuration')?></legend>
            <table width="100%"  class="table_form">
                <tr>
                    <th width="120"><?php echo L('game_type')?>：</th>
                    <td class="y-bg">
                        <select name="info[typeid]" id="paginationtype" onchange="if(this.value==1)$('#paginationtype1').css('display','');else $('#paginationtype1').css('display','none');">
                            <?php
                            foreach($type as $k=>$v) {
                                ?>
                                <option value="<?php echo $k?>" <?php if($data['typeid']==$k) echo 'selected';?>><?php echo $v?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th width="120"><?php echo L('comment_on_whether_to_allow_visitors')?>：</th>
                    <td class="y-bg">
                        <input type="text" class="input-text" name="info[title]" id="name" size="30" value=" <?php echo $data['title'];?> "/></td>
                </tr>
                <tr>
                    <th width="120"><?php echo L("check_comment")?>：</th>
                    <td class="y-bg">
                        <input type="text" class="input-text" name="info[url]" id="url" size="30" value=" <?php echo $data['url'];?> "/></td>
                </tr>
            </table>

            <div class="bk15"></div>
            <input type="submit" id="dosubmit" name="dosubmit" class="button" value="<?php echo L('submit')?>" />
        </fieldset>
    </form>
</div>
</body>
</html>