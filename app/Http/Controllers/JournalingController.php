<?php

namespace App\Http\Controllers;

use App\Models\Journaling;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;  //この1行だけ追加！

class JournalingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //これは一旦グレーダウン
    // public function index()
    // {
    //     $journalings = Journaling::orderBy('created_at', 'asc')->paginate(3);
    //     return view('journalings', [
    //         'journalings' => $journalings
    //     ]);
    // }
    //以下で作ってみる
    public function index()
    {
        //以下のパターンはダメだった
        // $journalings = Journaling::select('select * from journalings');
        // $data = ['journalings' => $journalings];
        // return view('journalingIndex', $data);
        
        $contacts = DB::table('journalings')
        ->select('id', 'journalings_fact', 'journalings_emotion')->get();
    
        dd($contacts);
        
        return view('journalingIndex', compact('contacts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //バリデーション
    $validator = Validator::make($request->all(), [
         'journalings_fact' => 'required|min:3|max:255',
         'journalings_emotion' => 'required|min:3|max:255',
         'journalings_icon' => 'required|max:6',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    //以下に登録処理を記述（Eloquentモデル）
	  // Eloquentモデル
	  $journalings = new Journaling;
	  $journalings->journalings_fact   = $request->journalings_fact;
	  $journalings->journalings_emotion = $request->journalings_emotion;
	  $journalings->journalings_icon = $request->journalings_icon;
	  $journalings->save(); 
	  return view('/journalings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Journaling  $journaling
     * @return \Illuminate\Http\Response
     */
    public function show(Journaling $journaling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Journaling  $journaling
     * @return \Illuminate\Http\Response
     */
    public function edit(Journaling $journaling)
    {
        //{books}id 値を取得 => Book $books id 値の1レコード取得
        return view('journalingsedit', ['journaling' => $journaling]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Journaling  $journaling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Journaling $journaling)
    {
        //バリデーション
         $validator = Validator::make($request->all(), [
             'id' => 'required',
             'journalings_fact' => 'required|min:3|max:255',
             'journalings_emotion' => 'required|min:3|max:255',
             'journalings_icon' => 'required|max:6',
             'published' => 'required',
        ]);
        //バリデーション:エラー
         if ($validator->fails()) {
             return redirect('/journalingsedit/'.$request->id)
                 ->withInput()
                 ->withErrors($validator);
        }
        
        //データ更新
        $journalings = Journaling::find($request->id);
        $journalings->journalings_fact   = $request->journalings_fact;
        $journalings->journalings_emotion = $request->journalings_emotion;
        $journalings->journalings_icon = $request->journalings_icon;
        $journalings->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Journaling  $journaling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journaling $journaling)
    {
    $journaling->delete();       //追加
    return redirect('/');  //追加
    }
}
