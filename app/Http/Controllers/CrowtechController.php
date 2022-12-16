<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Models\Adminuser;
use DB;

class CrowtechController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function graphic()
    {
        return view('graphic');
    }

    public function web()
    {
        return view('web');
    }

    public function media()
    {
        return view('media');
    }

    public function photo()
    {
        return view('photo');
    }

    public function recruit()
    {
        return view('recruit');
    }

    public function product()
    {
        return view('product');
    }

    public function contact()
    {
        return view('contact');
    }

    public function mail_send(Request $request)
    {
    	$data = ['name' => $request->name,
                'mail' => $request->mail,
                'tel' => $request->tel,
                'content' => $request->content,];

        $mail = $request->mail;

        Mail::send('mail', $data, function($message) use ($mail){
            $message->to($mail, 'Test')->subject('【Ace&Co.】お問い合わせ完了のご案内');
        });

        Mail::send('mail_admin', $data, function($message) {
            $message->to('info@ace-co.press', 'Test')->subject('【Ace&Co.】お問い合わせ受け付けのお知らせ');
        });

        return redirect()->to('mail_comp');
    }

    public function mail_comp()
    {
        return view('mail_comp');
    }



    public function news_list()
    {
        $news_list = News::orderBy('updated_at', 'desc')->paginate(10);
        return view('news_list', [
            'news_list' => $news_list,
        ]);
    }

    public function news_regist()
    {
        return view('news_regist');
    }

    public function news_store(Request $request)
    {
        $rules = [
            'title' => ['max:20', 'required'],
            'content' => 'required',
        ];

        $messages = [
            'title.max' => 'タイトルは20文字以下でお願いします',
            'title.required' => 'タイトルを入力してください',
            'content.required' => '内容を入力してください',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $news = new News();

        $request = $request->all();
        $fill_data = [
            'title' => $request['title'],
            'content' => $request['content'],
            'release_flg' => $request['release'] == 1 ? 1 : 0,
            'notice_date' => date('Y/m/d'),
        ];

        DB::beginTransaction();
        try {
            $news->fill($fill_data)->save();
            DB::commit();
            return redirect()->to('admin/news_list')->with('message', '登録が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function news_edit($id)
    {
        $news = News::find($id);
        return view('news_edit', [
            'news' => $news,
        ]);
    }

    public function news_update(Request $request)
    {
        $rules = [
            'title' => ['max:20', 'required'],
            'content' => 'required',
        ];

        $messages = [
            'title.max' => 'タイトルは20文字以下でお願いします',
            'title.required' => 'タイトルを入力してください',
            'content.required' => '内容を入力してください',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $request = $request->all();
        $news = News::find($request['id']);

        $fill_data = [
            'title' => $request['title'],
            'content' => $request['content'],
            'release_flg' => $request['release'] == 1 ? 1 : 0,
            'notice_date' => date('Y/m/d'),
        ];

        DB::beginTransaction();
        try {
            $news->update($fill_data);
            DB::commit();
            return redirect()->to('admin/news_list')->with('message', 'お知らせの更新が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function news_delete($id)
    {
        DB::beginTransaction();
        try {
            News::where('id', $id)->delete();
            DB::commit();
            return redirect()->route('admin.news_list')->with('message', 'お知らせ情報を削除しました');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function login(Request $request)
    {

        $admin_user = Adminuser::where('login_id', $request->login_id)->first();
        if (isset($admin_user)) {
            if ($request->password == $admin_user->password) {
                // セッション
                session(['login_id' => $admin_user->login_id]);
                return redirect('admin/news_list'); 
            }
        }

        return redirect('admin/login', ['login_error' => '1']);
    }
    
    public function logout(Request $request)
    {
        session()->forget('login_id');
        return redirect('admin/login');
    }

}
