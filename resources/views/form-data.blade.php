<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}">
    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}"></script>
</head>
<body>

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="/data-handle/form" method="post">
        @csrf
        <div class="form-group">
            <label>Event name:</label>
            <input type="text" class="form-control" placeholder="Enter event name" name="eventName">
        </div>
        <div class="form-group">
            <label>Band names:</label>
            <input type="text" class="form-control" placeholder="Enter band names" name="bandNames">
        </div>
        <div class="form-group">
            <label>Start date:</label>
            <input type="text" class="form-control" placeholder="Enter start date" name="startDate">
        </div>
        <div class="form-group">
            <label>End date:</label>
            <input type="text" class="form-control" placeholder="Enter end date" name="endDate">
        </div>
        <div class="form-group">
            <label>Portfolio:</label>
            <input type="text" class="form-control" placeholder="Enter portfolio" name="portfolio">
        </div>
        <div class="form-group">
            <label>Ticket price:</label>
            <input type="text" class="form-control" placeholder="Enter ticket price" name="ticketPrice">
        </div>
        <div class="form-group">
            <label>Status:</label>
            <input type="text" class="form-control" placeholder="Enter status" name="status">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>

