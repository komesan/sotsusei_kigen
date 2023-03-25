<!--じぶんの理解のために仮作成-->

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Allert extends Controller
{
    $allert = 'アラートを確認してください^^';
    $allert_array = ['今日は最高ですね！', 'いい感じですね〜！', '頑張りすぎないように！'];

    return view('allert.allert-dashboard', compact('allert_array', 'allert'));
}
