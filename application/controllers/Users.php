<?php
class Users extends MY_controller
{
    public function index()
   {
       $this->load->view('users/articles');
    //    $this->load->helper('url');

    // public function Forgetpassword()
    // {
    //     $this->load->view('Forgetpassword');
    // }

   }
   public function fogetpassword()
    {
        $this->load->view('admin/fogetpassword');

        
    }

}
// public function revertToRegistration(){
//     $this->load->view('register');
// }

// }


?>