<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ForumController extends Controller
{
    public function index()
    {
        $data = Forum::orderBy('id', 'DESC')->paginate(10);
        return view('admin.forum.index', compact('data'));
    }

    public function create()
    {
        return view('admin.forum.create');
    }
    public function edit($id)
    {
        $data = Forum::find($id);
        return view('admin.forum.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $n = new Forum();
        $n->topik = $req->topik;
        $n->user_id = Auth::user()->id;
        $n->slug = Str::slug($req->topik);
        $n->save();

        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/forum');
    }
    public function update(Request $req, $id)
    {


        $update = Forum::find($id);
        $update->topik = $req->topik;
        $update->user_id = Auth::user()->id;
        $update->slug = Str::slug($req->topik);
        $update->save();

        Session::flash('success', 'Di Update');
        return redirect('/superadmin/forum');
    }
    public function delete($id)
    {
        $data = Forum::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/forum');
    }
}
