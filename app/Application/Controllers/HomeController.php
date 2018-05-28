<?php

namespace App\Application\Controllers;



use App\Application\Model\Page;
use Illuminate\Http\Request;
use App\Application\Model\Shop;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Shop $shop)
    {
        $this->modelshop = $shop;
        $this->middleware('auth')->except(['getPageBySlug' , 'welcome']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('website.home');
    }

    public function getPageBySlug($slug){
        $page = Page::where('slug' , $slug)->first();
        if($page){
            return view('website.page' , compact('page'));
        }
        return redirect('404');
    }

    public function welcome(){
        $page = Page::select('title' , 'slug')->where('slug' , 'about_us')->first();
        return view('website.welcome' , compact('page'));
    }

    public function shop(){
        $shops = $this->modelshop::where('etat' , 'none')->get();
        return view('website.Shop.shop' , compact('shops'));
    }

    public function shoplike(){
        $shops = $this->modelshop::where('etat' , 'like')->get();
        return view('website.Shop.shoplike' , compact('shops'));
    }

    public function update(\Illuminate\Http\Request $request){

        $shop = $this->modelshop::find($request->id);
       $shop->etat = 'like';
       $shop->save();
       return redirect()->back();
    }
}
