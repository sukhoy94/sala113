<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class RulesController extends Controller
{
    public function index(): Factory|View|Application
    {
        $locale = LaravelLocalization::getCurrentLocale();

        return view('rules-' . $locale);
    }
}
