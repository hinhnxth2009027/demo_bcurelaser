<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function list(Request $request)
    {
        $limit = $request->query('limit') ? $request->query('limit') : 10;
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = User::query();
        $query_builder = build_search_query($query_builder, $search, ['full_name', 'email', 'phone']);
        $query_builder = build_sort_query($query_builder, $sort ? $sort : Sort::CREATED_AT_DESC);
        $list = $query_builder->paginate($limit)->appends(['search' => $search]);
        return view('admin.users.table', ['list' => $list, 'sort' => $sort, 'search' => $search]);
    }

    public function create()
    {
        return view('admin.users.form',['detail'=>null]);
    }

    public function store(UserRequest $request)
    {
        $request->validated();
        $user = User::query()->where('email', '=', $request->email)->get();
        if (sizeof($user) != 0) {
            return back()->with('email_error', 'Địa chỉ email này đã được dùng liên kết với tài khoản khác');
        }

        $user = User::query()->where('phone', '=', $request->phone)->get();
        if (sizeof($user) != 0) {
            return back()->with('phone_error', 'Số điện thoại này đã được dùng liên kết với tài khoản khác');
        }
        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('list_user');
    }

    public function edit($id)
    {
        return view('admin.users.form', ['detail' => User::find($id)]);
    }

    public function update(UserRequest $request, $id)
    {
        $this_user = User::find($id);
        if ($request->email != $this_user->email) {
            $user = User::query()->where('email', '=', $request->email)->get();
            if (sizeof($user) != 0) {
                return back()->with('email_error', 'Địa chỉ email này đã được dùng liên kết với tài khoản khác');
            }
        }
        if ($request->phone != $this_user->phone) {
            $user = User::query()->where('phone', '=', $request->phone)->get();
            if (sizeof($user) != 0) {
                return back()->with('phone_error', 'Số điện thoại này đã được dùng với tài khoản khác');
            }
        }
        $data = $request->validated();
        if ($data['password']) {
            $data['password'] = Hash::make($request['password']);
        } else {
            unset($data['password']);
        }
        $this_user->update($data);
        return back()->with('success', 'Chỉnh sửa thông tin thành công');
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return back();
    }

    public function login()
    {
        return view('admin.users.user_login');
    }

    public function processLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('list_contact');
        } else {
            return back()->with('login_error', 'Đăng nhập không thành công kiểm tra lại email hoặc mật khẩu');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login_user');
    }
}
