<?php

namespace app\controller;

use support\Request;

class IndexController
{
    public function index(Request $request) {

        return view('index');
    }

    public function about(Request $request) {
        return view('about');
    }

    public function faqs(Request $request) {
        return view('faqs');
    }


    public function products(Request $request) {
        return view('products');
    }

    public function developers(Request $request) {
        return view('developers');
    }

    public function contact(Request $request) {
        return view('contact');
    }



    public function legal(Request $request) {
        return view('legal');
    }

    public function signup(Request $request) {
        return view('signup');
    }

    public function privacy_policy(Request $request) {
        return view('privacy-policy');
    }

    public function thank_you(Request $request) {
        return view('signup');
    }

    public function terms_of_service(Request $request) {
        return view('terms-of-service');
    }
}
