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
        $this->db = pc_base::load_model('test_model');
        $data = $this->db->select();
        include template('test', 'index');

    }
}