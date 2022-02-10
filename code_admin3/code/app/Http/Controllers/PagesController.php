<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller {

    public function home() {
        return view('pages.home', $this->data);
    }

    public function whoWeAre() {
        return view('pages.who_we_are', $this->data);
    }

    public function technologyOffice() {
        return view('pages.technology_office', $this->data);
    }

    public function partnership() {
        return view('pages.partnership', $this->data);
    }

    public function internetOfThings() {
        return view('pages.internet_of_things', $this->data);
    }

    public function uiUxDesign() {
        return view('pages.ui_ux_design',$this->data);
    }

    public function platformDevelopment() {
        return view('pages.platform_development', $this->data);
    }

    public function machineLearningAndIA() {
        return view('pages.machine_learning_and_IA', $this->data);
    }

    public function locationBasedServices() {
        return view('pages.location_based_services', $this->data);
    }

    public function teams() {
        return view('pages.teams', $this->data);
    }

    public function operations() {
        return view('pages.operations', $this->data);
    }

    public function devops() {
        return view('pages.devops', $this->data);
    }

    public function cloudDevelopmentServices() {
        return view('pages.cloud_development_services', $this->data);
    }

    public function cybersecurity() {
        return view('pages.cybersecurity', $this->data);
    }

    public function cloudConsultingServices() {
        return view('pages.cloud_consulting_services', $this->data);
    }

    public function bigDataAnalytics() {
        return view('pages.big_data_analytics', $this->data);
    }

    public function blockchain() {
        return view('pages.blockchain', $this->data);
    }

    public function engineering() {
        return view('pages.engineering', $this->data);
    }

    public function digitalConsulting() {
        return view('pages.digital_consulting', $this->data);
    }

    public function advancedTechnology() {
        return view('pages.advanced_technology', $this->data);
    }

}
