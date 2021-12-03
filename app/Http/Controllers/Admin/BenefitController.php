<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Benefit;
use App\Models\Image;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main_item = Benefit::find(1);
        $benefit = Benefit::where('id', '>', 1)->with('image')->paginate(9);
        return view('admin.benefit.index', compact('main_item', 'benefit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.benefit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = Benefit::create([
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

        return redirect(route('benefit.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Benefit::find($id);
        return view('admin.benefit.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Benefit::find($id);
        return view('admin.benefit.edit' , compact('edit'));
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
        $update = Benefit::find($id);

        $update->update([
            'title_ru' => $request->title_ru,
            'title_uz' => $request->title_uz,
            'description_ru' => $request->description_ru,
            'description_uz' => $request->description_uz,
        ]);

        if ($request->hasFile('image')){
            $polymorph = Image::where('imageable_type','=','App\Models\Benefit')->where('imageable_id',$id);
            foreach ($update->image as $item){
                unlink('storage/uploads/'.$item->filename);
            }


            $image = $request->file('image');
            $path = $image->store('uploads');
            $polymorph->update([
                'filename' => basename($path)
            ]);
        }


        return redirect(route('benefit.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Benefit::find($id);
        $polymorph = Image::where('imageable_type','=','App\Models\Benefit')->where('imageable_id', $id);
        foreach ($delete->image as $item){
            unlink(public_path('storage/uploads/'.$item->filename));
        }
        $polymorph->delete();
        $delete->image()->delete();
        $delete->delete();
        return redirect(route('benefit.index'));
    }


    public function main_item(Request $request){
        $item = Benefit::find(1);

        $item->update([
            'title_ru' => $request->title_ru,
            'title_uz' => $request->title_uz,
        ]);

        return redirect()->back();
    }
}
