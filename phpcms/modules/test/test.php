<?php
defined('IN_PHPCMS') or exit('No permission resources.');
//模型缓存路径
define('CACHE_MODEL_PATH',PHPCMS_PATH.'caches'.DIRECTORY_SEPARATOR.'caches_model'.DIRECTORY_SEPARATOR.'caches_data'.DIRECTORY_SEPARATOR);

pc_base::load_app_class('admin', 'admin', 0);
pc_base::load_sys_class('form', '', 0);
class test extends admin {
    private $db;

    function __construct() {
//        $this->db = pc_base::load_model('test_model');
        $this->db = pc_base::load_model('content_model');
        $this->siteid = get_siteid();
        $this->url_list_type = array('1'=>L('sequence'), '2'=>L('multiple_pages'), '3'=>L('single_page'), '4'=>'RSS');

        $this->_userid = param::get_cookie('_userid');
        $this->_username = param::get_cookie('_username');
        $this->_groupid = param::get_cookie('_groupid');
    }
    public function init() {
        $result = $this->db->select();
        var_dump($result);
    }
    public function mylist() {
        $this->db = pc_base::load_model('test_model');
        $data = $this->db->select();
        include template('test', 'index');
    }
    public function test() {
        $this->db = pc_base::load_model('test_model');
        $data = $this->db->select();
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $pages = $this->db->pages;
        pc_base::load_sys_class('format', '', 0);
        include $this->admin_tpl('test_list');
    }

    /**
     * node list
     */
    public function manage() {
        $this->db = pc_base::load_model('test_model');
        $data = $this->db->select();
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $pages = $this->db->pages;
        pc_base::load_sys_class('format', '', 0);
        include $this->admin_tpl('test_list');
    }

    /**
     * add node
     */
    public function add() {
        header("Cache-control: private");
        if(isset($_POST['dosubmit'])) {
            if(trim($_POST['info']['title'])=='') showmessage(L('title_is_empty'));
            if(trim($_POST['info']['link'])=='') showmessage(L('link_is_empty'));
            if(trim($_POST['info']['thumb'])=='') showmessage(L('thumb_is_empty'));

            $this->page_db = pc_base::load_model('test_model');
            if ($this->page_db->add_content($_POST['info'])) {
                showmessage(L('operation_success'), '?m=test&c=test&a=manage');
            } else {
                showmessage(L('operation_failure'), HTTP_REFERER);
            }
        } else {
            $show_dialog = $show_validator = true;
            include $this->admin_tpl('test_add');
        }

    }

    public function edit() {
        //设置cookie 在附件添加处调用
        param::set_cookie('module', 'content');
        if(isset($_POST['dosubmit']) || isset($_POST['dosubmit_continue'])) {
            if(trim($_POST['info']['title'])=='') showmessage(L('title_is_empty'));
            if(trim($_POST['info']['link'])=='') showmessage(L('link_is_empty'));
            if(trim($_POST['info']['thumb'])=='') showmessage(L('thumb_is_empty'));

            $id = intval($_GET['id']);
            $this->page_db = pc_base::load_model('test_model');
            if ($this->page_db->edit_content($_POST['info'],$id)) {
                showmessage(L('update_success').L('2s_close'),'blank','','','function set_time() {$("#secondid").html(1);}setTimeout("set_time()", 500);setTimeout("window.close()", 1200);');
            } else {
                showmessage(L('operation_failure'), HTTP_REFERER);
            }
        } else {
//            $show_header = $show_dialog = $show_validator = '';
//            //从数据库获取内容
            $id = intval($_GET['id']);
//            if(!isset($_GET['catid']) || !$_GET['catid']) showmessage(L('missing_part_parameters'));
//            $catid = $_GET['catid'] = intval($_GET['catid']);
//
//            $this->model = getcache('model', 'commons');
//
//            param::set_cookie('catid', $catid);
//            $category = $this->categorys[$catid];
//            $modelid = $category['modelid'];
//            $this->db->table_name = $this->db->db_tablepre.$this->model[$modelid]['tablename'];
//            $r = $this->db->get_one(array('id'=>$id));
//            $this->db->table_name = $this->db->table_name.'_data';
            $this->page_db = pc_base::load_model('test_model');

             $data = $this->page_db->get_one(array('id'=>$id));
             $info = $data;
//            if(!$r2) showmessage(L('subsidiary_table_datalost'),'blank');
//            $data = array_merge($r,$r2);
//            $data = array_map('htmlspecialchars_decode',$data);
//            require CACHE_MODEL_PATH.'content_form.class.php';
//            $content_form = new content_form($modelid,$catid,$this->categorys);
//
//            $forminfos = $content_form->get($data);
//            $formValidator = $content_form->formValidator;
            include $this->admin_tpl('test_edit');
        }
        header("Cache-control: private");
    }

    public function del() {

        $id = intval($_GET['id']);
        $this->page_db = pc_base::load_model('test_model');
        if ($this->page_db->delete_content($id)) {
            showmessage(L('operation_success'), '?m=test&c=test&a=manage');
        } else {
            showmessage(L('operation_failure'), HTTP_REFERER);
        }
    }

}