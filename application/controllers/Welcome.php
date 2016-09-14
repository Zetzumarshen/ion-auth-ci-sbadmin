<?php

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library(array('ion_auth', 'form_validation'));

        // check if the user is logged in
        if(!$this->ion_auth->logged_in()){
            redirect('/auth/login','refresh');
        }

        // set js and css scripts to be loaded
        $this->data['css_scripts'] = array('startbootstrap/bootstrap', 'startbootstrap/metisMenu', 'startbootstrap/sb-admin-2', 'startbootstrap/morris', 'startbootstrap/font-awesome');
        $this->data['js_scripts'] = array('startbootstrap/jquery', 'startbootstrap/bootstrap', 'startbootstrap/metisMenu', 'startbootstrap/raphael', 'startbootstrap/morris', 'startbootstrap/morris-data', 'startbootstrap/sb-admin-2');

    }

    /**
     * private section of the website
     */
    public function index()
    {
        $this->load->helper('url');

        $this->load->view('sample_landing_page', $this->data);
    }

    public function test()
    {
        var_dump($_SERVER);
        var_dump($_ENV);
        echo getenv('dsagdsag');
        echo ENVIRONMENT;
    }

    public function info()
    {
        phpinfo();
    }

    public function test3(){

    }

    public function test2()
    {
        $rbac = new Rbac();
        // Create Role and Permission
        $perm_id = $rbac->Permissions->add('delete_posts', 'Can delete forum posts');
        $role_id = $rbac->Roles->add('forum_moderator', 'User can moderate forums');

        // Assign Permission to Role
        $rbac->Roles->assign($role_id, $perm_id);

        // Assign Role to User (The UserID is provided by the application's User Management System)
        $rbac->Users->assign($role_id, 5);
        $rbac->reset(TRUE);
        $this->load->view('welcome_message');
    }

}
