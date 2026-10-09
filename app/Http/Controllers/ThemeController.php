<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ThemeController extends Controller
{
    
    public function index(Request $request){
       $themes = new LengthAwarePaginator(
            [],
            0,
            12,
            LengthAwarePaginator::resolveCurrentPage(),
            [
                'path' => $request->url(),
                'query' => $request->query(),
            ]
        );

        $categories = [
            'CRM',
            'E-Commerce',
            'Analytics',
            'Finance',
            'HR',
            'Project Management',
        ];

        $technologies = [
            'HTML',
            'Bootstrap',
            'Laravel',
            'React',
            'Vue',
        ];

        $features = [
            'Responsive',
            'Dark Mode',
            'Charts',
            'Data Tables',
        ];

        return view('frontend.pages.themes.index', compact(
            'themes',
            'categories',
            'technologies',
            'features'
        ));
    }
    public function show(){
        return view('frontend.pages.themes.show');
    }
}
