<!DOCTYPE html>
<html>
<head>
    <title>FoodShare</title>
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

        form, .success-notification {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: auto;
            text-align: center;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        select, textarea, input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        select {
            appearance: none; /* For custom styling */
            background: url('data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMDAwMDAwIiB2aWV3Qm94PSIwIDAgMjQgMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTEuNDEgOC42OWwtMS40MSAxLjQxTDExIDE4LjIxbDEwLjAwNi0xMC4wMDctMS40MTUtMS40MTEtOC41ODQgOC41ODN6Ii8+PC9zdmc+') no-repeat right 10px center;
            background-color: #fff;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #4cae4c;
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
            display: none; /* Initially hidden */
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

        .home-button {
            padding: 10px 20px;
            background-color: #337ab7;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .home-button:hover {
            background-color: #286090;
        }
    </style>
</head>
<body>
    <div>
        <h1>Donation</h1>

        @if(session('success'))
            <div class="success-notification">
                <h2>Thank you for your donation!</h2>
                <p>Your donation has been successfully processed.</p>
                <a href="/" class="home-button">Return to Home Page</a>
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

        <form action="{{ route('donations.store') }}" method="POST">
            @csrf
            <label for="item">Item:</label>
            <select id="item" name="item" required>
                <option value="">Select an item</option>
                <option value="Clothes">Clothes</option>
                <option value="Food">Food</option>
                <option value="Books">Books</option>
                <option value="Other">Other Goods</option>
            </select>
            <br><br>
            <label for="description">Description:</label><br>
            <input type="text" id="description" name="description">
            <br><br>
            <label for="Quantity">Quantity:</label><br>
            <input type="text" id="Quanity" name="Quantity">
            <br><br>
            <label for="location">Location:</label><br>
            <input type="text" id="location" name="location">
            <br>
            <button type="submit" onclick="showSuccess()">Donate now</button>
        </form>
    </div>

    <div id="success-notification" class="success-notification" style="display: none;">
        <h2>Thank you for your donation!</h2>
        <p>Your donation has been successfully processed.</p>
        <a href="/" class="home-button">Return to Home Page</a>
    </div>

    <!-- Optional JavaScript for toggling the success notification -->
    <script>
        function showSuccess() {
            document.getElementById('success-notification').style.display = 'block';
        }
    </script>
</body>
</html>