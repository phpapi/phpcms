<?php defined('IN_ADMIN') or exit('No permission resources.');?>
<?php include $this->admin_tpl('header', 'admin');?>
<div class="pad-lr-10">

<form name="myform" action="?m=collection&c=node&a=del" method="post" onsubmit="return confirm('<?php echo L('sure_delete')?>')">
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th  align="left" width="20"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
			<th align="left">ID</th>
			<th align="left"><?php echo L('nodename')?></th>
			<th align="left"><?php echo L('lastdate')?></th>
			<th align="left"><?php echo L('content').L('operation')?></th>
			<th align="left"><?php echo L('operation')?></th>
		</tr>
	</thead>
<tbody>
<?php
	foreach($data as $k=>$v) {
?>
    <tr>
		<td align="left"><input type="checkbox" value="<?php echo $v['id']?>" name="id[]"></td>
		<td align="left"><?php echo $v['id']?></td>
		<td align="left"><?php echo $v['title']?><?php			echo '<img src="'.IMG_PATH.'icon/contribute.png" title="'.L('member_contribute').'">'; ?>
        </td>
		<td align="left"><?php echo format::date($v['updatetime'], 1)?></td>
		<td align="left">

		</td>
        <td align="left"><a href="javascript:edit(<?php echo $v['id']?>, '<?php echo  new_addslashes(new_html_special_chars($v['title']))?>')"><?php echo L('edit')?></a> |
            <?php if($v['siteid']!=1) { ?><a href="?m=test&c=test&a=del&id=<?php echo $v['id']?>" onclick="return confirm('<?php echo new_addslashes(new_html_special_chars(L('confirm', array('message'=>$v['name']))))?>')"><?php echo L('delete')?></a><?php } else { ?><font color="#cccccc"><?php echo L('delete')?></font><?php } ?></td>
    </tr>
<?php
	}

?>
</tbody>
</table>

<div class="btn">
<label for="check_box"><?php echo L('select_all')?>/<?php echo L('cancel')?></label> <input type="submit" class="button" name="dosubmit" value="<?php echo L('delete')?>"/>
 <input type="button" class="button" value="<?php echo L('import_collection_points')?>" onclick="import_spider()" />
</div>

<div id="pages"><?php echo $pages?></div>
</div>
</form>
</div>
<script type="text/javascript">
<!--
function edit(id, name) {
        window.top.art.dialog({title:'<?php echo L('edit')?>--'+name, id:'edit', iframe:'?m=test&c=test&a=edit&id='+id ,width:'500px',height:'400px'}, 	function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;
            var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}


function test_spider(id) {
	window.top.art.dialog({id:'test'}).close();
	window.top.art.dialog({title:'<?php echo L('data_acquisition_testdat')?>',id:'test',iframe:'?m=collection&c=node&a=public_test&id='+id,width:'700',height:'500'}, '', function(){window.top.art.dialog({id:'test'}).close()});
}

function copy_spider(id) {
	window.top.art.dialog({id:'test'}).close();
	window.top.art.dialog({title:'<?php echo L('copy_node')?>',id:'test',iframe:'?m=collection&c=node&a=copy&id='+id,width:'420',height:'120'}, function(){var d = window.top.art.dialog({id:'test'}).data.iframe;var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'test'}).close()});
}

function import_spider() {
	window.top.art.dialog({id:'test'}).close();
	window.top.art.dialog({title:'<?php echo L('import_collection_points')?>',id:'test',iframe:'?m=collection&c=node&a=node_import',width:'420',height:'200'}, function(){var d = window.top.art.dialog({id:'test'}).data.iframe;var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'test'}).close()});
}

window.top.$('#display_center_id').css('display','none');
//-->
</script>
</body>
</html>