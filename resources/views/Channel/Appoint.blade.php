<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient Appointment</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Add Patient Appointment</h1>
        <div class="card mt-3">
            <div class="card-body">
                <form method="POST" action="/store">
                    @csrf
              
                    <div class="mb-3">
                        <label for="patient_name" class="form-label">Patient Name</label>
                        <input type="text" class="form-control" id="patient_name" name="patient_name" required value="{{ auth()->user()->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="doctor_name" class="form-label">Doctor Name</label>
                        <input type="text" class="form-control" id="doctor_name" name="doctor_name" value="{{ $channels->doctor_name }}" required  >
                    </div>

                    <div class="mb-3">
                        <label for="hospital_name" class="form-label">Hospital Name</label>
                        <input type="text" class="form-control" id="hospital_name" name="hospital_name" value="{{ $channels->hospital_name }}" required  >
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="text" class="form-control" id="date" name="date" value="{{ $channels->date }}" required >
                    </div>

                    <div class="mb-3">
                        <label for="payment_reference" class="form-label">Payment Reference</label>
                        <input type="text" class="form-control" id="payment_reference" name="payment_reference" >
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                 
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript (optional, if you need Bootstrap JS features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
