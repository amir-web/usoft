<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Image;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::find(1);
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $update = About::find($id);
        $update->update([
            'title_ru' => $request->title_ru,
            'title_uz' => $request->title_uz,
            'description_ru' => $request->description_ru,
            'description_uz' => $request->description_uz,
        ]);

        $image = $request->file('about_image');

        if ($request->hasFile('about_image')){
            $polymorph = Image::where('imageable_type','=','App\Models\About')->where('imageable_id', $id);
            foreach ($polymorph as $item){
                unlink(public_path('storage/uploads/'.$item->filename));
            }

            $path = $image->store('uploads');
            $polymorph->update([
                'filename' => basename($path)
            ]);
        }

        return redirect(route('about.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
