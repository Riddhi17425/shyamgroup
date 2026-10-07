<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('projects_model');
        $this->load->model('Blog_model');
    }

    // START - SITEMAP STARTS FROM HERE
    public function index()
    {
        $base_url = rtrim(base_url(), '/');

        // FIXED FALLBACK DATE
        $fallback_date = '2026-10-03';

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // HOMEPAGE
        $xml .= '<url>';
        $xml .= '<loc>' . $base_url . '/</loc>';
        $xml .= '<lastmod>' . $fallback_date . '</lastmod>';
        $xml .= '<priority>1.00</priority>';
        $xml .= '</url>';

        // OUR-PROJECT PAGE
        $static_pages = [
            'our-projects',
        ];

        foreach ($static_pages as $page)
        {
            $xml .= '<url>';
            $xml .= '<loc>' . $base_url . '/' . $page . '</loc>';
            $xml .= '<lastmod>' . $fallback_date . '</lastmod>';
            $xml .= '<priority>0.60</priority>';
            $xml .= '</url>';
        }

        // PROJECTS
        $projects = $this->projects_model->get_projects_list();

        foreach ($projects as $project)
        {
            if (!empty($project['slug']))
            {
                // USE DATABASE DATE IF AVAILABLE
                // OTHERWISE USE FALLBACK DATE
                $project_date = !empty($project['updated_at'])
                    ? date('Y-m-d', strtotime($project['updated_at']))
                    : $fallback_date;

                $xml .= '<url>';
                $xml .= '<loc>' . $base_url . '/' . $project['slug'] . '</loc>';
                $xml .= '<lastmod>' . $project_date . '</lastmod>';
                $xml .= '<priority>0.80</priority>';
                $xml .= '</url>';
            }
        }

        // STATIC PAGES
        $static_pages = [
            'company-profile',
            'vision-and-mission',
            'team',
            'associate-team',
            'dholera-news',
            'dholera-videos',
            'pressrelease',
            'current-status-dholera',
            'tenders',
            'legal-documents',
            'testimonials',
            'certificate',
            'contact-us',
            'print-media',
            'awards',
            'gallery',
            'vender',
            'social-media',
            'blogs',
        ];

        foreach ($static_pages as $page)
        {
            $xml .= '<url>';
            $xml .= '<loc>' . $base_url . '/' . $page . '</loc>';
            $xml .= '<lastmod>' . $fallback_date . '</lastmod>';
            $xml .= '<priority>0.60</priority>';
            $xml .= '</url>';
        }

        // BLOGS
        $blogs = $this->Blog_model->get_blog_list();

        foreach ($blogs as $blog)
        {
            if (!empty($blog['url']))
            {
                // USE DATABASE DATE IF AVAILABLE
                // OTHERWISE USE FALLBACK DATE
                $blog_date = !empty($blog['updated_at'])
                    ? date('Y-m-d', strtotime($blog['updated_at']))
                    : $fallback_date;

                $xml .= '<url>';
                $xml .= '<loc>' . $base_url . '/blog/' . $blog['url'] . '</loc>';
                $xml .= '<lastmod>' . $blog_date . '</lastmod>';
                $xml .= '<priority>0.60</priority>';
                $xml .= '</url>';
            }
        }

        $xml .= '</urlset>';

        return $this->output
            ->set_content_type('application/xml')
            ->set_output($xml);
    }
    // END - SITEMAP ENDS HERE
}