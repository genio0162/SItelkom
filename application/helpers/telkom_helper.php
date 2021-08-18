<?php

function cek_session()
{

    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('login');
    } else {
        $role_id = $ci->session->userdata('role');
        $id = $ci->session->userdata('username');
        $menu = $ci->uri->segment(1);
        $queryId = $ci->db->get_where('user', ['username' => $id])->row_array();


        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id_menu'];


        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('block/blocked');
        }
    }
}
