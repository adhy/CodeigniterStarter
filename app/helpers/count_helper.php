<?php

    function count_users()
    {
        $CI = & get_instance();
       return $CI->db->count_all('users');
    }
?>