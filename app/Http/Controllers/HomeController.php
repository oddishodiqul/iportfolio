<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Education;
use App\Models\PersonalInfo;
use App\Models\Portfolio;
use App\Models\Services;
use App\Models\Skill;
use App\Models\SocialMedia;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $skills = Skill::all();
        $social_media = SocialMedia::all();
        $info = PersonalInfo::first();
        $services = Services::all();
        $works = WorkExperience::all();
        $educations = Education::all();
        $certificates = Certificate::all();
        $portfolios = Portfolio::all();

        return view('index', [
            'personal' => $info,
            'works' => $works,
            'services' => $services,
            'certificates' => $certificates,
            'portfolios' => $portfolios,
            'skills' => $skills,
            'educations' => $educations,
            'social_media' => $social_media, 
        ]);
    }

    public function details ($slug) {
        $info = PersonalInfo::all();
        $social_media = SocialMedia::all();
        $portfolios = Portfolio::where('slug', $slug)->first();
        
        return view('portfolio-details', [
            'portfolios' => $portfolios,
            'info' => $info,
            'social_media' => $social_media, 
        ]);
    }
}
