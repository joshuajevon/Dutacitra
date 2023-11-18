<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private function handleLanguageRedirect($page, Request $request)
    {
        $lang = $request->input('lang');

        // If 'lang' is not present or not valid, redirect with 'lang' set to 'id'
        if (!$lang || !in_array($lang, ['en', 'id'])) {
            return redirect()->route($page, ['lang' => 'id']);
        }

        // Pass the language variable to the view
        return view($page, ['lang' => $lang]);
    }

    public function welcome(Request $request)
    {
        return $this->handleLanguageRedirect('welcome', $request);
    }

    public function project(Request $request)
    {
        return $this->handleLanguageRedirect('project', $request);
    }

    public function product(Request $request)
    {
        return $this->handleLanguageRedirect('product', $request);
    }

    public function automaticSlidingDoors(Request $request)
    {
        return $this->handleLanguageRedirect('automatic-sliding-doors', $request);
    }

    public function automaticSwingDoors(Request $request)
    {
        return $this->handleLanguageRedirect('automatic-swing-doors', $request);
    }

    public function automaticRevolvingDoors(Request $request)
    {
        return $this->handleLanguageRedirect('automatic-revolving-doors', $request);
    }

    public function automaticHermeticDoors(Request $request)
    {
        return $this->handleLanguageRedirect('automatic-hermetic-doors', $request);
    }

    public function about(Request $request)
    {
        return $this->handleLanguageRedirect('about', $request);
    }

    public function contact(Request $request)
    {
        return $this->handleLanguageRedirect('contact', $request);
    }
}
