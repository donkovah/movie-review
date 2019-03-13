<?php
class Reviews_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

	public function get_reviews($slug = FALSE)
	{
	        if ($slug === FALSE)
	        {
		        $this->db->select('review_name, review_synopsis, review_date, first_name, last_name, categories_name, review_date, (select count(*) from comments where comment_id = review_category_id) as comments FROM reviews left join users on users.id = review_user_id 
		        	join categories on categories_id = review_category_id', FALSE);
				$query = $this->db->get();
                return $query->result_array();
	        }

	        $this->db->select('(SELECT review_name, review_synopsis, review_date, first_name, last_name, (select count * from comments where comment.id = review_category_id) as comments FROM reviews WHERE reviews.id = '.$id.')', FALSE);
			$query = $this->db->get('reviews');
			var_dump($query);
			die();

// 	        $query = $this->db
// 	        	->get_where('reviews', array('id' => $slug))
// 	        	->join('comments', 'comments.id = review.id', 'left');
// ;
	        return $query->row_array();
	}
}