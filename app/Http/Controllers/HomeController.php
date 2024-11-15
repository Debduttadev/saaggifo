<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        //dd('this is home');
        return view('front.home');
    }

    public function aboutus()
    {
        //dd('this is home');
        return view('front.aboutus');
    }

    public function ourstory()
    {
        //dd('this is home');
        return view('front.ourstory');
    }

    public function groupofdirectors()
    {
        //dd('this is home');
        return view('front.groupofdirectors');
    }

    public function ourbusiness()
    {
        //dd('this is home');
        return view('front.ourbusiness');
    }

    public function ourcompanies()
    {
        //dd('this is home');
        return view('front.ourcompanies');
    }

    public function corporatesustainability()
    {
        //dd('this is home');
        return view('front.corporatesustainability');
    }

    public function healthsafetyandenvironment()
    {
        //dd('this is home');
        return view('front.healthsafetyandenvironment');
    }


    public function career()
    {
        //dd('this is home');
        return view('front.career');
    }


    public function investor()
    {
        //dd('this is home');
        return view('front.investor');
    }


    public function contactus()
    {
        //dd('this is home');
        return view('front.contactus');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function downloadpdf()
    {
        dd("fsdfsd");
        $path = public_path('front/doc/brouchure.pdf');
        $fileName = 'Sagitiles Digital catalog' . '.pdf';
        return response()->download($path, $fileName);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
