<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .donation-form {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .donation-form h3 {
            margin-bottom: 20px;
        }

        .donation-form .form-group label {
            font-weight: bold;
        }

        .donation-form .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .donation-form .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .donation-form .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .donation-form .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
        }

        .button-group .btn {
            width: 48%;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="donation-form">
        <h3 class="text-center">Make a Donation</h3>
        <form id="donationForm" method="POST" action="{{route('payment.store')}}">
            @csrf
            <div class="form-group">
                <label for="amount">Amount (Ksh)</label>
                <input type="number" name="amount" class="form-control" id="amount" placeholder="Enter amount" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone_number" class="form-control" id="phone" placeholder="Enter phone number" required>
            </div>
            <div class="button-group">
                <button type="submit" class="btn btn-primary" id="donateNowButton">Donate Now</button>
                <a href="/" class="btn btn-secondary">Home</a>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>

</script>
</body>
</html>
