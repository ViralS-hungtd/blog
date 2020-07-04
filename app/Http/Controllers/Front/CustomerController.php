<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(CustomerRequest $request)
    {
        Customer::create($request->all());

        \Alert::success('Đăng kí thành công , bạn sẽ sớm nhận được thông tin liên hệ')->flash();

        return redirect()->route('index');
    }
}
