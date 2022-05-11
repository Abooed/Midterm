<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\my_tickets;
class TicketsappController extends Controller
{
    public function index(){
        $ticketsapp = my_tickets::all();
        return view('my_tickets',compact('$my_ticket'));
    }

    public function store(Request $req){
        $data = new my_tickets();
        $data->title = $req->my_tickets_title;
        $data->Category = $req->my_tickets_Category;
        $data->priority= $req->my_tickets_priority;
        $data->save();
        return redirect()->to('/new_ticket');
        // return 'Store';
    }

    public function update(Request $req){
        Product::where('id',$req->id)->update([
            'name' => $req->name,
            'description' => $req->description,
            'updated_at' => now()
        ]);
        return view('my_tickets');
    }

    }


