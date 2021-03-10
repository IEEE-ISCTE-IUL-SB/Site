<?php


namespace App;
use App\Mail\NewMemberApplication;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class CheckNewApplications
{

    public static function sendEmails() {
        $new_applications = MemberApplication::whereDate('created_at', '>=', Carbon::today());
        if ($new_applications->count() > 0)
            Mail::to('cod.cod.321@gmail.com')->send(new NewMemberApplication($new_applications->count()));
    }

}
