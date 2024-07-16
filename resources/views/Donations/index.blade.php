<!DOCTYPE html>
<html>
<head>
    <title>Donations List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: auto;
        }

        .home-button, .edit-button, .delete-button {
            display: inline-block;
            width: 100px;
            margin-right: 10px;
            margin-bottom: 10px;
            padding: 10px;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            border: none;
        }

        .home-button {
            background-color: #5cb85c;
        }

        .home-button:hover {
            background-color: #4cae4c;
        }

        .edit-button {
            background-color: #5bc0de;
        }

        .edit-button:hover {
            background-color: #46b8da;
        }

        .delete-button {
            background-color: #d9534f;
        }

        .delete-button:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Donations List</h1>

        <!-- Location Filter Form -->
        <form action="{{ route('donations.index') }}" method="GET" style="margin-bottom: 20px;">
            <label for="location">Filter by Location:</label>
            <input type="text" id="location" name="location" value="{{ request()->input('location') }}">
            <button type="submit">Filter</button>
        </form>

        <!-- Search Form -->
        <form action="{{ route('donations.index') }}" method="GET" style="margin-bottom: 20px;">
            <label for="search">Search:</label>
            <input type="text" id="search" name="search" value="{{ request()->input('search') }}">
            <button type="submit">Search</button>
        </form>

        @if ($donations->isEmpty())
            <p>No donations available at the moment.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Quantity</th>
                        <th>Donated At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($donations as $donation)
                        <tr>
                            <td>{{ $donation->item }}</td>
                            <td>{{ $donation->description }}</td>
                            <td>{{ $donation->quantity }}</td>
                            <td>{{ $donation->location }}</td>
                            <td>{{ $donation->created_at->format('Y-m-d H:i') }}</td>
                            <td>
                                <a href="{{ route('donations.edit', ['donation' => $donation->donationsid]) }}" class="edit-button">Edit</a>
                                
                                <!-- Delete Form -->
                                <form action="{{ route('donations.destroy', ['donation' => $donation->donationsid]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this donation?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-button">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <!-- Home Button -->
        <button class="home-button" onclick="window.location.href='{{ url('/') }}'">Home</button>
    </div>
</body>
</html>