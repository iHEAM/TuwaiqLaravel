<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itemgroup;
use App\Models\Items;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function SavedGroupItems(Request $request){
        $data=Itemgroup::create([
            'itemgroupname'=>$request->itemgroupname
        ]);
        $data->save();
        return redirect('addgitem');
    }

    public function Del($x)
    {
        $item = Itemgroup::find($x);
        $item->delete();
        return redirect()->route('addgitem');
    }

    public function Edit($x)
    {
        $item = Itemgroup::where('id',$x)->first();
        return view('editgroupitem', ['item' => $item]);
    }

    public function Update(Request $request)
    {
        $item = Itemgroup::find($request->id);
        $item->itemgroupname = $request->namegroup;
        $item->save();
        
        return redirect()->route('addgitem');
    }

    public function AddtoCart($id)
    {
        // bcz there is o model we use this method
        DB::table('cart')->insert(['iditem' => $id ]);
        $idgroup=Session::get('id');
        $count=DB::table('cart')->get()->count();
        Session::put('countitem',$count);
        return redirect('showproduct/' . $idgroup);
    }



}
