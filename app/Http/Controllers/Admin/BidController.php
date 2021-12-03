<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('id_sort', 'desc') == 'desc'){
            $bid = Bid::orderBy('id', 'desc')->paginate(9);
        }
        if (request('id_sort', 'desc') == 'asc'){
            $bid = Bid::orderBy('id', 'asc')->paginate(9);
        }
        return view('admin.bid.index', compact('bid'));
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
        $bid = Bid::find($id);
        return view('admin.bid.edit', compact('bid'));
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
        /*$bid = Bid::find($id);
        $bid->update([
            'status' => $request->status
        ]);
        $bid->save();*/
        if ($request->ajax()){
            $bid = Bid::find($request->id);
            $bid->update([
                'status' => $request->val
            ]);
            return response()->json([
                'status' => 200
            ]);
        }
        //return redirect(route('bid.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bid = Bid::find($id);
        $bid->delete();
        return redirect(route('bid.index'));
    }

    public function filter_bid(Request $request){
       // dd($request->all());
        if (!$request->date_start == '' && !$request->date_end == ''){
            $result = Bid::whereBetween('created_at', [$request->date_start, date('Y-m-d 23:59:59', strtotime($request->date_end))])
                ->Where('status', $request->status)->orderBy('created_at', 'desc')
                ->paginate(9)->withQueryString();
        }else{
            $result = Bid::
                Where('status', $request->status)->orderBy('created_at', 'desc')
                ->paginate(9)->withQueryString();
        }

        if ($request->sort == 'id_desc'){
            $result = Bid::whereBetween('created_at', [$request->date_start, date('Y-m-d 23:59:59', strtotime($request->date_end))])
                ->Where('status', $request->status)->orderBy('id', 'desc')
                ->paginate(9)->withQueryString();
            return view('admin.bid.filter', compact('result'));
        }
        if ($request->sort == 'id_asc'){
            $result = Bid::whereBetween('created_at', [$request->date_start, date('Y-m-d 23:59:59', strtotime($request->date_end))])
                ->Where('status', $request->status)->orderBy('id', 'asc')
                ->paginate(9)->withQueryString();
            return view('admin.bid.filter', compact('result'));
        }
        if ($request->sort == 'name_desc'){
            $result = Bid::whereBetween('created_at', [$request->date_start, date('Y-m-d 23:59:59', strtotime($request->date_end))])
                ->Where('status', $request->status)->orderBy('name', 'desc')
                ->paginate(9)->withQueryString();
            return view('admin.bid.filter', compact('result'));
        }
        if ($request->sort == 'name_asc'){
            $result = Bid::whereBetween('created_at', [$request->date_start, date('Y-m-d 23:59:59', strtotime($request->date_end))])
                ->Where('status', $request->status)->orderBy('name', 'asc')
                ->paginate(9)->withQueryString();
            return view('admin.bid.filter', compact('result'));
        }



        return view('admin.bid.filter', compact('result'));
    }
}
