<!DOCTYPE html>
<html>
<head>
    <title>Edit Donation</title>
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

        form {
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
        <h1>Edit Donation</h1>

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

        <form action="{{ route('donations.update', ['donation' => $donation->donationsid]) }}" method="POST">
    @csrf
    @method('PUT')

            <label for="item">Item:</label>
            <select id="item" name="item" required >
                <option value="Clothes" {{ $donation->item == 'Clothes' ? 'selected' : '' }}>Clothes</option>
                <option value="Food" {{ $donation->item == 'Food' ? 'selected' : '' }}>Food</option>
                <option value="Books" {{ $donation->item == 'Books' ? 'selected' : '' }}>Books</option>
                <option value="Other" {{ $donation->item == 'Other' ? 'selected' : '' }}>Other Goods</option>
            </select>
            <br><br>
            <label for="description">Description:</label><br>
            <input type="text" id="description" name="description" value="{{$donation -> description}}">
            <br><br>
            <label for="location">Location:</label><br>
            <input type="text" id="location" name="location" value="{{$donation -> location}}">
            <br>

            <button type="submit">Update Donation</button>
        </form>
        
        <br>
        <a href="{{ url('/') }}" class="home-button">Return to Home Page</a>
    </div>
</body>
</html>
