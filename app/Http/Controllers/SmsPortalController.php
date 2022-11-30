<?php

namespace App\Http\Controllers;

use App\Models\SmsPortal;
use Illuminate\Http\Request;

class SmsPortalController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $string = $request->all();
        $inputString =  $string['inputString'];
        $explodeString = explode(' ', $inputString);
        $splitString = str_split($explodeString[1], 3);

        preg_match_all('!\d+!', substr($explodeString[1], 3), $productQty);
        preg_match_all('!\D+!', substr($explodeString[1], 3), $productNames);

        foreach ($productNames as $key => $productName) {
            $productQuantitys = $productQty[$key];
            foreach ($productName as $key => $name) {
                SmsPortal::create([
                    'companyName'     => $explodeString[0],
                    'storeId'         => $splitString[0],
                    'productName'     =>  $name,
                    'productQuantity' =>  $productQuantitys[$key],
                ]);
            }
        }
        return redirect()->route('smsPortal.index');
    }

    public function index()
    {
        $datas =  SmsPortal::all();
        return view('index', compact('datas'));
    }
}
