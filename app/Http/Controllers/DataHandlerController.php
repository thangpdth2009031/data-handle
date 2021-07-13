<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;


class DataHandlerController extends Controller
{
    public function handlePathVariable($id){
        return "Tham số vừa truyền lên là " .$id;
    }

    public function handleQueryString(Request $req){
        $firstName = $req->get('firstName');
        $lastName = $req->get('lastName');
        $email = $req->get('email');
        return view('datahandle',[
            'email' => $email,
            'firstName' => $firstName,
            'lastName' => $lastName
        ]);
    }

    public function returnForm(){
        return view ('form-data');
    }

    public function processForm(Request $req){
        $eventName = $req->get('eventName');
        $bandName = $req->get('bandNames');
        $startDate = $req->get('startDate');
        $endDate = $req->get('endDate');
        $portfolio = $req->get('portfolio');
        $ticketprice = $req->get('ticketPrice');
        $status = $req->get('status');
        return view ('form-success',[
            'eventname' => $eventName ,
            'bandname' => $bandName,
            'startdate' => $startDate,
            'enddate' => $endDate,
            'portfolio' => $portfolio,
            'ticketprice' => $ticketprice,
            'status' => $status,
        ]);
    }
}
