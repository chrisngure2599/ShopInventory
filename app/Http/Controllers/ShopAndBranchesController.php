<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopAndBranchesController extends Controller
{
    public function index(Request $request)
    {
        if(!isset($request['order'])){
            if($request['order']!='desc')
            $request['order']='desc';
        
        }

        if(!isset($request['search'])){
            if($request['search']!='%%')
            $request['search']='%%';
        
        }else{
            $request['search']='%'.$request['search'].'%';
        }

        if(!isset($request['filter'])){

            $request['filter'] = [];
        
        }

        if(!isset($request['sort'])){
            if($request['sort']!='id')
            $request['sort']='id';
        
        }

        $rows = \App\Models\ShopsAndBranches::where(function($query) use($request){
                      $query->orwhere('id','like',$request['search'])
                      ->orwhere('shop_name','like',$request['search'])
                      ->orwhere('location','like',$request['search']);
                  })->orderBy($request['sort'],$request['id'])
                    ->skip($request['offset'])
                    ->take($request['limit'])
                    ->get();
        return ['rows'=>$rows,'total'=>""];
    }

    public function view()
    {
        return view('shops.view');
    }

    public function create()
    {
       $shops=new \App\Models\ShopsAndBranches;
       $shops=$shops->where('parent_shop_id',null)->get();
       return view('shops.create')->with('shops',$shops);
    }

    public function store(Request $request)
    {
        $shop = new \App\Models\ShopsAndBranches;
        //Checking if the shop is present
        $curr_shop=$shop->where('shop_name',$request['shop_name'])->first();
        if ($curr_shop) {
            return redirect('/shops/create')->with('messageType',2)->with('message','Shop name is taken');
        }else{
            $shop['shop_name']=$request['shop_name'];
            $shop['location']=$request['location'];
            $shop['owner_id']=auth()->user()->id;
            $shop->save();
            return redirect(url("/shops/view"))->with('messageType',1)->with('message',"Shop created successfully");
        }
    }
}
