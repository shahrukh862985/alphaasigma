<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FrontFaq;

class FrontFaqController extends Controller
{
    public function __construct()
    {
        // $this->middleware('checkuseraccess', ['only' => ['index','create']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frontfaq = FrontFaq::all();
        return view('admin.front-faq.index',compact('frontfaq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.front-faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' =>'required',
            'answer' => 'required'
        ]);
        $lastFaqCount = FrontFaq::orderBy('faq_order')->get()->last();
        $faq = new FrontFaq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->active = $request->active != null? 1: 0;
        $faq->faq_order = $lastFaqCount == null?1:++$lastFaqCount->faq_order;
        $faq->save();
        return redirect()->route('front-faqs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = FrontFaq::find($id);
        return view('admin.front-faq.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'question' =>'required',
            'answer' => 'required'
        ]);
        $faq = FrontFaq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->active = $request->active != null? 1: 0;
        $faq->save();
        return redirect()->route('front-faqs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function sort()
    {
        $frontfaq = FrontFaq::orderBy('faq_order')->get();
        return view('admin.front-faq.sort',compact('frontfaq'));
    }
    public function sortPost(Request $request)
    {
        // dd($request->faq);
        foreach($request->faq as $key=> $item)
        {
            $faq = FrontFaq::find($item);
            $faq->faq_order = $key;
            $faq->save();
        }
        return response()->json(['status' => true]);
    }
}
