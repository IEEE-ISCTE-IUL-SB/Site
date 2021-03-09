<!DOCTYPE html>
<html>
<head>
    <title>New Event suggestion for the IEEE Iscte Student Branch</title>
</head>
<body>
<h2>There is a new suggestion for an event with the IEEE Iscte Student Branch</h2>
<p>{{$details['contact_name']}} @if(strcmp($details['contact_org'], "") != 0) from {{$details['contact_org']}} @endif has proposed the following event:</p>
<p>{{$details['event_type']}}: {{$details['event_description']}}</p>
<p>You can contact them at {{$details['contact_email']}}</p>
</body>
</html>
