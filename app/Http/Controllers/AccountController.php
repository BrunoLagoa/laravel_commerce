<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Address;
use CodeCommerce\Http\Requests;
use CodeCommerce\Order;
use CodeCommerce\User;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private $user;
    private $order;

    function __construct(Order $order, User $user)
    {
        $this->order = $order;
        $this->user = $user;
    }


    public function index()
    {
        $orders = Auth::user()->orders;
        $users = $this->user->all();

        return view('store.account.home', compact('orders', 'users'));
    }

    public function orders()
    {
        $orders = Auth::user()->orders()->paginate(10);

        return view('store.account.orders', compact('orders'));
    }

    public function address()
    {
        $address = Auth::user()->address;

        //dd($address);

        return view('store.account.address', compact('address'));
    }

    public function addressnew()
    {
        $address = Auth::user()->address;

        return view('store.account.addressnew', compact('address'));
    }

    public function registerAddress(Requests\AddressRequest $addressRequest)
    {
        $data = $addressRequest->all();

        Address::create($data);

        return redirect()->route('account_address');
    }

    public function edit($id)
    {
        $address = Address::find($id);

        return view('store.account.addressedit', compact('address'));
    }

    public function update(Requests\AddressRequest $addressRequest, $id)
    {
        Address::find($id)->update($addressRequest->all());

        return redirect()->route('account_address');
    }

    public function destroy($id)
    {
        Address::findOrNew($id)->delete();
        return redirect()->route('account_address');
    }

}
