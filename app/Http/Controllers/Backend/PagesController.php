<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Pages::all();
        return view('backend.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pages::create([
            'name' => $request->name,
            'date' => $request->date,
            'state' => $request->state,
            'location' => $request->location,
            'price_type' => json_encode(array_filter($request->price_type)),
            'price' => json_encode(array_filter($request->price)),
            'description' => $request->description,
        ]);

        return redirect()->route('event.index')->with('message', 'Page Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Pages::find($id);
        return view('backend.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $page = Pages::find($id);
        $page->name      = $request->name;
        $page->title     = $request->title;
        $page->header    = $request->header;
        $page->video_link    = $request->video_link;

        if ($request->hasFile('banner')) {
            $page->banner      = $request->banner->store('assets/upload/pages/banner');
        }

        if ($request->hasFile('add_banner_1')) {
            $page->add_banner_1      = $request->add_banner_1->store('assets/upload/pages/adds');
        }

        if ($request->hasFile('add_banner_2')) {
            $page->add_banner_2      = $request->add_banner_2->store('assets/upload/pages/adds');
        }

        if ($request->hasFile('add_banner_3')) {
            $page->add_banner_3      = $request->add_banner_3->store('assets/upload/pages/adds');
        }

        if ($request->hasFile('add_banner_4')) {
            $page->add_banner_4     = $request->add_banner_4->store('assets/upload/pages/adds');
        }

        $page->save();
        return redirect()->route('page.index')->with('message', 'Page Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
