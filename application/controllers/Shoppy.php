<?php
  class Shoppy extends CI_Controller
  {
    function index()
    {
		  $this->load->model('product_model');
		  $data['product']=$this->product_model->get_product();
      $this->load->view('main',$data);
    }
    function admin_view()
    {
      $this->load->view('admin_main');
    }
    function product_view($a)
    {
        if ($a==1)
        {
          $this->load->model('Product_model');
          $a=$this->Product_model->product_view($a);
          $this->session->set_userdata('product',$a);
          // $d=$this->session->userdata('product');

          $this->load->view('shop');
        }
        if ($a==2)
        {
          $this->load->model('Product_model');
          $a=$this->Product_model->product_view($a);
          $this->session->set_userdata('product',$a);
          $this->load->view('shop');
        }
        if ($a==3)
        {
          $this->load->model('Product_model');
          $a=$this->Product_model->product_view($a);
          $this->session->set_userdata('product',$a);
          $this->load->view('shop');
        }
        if ($a==4)
        {
          $this->load->model('Product_model');
          $a=$this->Product_model->product_view($a);
          $this->session->set_userdata('product',$a);
          $this->load->view('shop');
        }
        if ($a==5)
        {
          $this->load->model('Product_model');
          $a=$this->Product_model->product_view($a);
          $this->session->set_userdata('product',$a);
          $this->load->view('shop');
        }
        if ($a==6)
        {
          $this->load->model('Product_model');
          $a=$this->Product_model->product_view($a);
          $this->session->set_userdata('product',$a);
          $this->load->view('shop');
        }
        if ($a==7)
        {
          $this->load->model('Product_model');
          $a=$this->Product_model->product_view($a);
          $this->session->set_userdata('product',$a);
          $this->load->view('shop');
        }
        if ($a==8)
        {
          $this->load->model('Product_model');
          $a=$this->Product_model->product_view($a);
          $this->session->set_userdata('product',$a);
          $this->load->view('shop');
        }
        if ($a==9)
        {
          $this->load->model('Product_model');
          $a=$this->Product_model->product_view($a);
          $this->session->set_userdata('product',$a);
          $this->load->view('shop');
        }
        if ($a==10)
        {
          $this->load->model('Product_model');
          $a=$this->Product_model->product_view($a);
          $this->session->set_userdata('product',$a);
          $this->load->view('shop');
        }
        if ($a==11)
        {
          $this->load->model('Product_model');
          $a=$this->Product_model->product_view($a);
          $this->session->set_userdata('product',$a);
          $this->load->view('shop');
        }
        if ($a==12)
        {
          $this->load->model('Product_model');
          $a=$this->Product_model->product_view($a);
          $this->session->set_userdata('product',$a);
          $this->load->view('shop');
        }

    }
    function product_details_view($p_id)
    {
        // if($this->session->userdata('id')!='')
        // {
        $this->load->model('Product_model');
        // $id=$this->session->userdata('id');
        $data['product']=$this->Product_model->get_each_product($p_id);
        $this->load->view('product-details',$data);
        // }
        // else
        // {
        //   $this->load->view('main');
        // }
    }



    function product_details()
    {
      $this->load->view('product-details');
    }
    function profile_view()
    {
      $this->load->view('seller_profile');
    }
    function category()
    {
      $this->load->model('product_model');
      $data['product']=$this->product_model->get_product();
      $this->load->view('category',$data);
    }
    function seller_log()
    {
      $this->load->view('header_logout');
      $this->load->view('seller_login');
    }
    function seller_signup()
    {
      $this->load->view('header_logout');
      $this->load->view('seller_signup');
    }
    function load_cart()
    {
    if($this->session->userdata('id')!=''){
      $this->load->model('Model2');
      $order_data['data'] = $this->Model2->get_details();
      $this->load->view('cart',$order_data);
    }
    else if($this->session->userdata('product_id')!=''){
      $a = $this->session->userdata('product_id');
      $this->load->model('Model2');
      $order_data['data'] = $this->Model2->details_unlogged($a);
      $this->load->view('cart',$order_data);
    }
    else{
    $this->load->view('cart');
    }
    }
    function order()
    {
      $this->load->model('Model2');
      if($this->session->userdata('product_id')!=''){
        $ids = $this->session->userdata('product_id');
        $name = $this->input->post('name');
        $add1 = $this->input->post('address1');
        $add2 = $this->input->post('address2');
        $phone = $this->input->post('phone');
        $a = $this->Model2->order_confirm_unlogged($ids, $name, $add1, $add2, $phone);
        // $this->Model2->delete($ids);
        $this->session->unset_userdata('product_id');
        if($a == 1)
        {
          $this->session->set_flashdata('order_msg',"Order Confirmed");
          redirect('Shoppy/load_cart');

        }
      }
      else{
      $name = $this->input->post('name');
      $add1 = $this->input->post('address1');
      $add2 = $this->input->post('address2');
      $phone = $this->input->post('phone');
      $user_id = $this->session->userdata('id');
      $product_details = $this->Model2->get_details();
      foreach ($product_details as $value)
      {
        $id = $value['id'];
        $a = $this->Model2->order_confirm($id, $user_id, $name, $add1, $add2, $phone);
        $this->Model2->delete($id);
      }
      if($a == 1)
      {
        $this->session->set_flashdata('order_msg',"Order Confirmed");
        redirect('Shoppy/load_cart');
        // $this->load->view('cart');
      }

    }
    }
    function delete_item($p_id)
    {
      if($this->session->userdata('product_id')!=''){
        $a = $this->session->userdata('product_id');
        $array = explode(',',$a);
        $array = array_diff($array,array($p_id));
        $c = implode(',',$array);
        $this->session->set_userdata('product_id',$c);
          redirect('Shoppy/load_cart');
      }
      else{
      $this->load->model('Model2');
      $this->Model2->delete($p_id);
      redirect('Shoppy/load_cart');
    }
    }
    function logout()
    {
      $this->session->sess_destroy();
      redirect('Shoppy/seller_log');
    }
    function search_data()
    {
      $data = $this->input->post('data');
      $this->load->model('model1');
      $result = $this->model1->search_result($data);
      foreach ($result as $value)
      {?>
        <div><?php echo $value['name'];?></div>
        <?php echo "<br>";
      }
    }
    function search()
    {
        $this->load->model('Model1');
        $search=$this->input->post('searchtext');
        $data['search']=$this->Model1->Search($search);
        $this->load->view('search',$data);

    }
    // function search_data1()
    // {
    //   $data = $this->input->post('data1');
    //   $this->load->model('model1');
    //   $result = $this->model1->search_result($data);
    //   foreach ($result as $value)
    //   {
    //     <div><?php echo $value['name'];
    //     <?php echo "<br>";
    //   }
    // }
    // function search11()
    // {
    //     $this->load->model('Model1');
    //     $search=$this->input->post('searchtext11');
    //     $data['search1']=$this->Model1->Search($search);
    //     $this->load->view('search',$data);
    // }
    function add_item()
    {
      $this->load->view('product');
    }
        function seller_add_item(){
          $this->load->view('seller_product');
        }
        function seller_edit(){
          $this->load->view('seller_edit');
        }

        function extract_numbers($string)
          {
          preg_match_all('/([\d]+)/', $string, $match);
          return $match[0];
          }
          function seller_log_back(){
            $this->load->model('Model1');
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $status = $this->Model1->get_log($email, $password);
            // $status1 = substr($status,0,5);
            // $id = substr($status,5);
            $i = $this->extract_numbers($status);
            $id = implode(',',$i);
            $status1 = rtrim($status,"$id");
            if($status1 == "Not_exist"){
                $msg = "Email you provide is not exist in our database";
                $this->session->set_flashdata('msg',$msg);
                redirect('Shoppy/seller_log');
            }
            else if($status1 == "Valid"){
              $this->session->set_userdata('id',$id);
              redirect('Shoppy/profile_view');
            }
            else if($status1 == "Invalid"){
              $msg = "Wrong email or password";
              $this->session->set_flashdata('msg',$msg);
              redirect('Shoppy/seller_log');
            }
          }
    function signup_insert()
    {
      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $password =md5($this->input->post('password'));
      $this->load->model('Model1');
      $status = $this->Model1->insert($name, $email, $password);
      if($status == 0)
      {
        $msg = "Insertion Failed for some technical issue, Please try again.";
        $this->session->set_flashdata('insert_failed',$msg);
        redirect('Shoppy/seller_signup');
      }
      else
      {
        redirect('Shoppy/seller_log');
      }
    }
    function image_upload()
    {
      $a = $this->do_upload();
      $name = $a['upload_data']['file_name'];
      $this->db->set('image', $name);
      $mail = $this->session->userdata('mail');
      $this->db->where('email', $mail);
      $this->db->update('seller');
      redirect('Shoppy/profile_view');
    }
    function do_upload()
    {
      $config['upload_path'] = './public/uploads/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['overwrite'] = TRUE;
      $config['encrypt_name'] = FALSE;
      $config['remove_spaces'] = TRUE;
      if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('img'))
      {
      $error = array('error' => $this->upload->display_errors());
      print_r($error);
      }
      else
      {
      return array('upload_data' => $this->upload->data());
      }
    }
  	function add_to_cart($p_id)
    {
      $this->load->model('Model2');
      $this->Model2->update_order($p_id);
      redirect('Shoppy/index');
  	}
    function product()
    {
      $this->load->view('shop');
    }
    function cart()
    {
      $this->load->view('cart');
    }
    function checkout()
    {
      $this->load->model('Model2');
      if($this->session->userdata('product_id')!=''){
        $pd = $this->session->userdata('product_id');
          $order_data['data'] = $this->Model2->details_unlogged($pd);
          $this->load->view('checkout',$order_data);
      }
      else{
      $order_data['data'] = $this->Model2->get_details();
      $this->load->view('checkout',$order_data);
      }
    }
    function contact()
    {
      $this->load->view('contact-us');
    }
    function error()
    {
      $this->load->view('404');
    }
    function analyze_seller(){
      $id = $this->session->userdata('id');
      $this->load->model('Model2');
      $a['product'] = $this->Model2->sales_info($id);
      $this->load->view('analyze',$a);
    }
    function seller_update(){
      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $designation = $this->input->post('designation');
      $status = $this->input->post('status');
      $password = $this->input->post('password');
      $this->load->model('Model2');
      $this->Model2->update($name, $email, $designation, $status, $password);
      redirect('Shoppy/profile_view');
    }
    function view_update(){
      $this->load->view('product_update');
    }
    function product_update($id){
      $img = $this->do_upload();
      $this->db->where('id',$id);
      $a = $img['upload_data']['file_name'];
      $data = array('image'=>$a);
      $this->db->update('product',$data);
      redirect('Shoppy/view_update');
    }
  }
 ?>
