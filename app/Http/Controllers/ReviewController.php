<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Review;

class ReviewController extends Controller
{
    public function list (){
        $reviews = Review::paginate(20);
        return view('review.review', ['allreviews' => $reviews]);
    }

    public function details($id){
        // $company = DB::table('companies')->where ('id', '=', $id)->first();
        $review = Review::find($id); // Dit is afkorting voor regel hierboven
        return view('review.reviewdetail', ['review' =>$review]);

    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        // $reviews = Review::paginate(20);
        
        return view('review.add', ['reviews' => $reviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('review.reviewform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reviewInfo = $request->validate (
            [
                'name' => 'required|min:1',
                'email' => 'required|unique:reviews|min:1',
                'star' => 'required',
                'message' => 'required|min:1'
            ]
            );
            // dd($reviewInfo);
            // $review = new Review();
            // $review->name = $reviewInfo['name'];
            // $review->email = $reviewInfo['email'];
            // $review->message = $reviewInfo['message'];
            // $review->star = $reviewInfo['star'];
            // $review->save();

            $newReview = Review::create($reviewInfo);

            $newReview->save();

            return redirect()->route('review.details', ['id'=>$newReview->id]);
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
        //
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
        //
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
}
