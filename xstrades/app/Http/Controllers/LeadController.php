<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\WebinarEmail;

class LeadController extends Controller
{
    public function createLead(Request $request)
    {
        // Retrieve form data
        $firstName = $request->input("firstName");
        $middleName = $request->input("middleName");
        $lastName = $request->input("lastName");
        $phone = "+" . $request->input("country_code") . $request->input("phone");
        $email = $request->input("email");
        $country = $request->input("country");
        $city = $request->input("city");
        $lead = $request->input("lead");
        $tags = [
            $request->input('tag'),
            $request->input("marketingTag")
        ];
        $bearerToken = $request->input("token");

        $data = [
            "firstName" => $firstName,
            "middleName" => $middleName,
            "lastName" => $lastName,
            "phone" =>  $phone,
            "email" => $email,
            "country" => $country,
            "city" => $city,
            "lead" => $lead,
            "tags" => $tags,
        ];

        json_encode($data);

        $response = Http::withHeaders([
            "Authorization" => "Bearer $bearerToken",
            "Content-Type" => "application/json",
        ])->post("https://my.XSTrades.com/rest/users/new", $data);


        //If email doesn't exist and phone doesn't exist: create a user with the tag
        if ($response->successful()) {

            Mail::to($email)->send(new WebinarEmail());

            $successMessage = "تم إنشاء المستخدم بنجاح";

            return back()->with('successMessage', "تم إنشاء المستخدم بنجاح");

        //If email exists and phone exists: add the webinar tag
        }elseif(isset($response->json()['errors']['children']['email']['errors'][0]) && isset($response->json()['errors']['children']['phone']['errors'][0])) {
            $data = ["email" => $email];
            $response = Http::withHeaders([
                "Authorization" => "Bearer $bearerToken",
                "Content-Type" => "application/json",
            ])->post("https://my.XSTrades.com/rest/users", $data);

            $data = [
                'user' => (string)$response->json()[0]['id'],
                "tags" => $tags,
            ];
            $response = Http::withHeaders([
                "Authorization" => "Bearer $bearerToken",
                "Content-Type" => "application/json",
            ])->post("https://my.XSTrades.com/rest/users/update", $data);

            Mail::to($email)->send(new WebinarEmail());

            return back()->with('successMessage', "تم تحديث بيانات المستخدم بنجاح");

        //If email exists and phone doesn't exist: add the webinar tag and update the phone
        }elseif(isset($response->json()['errors']['children']['email']['errors'][0])) {
            $data = ["email" => $email];
            $response = Http::withHeaders([
                "Authorization" => "Bearer $bearerToken",
                "Content-Type" => "application/json",
            ])->post("https://my.XSTrades.com/rest/users", $data);

            $data = [
                'user' => (string)$response->json()[0]['id'],
                "phone" =>  $phone,
                "tags" => $tags,
            ];
            $response = Http::withHeaders([
                "Authorization" => "Bearer $bearerToken",
                "Content-Type" => "application/json",
            ])->post("https://my.XSTrades.com/rest/users/update", $data);

            Mail::to($email)->send(new WebinarEmail());

            return back()->with('successMessage', "تم تحديث رقم الهاتف المستخدم بنجاح");

        //If email doesn't exist and phone exist: show a popup error
        } elseif(isset($response->json()['errors']['children']['phone']['errors'][0])) {
            return back()->with('errorMessage', "خطأ في تحديث بيانات المستخدم");
            //other Error
        }else{
            return back()->with('errorMessage', "رقم التليفون
            مأخوذ");
        }

    }

    public function getLeads() {
        $data = [
            "tags" => [
                "Mena Webinar",
            ]
        ];

        json_encode($data);

        $response = Http::withHeaders([
            "Authorization" => "Bearer8136587818bdd96ec320261a867a43053fa2408baf102334dad26d4ad3b621abe5ce4bfbe0913834a3fe720cabe97a2789183baf3c585ac7ed7632e2",
            "Content-Type" => "application/json",
        ])->post("https://my.XSTrades.com/rest/users", $data);

        dd($response->json());

    }
}