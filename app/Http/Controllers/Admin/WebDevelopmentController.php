<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebDevelopment;
use App\Http\Requests\WebDevelopmentRequest;
use App\Models\Image;

class WebDevelopmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main_item = WebDevelopment::find(1);
        $web_dev = WebDevelopment::where('id', '>', 1)->with('image')->paginate(9);
        return view('admin.web_development.index', compact('main_item', 'web_dev'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.web_development.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WebDevelopmentRequest $request)
    {
        //dd($request->file('image')->store('usoft'));
        $store = WebDevelopment::create([
            'title_ru' => $request->title_ru,
            'title_uz' => $request->title_uz,
            'description_ru' => $request->description_ru,
            'description_uz' => $request->description_uz,
        ]);

        $image = $request->file('image');

        $path = $image->store('uploads');
        $img = new Image([
            'path' => $path,
            'filename' => basename($path)
        ]);

        $store->image()->save($img);

        return redirect(route('web-development.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = WebDevelopment::find($id);
        return view('admin.web_development.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = WebDevelopment::find($id);
        $img = Image::where('imageable_type','=','App\Models\WebDevelopment')->where('imageable_id', $id)->first();
        return view('admin.web_development.edit' , compact('edit', 'img'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WebDevelopmentRequest $request, $id)
    {

        $update = WebDevelopment::find($id);

        $update->update([
            'title_ru' => $request->title_ru,
            'title_uz' => $request->title_uz,
            'description_ru' => $request->description_ru,
            'description_uz' => $request->description_uz,
        ]);

        $image = $request->file('image');

        if ($request->hasFile('image')){
            $polymorph = Image::where('imageable_type','=','App\Models\WebDevelopment')->where('imageable_id', $id)->first();
            if (is_file('storage/uploads/'.$polymorph->filename)) {
                unlink(public_path('storage/uploads/' . $polymorph->filename));
            }

            $path = $image->store('uploads');
            $polymorph->update([
                'filename' => basename($path)
            ]);
        }



        return redirect(route('web-development.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = WebDevelopment::find($id);
        $polymorph = Image::where('imageable_type','=','App\Models\WebDevelopment')->where('imageable_id', $id);
        foreach ($delete->image as $item){
            unlink(public_path('storage/uploads/'.$item->filename));
        }
        $polymorph->delete();
        $delete->image()->delete();
        $delete->delete();
        return redirect(route('web-development.index'));
    }



    public function main_item(Request $request){
        $item = WebDevelopment::find(1);

        $item->update([
            'title_ru' => $request->title_ru,
            'title_uz' => $request->title_uz,
        ]);

        return redirect()->back();
    }
}
