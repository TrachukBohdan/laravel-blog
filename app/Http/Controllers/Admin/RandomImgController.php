<?php

namespace App\Http\Controllers\Admin;

use App\Services\ImgFinder\ImgFinder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RandomImgController extends Controller
{
    /**
     * Return random img from the internet
     * @param Request $request
     * @return string
     */
    public function getImg(Request $request):string
    {
        $imgFinder = ImgFinder::create();
        //dd($imgFinder->findImgByTitle($request->img_query));
        //return response()->json(['a' => 2]);
        return \json_encode([
            'url' => $imgFinder->findImgByTitle($request->img_query)
        ]);
    }
}
