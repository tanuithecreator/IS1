<!DOCTYPE html>
 <html>
 <head>
     <title>Claim Donations</title>
     <style>
         .container {
             width: 80%;
             margin: 0 auto;
         }
         table {
             width: 100%;
             border-collapse: collapse;
         }
         th, td {
             padding: 8px;
             text-align: left;
             border-bottom: 1px solid #ddd;
         }
         th {
             background-color: #f2f2f2;
         }
         .edit-button, .delete-button, .claim-button, .home-button {
             background-color: #4CAF50;
             color: white;
             padding: 8px 16px;
             text-align: center;
             text-decoration: none;
             display: inline-block;
             margin: 4px 2px;
             cursor: pointer;
             border: none;
         }
         .home-button {
             background-color: #008CBA;
         }
     </style>
 </head>
 <body>
     <div class="container">
         <h1>Available Donations</h1>

         <!-- Location Filter Form -->
         <form action="{{ route('recipients.index') }}" method="GET" style="margin-bottom: 20px;">        
             <label for="location">Filter by Location:</label>
             <input type="text" id="location" name="location" value="{{ request()->input('location') }}"> 
             <button type="submit">Filter</button>
         </form>

         <!-- Search Form -->
         <form action="{{ route('recipients.index') }}" method="GET" style="margin-bottom: 20px;">        
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
                             <td>{{ $donation->location }}</td>
                             <td>{{ $donation->quantity }}</td>
                             <td>{{ $donation->created_at->format('Y-m-d H:i') }}</td>
                             <td>
                                 <form action="{{ route('recipients.claim', ['id' => $donation->donationsid]) }}" method="POST">
                                     @csrf
                                     <button type="submit" class="claim-button">Claim</button>
                                 </form>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
         @endif

           <!-- Home Button -->
        <button class="home-button" onclick="window.location.href='{{ url('/') }}'">Home</button>

<!-- Logout Button -->
@if (Route::has('login'))
@auth
<form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" class="home-button" style="background-color: #f44336;">Logout</button>
</form>
@endauth
@endif        
     </div>
 </body>
 </html>