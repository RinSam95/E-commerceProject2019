<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cart extends CI_controller {
    public function __construct() {
        parent::__construct();
        //Cart -kirjastossa on oma sessio määritelmä olemassa
        $this->load->library('cart');
        $this->load->model('Printshop_model');
        $this->load->model('Cart_model');
    }
    
    
    public function login_check()    {
        if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    //    $this->username = $this->session->userdata('login');
    }
    
    
    public function logout()    {
        $this->session->sess_destroy();
        redirect('index');
    }

    public function pages()    {

        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Pages Manage';
        $head['description'] = '!';
        $head['keywords'] = '';
        $data['tunnus'] = $this->Admin_model->getPages(null, true);
        
        if (isset($_POST['pname'])) {
            $this->User_model->setPage($_POST['pname']);
            $this->saveHistory('Add new page with name - ' . $_POST['pname']);
            redirect('cart');
        }

        if (isset($_GET['delete'])) {
            $this->User_model->deletePage($_GET['delete']);
            $this->saveHistory('Delete page');
            redirect('cart');

        }
        $this->load->view('templates/header');
        $this->load->view('cart', $data);
        $this->load->view('templates/footer');
        $this->saveHistory('Go to Pages manage');
    }
    
    /**
    public function get_data() {
        $user_data = array(
            'tunnus' => $this->input->post('tunnus'),
            'salasana' => $this->input->post('salasana'),
            'asnimi' => $this->input->post('asnimi'),
            'sposti' => $this->input->post('sposti'),
            'osoite' => $this->input->post('osoite')
            ),
        $size_data = array(
            'kokonro' => $this->input->post('kokonro'),
            'kokonimi' => $this->input->post('kokonimi'),
            ),
        $product_data = array(
            'kuvanro' => $this->input->post('kuvanro'),
            'kuvanimi' => $this->input->post('kuvanimi'),
            'kokonro' => $this->input->post('kokonro'),
            'tilausnro' => $this->input->post('tilausnro')
            ),
        $post_data = array(
            'tunnus' => $this->input->post('tunnus'),
            'postitmp' => $this->input->post('postitmp'),
            'postinro' => $this->input->post('postinro'),
            ),
        $order_data = array(
            'tilausnro' => $this->input->post('tilausnro'),
            'tunnus' => $this->input->post('tunnus'),
            'tilauspvm' => $this->input->post('tilauspvm'),
            'tila' => $this->input->post('tila')
            )
        return $user_data, $size_data, $product_data, $post_data, $order_data;
    }
    */
    
    public function index() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['title'] = 'Welcome!';
    //    $this->load->view('templates/header', $data);
        $this->load->view('cart', $data);
    //    $this->load->view('templates/footer', $data);
    }
    
        public function add() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['title'] = 'Welcome!';
        $data['item'] = $this->input->post('item');
        $items_array = $this->session->get_userdata('cart_item');
        if (isset($items_array)) {
            array_push($items_array, $data['item']);
            $this->session->set_userdata('cart_item', $items_array);
        } else {
            $new_array = array();
            array_push($new_array, $data['item']);
            $this->session->set_userdata('cart_item', $new_array);
        }
    //    $this->load->view('templates/header', $data);
        $this->load->view('cart_add', $data);
    //    $this->load->view('templates/footer', $data);
    }
    
/**
    public function view_product($id)    {
        $user_data = array();
        $size_data = array();
        $product_data = array();
        $post_data = array();
        $order_data = array();
        
        $head = array();
        $data['product'] = $this->Cart_model->get_one_product($id, $this->my_lang);
        $data['sameCagegoryProducts'] = $this->Cart_model->sameCagegoryProducts($this->my_lang, $data['product']['shop_categorie'], $id);
        if ($data['product'] === null) {
            show_404();
        }
        $this->load->vars($vars);
        $head['title'] = $data['product']['title'];
        $description = url_title(character_limiter(strip_tags($data['product']['description']), 130));
        $description = str_replace("-", " ", $description) . '..';
        $head['description'] = $description;
        $head['keywords'] = str_replace(" ", ",", $data['product']['title']);
        $this->render('view_product', $head, $data);
    }
    
    public function manage_shopping_cart()
    { // called from add/delete to cart buttons
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
        if ($_POST['action'] == 'add') {
            if (!isset($_SESSION['cart']))
                $_SESSION['cart'] = array();
            @$_SESSION['cart'][] = (int) $_POST['article_id'];
        }
        if ($_POST['action'] == 'remove') {
            if (($key = array_search($_POST['article_id'], $_SESSION['shopping_cart'])) !== false) {
                unset($_SESSION['shopping_cart'][$key]);
            }
        }
        @set_cookie('shopping_cart', serialize($_SESSION['shopping_cart']), 2678400); // 1 month expire time
        $result = 0;
        if (!empty($_SESSION['shopping_cart'])) {
            $result = $this->getCartItems();
        }
        // get items from db and add him to cart from ajax
        loop_items($result, $this->currency, base_url($this->lang_link . '/'));
    }   
    
    public function set_to_cart($post)    {  
        
        if (!is_numeric($post['article_id'])) {
            return false;
        }

        $query = $this->db->insert('cart', array(
            'session_id' => session_id(),
            'article_id' => $post['article_id'],
            'time' => time()
        ));
        return $query;
    }
    
    public function delete_from_cart()    {
        $backTo = $_GET['back-to'];
        $count = count(array_keys($_SESSION['shopping_cart'], $_GET['delete-product']));
        $i = 1;
        do {
            if (($key = array_search($_GET['delete-product'], $_SESSION['shopping_cart'])) !== false) {
                unset($_SESSION['shopping_cart'][$key]);
            }
            $i++;
        } while ($i <= $count);
        @set_cookie('shopping_cart', serialize($_SESSION['shopping_cart']), 2678400); // 1 month expire time
        $this->session->set_flashdata('deleted', lang('deleted_product_from_cart'));
        redirect($this->lang_link . '/' . $backTo);
    }
    */
}