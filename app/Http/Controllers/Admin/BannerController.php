<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::paginate(9);
        return view('admin.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_ru' => 'required',
            'title_uz' => 'required',
            'description_ru' => 'required',
            'description_uz' => 'required',
            'link' => 'required',
            'image' => 'image:jpg,jpeg,png'
        ]);
        $store = Banner::create([
            'title_ru' => $request->title_ru,
            'title_uz' => $request->title_uz,
            'description_ru' => $request->description_ru,
            'description_uz' => $request->description_uz,
            'link' => $request->link
        ]);

        //path = $image->storeAs('uploads',$request->title_ru.'.'.$image->getClientOriginalExtension());
        $images = $request->file('images');
//        $store->images()->create([
//            'filename' => $filename,
//        ]);

        foreach ($images as $image){
//            $filename = $request->title_ru.'.'.$request->file('images')->getClientOriginalExtension();

            $path = $image->store('uploads');
            $img = new Image([
                'path' => $path,
                'filename' => basename($path)
            ]);

            $store->images()->save($img);
        }

        return redirect(route('banner.index'));
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
        $edit= Banner::find($id);
        return view('admin.banner.edit', compact('edit'));
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
        $banner = Banner::find($id);
        foreach ($banner->images as $img){
            unlink(public_path('storage/uploads/'.$img->filename));
        }

        $banner->update([
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link
        ]);

        $image = $request->file('image');
        $path = $image->storeAs('uploads',$request->title.'.'.$image->getClientOriginalExtension());
        $filename = $request->title.'.'.$image->getClientOriginalExtension();

        $banner->images()->update([
            'filename' => $filename,
        ]);
        return redirect(route('banner.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        foreach ($banner->images as $img){
            unlink(public_path('storage/uploads/'.$img->filename));
        }
        $banner->images()->delete();
        $banner->delete();
        return redirect(route('banner.index'));
    }
}
