<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\File;


class CustomerController extends Controller
{
    public function index()
    {
        return view('customer');
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
                'gender' => 'required',
                'country' => 'required',
                'state' => 'required',
                'dob' => 'required',
                'image' => 'required|mimes:png,jpg,jpeg,gif|min:1|max:1024'

            ]
        );


        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);

        $file = $request->file('image');
        $filename = time() . '-' . $file->getClientOriginalName();
        $destination = public_path() . '/uploads';
        $file->move($destination, $filename);
        $customer->image = $filename;
        $customer->save();

        return redirect('/customer/view');
    }

    public function view()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        if (!empty($customer)) {
            $customer->delete();
        }
        return redirect('customer/view');
        // method-2
        //$customer = Customer::find($id)->delete();
        // return redirect()->back();
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)) {
            return redirect('customer/view');
        } else {
            $data = compact('customer');
            return view('edit')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);

        $file = $request->file('image');
        $filename = time() . '-' . $file->getClientOriginalName();
        $destination = public_path() . '/uploads';
        $file->move($destination, $filename);
        $customer->image = $filename;

        $customer->save();
        return redirect('/customer/view');
    }

    public function confm_delete($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return response()->json(['status' => 'Yourfile has been deleted!']);
    }
}
