<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        //Query Builder
        // $posts = DB::select("SELECT * FROM posts WHERE id = :id;",[
        //     'id' => 2
        // ]);

        // $posts = DB::table('posts')->where('id', 2)->select('title')->get();

        $posts = DB::table('posts')
                        // ->whereBetween('id',[1,2])
                        // ->whereNotNull("body")
                        // ->orderBy('id','desc') // desc xx id giảm dần từ trên xuống, asc xx id tăng dần
                        // ->latest() // tìm theo thời gian tạo mới nhất
                        // ->where("created_at",">",now()->subDay())
                        // ->orWhere("id","<",1)
                        // ->oldest() // tìm theo thời gian tạo cũ nhất
                        // ->frist() // lấy bảng ghi đầu tiên
                        // ->find(3) // lấy bảng ghi theo id
                        // ->get();

                        // ->count(); // đếm số bảng ghi
                        // ->max('id'); // lấy giá trị lớn nhất
                        // ->min('id'); // lấy giá trị nhỏ nhất
                        // ->sum('id'); // lấy tổng giá trị
                        // ->avg('id'); // lấy giá trị trung bình

                        // ->insert([
                        //     'title' => 'new title',
                        //     'body' => 'new body'
                        // ]); // chèn thêm vào bảng

                        // ->where('id', 2)
                        // ->update([
                        //     'title' => 'new title 2',
                        //     'body' => 'new body 2'
                        // ]); // cập nhật bảng

                        ->where('id', 4)
                        ->delete(); // xóa id
        dd($posts);
        // $records = posts::all();
        // return view('posts.index', compact('records'));
    }
}
