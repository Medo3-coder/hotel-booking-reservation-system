<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Admin\Create;
use App\Http\Requests\Admin\Admin\Update;
use App\Models\Admin;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    use ResponseTrait;
    public function index(){
        $admins = Admin::get();
        return view('admin.admins.table' , compact('admins'));
    }

    public function create(){
        return view('admin.admins.create');
    }

    public function store(Create $request){
        Admin::create($request->validated());
        return response()->json(['url' => route('admin.admins')]);
    }

    public function edit($id){
        $admin = Admin::findOrFail($id);
        return view('admin.admins.edit', compact('admin'));
    }

    public function update($id , Update $request){
        $admin = Admin::findOrFail($id);
        $admin->update($request->validated());
        return response()->json(['url' => route('admin.admins')]);
    }

    public function show($id){
        $admin = Admin::findOrFail($id);
        return view('admin.admins.show', compact('admin'));
    }

    public function destroy($id){
        if($id == 1){
            return 0 ;
        }
        Admin::findOrFail($id)->delete();
        return $this->successOtherData(['id' => $id]);
    }
}
