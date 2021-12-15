<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Icon;
use App\Models\ServiceIcon;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Image;
use Illuminate\Support\Arr;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::with('image')->paginate(9);
        return view('admin.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_service = Service::all();
        $icon = Icon::all();
        return view('admin.service.create', compact('all_service', 'icon'));
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
            'stack_title_ru' => $request->stack_title_ru,
            'stack_title_uz' => $request->stack_title_uz,
            'stack_text_ru' => $request->stack_text_ru,
            'stack_text_uz' => $request->stack_text_uz,
            'parent_id' => $request->parent_id,
        ]);

        if ($request->icons != ''){
            $icons = $request->icons;

            foreach ($icons as $item){
                $icon = ServiceIcon::create([
                    'service_id' => $store->id,
                    'icon_id' => $item,
                ]);
            }
        }


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
        $get_category = Service::find($edit->parent_id);
        $all_service = Service::where('id', '!=', $id)->get();
        $all_icons = Icon::all();
        $checked = ServiceIcon::where('service_id', $id)->get();
        $checked_array = $checked->pluck('icon_id')->toArray();
        return view('admin.service.edit' , compact('edit', 'img1', 'img2', 'all_service', 'get_category', 'all_icons', 'checked_array'));
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
            'stack_title_ru' => $request->stack_title_ru,
            'stack_title_uz' => $request->stack_title_uz,
            'stack_text_ru' => $request->stack_text_ru,
            'stack_text_uz' => $request->stack_text_uz,
            'parent_id' => $request->parent_id,
        ]);

        $checked = ServiceIcon::where('service_id', $id)->get();
        foreach ($checked as $check)
        {
            $check->delete();
        }

        if ($request->icons != ''){
            $icons = $request->icons;

            foreach ($icons as $item){
                $icon = ServiceIcon::create([
                    'service_id' => $update->id,
                    'icon_id' => $item,
                ]);
            }
        }


        $image1 = $request->file('image1');
        $image2 = $request->file('image2');

        if ($request->hasFile('image1')){
            $polymorph = Image::where('imageable_type','=','App\Models\Service')->where('imageable_id', $id)->where('position', 'image1')->first();
            if (is_file('storage/uploads/'.$polymorph->filename)) {
                //foreach ($polymorph as $item){
                    unlink(public_path('storage/uploads/' . $polymorph->filename));
                //}
            }

            $path = $image1->store('uploads');
            $polymorph->update([
                'filename' => basename($path)
            ]);
        }

        if ($request->hasFile('image2')){
            $polymorph = Image::where('imageable_type','=','App\Models\Service')->where('imageable_id', $id)->where('position', 'image2')->first();
            if (is_file('storage/uploads/'.$polymorph->filename)) {
                //foreach ($polymorph as $item){
                    unlink(public_path('storage/uploads/' . $polymorph->filename));
                //}
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
        $checked = ServiceIcon::where('service_id', $id)->get();
        foreach ($checked as $check)
        {
            $check->delete();
        }
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
