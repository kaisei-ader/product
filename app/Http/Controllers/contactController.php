<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\SampleMail;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    public function showContact() {

        return view('contact');
    }

    public function confirm(Request $request)
    {
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'name' =>  'required|string|max:255',
            'email' => 'required',
            'tell' => 'required|min:11|numeric',
            'message' => 'required',
        ]);
        
        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        return view('contactConfirm',['inputs' => $inputs]);

    }

    public function send(Request $request)
    {
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'tell' => 'required|min:11|numeric',
            'message' => 'required',
        ]);

        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');
        
        //フォームから受け取ったactionを除いたinputの値を取得
        $inputs = $request->except('action');

        //actionの値で分岐
        if($action !== 'submit'){
            return redirect()
                ->route('contact.form')
                ->withInput($inputs);

        } else {
            //入力されたメールアドレスにメールを送信
            Mail::to($inputs['email'])->send(new SampleMail($inputs));

            //再送信を防ぐためにトークンを再発行
            $request->session()->regenerateToken();

            //送信完了ページのviewを表示
            return view('thanks');
        }
    }
}
