<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "Users Index: لیست کاربران";
    }

    public function create()
    {
        return "Users Create: فرم ساخت کاربر";
    }

    public function store(Request $request)
    {
        return "Users Store: ذخیره کاربر جدید";
    }

    public function show(string $user)
    {
        return "Users Show: نمایش کاربر با شناسه = " . $user;
    }

    public function edit(string $user)
    {
        return "Users Edit: فرم ویرایش کاربر با شناسه = " . $user;
    }

    public function update(Request $request, string $user)
    {
        return "Users Update: آپدیت کاربر با شناسه = " . $user;
    }

    public function destroy(string $user)
    {
        return "Users Destroy: حذف کاربر با شناسه = " . $user;
    }
}
