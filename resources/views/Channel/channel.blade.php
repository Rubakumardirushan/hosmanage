<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Channels</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>List of Action Channels</h1>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Hospital Name</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                    <th scope="col">Max Patients/Day</th>
                    
                    <th scope="col">Channel Type</th>
                    <th scope="col">Channel Fee</th>
                    <th scope="col">Action</th> <!-- New column for action -->
                </tr>
            </thead>
            <tbody>
                @foreach($channels as $channel)
                    <tr>
                        <td>{{ $channel->hospital_name }}</td>
                        <td>{{ $channel->doctor_name }}</td>
                        <td>{{ $channel->date }}</td>
                        <td>{{ $channel->start_time }}</td>
                        <td>{{ $channel->end_time }}</td>
                        <td>{{ $channel->maximum_patients_perday }}</td>
                        <td>{{ $channel->channel_type }}</td>
                        <td>{{ $channel->channel_fee }}</td>
                        <td>
                           
                        <a href="/appoint/{{ $channel->id }}" class="btn btn-danger">Channel</a>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JavaScript (optional, if you need Bootstrap JS features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
