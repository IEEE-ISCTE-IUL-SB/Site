<!DOCTYPE html>
<html>
<head>
    <title>Export Tables</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div style="text-align: center; margin: 5% 0;">
    <h1>What tables do you want to export?</h1>
</div>
<div class="container">
    @foreach($tables as $table)
        <div class="row" style="margin: 0.5rem 0;">
            <div class="col-6" style="text-align: center">
                {{$table}}
            </div>
            <div class="col-6 flex">
                <button class="btn-primary ml-5" onclick="sendDLTableRequest('{{$table}}')">Export .xlsx file</button>
            </div>
        </div>
    @endforeach
</div>

<script>

    function sendDLTableRequest(table) {
        window.location = '/admin/exporttable/' + table;
    }

</script>
</body>
</html>
