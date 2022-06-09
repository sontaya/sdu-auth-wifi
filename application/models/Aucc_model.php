<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Aucc_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_userinfo($params = array())
    {
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }

        $this->db->select('*', false);
        $this->db->from('userinfo');

        if (!empty($params['conditions']['username'])){
        $this->db->where('username', $params['conditions']['username']);
        }

        $query = $this->db->get();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;


    }

    function get_userexpire($params = array())
    {
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }

        $this->db->select('*', false);
        $this->db->from('radcheck');

        if (!empty($params['conditions']['username'])){
            $this->db->where('username', $params['conditions']['username']);
        }
            $this->db->where('attribute', 'Expiration');


        $query = $this->db->get();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;


    }

    function register($data) {

        $creationdate = date('Y-m-d H:i:s');
        // $expirationdate = date_create(date('Y-m-d H:i:s',strtotime('+2 hour',strtotime($creationdate))));
        // $expirationdate = "2020-02-15 23:59:00";

        $format = 'Y-m-d H:i:s';
        $expirationdate = DateTime::createFromFormat($format, '2020-02-16 23:00:00');
        $expirationdate_db = date_format($expirationdate,'d M Y H:i:s');

        $username = $data['regis_idcard'];
        $useremail = $data['regis_email'];
        $userpassword = $data['regis_password'];

        $userinfo_data = array(
          'username' => $username,
          'firstname' => $data['regis_name'],
          'lastname' => $data['regis_surname'],
          'email' => $useremail,
          'creationdate' => $creationdate,
          'creationby' => $data['regis_creationby']
        );
         $userinfo_result = $this->db->insert('userinfo', $userinfo_data);

        $userbillinfo_data = array(
          'username' => $username,
          'email' => $useremail,
          'creationdate' => $creationdate,
          'creationby' => $data['regis_creationby']
        );
         $userbillinfo_result = $this->db->insert('userbillinfo', $userbillinfo_data);


        $radcheck_pwddata = array(
          'username' => $username,
          'attribute' => 'MD5-Password',
          'op' => ':=',
          'value' => MD5($userpassword)
        );
         $radcheck_pwdresult = $this->db->insert('radcheck', $radcheck_pwddata);

        $radcheck_expdata = array(
          'username' => $username,
          'attribute' => 'Expiration',
          'op' => ':=',
          'value' => $expirationdate_db
        );
         $radcheck_expresult = $this->db->insert('radcheck', $radcheck_expdata);

        // $id = $this->db->insert_id();
        // return (isset($id)) ? $id : FALSE;
        return (isset($userinfo_result)) ? $userinfo_result : FALSE;
    }

    function renew($data){

        $creationdate = date('Y-m-d H:i:s');
        $expirationdate = date_create(date('Y-m-d H:i:s',strtotime('+2 hour',strtotime($creationdate))));
        $expirationdate_db = date_format($expirationdate,'d M Y H:i:s');

        $username = $data['regis_idcard'];
        $userpassword = $data['regis_password'];


        $radcheck_pwddata = array(
            'value' => MD5($userpassword)
        );
        $radcheck_pwdresult = $this->db->update('radcheck', $radcheck_pwddata, array('username'=>$username, 'attribute'=>'MD5-Password'));


        $radcheck_expdata = array(
            'value' => $expirationdate_db
        );
        $radcheck_expresult = $this->db->update('radcheck', $radcheck_expdata, array('username'=>$username, 'attribute'=>'Expiration'));

        return (isset($radcheck_expresult)) ? $radcheck_expresult : FALSE;
    }

}
