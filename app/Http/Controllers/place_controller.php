<?php

namespace App\Http\Controllers;


use App\Models\tblplaces;
use App\Models\tblusers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class place_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data['data_place'] = tblplaces::all();
        return view('index')->with($data);

    }

    public function signin()
    {
        
        // $data['data_place'] = tblplaces::all();
        return view('includes/signin');
    }

    public function register()
    {
        
        // $data['data_place'] = tblplaces::all();
        return view('includes/register');
    }

    public function store(Request $request)
    {
        // Validate the request...

        $register = new tblusers;

        $register->fname = $request->fname;
        $register->mnumber = $request->mnumber;
        $register->email = $request->email;
        $register->password = $request->password;
        $register->RegDate = date("Y/m/d");
        $register->UpdationDate = date("Y/m/d");

        $register->save();
        
        return redirect()->back()->with('success', 'your message,here');
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $rules = [
    //         'tanggalawal' => 'required',
    //         'tanggalakhir' => 'required'
    //     ];

    //     $messages = [
    //         'tanggalawal.required' => 'Tanggal awal tidak boleh kosong',
    //         'tanggalakhir.required' => 'Tanggal akhir tidak boleh kosong',
    //     ];

    //     $validator = Validator::make($request->all(), $rules, $messages);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput($request->all);
    //     }

    //     $tanggalawal = $request->get('tanggalawal');
    //     $tanggalakhir = $request->get('tanggalakhir');
    //     $awal = Time::parse($tanggalawal);
    //     $akhir = Time::parse($tanggalakhir);
    //     $diff = $awal->difference($akhir);
    //     $qty = $diff->getDays();
    //     $carter = $cart->where('id_produk', $category->id_produk)->where('status','dibayar');

    //     if ($tanggalawal > $tanggalakhir) {
    //         session()->setFlashdata('message', 'From Date cannot be greater than Untill Date');
    //         return redirect()->to('/service/detail/' . $id_produk);
    //     } else if ($tanggalawal == $tanggalakhir) {
    //         session()->setFlashdata('message', 'From Date cannot be the same as Untill Date');
    //         return redirect()->to('/service/detail/' . $id_produk);
    //     }elseif($carter == !null){
    //     $cart = new Cart([
    //         'id_user' => Auth::user()->id_user,
    //         'id_produk' => $request->get('id_produk'),
    //         'tanggalawal' => $request->get('tanggalawal'),
    //         'tanggalakhir' => $request->get('tanggalakhir'),
    //         'qty' => $qty,
    //         'status' => 'Incomplete',
    //     ]);
    //     $cart->save();
    //     session()->setFlashdata('message', 'added to Cart');
    //             return redirect()->to('/cart');
    //     }else{
    //         session()->setFlashdata('message', 'Date have been Booked');
    //         return redirect()->to('/service/detail/'.$id_produk);
    //     }
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Cart $cart)
    // {
    //     $cart->update([
    //         'status' => 'canceled',
    //     ]);
    //     return redirect('admin/cart')->with('success', 'cart berhasil diubah!');
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request)
    // {
    //     $cart = $request->id_prod;

    //     if (isset($_POST["btn_updt"])) {
    //         DB::table('cart')
    //         ->where('id_cart', $cart)
    //         ->update(['status' => $request->status_cart]);
    //     }
    //     return redirect('admin/cart')->with('success', 'Cart berhasil diubah!');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $cart = Cart::find($id);
    //     $cart->delete();

    //     return redirect()->route('cart.index')
    //         ->with('success', 'Cart deleted successfully');
    // }
}
