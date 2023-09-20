<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Class of Printshop_model
 * 
 * @author Janne Pakaslahti, Jetro Tölli, Markus Ylisirniö, Samu Rintala, Mikael Leinonen
 */
class Printshop_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    public function getKoko(){
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get('koko');
        $result = $query->result();
        
        $cat_id = array('-SELECT SIZE-');
        $cat_name = array('-SELECT SIZE-');
        for ($i = 0; $i < count($result); $i++)
        {
            array_push($cat_id, $result[$i]->id);
            array_push($cat_name, $result[$i]->title);
        }
        return array_combine($cat_id, $cat_name);
    }
}
?>