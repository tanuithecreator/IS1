<!DOCTYPE html>
<html>
<head>
    <title>Register as a Volunteer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .container {
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        form, .success-notification {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            margin-top: 20px;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        select, textarea, input[type="text"], input[type="tel"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        select {
            appearance: none;
            background: url('data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMDAwMDAwIiB2aWV3Qm94PSIwIDAgMjQgMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTEuNDEgOC42OWwtMS40MSAxLjQxTDExIDE4LjIxbDEwLjAwNi0xMC4wMDctMS40MTUtMS40MTEtOC41ODQgOC41ODN6Ii8+PC9zdmc+') no-repeat right 10px center;
            background-color: #fff;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
            border-radius: 30px;
        }

        button, .home-button {
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            border: none;
        }

        button {
            background-color: #5cb85c;
            color: #fff;
            width: 70%;
        }

        button:hover {
            background-color: #4cae4c;
        }

        .home-button {
            background-color: #337ab7;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 30px;
            text-align: center;
        }

        .home-button:hover {
            background-color: #286090;
        }

        .success, .error {
            text-align: center;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }

        .success {
            color: green;
            background-color: #dff0d8;
            border: 1px solid #d6e9c6;
        }

        .error {
            color: red;
            background-color: #f2dede;
            border: 1px solid #ebccd1;
        }

        .error ul {
            list-style: none;
            padding: 0;
        }

        .error li {
            margin: 5px 0;
        }

        .success-notification {
            display: none;
            padding: 20px;
            border-radius: 10px;
            background-color: #dff0d8;
            color: green;
            border: 1px solid #d6e9c6;
        }

        .success-notification h2 {
            margin-top: 0;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register as a Volunteer</h1>

        @if(session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('volunteer.store') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="interest">Area of Interest:</label>
            <select id="interest" name="interest" required>
                <option value="">Select an area</option>
                <option value="Food Distribution">Food Distribution</option>
                <option value="Event Management">Event Management</option>
                <option value="Fundraising">Fundraising</option>
                <option value="Community Outreach">Community Outreach</option>
                <option value="Other">Other</option>
            </select>
            
            <div class="button-container">
                <button type="submit">Register Now</button>
                <a href="{{ url('/') }}" class="home-button">Return to Home</a>
            </div>
        </form>
    </div>
</body>
</html>
