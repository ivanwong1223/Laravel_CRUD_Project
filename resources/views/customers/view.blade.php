<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Customer Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @include('components.header')
    <div class="container">
        <h1>Customer Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $customer->name }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $customer->email }}</p>
                <p class="card-text"><strong>Phone:</strong> {{ $customer->phone }}</p>
                <a href="{{ route('customers.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
    
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
