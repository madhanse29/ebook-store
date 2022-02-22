<?php

namespace App\Http\Controllers;
// use Request;
use Session;
use App\Models\Book;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Wishlist;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
use DB;

class BookController extends Controller
{
    //
    
    function detail($id){
        $data = Book::find($id);
        return view('detail',compact('data'));
     }
     function search(Request $req){
     $data = Book::where('name','like','%'.$req->input('query').'%')
       ->get();
       return view('search',compact('data'));
    }
    function addToWishlist(Request $req){
      if($req->session()->has('user')){
          $wishlist=new Wishlist;
          $wishlist->user_id=$req->session()->get('user')['id'];
          $wishlist->book_id=$req->book_id;
          $wishlist->save();
          return redirect('/');
        }
      else{
      return redirect('/login');
      }
    }
    function addToCart(Request $req){
      if($req->session()->has('user')){
          $cart=new Cart;
          $cart->user_id=$req->session()->get('user')['id'];
          $cart->book_id=$req->book_id;
          $cart->save();
          return redirect('/');
        }
      else{
      return redirect('/login');
      }
    }
   static function wishlistItem(){
        $userId=Session::get('user')['id'];
        return Wishlist::where('user_id',$userId)->count();
    }
   static function cartItem(){
        $userId=Session::get('user')['id'];
        return cart::where('user_id',$userId)->count();
    }

    function cartlist(){
        $userId=Session::get('user')['id'];
        $cartitems = Cart::where('user_id',$userId)
        ->select('carts.*','carts.id as cart_id')
        ->paginate(3);
      
        return view('cartlist',compact('cartitems'));
    }
    function wishlist(){
        $userId=Session::get('user')['id'];
        
        $wishlistitems = Wishlist::where('user_id',$userId)
        ->select('wishlists.*','wishlists.id as wishlist_id')
        ->paginate(4);
        // dd($wishlistitems);
        return view('wishlist',compact('wishlistitems'));
    }
    function removeCart($id)
{

    Cart :: destroy($id);
    return redirect ('cartlist');

}
    function removeWish($id)
{

    Wishlist :: destroy($id);
    return redirect ('wishlist');

}

    function category($category_id){
        $cat=$category_id;
        $data = Book::where('category',$category_id)
        ->get();
        
        return  view('category',compact('data'),compact('cat'));
    }

    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total = Cart::where('user_id',$userId)
        ->get()
        ->sum('books.price');
        return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];
       $allCart = Cart::where('user_id',$userId)->get();
       foreach($allCart as $cart)
       {
         $order = new Order;
         $order ->book_id=$cart->book_id;
         $order ->user_id=$cart->user_id;
         $order ->payment_method=$req->payment;
         $order ->address=$req->address;
         $order ->save();
         Cart::where('user_id',$userId)->delete();
       }
        return redirect('/');
    }
    function myOrders(){
        $userId=Session::get('user')['id'];
        $orders = Order::where('user_id',$userId)
         ->paginate(3);
        //  $orders=Order::paginate(4);
         
        //  dd($orders);
         
        return view('myorders',['orders'=>$orders]);
    }
    
    function added(Request $req){
          
        $book = Book::create([
               'name'=> $req->name,
               'author'=>$req->author,
               'price'=>$req->price,
               'gallery'=>$req->gallery,
               'category'=>$req->category,
               'description'=>$req->description,
               'summary'=>$req->summary,
           ]);
           return redirect('/');
       }
}
 
