<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Consultant;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Models\ContactFormSubmit;
use App\Models\ContactProperty;
use App\Models\NewArrival;
use App\Models\Property;
use App\Models\Service;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $data['categories'] = Category::all();
        return view('index', $data);
    }

    public function our_comanpy(){
        return view('our_company');
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function compliance()
    {
        return view('compliance');
    }

    public function products($id)
    {
        $data['products'] = Service::where('category_id', $id)->get();
        return view('products', $data);
    }

    public function contactus()
    {
        return view('contactus');
    }

    public function contactmessage(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|min:2',
            'phone' => 'required|email',
            'message' => 'required',
        ]);

        ContactFormSubmit::create($request->all());
        Notify::success('Message Successfully Submited', 'Success');
        return back();
    }


}
