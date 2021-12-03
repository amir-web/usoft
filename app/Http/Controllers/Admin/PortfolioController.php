<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;
use App\Models\Image;
use App\Models\Portfolio;
use App\Repositories\Admin\PortfolioRepository;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main_item = Portfolio::find(1);
        $portfolio = Portfolio::where('id', '>', 1)->with('images')->paginate(9);
        return view('admin.portfolio.index', compact('portfolio', 'main_item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioRequest $request)
    {
        $store = new PortfolioRepository();
        $store->store($request);
        /*dd($request->file('images'));*/
        /*$images = $request->file('images');

        foreach ($images as $item){
            dd($item->filename);
        }*/

        return redirect(route('portfolio.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Portfolio::find($id);
        $image1 = Image::where('imageable_type','=','App\Models\Portfolio')->where('imageable_id', $id)->where('position', 'image1')->get();
        $image2 = Image::where('imageable_type','=','App\Models\Portfolio')->where('imageable_id', $id)->where('position', 'image2')->get();
        $image3 = Image::where('imageable_type','=','App\Models\Portfolio')->where('imageable_id', $id)->where('position', 'image3')->get();
        return view('admin.portfolio.show', compact('show', 'image1','image2','image3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= Portfolio::find($id);
        return view('admin.portfolio.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PortfolioRequest $request, $id)
    {
        $update = new PortfolioRepository();
        $update->update($request, $id);

        return redirect(route('portfolio.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = new PortfolioRepository();
        $delete->delete($id);
        return redirect(route('portfolio.index'));
    }

    public function main_item(Request $request){
        $item = Portfolio::find(1);

        $item->update([
            'title_ru' => $request->title_ru,
            'title_uz' => $request->title_uz,
            'tab1_ru' => $request->tab1_ru,
            'tab1_uz' => $request->tab1_uz,
        ]);

        return redirect()->back();
    }
}
