<?php
class AuthModel extends CI_Model
{
    function login($table,$where)
    {
        return $this->db->get_where($table,$where);
    }
}