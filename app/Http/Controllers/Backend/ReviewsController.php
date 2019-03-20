<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Review;
class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Review::all();
        return view('backend.reviews.index')->withData($data);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.reviews.subpages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validating Request
        $validatedData = $request->validate([
            'fname' => 'required',
            'lname' =>'required',
            'review' =>'required',
        ]);

        $review = new Review;
        $review->fname = $request->fname;
        $review->lname = $request->lname;
        $review->review = $request->review;
        if($request ->verified) {
            $review->verified = true;
        } else {
            $review->verified = false;

        }
        $review->save();
        return redirect('/reviews');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Review::findOrFail($id);
        return view('backend.reviews.subpages.edit')->withData($data);
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
        $review = Review::findOrFail($id);
        $review->fname = $request->fname;
        $review->lname = $request->lname;
        $review->review = $request->review;
        if($request->verified) {
            $review->verified = true;
        } else {
            $review->verified = false;

        }
        $review->save();
        return redirect('/reviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect('/reviews');    }
}
