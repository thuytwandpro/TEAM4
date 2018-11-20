<?php

namespace shoes\Http\Controllers;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use shoes\News;
use Validator;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getDanhSach()
    {
        $news = News::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.news.list_news', compact('news'));
    }
    public  function  getThem()
    {
        return view('admin.news.add_news');
    }
    public function postThem(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'contents' => 'required|min:3',
        ], [
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'description.required' => 'Bạn phải mô tả tin tức',
            'title.min' => 'Tiêu đề phải có ít nhất 3 ký tự',
            'description.min' => 'Mô tả phải có ít nhất 3 ký tự',
            'contents.required' => 'Bạn phải nhập nội dung tin tức',
            'contents.min' => 'Nội dung phải có ít nhất 3 ký tự',
        ]);
        $news = new News();
        $news->contents = $request->contents;
        $news->title = $request->title;
        $news->description = $request->description;
        $news->slug = str_slug($request->title);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = $file->getClientOriginalName();
            $img = str_random(4) . "_" . $name;
            while (file_exists("admin/images/tintuc" . $img)) {
                $img = str_random(4) . "_" . $name;
            }
            $file->move("admin/images/tintuc", $img);
            $news->img = $img;
        } else {
            $news->img = "";
        }
        $news->save();
        return redirect('shoes/admin/news/danhsach')->with('thongbao', 'Bạn thêm tin tức thành công');
    }

    public function getSua($id)
    {
        $news = News::find($id);
        return view('admin.news.edit_news', compact('news'));
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'contents' => 'required|min:3',
        ], [
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'description.required' => 'Bạn phải mô tả tin tức',
            'title.min' => 'Tiêu đề phải có ít nhất 3 ký tự',
            'description.min' => 'Mô tả phải có ít nhất 3 ký tự',
            'contents.required' => 'Bạn phải nhập nội dung tin tức',
            'contents.min' => 'Nội dung phải có ít nhất 3 ký tự',
        ]);
        $news = News::find($id);
        $news->contents = $request->contents;
        $news->title = $request->title;
        $news->description = $request->description;
        $news->slug = str_slug($request->title);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = $file->getClientOriginalName();
            $img = str_random(4) . "_" . $name;
            while (file_exists("admin/images/tintuc" . $img)) {
                $img = str_random(4) . "_" . $name;
            }
            $file->move("admin/images/tintuc", $img);
            if(!empty($news->img) && File::exists("admin/images/tintuc/".$news->img)){
                unlink("admin/images/tintuc".$news->img);
            }
            $news->img = $img;
        }
        $news->save();
        return redirect('shoes/admin/news/danhsach')->with('thongbao', 'Bạn đã sửa tin tức thành công');
    }

    public function getXoa($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('shoes/admin/news/danhsach')->with('thongbao', 'Bạn đã xóa thành công');
    }

    public function getSearch(Request $request)
    {
        $news = News::where('id', 'like', '%'.$request->key.'%')->orwhere('title', 'like', '%'.$request->key.'%')
            ->orwhere('contents', 'like', '%'.$request->key.'%')->orwhere('description', 'like', '%'.$request->key.'%')->orwhere('slug', 'like', '%'.$request->key.'%')->paginate(5);
        return view('admin.news.search_news', compact('news'));
    }
}
