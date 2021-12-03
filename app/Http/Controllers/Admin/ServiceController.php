<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main_item = Service::find(1);
        $service = Service::where('id', '>', 1)->with('image')->paginate(9);
        return view('admin.service.index', compact('main_item', 'service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = Service::create([
            'title_ru' => $request->title_ru,
            'title_uz' => $request->title_uz,
            'description_ru' => $request->description_ru,
            'description_uz' => $request->description_uz,
            'text_ru' => $request->text_ru,
            'text_uz' => $request->text_uz,
        ]);

        $image1 = $request->file('image1');
        $image2 = $request->file('image2');

        if ($request->hasFile('image1')){

            $path = $image1->store('uploads');
            $img = new Image([
                'path' => $path,
                'position' => 'image1',
                'filename' => basename($path),
            ]);

            $store->image()->save($img);
        }

        if ($request->hasFile('image2')){

            $path = $image2->store('uploads');
            $img = new Image([
                'path' => $path,
                'position' => 'image2',
                'filename' => basename($path),
            ]);

            $store->image()->save($img);
        }

        return redirect(route('service.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Service::find($id);
        $image1 = Image::where('imageable_type','=','App\Models\Service')->where('imageable_id', $id)->where('position', 'image1')->get();
        $image2 = Image::where('imageable_type','=','App\Models\Service')->where('imageable_id', $id)->where('position', 'image2')->get();
        return view('admin.service.show', compact('show','image1', 'image2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Service::find($id);
        $img1 = Image::where('imageable_type','=','App\Models\Service')->where('imageable_id', $id)->where('position', 'image1')->first();
        $img2 = Image::where('imageable_type','=','App\Models\Service')->where('imageable_id', $id)->where('position', 'image2')->first();
        return view('admin.service.edit' , compact('edit', 'img1', 'img2'));
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
        $update = Service::find($id);

        $update->update([
            'title_ru' => $request->title_ru,
            'title_uz' => $request->title_uz,
            'description_ru' => $request->description_ru,
            'description_uz' => $request->description_uz,
            'text_ru' => $request->text_ru,
            'text_uz' => $request->text_uz,
        ]);

        $image1 = $request->file('image1');
        $image2 = $request->file('image2');

        if ($request->hasFile('image1')){
            $polymorph = Image::where('imageable_type','=','App\Models\Service')->where('imageable_id', $id)->where('position', 'image1')->first();
            if (is_file('storage/uploads/'.$polymorph->filename)) {
                foreach ($polymorph as $item){
                    unlink(public_path('storage/uploads/' . $item->filename));
                }
            }

            $path = $image1->store('uploads');
            $polymorph->update([
                'filename' => basename($path)
            ]);
        }

        if ($request->hasFile('image2')){
            $polymorph = Image::where('imageable_type','=','App\Models\Service')->where('imageable_id', $id)->where('position', 'image2')->first();
            if (is_file('storage/uploads/'.$polymorph->filename)) {
                foreach ($polymorph as $item){
                    unlink(public_path('storage/uploads/' . $item->filename));
                }
            }

            $path = $image2->store('uploads');
            $polymorph->update([
                'filename' => basename($path)
            ]);
        }

        /*if ($request->hasFile('image')){
            $polymorph = Image::where('imageable_type','=','App\Models\Service')->where('imageable_id',$id);
            foreach ($update->image as $item){
                unlink('storage/uploads/'.$item->filename);
            }


            $image = $request->file('image');
            $path = $image->store('uploads');
            $polymorph->update([
                'filename' => basename($path)
            ]);
        }*/

        return redirect(route('service.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Service::find($id);
        $polymorph = Image::where('imageable_type','=','App\Models\Service')->where('imageable_id', $id);
        foreach ($delete->image as $item){
            unlink(public_path('storage/uploads/'.$item->filename));
        }
        $polymorph->delete();
        $delete->image()->delete();
        $delete->delete();
        return redirect(route('service.index'));
    }

    public function main_item(Request $request){
        $item = Service::find(1);

        $item->update([
            'title_ru' => $request->title_ru,
            'title_uz' => $request->title_uz,
        ]);

        return redirect()->back();
    }
}
