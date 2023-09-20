<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cart_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->library('cart');
    }
    
    public function products_count($lang = null)    {

        if ($lang != null) {
            $this->db->join('translations', 'translations.for_id = products.id', 'left');
            $this->db->where('translations.abbr', $lang);
            $this->db->where('translations.type', 'product');
        }
        
        $query = $this->db->get('products');
        return $this->db->count_all_results('products');
        return $query->result_array();
    }
    
    public function get_products($limit = null, $start = null)    {
        
        if ($limit !== null && $start !== null) {
            $this->db->limit($limit, $start);
        }

        $this->db->select('products.id,products.image, products.quantity, translations.title,
            translations.price, translations.old_price, products.url');
    }
/**   
    public function getSeo($page, $abbr)
    {
        $this->db->where('type', $page);
        $this->db->where('abbr', $abbr);
        $query = $this->db->get('translations');
        $arr = array();
        if ($query !== false) {
            foreach ($query->result_array() as $row) {
                $arr['title'] = $row['title'];
                $arr['description'] = $row['description'];
            }
        }
        return $arr;
    }
        public function get_one_product($id, $lang)    {
        $this->db->where('products.product_id', $id);
        $this->db->select('products.*, translations.title,translations.description, translations.price, translations.old_price, products.url, trans2.name as categorie_name');
        $this->db->join('translations', 'translations.for_id = products.id', 'left');
        $this->db->where('translations.abbr', $lang);
        $this->db->where('translations.type', 'product');
        $this->db->join('translations as trans2', 'trans2.for_id = products.shop_categorie', 'inner');
        $this->db->where('trans2.abbr', $lang);
        $this->db->where('visibility', 1);
        $query = $this->db->get('products');
        return $query->row_array();
    }
    
    public function getShopCategories()    {

        $query = $this->db->query('SELECT kuva.*, (SELECT name FROM translations WHERE for_id = sub_for AND type="shop_categorie" AND abbr = translations_first.abbr) as sub_is FROM translations as translations_first INNER JOIN shop_categories ON shop_categories.id = translations_first.for_id WHERE type="shop_categorie"');
        $arr = array();
        foreach ($query->result() as $shop_categorie) {
            $arr[$shop_categorie->for_id]['info'][] = array(
                'abbr' => $shop_categorie->abbr,
                'name' => $shop_categorie->name
            );

            $arr[$shop_categorie->for_id]['sub'][] = $shop_categorie->sub_is;
        }

        return $arr;

    }
            
    public function get_items($array_items, $lang)    {
        $this->db->select('kuva.kuvanro, kuva.kuvanimi, kuva.kokonro, kuva.tilausnro');
        $this->db->from('kuva');
        if (count($array_items) > 1) {
            $i = 1;
            $where = '';
            foreach ($array_items as $id) {
                $i == 1 ? $open = '(' : $open = '';
                $i == count($array_items) ? $or = '' : $or = ' OR ';
                $where .= $open . 'products.id = ' . $id . $or;
                $i++;
            }
            $where .= ')';
            $this->db->where($where);
        } else {
            $this->db->where('products.id =', current($array_items));
        }
        $this->db->join('translations', 'translations.for_id = products.id', 'inner');
        $this->db->where('translations.abbr', $lang);
        $this->db->where('translations.type', 'product');
        $query = $this->db->get();
        return $query->result_array();
    }
*/
}
    