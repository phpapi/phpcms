<?php
defined('IN_PHPCMS') or exit('No permission resources.');
class mytest {
    private $db;

    function __construct() {
//        $this->db = pc_base::load_model('test_model');
        $this->db = pc_base::load_model('content_model');
        $this->_userid = param::get_cookie('_userid');
        $this->_username = param::get_cookie('_username');
        $this->_groupid = param::get_cookie('_groupid');
    }
    public function init() {
        $result = $this->db->select();
        var_dump($result);
    }
    public function mylist() {
        $this->category_db = pc_base::load_model('category_model');
        $category = $this->category_db->select('`type`=0 AND `parentid`=0');
        $this->db = pc_base::load_model('test_model');
        $data = $this->db->select();
        $this->db = pc_base::load_model('gametype_model');
        $gametype = $this->db->select();
        $type = [1=>'热门单机',
            2=>'手游大作',
            3=>'大型网游',
            4=>'推荐页游',
            5=>'即将上市',
            6=>'游戏活动'];
        include template('test', 'index');

    }
}