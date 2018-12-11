<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_sys_class('model', '', 0);
class gametype_model extends model {
    public function __construct() {
        $this->db_config = pc_base::load_config('database');
        $this->db_setting = 'default';
        $this->table_name = 'game_type';
        parent::__construct();
    }

    /**
     * 添加内容
     *
     * @param $datas
     * @param $isimport 是否为外部接口导入
     */
    public function add_content($data,$isimport = 0) {
        if($isimport) $data = new_addslashes($data);
        $systeminfo = [];
//        $content_input = new content_input($this->modelid);
//        $inputinfo = $content_input->get($data,$isimport);
        //自动提取缩略图
//        if(isset($_POST['auto_thumb']) && $systeminfo['thumb'] == '' && isset($modelinfo['content'])) {
//            $content = $content ? $content : stripslashes($modelinfo['content']);
//            $auto_thumb_no = intval($_POST['auto_thumb_no'])-1;
//            if(preg_match_all("/(src)=([\"|']?)([^ \"'>]+\.(gif|jpg|jpeg|bmp|png))\\2/i", $content, $matches)) {
//                $systeminfo['thumb'] = $matches[3][$auto_thumb_no];
//            }
//        }
        $systeminfo['title'] = $data['title'];

        $systeminfo['url'] = $data['url'];

        $systeminfo['typeid'] = $data['typeid'];

        $systeminfo['color'] = $data['color'];
        $systeminfo['sort'] = $data['sort'];

        $systeminfo['inputtime'] = time();
        $systeminfo['updatetime'] = time();
        //主表
//        $tablename = $this->table_name = $this->db_tablepre.$this->model_tablename;
        $id = $this->insert($systeminfo,true);
//        $this->update($systeminfo,array('id'=>$id));
        return $id;
    }

    public function edit() {
        //设置cookie 在附件添加处调用
        param::set_cookie('module', 'content');
        if(isset($_POST['dosubmit']) || isset($_POST['dosubmit_continue'])) {
            define('INDEX_HTML',true);
            $id = $_POST['info']['id'] = intval($_POST['id']);
            $catid = $_POST['info']['catid'] = intval($_POST['info']['catid']);
            if(trim($_POST['info']['title'])=='') showmessage(L('title_is_empty'));
            $modelid = $this->categorys[$catid]['modelid'];
            $this->db->set_model($modelid);
            $this->db->edit_content($_POST['info'],$id);
            if(isset($_POST['dosubmit'])) {
                showmessage(L('update_success').L('2s_close'),'blank','','','function set_time() {$("#secondid").html(1);}setTimeout("set_time()", 500);setTimeout("window.close()", 1200);');
            } else {
                showmessage(L('update_success'),HTTP_REFERER);
            }
        } else {
            $show_header = $show_dialog = $show_validator = '';
            //从数据库获取内容
            $id = intval($_GET['id']);
            if(!isset($_GET['catid']) || !$_GET['catid']) showmessage(L('missing_part_parameters'));
            $catid = $_GET['catid'] = intval($_GET['catid']);

            $this->model = getcache('model', 'commons');

            param::set_cookie('catid', $catid);
            $category = $this->categorys[$catid];
            $modelid = $category['modelid'];
            $this->db->table_name = $this->db->db_tablepre.$this->model[$modelid]['tablename'];
            $r = $this->db->get_one(array('id'=>$id));
            $this->db->table_name = $this->db->table_name.'_data';
            $r2 = $this->db->get_one(array('id'=>$id));
            if(!$r2) showmessage(L('subsidiary_table_datalost'),'blank');
            $data = array_merge($r,$r2);
            $data = array_map('htmlspecialchars_decode',$data);
            require CACHE_MODEL_PATH.'content_form.class.php';
            $content_form = new content_form($modelid,$catid,$this->categorys);

            $forminfos = $content_form->get($data);
            $formValidator = $content_form->formValidator;
            include $this->admin_tpl('content_edit');
        }
        header("Cache-control: private");
    }

    /**
     * 修改内容
     *
     * @param $datas
     */
    public function edit_content($data,$id) {
        $us = $this->get_one(array('id'=>$id));
        if(!$us) return false;
        $systeminfo = [];
//        $content_input = new content_input($this->modelid);
//        $inputinfo = $content_input->get($data,$isimport);
        //自动提取缩略图
//        if(isset($_POST['auto_thumb']) && $systeminfo['thumb'] == '' && isset($modelinfo['content'])) {
//            $content = $content ? $content : stripslashes($modelinfo['content']);
//            $auto_thumb_no = intval($_POST['auto_thumb_no'])-1;
//            if(preg_match_all("/(src)=([\"|']?)([^ \"'>]+\.(gif|jpg|jpeg|bmp|png))\\2/i", $content, $matches)) {
//                $systeminfo['thumb'] = $matches[3][$auto_thumb_no];
//            }
//        }
        $systeminfo['title'] = $data['title'];

        $systeminfo['url'] = $data['url'];

        $systeminfo['typeid'] = $data['typeid'];

        $systeminfo['color'] = $data['color'];
        $systeminfo['sort'] = $data['sort'];

        $systeminfo['inputtime'] = time();
        $systeminfo['updatetime'] = time();

        //主表
//        $tablename = $this->table_name = $this->db_tablepre.$this->model_tablename;
        $id = $this->update($systeminfo,array('id'=>$id));
//        $this->update($systeminfo,array('id'=>$id));
        return $id;
    }

    /**
     * 删除内容
     * @param $id 内容id
     * @param $file 文件路径
     * @param $catid 栏目id
     */
    public function delete_content($id) {
        $us = $this->get_one(array('id'=>$id));
        if(!$us) return false;

        //删除主表数据
        if ($this->delete(array('id'=>$id))) {
            return true;
        } else {
            return false;
        }
    }
}
?>