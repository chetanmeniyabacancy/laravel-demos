<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JoeDixon\Translation\Drivers\Translation;
use JoeDixon\Translation\Http\Requests\LanguageRequest;
use App\Http\Controllers\Controller;
use Session;
use Redirect;


class LanguageController extends Controller {

    private $translation;

    public function __construct(Translation $translation) {
        $this->translation = $translation;
    }

    public function index(Request $request) {
        $languages = $this->translation->allLanguages();

        return view('translation::languages.index', compact('languages'));
    }

    public function create() {
        return view('translation::languages.create');
    }

    public function store(LanguageRequest $request) {
        $this->translation->addLanguage($request->locale, $request->name);

        return redirect()
                        ->route('languages.index')
                        ->with('success', __('translation::translation.language_added'));
    }

    public function switchLang($lang) {
        Session::put('applocale', $lang);
        return Redirect::back();
    }

}
