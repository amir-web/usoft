<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Contact;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class UsoftController extends Controller
{
    public function main(){
        return view('usoft.main');
    }

    public function service(){
        return view('usoft.service');
    }

    public function about(){
        return view('usoft.about');
    }

    public function portfolio(){
        $portfolio = Portfolio::with('images')->paginate(9);
        return view('usoft.portfolio', compact('portfolio'));
    }

    public function contact(){
        $contact = Contact::find(1);
        return view('usoft.contact', compact('contact'));
    }

    public function bid(Request $request){
        /*$validation = $request->validate([
            'name'   => 'required',
            'number' => 'required|unique',
        ]);

        if ($validation->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validation->messages()
            ]);
        }

        Bid::create([
            'name' => $request->name,
            'number' => $request->number,
            'status' => 'Новый клиент'
        ]);*/

        if ($request->ajax()){
            $validation = Validator::make($request->all(), [
                'name' => 'required',
                'number' => 'required|unique:bids',
            ]);

            if ($validation->fails()){
                return response()->json([
                    'status' => 400,
                    'errors' => $validation->messages(),
                ]);
            }else{
                Bid::create([
                    'name' => $request->name,
                    'number' => $request->number,
                    'status' => 'Новый клиент'
                ]);

                return response()->json([
                    'status' => 200
                ]);
            }

        }

        return $request->all();
    }

    public function bid_modal(Request $request){

        if ($request->ajax()){
            $validation = Validator::make($request->all(), [
                'name' => 'required',
                'number' => 'required|unique:bids',
            ]);

            if ($validation->fails()){
                return response()->json([
                    'status' => 400,
                    'errors' => $validation->messages(),
                ]);
            }else{
                Bid::create([
                    'name' => $request->name,
                    'number' => $request->number,
                    'status' => 'Новый клиент'
                ]);

                return response()->json([
                    'status' => 200
                ]);
            }

        }

        return $request->all();
    }

    public function locale($locale){
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }

    public function portfolio_show($id){
        $portfolio = Portfolio::find($id);

        return view('usoft.show_portfolio', compact('portfolio'));
    }

    public function website(){
        return view('usoft.website');
    }

    public function automation(){
        return view('usoft.automation');
    }

    public function mobile_app(){
        return view('usoft.mobile_app');
    }











}
