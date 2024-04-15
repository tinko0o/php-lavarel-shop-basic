<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\CartService;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductService;
use Illuminate\Http\Request;

class MainController extends Controller
{

        protected $menu;
        protected $product;
        protected $cart;
        public function __construct( MenuService $menu,
        ProductService $product,CartService $cart)
    {
        $this->menu = $menu;
        $this->product = $product;
        $this->cart = $cart;
    }
    public function index(Request $request)
    {
        return view('home', [
            'title' => 'Shop Trai Cay',
            'menus' => $this->menu->show(),
            'products' => $this->product->get(null,$request)
        ]);
    }
    public function contact()
    {
        return view('contact', [
            'title' => 'lien he',
        ]);
    }
    public function seachCart(Request $request)
    {
        // dd($this->cart->getCustomerWithEmail("ti@gmail.com"));
        $searchTerm= $request->input('search');
        return view('seachCart', [
            'title' => 'Danh Sách Đơn Đặt Hàng',
            'customers' => $this->cart->getCustomerWithEmail($searchTerm)
        ]);
    }
    public function loadProduct(Request $request)
    {
        $page = $request->input('page', 0);
        $searchTerm= $request->input('search');
        $result = $this->product->get($page,$searchTerm);
        if (count($result) != 0) {
            $html = view('products.list', ['products' => $result ])->render();

            return response()->json([ 'html' => $html ]);
        }

        return response()->json(['html' => '' ]);
    }
}
