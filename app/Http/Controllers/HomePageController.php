<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;


class HomePageController extends Controller
{
    public function index() {
        return view('homepage.index');
    }

    public function about() {
        return view('homepage.about');
    }

    public function services() {
        return view('homepage.service');
    }

    public function portfolio() {
        return view('homepage.portfolio');
    }

    public function contact() {
        return view('homepage.contact');
    }

    public function blog() {
        return view('homepage.blog');
    }

    public function getShallow() {
        return view('service_pages.shallowdrain');
    }

    public function getCulverts() {
        return view('service_pages.culverts');
    }

    public function getLouver() {
        return view('service_pages.louvervents');
    }

    public function getConcrete() {
        return view('service_pages.concretefloor');
    }

    public function getStar() {
        return view('service_pages.starconcrete');
    }

    public function getHatari() {
        return view('service_pages.hatari');
    }

    public function getWindow() {
        return view('service_pages.windowcill');
    }

    public function getPaving() {
        return view('service_pages.pavingslab');
    }

    public function getSide() {
        return view('service_pages.sideslab');
    }

    public function getIbd() {
        return view('service_pages.ibddrainages');
    }

    public function getVentilation() {
        return view('service_pages.ventilations');
    }

    public function getHollow() {
        return view('service_pages.hollowblock');
    }

    public function getSolid() {
        return view('service_pages.solidblock');
    }

    public function getRoadCurb() {
        return view('service_pages.roadcurbs');
    }

    public function getRoofing() {
        return view('service_pages.roofingridges');
    }

    public function getFlower() {
        return view('service_pages.flowervents');
    }

    public function getColumn() {
        return view('service_pages.columncoupings');
    }

    public function getKerra() {
        return view('service_pages.kerraboundary');
    }

    public function getCeramic() {
        return view('service_pages.ceramicfloor');
    }

    public function getTerrazo() {
        return view('service_pages.terrazobench');
    }

    public function getCabros() {
        return view('service_pages.cabrosblocks');
    }

    public function getPavingBlocks() {
        return view('service_pages.pavingblocks');
    }

    public function getRoadChannels() {
        return view('service_pages.roadchannels');
    }


    public function EmailContact( Request $request) {

        // validate data
        $this->validate($request, array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'company' => 'required|string|max:50',
            'subject' => 'required|string|max:20',
            'message' => 'required|string|max:500'
        ));




        $name= $request->name;
        $content = $request->message;
        $email = $request->email;
        $subject = $request->subject;
        $company = $request->company;

//       dd($email,$content, $name, $subject, $company);

//
//        Mail::send('emails.contact', ['name' => $name, 'content' => $content, 'subject' => $subject, 'company' => $company ],
//            function ($message) use ($email, $name, $subject){
//            $message->from($email);
//            $message->to(env('MAIL_ACCOUNT'));
//            $message->subject($name . ', ' .env('APP_NAME').' '.' Contact');
//
//            });

        Mail::send(new ContactMail($request));

//        flash('Your message has been sent!')->success();

        return redirect()->back();
    }


}
