<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Ad;

class BoardController extends Controller
{
    public function main()
    {
        $categories = Category::all();
        return view('board.main',['category' => $categories ]);
    }

    public function all($category,Request $request)
    {
        $cat = Category::where('slug',$category)->first();
        if ($request->isMethod('post')){
            $ad = new Ad();
            $ad->name = $request->name;
            $ad->desc = $request->desc;
            $ad->price = $request->price;
            $ad->category_id = $cat->id;
            $ad->save();
            return redirect("/$cat->slug/all/")->with('status','The ad has been added');
        }
        $ads = $cat->ad()->orderBy('created_at','asc')->get();
        return view('board.all',['ad' => $ads,'title'=>$cat->name]);
    }
}
