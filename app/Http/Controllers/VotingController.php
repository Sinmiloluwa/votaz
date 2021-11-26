<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vote;
use App\Models\Nominee;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;

class VotingController extends Controller
{

    public function getCategories()
    {
        $categories = DB::table('sub_categories')->get();
        return response()->json([
            'data' => $categories,
            'status' => 'success'
        ],200);
    }

    public function getExceptional()
    {
        $exceptional = DB::table('sub_categories')->where('category_id',2)->get();
        return response()->json([
            'data' => $exceptional,
            'status' => 'success'
        ],200);
    }

    public function getPromising()
    {
        $promising = DB::table('sub_categories')->where('category_id',1)->get();
        return response()->json([
            'data' => $promising,
            'status' => 'success'
        ],200);
    }

    public function categoryView($id)
    {
        // Display all nominees belonging to a category
        $nominees = Nominee::where('sub_category_id',$id)->get();
        return response()->json([
            'data' => $nominees,
            'status' => 'success'
        ],200);
    }

    public function nomineeDetails($id)
    {
        $details = Nominee::where('id',$id)->get();
        return response()->json([
            'data' => $details,
            'status' => 'success',
        ],200);
    }

    public function vote(Request $request,$sub_category_id,$nominee_id)
    {
        $voting_power = User::where('id',1)->value('voting_power');
        if ($request->points > $voting_power ) {
            return response()->json([
                'status' => 'error',
                'message' => 'Not enough voting power',
        ],400);
        }
        // Check if user has voted in that category initially
        else {
            if (Vote::where('user_id',1)->where('sub_category_id',1)->exists()) {
                return response()->json([
                    'message' => 'You can only vote one person in a category'
                ]);
            }
            else {
                $vote = new Vote;
                $vote->nominee_id = $nominee_id;
                $vote->vote_amount = $request->points;
                $vote->user_id = 1;
                $vote->sub_category_id = $sub_category_id;
                $vote->save();

                
            DB::table('nominees')->update([
                'votes' => $request->points
            ]);

            return response()->json([
                'data' => $vote,
                'status' => 'success'
            ]);

            }

            
        }

        // $vote_amount = Vote::where('nominee_id',$nominee_id)

        // $vote  =  new Vote;
        // $vote->nominee_id = $nominee_id;
        // $vote->vote_amount = 
    }

    public function search(Request $request)
    {
        $results = Search::addMany([
            [SubCategory::class, 'name'],
            [Nominee::class, 'firstname','lastname'],
        ])->get($request->search);
        dd($results);
    }

    public function pricing()
    {
        $pricing =  DB::table('pricing')->get();
        return response()->json([
            'data' => $pricing,
            'status' => 'success'
        ],200);
    }

    public function pay($id)
    {
        $amount = DB::table('pricing')->where('id',$id)->value('price');
        return response()->json([
            'data' => $amount,
            'status' => 'success'
        ],200);
    }
}
