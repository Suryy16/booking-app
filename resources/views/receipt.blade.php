<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Receipt</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Booking Receipt</div>

                    <div class="card-body">
                        <p><strong>User Name:</strong> {{ $user->name }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p><strong>Phone:</strong> {{ $user->phone }}</p>
                        <p><strong>Booking Date:</strong> {{ $booking->booking_date }}</p>
                        <p><strong>Time Slot:</strong> {{ $booking->time_slot }}</p>
                        <p><strong>Status:</strong> {{ $booking->is_canceled ? 'Canceled' : 'Active' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
