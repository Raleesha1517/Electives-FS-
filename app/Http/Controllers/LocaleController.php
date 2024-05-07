<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function __invoke(Request $request,$locale)
    {
        if (! in_array($locale, config('localization.locales'))) {
            abort(400);
        }
     
        session(['localization' => $locale]);

        if ($request->has('redirect') && $request->redirect === 'awareness') {
            return redirect('/awareness');
        }

        return redirect()->back();
    }
}
