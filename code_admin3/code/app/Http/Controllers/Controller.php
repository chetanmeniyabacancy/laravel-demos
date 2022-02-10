<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use JoeDixon\Translation\Drivers\Translation;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Session;

class Controller extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    protected $data;
    private $translation;

    public function __construct(Translation $translation) {
        $this->translation = $translation;
        $this->data['languages'] = $this->translation->allLanguages();
        $this->middleware(function ($request, $next) {
            if (Session()->has('applocale')) {
                $this->data['current_language'] = Session()->get('applocale');
            } else { // This is optional as Laravel will automatically set the fallback language if there is none specified
                $this->data['current_language'] = config('app.fallback_locale');
            }
            return $next($request);
        });
    }

}
