<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
class mytest extends admin
{
    function __construct()
    {
        $admin_username = param::get_cookie('admin_username');
        $userid = $_SESSION['userid'];
        $this->db = pc_base::load_model('badword_model');
        parent::__construct();
    }

    function init()
    {
        $page = isset($_GET['page']) && intval($_GET['page']) ? intval($_GET['page']) : 1;
        $infos = $pages = '';
        $infos = $this->db->listinfo($where = '', $order = 'badid DESC', $page, $pages = '13');
        $pages = $this->db->pages;
        $level = array(1 => L('general'), 2 => L('danger'));
        $big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=admin&c=badword&a=add\', title:\'' . L('badword_add') . '\', width:\'450\', height:\'180\'}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', L('badword_add'));
        include $this->admin_tpl('badword_list');
    }

    public function mylist() {
        $myvar = 'hello world!this is a example!';
        echo $myvar;
        include $this->admin_tpl('mytest_admin_list');

    }


}