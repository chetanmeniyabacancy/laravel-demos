<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PagesController extends BaseController {

    public function home() {
        return view('pages.home');
    }
    
    public function whoWeAre() {
        return view('pages.who_we_are');
    }
    
    public function technologyOffice() {
        return view('pages.technology_office');
    }
    
    public function partnership() {
        return view('pages.partnership');
    }
    
    public function internetOfThings() {
        return view('pages.internet_of_things');
    }
    
    public function  uiUxDesign() {
        return view('pages.ui_ux_design');
    }
    
    public function  platformDevelopment() {
        return view('pages.platform_development');
    }
    
    public function machineLearningAndIA() {
        return view('pages.machine_learning_and_IA');
    }
    
    public function locationBasedServices() {
        return view('pages.location_based_services');
    }
    
    public function teams() {
        return view('pages.teams');
    }
    
    public function operations() {
        return view('pages.operations');
    }
    
    public function devops() {
        return view('pages.devops');
    }
    
    public function cloudDevelopmentServices() {
        return view('pages.cloud_development_services');
    }
    
    public function cybersecurity() {
        return view('pages.cybersecurity');
    }
    
    public function cloudConsultingServices() {
        return view('pages.cloud_consulting_services');
    }
    
    public function bigDataAnalytics() {
        return view('pages.big_data_analytics');
    }
    
    public function blockchain() {
        return view('pages.blockchain');
    }
    
    public function engineering() {
        return view('pages.engineering');
    }
    
    public function digitalConsulting() {
        return view('pages.digital_consulting');
    }
    
    public function advancedTechnology() {
        return view('pages.advanced_technology');
    }
    
}
