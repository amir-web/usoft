<?php


namespace App\Repositories\Admin;


use App\Models\Image;
use App\Models\Portfolio;

class PortfolioRepository
{

    public function store($request){
        $store = Portfolio::create([
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

            $path = '/public/usoft/my_uploads/';
            $img = new Image([
                'path' => $path,
                'filename' => basename($path)
            ]);

            $store->images()->save($img);
        }

        return $store;
    }

    public function update($request, $id){
        $update = Portfolio::find($id);
        foreach ($update->images as $img){
            unlink('/public/usoft/my_uploads/'.$img->filename);
        }

        $update->update([
            'title_ru' => $request->title_ru,
            'title_uz' => $request->title_uz,
            'description_ru' => $request->description_ru,
            'description_uz' => $request->description_uz,
            'link' => $request->link
        ]);

        if ($request->hasFile('images'))
        {
            $polymorph = Image::where('imageable_id', $id);
            $polymorph->delete();



            $images = $request->file('images');
//        $store->images()->create([
//            'filename' => $filename,
//        ]);

            foreach ($images as $image){
//            $filename = $request->title_ru.'.'.$request->file('images')->getClientOriginalExtension();

                $path = '/public/usoft/my_uploads/';
                $img = new Image([
                    'path' => $path,
                    'filename' => basename($path)
                ]);

                $update->images()->save($img);
            }
        }

        return $update;
    }

    public function delete($id){
        $delete = Portfolio::find($id);
        foreach ($delete->images as $img){
            unlink(public_path('storage/uploads/'.$img->filename));
        }

        $polymorph = Image::where('imageable_id', $id);
        $polymorph->delete();
        $delete->images()->delete();
        $delete->delete();

        return $delete;
    }

}
