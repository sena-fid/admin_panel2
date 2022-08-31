<?php

namespace App\Http\Controllers\Backend;
use App\Models\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $pages = Page::orderBy('created_at', 'asc')->get();
        return view('backend.page.index', [
            'pages' => $pages,
        ]);
    }

    public function create(){
        
        return view('backend.page.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'date' => 'required',
        ]);

        try {

            if(!empty($request->file("image"))){

                $name = $request->file('image')->getClientOriginalName();

                $path = $request->file('image')->store('public/images');
            }

            $page = new Page();
            $page->fill([
                'image' => $name ?? null,
                'path' => $path ?? null,
                'status' => $request->status ?? 0,
                'title' => $request->title,
                'content' => $request->content,
                'summary' => $request->summary ?? null,
                'date' => $request->date ,
            ])->save();

            return redirect()->back()->with('success', 'Ekleme Başarılı!');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Bir Hata Oluştu!');
        }
    }

}
