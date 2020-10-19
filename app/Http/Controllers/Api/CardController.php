<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function generate(Request $request) {

        $card = null;
        $url = $request->url;
        $card = \App\Card::FirstOrNew(['url' => $url]);
        $exists = $card->exists();
        $dt_ago = now()->subMonth(); // １ヶ月前

        if(!$exists|| ($exists && $card->updated_at < $dt_ago)) {

            if($card->setAttributes($url)) {

                $card->updated_at = now(); // 中身に変換がなくても必ず更新
                $card->save();

            } else { // HTTP接続に失敗した場合

                return false;

            }

        }

        return [
            'result' => true,
            'card' => $card
        ];

    }
}
