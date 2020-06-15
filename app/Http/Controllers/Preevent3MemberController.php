<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preevent3Member;
use App\User;
use App\Notifications\EmailPreevent3;
use App\Notifications;

class Preevent3MemberController extends Controller
{
    public function view(){
    	return view('pages.registration.preevent3-form');
    }

    public function store(Request $request){

        // SAVE TO DATABASE SQL
        $member = new Preevent3Member([
            "fullname" => $request->input("name"),
            "gender" => $request->input("gender"), 
            "email" => $request->input("email"), 
            "phone" => $request->input("phone"), 
            "major" => $request->input("major"), 
            "university" => $request->input("university"), 
            "hometown" => $request->input("hometown"),
        ]);
        $member->save();

        // Brute Force Way to Google Spreadsheets
        $client = new \Google_Client();
        $client->setApplicationName('SXCGrandSummit');
        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $client->setAccessType('offline');
        $client->setAuthConfig(__DIR__ . '/../../../storage/credentials.json');

        $service = new \Google_Service_Sheets($client);
        $spreadsheetId = "1XsMr5U1kWZ0lu8jQrUAv7yS0Zz_0MO1ux4B2d2YzJKE";
        $range = "PreEvent3";

        $values = [
            [
                $request->name,
                $request->gender,
                $request->email,
                $request->phone,
                $request->major,
                $request->university,
                $request->hometown
            ]
        ];

        $body = new \Google_Service_Sheets_ValueRange([
            'values' => $values
        ]);

        $params = [
            'valueInputOption' => 'RAW'
        ];
        $insert = [
            "insertDataOption" => "INSERT_ROWS"
        ];

        $result = $service->spreadsheets_values->append(
            $spreadsheetId,
            $range,
            $body,
            $params,
            $insert
        );

        // EMAIL NOTIF, false means there's no problem. if true then there IS a problem
        $emailException = false;
        
        try {
            $user = new User();
            $user->email = request('email');
            $user->notify(new EmailPreevent3());
        } catch (\Exception $e) {
            $emailException = true;
        }
        
		return view('pages.registration.success_preevent3', ['emailException' => $emailException])->with('data', $member);
    }
}
