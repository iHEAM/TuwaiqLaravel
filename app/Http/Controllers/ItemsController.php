<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itemgroup;
use App\Models\Items;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;


class ItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function GetItemGroup()
    {
        $issave = true;
        $data = Itemgroup::all();
        return view('itemgroup', ['data' => $data, 'issave' => $issave]);
    }

    public function SavedGroupItems(Request $request){
        $data=Itemgroup::create([
            'itemgroupname'=>$request->itemgroupname
        ]);
        $data->save();
        return redirect('itemgroup');
        // return redirect('addgitem');
    }

    public function Del($x)
    {
        $item = Itemgroup::find($x);
        $item->delete();
        return redirect()->route('itemgroup');
        // return redirect()->route('addgitem');
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
        
        return redirect()->route('itemgroup');
        // return redirect()->route('addgitem');
    }

    // ------------------------------------------------

    public function GetItem() {
        $issave = true;
        $d = Items::all();
        return view('items', ['d' => $d, 'issave' => $issave]);
    }

    public function SavedItems(Request $request) {
        $d=Items::create([
            'itemname'=>$request->itemname,
            'price'=>$request->price,
            'qty'=>$request->qty,
            'color'=>$request->color,
            'itemgroupno'=>$request->itemgroupno
        ]);
        $d->save();
        return redirect('items');
    }

    public function Dell($y) {
        $item = Items::find($y);
        $item->delete();
        return redirect()->route('items');
    }


    public function Editt($y) {
        $item = Items::where('id',$y)->first();
        return view('edititem', ['item' => $item]);
    }

    public function Updatee(Request $request)
    {
        $item = Items::find($request->id);
        $item->itemname = $request->itemna;
        $item->price = $request->pric;
        $item->qty = $request->qt;
        $item->color = $request->colo;
        $item->itemgroupno = $request->itemgroupn;
        $item->save();
        
        return redirect()->route('items');
    }

    // ----------------------------------------

    public function DisplayItem()
    {
     $data=DB::table('itemgroups')
     ->join('items','itemgroups.id','=','items.itemgroupno')
     ->get();
     return view('controlpanel',['data'=>$data]);
    }

    public function Displayadditemsgroup()
    {
        $data = Itemgroup::all();
        return view('addgroupsitem',['data'=>$data]);
    }

    public function Logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function ShowItemGroup()
    {
        $data = Itemgroup::all();
        $count = $data->count();
        return view('welcome', ['data' => $data, 'count' => $count]);
    }

    public function Showproduct($id)
    {
        $data = Items::where('itemgroupno', $id)
            ->get();
            Session::put('id',$id);
        return view('showproduct', ['data' => $data]);
    }

    public function AddtoCart($id)
    {
        // bcz there is no model we use this method
        DB::table('cart')->insert(['iditem' => $id ]);
        $idgroup=Session::get('id');
        $count=DB::table('cart')->get()->count();
        Session::put('countitem',$count);
        return redirect('showproduct/' . $idgroup);
    }

    public function Checkout()
    {
        $cartItems = DB::table('cart')
            ->join('items', 'cart.iditem', '=', 'items.id')
            ->select('items.itemname', 'items.price', 'items.image' )
            ->get();
    
        $idgroup = Session::get('id');
    
        return view('checkout', ['cartItems' => $cartItems, 'idgroup' => $idgroup]);
    }

    public function testapi()
    {

        $apiURL = 'https://v1.baseball.api-sports.io/leagues';
        $headers = [
          'Content-Type' => 'application/json',
          'X-RapidAPI-Key' => '24c939c2ba293c859d5ecd476932d293'];
          $response = Http::withHeaders($headers)->get($apiURL);
          $data = $response->json();
          dd($data);

        // $response=Http::get('https://api.sampleapis.com/coffee/hot');
        // $data=$response->object();
        // return view('cafe',['data'=>$data]);
    }
}

