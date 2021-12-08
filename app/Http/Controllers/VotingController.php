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

    public function getIndividual()
    {
        $exceptional = DB::table('sub_categories')->where('category_id',1)->get();
        return response()->json([
            'data' => $exceptional,
            'status' => 'success'
        ],200);
    }

    public function getCompany()
    {
        $promising = DB::table('sub_categories')->where('category_id',2)->get();
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
        $voting_power = User::where('id',auth()->user()->id)->value('voting_power');
        // Check if user has voted in that category initially
            if (Vote::where('user_id',auth()->user()->id)->where('sub_category_id',1)->exists()) {

                if ($voting_power < $request->points) {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Not enough voting power',
                ],400);
                } elseif ($voting_power >= $request->points) {
                    DB::table('users')->where('id',auth()->user()->id)->update([
                        'voting_power' => $voting_power - $request->points
                    ]);
                    return response()->json([
                        'status' => 'success',
                        'message' => 'vote Successful',
                ],202);
                }
               
            }
            else {
                $vote = new Vote;
                $vote->nominee_id = $nominee_id;
                $vote->vote_amount = $request->points;
                $vote->user_id = auth()->user()->id;
                $vote->sub_category_id = $sub_category_id;
                $vote->save();

            $amount = $vote->vote_amount;    

            $points = $request->points;

            DB::table('nominees')->update([
                'votes' => $amount + $points
            ]);

            return response()->json([
                'data' => $vote,
                'status' => 'success'
            ]);

            

            
        }

        // $vote_amount = Vote::where('nominee_id',$nominee_id)

        // $vote  =  new Vote;
        // $vote->nominee_id = $nominee_id;
        // $vote->vote_amount = 
    }

    public function getVotingPower()
    {
        $voting_power = User::where('id',auth()->user()->id)->value('voting_power');
        dd($voting_power);
    }

    public function search(Request $request)
    {
        if ($request->search != '') {
            $results = Search::addMany([
                [SubCategory::class, 'name'],
                [Nominee::class, 'firstname','lastname'],
            ])->beginWithWildcard()->dontParseTerm()->get($request->search);
            return response()->json([
                'data' => $results,
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Cannot be empty'
            ]);
        }
       
    }

    public function pricing()
    {
        $pricing =  DB::table('pricing')->get();
        return response()->json([
            'data' => $pricing,
            'status' => 'success'
        ],200);
    }

    public function pricingDetail($id)
    {
        $amount = DB::table('pricing')->where('id',$id)->get();
        return response()->json([
            'data' => $amount,
            'status' => 'success',
        ],200);
    }

    // public function pay($id)
    // {
    //     $amount = DB::table('pricing')->where('id',$id)->value('price');
    //     $user = DB::table('users')->where('id',auth()->user()->id)->get();
    //     return response()->json([
    //         'amount' => $amount,
    //         'status' => 'success',
    //         'user' => $user
    //     ],200);
    // }
}
