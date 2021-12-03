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
            'tab1_ru' => $request->tab1_ru,
            'tab1_uz' => $request->tab1_uz,
            'tab2_ru' => $request->tab2_ru,
            'tab2_uz' => $request->tab2_uz,
            'tab3_ru' => $request->tab3_ru,
            'tab3_uz' => $request->tab3_uz,
            'link' => $request->link,
            'category' => $request->category,
        ]);

        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
        $image3 = $request->file('image3');

        if ($request->hasFile('image1')){

            $path = $image1->store('uploads');
            $img = new Image([
                'path' => $path,
                'position' => 'image1',
                'filename' => basename($path),
            ]);

            $store->images()->save($img);
        }

        if ($request->hasFile('image2')){

            $path = $image2->store('uploads');
            $img = new Image([
                'path' => $path,
                'position' => 'image2',
                'filename' => basename($path),
            ]);

            $store->images()->save($img);
        }

        if ($request->hasFile('image3')){

            $path = $image3->store('uploads');
            $img = new Image([
                'path' => $path,
                'position' => 'image3',
                'filename' => basename($path),
            ]);

            $store->images()->save($img);
        }

        //path = $image->storeAs('uploads',$request->title_ru.'.'.$image->getClientOriginalExtension());


        /*$images = $request->file('images');
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
        }*/

        return $store;
    }

    public function update($request, $id){
        $update = Portfolio::find($id);
        foreach ($update->images as $img){
            if (is_file('storage/uploads/'.$img->filename)) unlink(public_path('storage/uploads/'.$img->filename));
        }

        $update->update([
            'title_ru' => $request->title_ru,
            'title_uz' => $request->title_uz,
            'tab1_ru' => $request->tab1_ru,
            'tab1_uz' => $request->tab1_uz,
            'tab2_ru' => $request->tab2_ru,
            'tab2_uz' => $request->tab2_uz,
            'tab3_ru' => $request->tab3_ru,
            'tab3_uz' => $request->tab3_uz,
            'link' => $request->link,
            'category' => $request->category,
        ]);

        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
        $image3 = $request->file('image3');

        if ($request->hasFile('image1')){
            $polymorph = Image::where('imageable_type','=','App\Models\Portfolio')->where('imageable_id', $id)->where('position', 'image1')->first();
            if (is_file('storage/uploads/'.$polymorph->filename)) unlink(public_path('storage/uploads/'.$polymorph->filename));

            $path = $image1->store('uploads');
            $polymorph->update([
                'filename' => basename($path)
            ]);
        }

        if ($request->hasFile('image2')){
            $polymorph = Image::where('imageable_type','=','App\Models\Portfolio')->where('imageable_id', $id)->where('position', 'image2')->first();
            if (is_file('storage/uploads/'.$polymorph->filename)) unlink(public_path('storage/uploads/'.$polymorph->filename));

            $path = $image2->store('uploads');
            $polymorph->update([
                'filename' => basename($path)
            ]);
        }

        if ($request->hasFile('image3')){
            $polymorph = Image::where('imageable_type','=','App\Models\Portfolio')->where('imageable_id', $id)->where('position', 'image3')->first();
            if (is_file('storage/uploads/'.$polymorph->filename)) unlink(public_path('storage/uploads/'.$polymorph->filename));

            $path = $image3->store('uploads');
            $polymorph->update([
                'filename' => basename($path)
            ]);
        }

        /*if ($request->hasFile('images'))
        {
            $polymorph = Image::where('imageable_type','=','App\Models\Portfolio')->where('imageable_id', $id);
            $polymorph->delete();



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

                $update->images()->save($img);
            }
        }*/

        return $update;
    }

    public function delete($id){
        $delete = Portfolio::find($id);
        foreach ($delete->images as $img){
            unlink(public_path('storage/uploads/'.$img->filename));
        }

        $polymorph = Image::where('imageable_type','=','App\Models\Portfolio')->where('imageable_id', $id);
        $polymorph->delete();
        $delete->images()->delete();
        $delete->delete();

        return $delete;
    }

}
