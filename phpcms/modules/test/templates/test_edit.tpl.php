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
    <form action="?m=test&c=test&a=edit&id=<?php echo $id; ?>" method="post" id="myform">
        <fieldset>
            <legend><?php echo L('comments_module_configuration')?></legend>
            <table width="100%"  class="table_form">
                <tr>
                    <th width="120"><?php echo L('comment_on_whether_to_allow_visitors')?>：</th>
                    <td class="y-bg">
                        <input type="text" class="input-text" name="info[title]" id="name" size="30" value=" <?php echo $data['title'];?> "/></td>
                </tr>
                <tr>
                    <th width="120"><?php echo L("check_comment")?>：</th>
                    <td class="y-bg">
                        <input type="text" class="input-text" name="info[link]" id="link" size="30" value=" <?php echo $data['url'];?> "/></td>
                </tr>
                <tr>
                    <th width="120"><?php echo L('content_thumb')?>：</th>
                    <td class="y-bg">
                        <div class="upload-pic img-wrap"><div class="bk10"></div><input type="hidden" name="info[thumb]" value="<?php echo $info['thumb']?>" id="thumb">
                            <a href="javascript:;" onclick="javascript:flashupload('thumb_images', '<?php echo L('file_upload')?>','thumb',thumb_images,'1,jpg|jpeg|gif|bmp|png,300,300','content','39','<?php echo upload_key('1,jpg|jpeg|gif|bmp|png,300,300')?>')"><img src="<?php if($info['thumb']) { echo $info['thumb']; } else {?>statics/images/icon/upload-pic.png<?php }?>" id="thumb_preview" width="135" height="113" style="cursor:hand" /></a><input type="button" style="width: 66px;" class="button" onclick="crop_cut($('#thumb').val());return false;" value="<?php echo L('crop_thumb')?>"><script type="text/javascript">function crop_cut(id){
                                    if (id=='') { alert('<?php echo L('please_upload_thumb')?>');return false;}
                                    window.top.art.dialog({title:'<?php echo L('crop_thumb')?>', id:'crop', iframe:'index.php?m=content&c=content&a=public_crop&module=phpcms&picurl='+encodeURIComponent(id)+'&input=thumb&preview=thumb_preview', width:'680px', height:'480px'}, 	function(){var d = window.top.art.dialog({id:'crop'}).data.iframe;
                                        d.uploadfile();return false;}, function(){window.top.art.dialog({id:'crop'}).close()});
                                };</script></div>

                    </td>
                </tr>
            </table>

            <div class="bk15"></div>
            <input type="submit" id="dosubmit" name="dosubmit" class="button" value="<?php echo L('submit')?>" />
        </fieldset>
    </form>
</div>
</body>
</html>