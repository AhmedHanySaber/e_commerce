<?php
namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        $orderItems = OrderItem::all();
        return response()->json($orderItems);
    }

    public function show($id)
    {
        $orderItem = OrderItem::find($id);
        return response()->json($orderItem);
    }

    public function store(Request $request)
    {
        $orderItem = OrderItem::create($request->all());
        return response()->json($orderItem, 201);
    }

    public function update(Request $request, $id)
    {
        $orderItem = OrderItem::find($id);
        $orderItem->update($request->all());
        return response()->json($orderItem);
    }

    public function destroy($id)
    {
        OrderItem::find($id)->delete();
        return response()->json(null, 204);
    }
}
