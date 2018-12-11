<?php
/**
 * 后台友情链接，完整CURD
 */
defined('IN_PHPCMS') or exit('No permission resources.');

pc_base::load_app_class('admin', 'admin', 0);

class link extends admin {
    private $db, $admin_db;
    public $siteid;
    function __construct() {
        parent::__construct();
        $this->M = new_html_special_chars(getcache('link', 'commons'));
        $this->db = pc_base::load_model('link_model');
        $this->db2 = pc_base::load_model('type_model');
    }

    /**
     * 友情链接列表
     */
    public function init() {
        if($_GET['typeid'] != '') {
            $where = array('typeid'=>intval($_GET['typeid']), 'siteid'=>$this->get_siteid());
        } else {
            $where = array('siteid'=>$this->get_siteid());
        }
        $page = (isset($_GET['page']) && intval($_GET['page'])) ? intval($_GET['page']) : 1;
        $infos = $this->db->listinfo($where, $order = 'listorder DESC, linkid DESC', $page, $page = '9');
        $pages = $this->db->pages;
        $types = $this->db2->listinfo(array('module'=>ROUTE_M, 'siteid'=>$this->get_siteid()), $order = 'typeid DESC');
        $types = new_html_special_chars($types);
        $type_arr = array();
        foreach($types as $typeid=>$type) {
            $type_arr[$type['typeid']] = $type['name'];
        }
        $big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=link&c=link&a=add\', title:\''.L('link_add').'\', width:\'700\', height:\'450\'}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', L('link_add'));

        include $this->admin_tpl('link_list');
    }

    /* 判断标题重复和验证 */

    /* 添加分类时，验证分类名是否已存在 */

    /**
     * 添加友情链接
     */
    public function add() {
        if(isset($_POST['dosubmit'])) {
            $_POST['link']['addtime'] = SYS_TIME;
            $_POST['link']['siteid'] = $this->get_siteid();
            if(empty($_POST['link']['name'])) {
                showmessage(L('sitename_noempey'), HTTP_REFERER);
            } else {
                $_POST['link']['name'] = safe_replace($_POST['link']['name']);
            }
            if($_POST['link']['logo']) {
                $_POST['link']['logo'] = safe_replace($_POST['link']['logo']);
            }
            $data = new_addslashes($_POST['link']);
            $linkid = $this->db->insert($data, true);
            if( ! $linked) {
                return false;
            }
            $siteid = $this->get_siteid();
            //更新附件状态
            if(pc_base::load_config('system', 'attachment_stat') & $_POST['link']['logo']) {
                $this->attachment_db = pc_base::load_model('attachment_model');
                $this->attachment_db->api_update($_POST['link']['logo'], 'link-' . $linkid, 1);
            }
            showmessage(L('operation_success'), HTTP_REFERER, '', 'add');
        } else {
            $show_validator = $show_scroll = $show_header = true;
            pc_base::load_sys_class('form', '', 0);
            $siteid = $this->get_siteid();
            $types = $this->db2->get_types($siteid);
            include $this->admin_tpl('link_add');
        }
    }

    /* 异步更新排序 */

    /* 手动更新排序 */

    /* 添加友情链接分类 */

    /* 删除分类 */

    /* 分类管理 */

    /**
     * 修改友情链接分类
     */
    public function edit_type() {
        if(isset($_POST['dosubmit'])) {
            $typeid = intval($_GET['typeid']);
            if($typeid < 1) return false;
            if( ! is_array($_POST['type']) || empty($_POST['type'])) return false;
            if((!$_POST['type']['name']) || empty($_POST['type']['name'])) return false;
            $this->db2->update($_POST['type'], array('typeid'=>$typeid));
            showmessage(L('operation_success'),'?m=link&c=link&a=list_type','', 'edit');
        } else {
            $show_validator = $show_scroll = $show_header = true;
            //查询分类内容
            $info = $this->db2->get_one(array('typeid'=>$_GET['typeid']));
            if( ! $info) {
                showmessage(L('linktype_exit'));
                extract($info);
                include $this->admin_tpl('link_type_edit');
            }
        }
    }

    /**
     * 删除友情链接
     */
    public function delete() {
        if( ! isset($_GET['linkid']) || (empty($_GET['linkid']) && ! isset($_POST['linkid'])) || empty($_POST['linkid'])) {
            showmessage(L('illegal_parameters'), HTTP_REFERER);
        } else {
            if(is_array($_POST['linkid'])) {
                foreach($_POST['linkid'] as $linkid_arr) {
                    //批量删除友情链接
                    $this->db->delete(array('linkid'=>$linkid_arr));
                    //更新附件状态
                    if(pc_base::load_config('system', 'attachment_stat')) {
                        $this->attachment_db = pc_base::load_model('attachment_model');
                        $this->attachment_db->api_delete('link - '. $linkid_arr);
                    }
                }
                showmessage(L('operation_success', '?m=link&c=link'));
            } else {
                $linkid = intval($_GET['linkid']);
                if($linkid < 1) {
                    return false;
                }
            //删除友情链接
            $result = $this->db->delete(array('linkid'=>$linkid));
            //更新附件状态if(pc_base::load_config('system','attachment_stat')) {
            $this->attachment_db = pc_base::load_model('attachment_model');
            $this->attachment_db->api_delete('link-'.$linkid);
            }
            if($result){
                showmessage(L('operation_success'),'?m=link&c=link');
            }else {
                showmessage(L("operation_failure"),'?m=link&c=link');
            }
        }
        showmessage(L('operation_success'), HTTP_REFERER);
    }
}