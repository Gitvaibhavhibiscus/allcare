<?php

class Welcome_model extends CI_Model {
    public function get_testimonials(){
        $query = "SELECT id, name, message FROM testimonials WHERE isActive = 1 ORDER BY id DESC";
		$result = $this->db->query($query);
		return $result->result_array();
    }

    public function get_videos(){
        $query = "SELECT id, title, embed_link   FROM testimonials WHERE isActive = 1";
		$result = $this->db->query($query);
		return $result->result_array();
    }

    public function get_providers($condition=""){
        $query = "SELECT id, img, name, designation, bio, type  FROM providers WHERE isActive = 1 $condition";
		$result = $this->db->query($query);
		return $result->result_array();
    }

    public function get_blogs($condition=""){
        $query = "SELECT id, img, title, blog, category, dated, slug, meta_title, meta_keywords, meta_description  FROM blogs WHERE isActive = 1 $condition";
		$result = $this->db->query($query);
		return $result->result_array();
    }

    public function get_blogs_monthwise($condition=""){
        $query = "SELECT CONCAT(MONTHNAME(dated), ' ', YEAR(dated)) as date FROM blogs WHERE isActive = 1 $condition";
		$result = $this->db->query($query);
		return $result->result_array();
    }

    public function get_event($condition=""){
        $query = "SELECT * FROM events WHERE isActive = '1' $condition";
		$result = $this->db->query($query);
		return $result->result_array();
    }

    public function get_event_2($condition=""){
        $query = "SELECT * FROM events WHERE isActive = '2' $condition";
		$result = $this->db->query($query);
		return $result->result_array();
    }

    public function get_blog_catgories(){
        $query = "SELECT DISTINCT(category) FROM blogs WHERE isActive = 1 AND category IS NOT NULL";
		$result = $this->db->query($query);
        $categories = array();
        foreach(array_column($result->result_array(), 'category') as $category){
            foreach(explode(',', $category) as $cat){
                if(!in_array(trim($cat), $categories)){
                    $categories[] = trim($cat);
                }
            }
        }
		return $categories;
    }

    public function get_blog_months(){
        $query = "SELECT DISTINCT MONTH(`dated`) AS `Month`, YEAR(`dated`) AS `Year` FROM blogs";
		$result = $this->db->query($query);
        $monthsName = array(
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July ',
            'August',
            'September',
            'October',
            'November',
            'December',
        );
        
        $months = array();
        foreach($result->result_array() as $month){
            $months[] = date('F Y', strtotime($monthsName[$month['Month']-1] .' '. $month['Year']));
        }
		return $months;
    }
}

?>