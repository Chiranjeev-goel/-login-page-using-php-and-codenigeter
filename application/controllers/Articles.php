<?php
class Articles extends MY_controller
{
    public function index()

{
   $this->load->library('form_validation');
   $this->form_validation->set_rules('uname','username','required|alpha');
   $this->form_validation->set_rules('pass','password','required|max_length[12]');
   $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

   if($this->form_validation->run())
{
    $uname=$this->input->post('uname');
    $pass=$this->input->post('pass');
    // echo"Username is".$uname."</br>"."password is".$pass;
    $this->load->model('loginmodel');
     if($this->loginmodel->isvalidate($uname,$pass))
// {
//      $this->session->set_username('id',$uname);
//     return redirect('user');
// }
     {
        echo "details match";

     }
     else{
        echo "details not match";
     }
}


else
{
    

    $this->load->view('admin/login');
    


}

}
}






?>