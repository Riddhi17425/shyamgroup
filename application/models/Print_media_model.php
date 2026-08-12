<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Print_media_model extends CI_Model
{

    public function get_all_images()
    {
        if (! $this->db->table_exists('print_media')) {
            return [];
        }

        return $this->db->order_by('id', 'ASC')->get('print_media')->result();
    }

    public function ensure_online_media_data()
    {
        if (! $this->db->table_exists('online_media')) {
            $this->db->query("CREATE TABLE IF NOT EXISTS online_media (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                source VARCHAR(255) DEFAULT NULL,
                description TEXT DEFAULT NULL,
                link TEXT DEFAULT NULL,
                image TEXT DEFAULT NULL,
                publish_date DATE DEFAULT NULL,
                status TINYINT(1) NOT NULL DEFAULT 1,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8");
        }

        $count = $this->db->count_all('online_media');
        if ($count === 0) {
            $this->db->insert_batch('online_media', [
                [
                    'title' => 'Trains at 220 kmph on Indian Railways soon! Cabinet approves Ahmedabad-Dholera semi high-speed rail project.',
                    'source' => 'Times of India',
                    'description' => 'Trains at the speed of 220 kmph may soon run on Indian Railways with the Cabinet Committee on Economic Affairs approving the Ahmedabad-Dholera semi high-speed rail project.',
                    'link' => 'https://timesofindia.indiatimes.com/business/india-business/trains-at-220-kmph-on-indian-railways-soon-cabinet-approves-ahmedabad-dholera-semi-high-speed-rail-project-check-details/articleshow/131062621.cms',
                    'image' => 'https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=900&q=80',
                    'publish_date' => '2026-05-13',
                ],
                [
                    'title' => 'Dholera smart city gets major infrastructure push for future mobility and industry growth.',
                    'source' => 'Business Standard',
                    'description' => 'The region is seeing strategic planning and industrial corridor connectivity that will strengthen the investment ecosystem around Dholera.',
                    'link' => '#',
                    'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=900&q=80',
                    'publish_date' => '2026-04-28',
                ],
            ]);
        }
    }

    public function get_all_online_media()
    {
        $this->ensure_online_media_data();

        if (! $this->db->table_exists('online_media')) {
            return [];
        }

        if ($this->db->field_exists('status', 'online_media')) {
            $this->db->where('status', 1);
        }

        $this->db->order_by('publish_date', 'DESC');
        $this->db->order_by('id', 'DESC');

        return $this->db->get('online_media')->result();
    }
}
