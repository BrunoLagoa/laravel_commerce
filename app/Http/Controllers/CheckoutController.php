<?php
namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Events\CheckoutEvent;
use CodeCommerce\Http\Requests;
use CodeCommerce\Order;
use CodeCommerce\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PHPSC\PagSeguro\Items\Item;
use PHPSC\PagSeguro\Requests\Checkout\CheckoutService;


class CheckoutController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth_admin');
    }

    public function place(Order $orderModel, OrderItem $orderItem, CheckoutService $checkoutService)
    {
        if (!Session::has('cart')) {
            return false;
        }
        $cart = Session::get('cart');
        $categories = Category::all();
        if (count(Auth::user()->address) <= 0) {
            return redirect()->route('account_address')->with('address_exist', 'Você precisa ter um endereço de entrega antes de finalizar compra!');
        }
        if ($cart->getTotal() > 0) {

            $checkout = $checkoutService->createCheckoutBuilder();

            $order = $orderModel->create(['user_id' => Auth::user()->id, 'total' => $cart->getTotal()]);

            foreach ($cart->all() as $k => $item) {

                $checkout->addItem(new Item($k, $item['name'], number_format($item['price'], 2,'.',''), $item['qtd']));
                $order->items()->create([
                    'product_id' => $k,
                    'price' => $item['price'],
                    'qtd' => $item['qtd']
                ]);
            }
            $cart->clear();
            event(new CheckoutEvent(Auth::user(), $order));

            $response = $checkoutService->checkout($checkout->getCheckout());

            // retorna para pagina interna do codecommerce
            //return view('store.checkout', compact('order', 'categories'));
            // retorna para pagina do pagseguro
            return redirect($response->getRedirectionUrl());
        }
        return view('store.checkout', ['cart' => 'empty', 'categories' => $categories]);
    }

    public function test(CheckoutService $checkoutService)
    {
        $checkout = $checkoutService->createCheckoutBuilder()
            ->addItem(new Item(1, 'Televisão LED 500', 8999.99))
            ->addItem(new Item(2, 'Video-game mega ultra blaster', 799.99))
            ->getCheckout();

        $response = $checkoutService->checkout($checkout);

        return redirect($response->getRedirectionUrl());
    }
}