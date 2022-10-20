<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $skills = [
            [
                'title' => 'HTML',
                'image' => 'images/familiar/html.png',
                'desc' => 'Hypertext Markup Language.'
            ], [
                'title' => 'CSS',
                'image' => 'images/familiar/css.png',
                'desc' => 'Cascading Style Sheets. <br />preprocessor : SCSS.'
            ], [
                'title' => 'JavaScript',
                'image' => 'images/familiar/javascript.png',
                'desc' => 'Programming language.'
            ], [
                'title' => 'PHP',
                'image' => 'images/familiar/php.png',
                'desc' => 'Hypertext Preprocessor. <br /> Programming language.'
            ], [
                'title' => 'Laravel',
                'image' => 'images/familiar/laravel.png',
                'desc' => 'PHP Framework.'
            ], [
                'title' => 'Sails.js',
                'image' => 'images/familiar/sails.png',
                'desc' => 'MVC Framework for Node.js.'
            ], [
                'title' => 'Node.js',
                'image' => 'images/familiar/node.png',
                'desc' => 'Cross-platform JavaScript runtime environment.'
            ], [
                'title' => 'Java',
                'image' => 'images/familiar/java.png',
                'desc' => 'Programming language.'
            ], [
                'title' => 'React',
                'image' => 'images/familiar/react.png',
                'desc' => 'A JavaScript library for building user interfaces.'
            ], [
                'title' => 'PostgreSQL',
                'image' => 'images/familiar/postgresql.png',
                'desc' => 'Database.'
            ], [
                'title' => 'MySQL',
                'image' => 'images/familiar/mysql.png',
                'desc' => 'Database.'
            ], [
                'title' => 'Redis',
                'image' => 'images/familiar/redis.png',
                'desc' => 'Database.'
            ], [
                'title' => 'Docker',
                'image' => 'images/familiar/docker.png',
                'desc' => 'A platform for developing, and running applications.'
            ], [
                'title' => 'GitHub',
                'image' => 'images/familiar/github.png',
                'desc' => 'Version control system.'
            ], [
                'title' => 'Angular',
                'image' => 'images/familiar/angular.png',
                'desc' => 'Still learning in Udemy.'
            ], [
                'title' => 'Vue',
                'image' => 'images/familiar/vue.png',
                'desc' => 'Still learning in Udemy.'
            ], [
                'title' => 'GO',
                'image' => 'images/familiar/go.png',
                'desc' => 'Still learning in Udemy.'
            ], [
                'title' => 'CodeIgniter',
                'image' => 'images/familiar/codeigniter.png',
                'desc' => 'Still learning in Udemy.'
            ], [
                'title' => 'Python',
                'image' => 'images/familiar/python.png',
                'desc' => 'Still learning in Udemy.'
            ],
        ];

        $data['skills'] = $skills;

        return view('main', $data);
    }
}
