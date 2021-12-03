<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Bid;
use App\Models\Contact;
use App\Models\Image;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use App\Models\WebDevelopment;
use App\Models\Benefit;
use App\Models\Service;


class UsoftController extends Controller
{
    public function main(){
        $section_website_title = WebDevelopment::find(1);
        $section_website = WebDevelopment::where('id', '>', 1)->with('image')->get();
        $section_benefit_title = Benefit::find(1);
        $section_benefit = Benefit::where('id', '>', 1)->with('image')->get();
        $section_portfolio = Portfolio::find(1);
        $section_service = Service::where('id', '>', 1)->with('image')->get();
        $section_service_title = Service::find(1);

        $web_items = Portfolio::where('category','Веб-разработка')->get();
        $mob_items = Portfolio::where('category','Разработка мобильных приложений')->get();
        $dis_items = Portfolio::where('category','Дизайн')->get();

        return view('usoft.main', compact(
    'section_website_title',
         'section_website',
            'section_benefit_title',
            'section_benefit',
            'section_portfolio',
            'section_service',
            'section_service_title',
            'web_items',
            'mob_items',
            'dis_items'
        ));
    }

    public function service(){
        $section_service = Service::where('id', '>', 1)->with('image')->get();
        $section_service_title = Service::find(1);
        return view('usoft.service',compact('section_service','section_service_title'));
    }

    public function about(){
        $about = About::find(1);
        $section_service = Service::where('id', '>', 1)->with('image')->get();
        $section_service_title = Service::find(1);
        return view('usoft.about', compact('section_service','section_service_title','about'));
    }

    public function portfolio(){
        $web_items = Portfolio::where('category','Веб-разработка')->get();
        $mob_items = Portfolio::where('category','Разработка мобильных приложений')->get();
        $dis_items = Portfolio::where('category','Дизайн')->get();
        $portfolio = Portfolio::where('id', '>', 1)->with('images')->get();
        $portfolio_title = Portfolio::find(1);
        return view('usoft.portfolio', compact('portfolio', 'portfolio_title','web_items','mob_items', 'dis_items'));
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
                'number' => 'required',
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
                'number' => 'required',
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
                    'status' => 'Новый клиент',
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
        $image3 = Image::where('imageable_type','=','App\Models\Portfolio')->where('imageable_id', $id)->where('position', 'image3')->get();
        return view('usoft.show_portfolio', compact('portfolio','image3'));
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

    public function service_show($id){
        $show = Service::find($id);
        $section_service = Service::where('id', '>', 1)->with('image')->get();
        $section_service_title = Service::find(1);
        $image2 = Image::where('imageable_type','=','App\Models\Service')->where('imageable_id', $id)->where('position', 'image2')->get();
        return view('usoft.service_show', compact('show', 'section_service_title','section_service', 'image2'));
    }











}
