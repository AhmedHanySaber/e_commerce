<?php
namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return response()->json($feedbacks);
    }

    public function show($id)
    {
        $feedback = Feedback::find($id);
        return response()->json($feedback);
    }

    public function store(Request $request)
    {
        $feedback = Feedback::create($request->all());
        return response()->json($feedback, 201);
    }

    public function update(Request $request, $id)
    {
        $feedback = Feedback::find($id);
        $feedback->update($request->all());
        return response()->json($feedback);
    }

    public function destroy($id)
    {
        Feedback::find($id)->delete();
        return response()->json(null, 204);
    }
}
