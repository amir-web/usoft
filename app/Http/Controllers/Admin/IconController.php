<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Icon;
use App\Models\Image;
use Illuminate\Http\Request;

class IconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icon = Icon::with('image')->paginate(10);
        return view('admin.icon.index', compact('icon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.icon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = Icon::create([
            'title' => $request->title,
        ]);

        $image = $request->file('image');

        $path = $image->store('uploads');
        $img = new Image([
            'path' => $path,
            'filename' => basename($path)
        ]);

        $store->image()->save($img);

        return redirect(route('icon.index'));
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
        $edit = Icon::find($id);
        $img = Image::where('imageable_type','=','App\Models\Icon')->where('imageable_id', $id)->first();
        return view('admin.icon.edit', compact('edit', 'img'));
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
        $update = Icon::find($id);

        $update->update([
            'title' => $request->title,
        ]);

        $image = $request->file('image');

        if ($request->hasFile('image')){
            $polymorph = Image::where('imageable_type','=','App\Models\Icon')->where('imageable_id', $id)->first();
            if (is_file('storage/uploads/'.$polymorph->filename)) {
                unlink(public_path('storage/uploads/' . $polymorph->filename));
            }

            $path = $image->store('uploads');
            $polymorph->update([
                'filename' => basename($path)
            ]);
        }



        return redirect(route('icon.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Icon::find($id);
        $polymorph = Image::where('imageable_type','=','App\Models\Icon')->where('imageable_id', $id);
        foreach ($delete->image as $item){
            unlink(public_path('storage/uploads/'.$item->filename));
        }
        $polymorph->delete();
        $delete->image()->delete();
        $delete->delete();
        return redirect(route('icon.index'));
    }
}
