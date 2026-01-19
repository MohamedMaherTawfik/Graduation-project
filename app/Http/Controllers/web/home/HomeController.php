<?php

namespace App\Http\Controllers\web\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function profile()
    {
        return view('home.profile');
    }

    public function who()
    {
        $title = ' من نحن : قصتنا ورسالتنا ';
        $subtitle = ' نؤمن بأن الغذاء حق أساسي لكل إنسان';
        return view('home.who', compact('title', 'subtitle'));
    }

    public function donate()
    {
        $title = ' كيف يمكنك التبرع بخطوات بسيطه ؟';
        $subtitle = 'عمليه تبرع سهله و شفافه لضمان وصلو مساعداتك لمن يحتاجها';
        return view('home.donate', compact('title', 'subtitle'));
    }

    public function partners()
    {
        $title = 'شركاؤنا في العطاء';
        $subtitle = ' نقدم شراكاتنا مع الجمعيات الرائده لضمان وصول تبراعتكم الي مستحقيها';
        return view('home.partners', compact('title', 'subtitle'));
    }

    public function contact()
    {
        $title = ' تواصل معنا';
        $subtitle = 'نحن هنا للاجابه علي استفساراتكم لا تترددو في التواصل معنا';
        return view('home.contact', compact('title', 'subtitle'));
    }


}