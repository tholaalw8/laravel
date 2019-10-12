<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\TicketFormRequest;
use App\Ticket;

class TicketsController extends Controller
{


    public function show($slug){


        // returning the result back with specific ticket
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $comments = $ticket->comments()->get();
        return view('tickets.show',compact('ticket','comments'));

    }


    public function index(){
        $tickets = Ticket::all();
        return view('tickets.index',compact('tickets'));

    }


    public function create(){
        return view('tickets.create');
    }


    public function store (TicketFormRequest $request){

        $slug = uniqid();
        $ticket = new Ticket(array(
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' =>$slug,
            'user_id' => 3,
        ));

      $ticket->save();

        // adding email functionality
//        $data = array(
//            'ticket' => $slug,
//        );
//        Mail::send('emails.ticket', $data, function ($message) {
//            $message->from('support@tholle.me', 'Learning Laravel');
//            $message->to('tholaalw8@gmail.com')->subject('There is a new ticket!');
//        });


      // redirecting the page with created ticket info
      return redirect('/contact')->with('status','Your ticket has been created! Its unique id id '.$slug);

    }


    public function edit($slug){

        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        return view('tickets.edit',compact('ticket'));

    }


    public function update($slug, TicketFormRequest $request){

        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->title = $request->get('title');
        $ticket->content = $request->get('content');


        $ticket->save();
       return redirect(action('TicketsController@edit',$ticket->slug))->with('status','The ticket '.$slug.' has been updated!');


    }


 public function destroy($slug){
    $ticket = Ticket::whereSlug($slug)->firstOrFail();
    $ticket->delete();
    return redirect('/ticket')->with('status','The ticket '.$slug.'has been deleted!');
 }












}
