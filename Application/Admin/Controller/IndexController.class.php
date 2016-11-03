<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
//        dump(get_defined_constants(true));
        $this->display();
    }

    function head()
    {
        $this->display();
    }

    function left()
    {
        $this->display();
    }

    function right()
    {
        $this->display();
    }

    function logout()
    {
        session(null);
        $this->redirect('Manager/login');
    }

}