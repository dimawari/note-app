<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('Lotus-modified (1).png') }}" type="image/x-icon"/>

    <title>Eunoia: solace in every note...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <style>
        body {
            background: linear-gradient(
            135deg,
            #ff9aa2 0%,
            #ffb7b2 25%,
            #ffdac1 50%,
            #e2f0CB 75%,
            #efbd5b 100%
            #b5ead7 
            );
    min-height: 100vh;
}
        .app-header {
            background-color: #fcf1d7;
            padding: 30px 0;
            text-align: center;
            margin-top: auto;
            border-bottom: 1px solid #e9ecef;
        }
        .app-title {
            font-family:  Georgia, Times, "Times New Roman", serif;
            font-size: 20px;
            
            font-weight: bold;
            color: #333;
        }
        .app-icon {
            width: 40px;
            height: 40px;
            margin-right: 10px;}
        
        

    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="gradient-background">
<header class="app-header">
        <div class="container">
            <div class="d-flex align-items-center">
                <img src="{{ asset('Lotus-modified (1).png') }}" alt="Eunoia Icon" class="app-icon">
                <h1 class="app-title mb-0">Eunoia: <i>solace in every note...</i></h1>
            </div>
        </div>
    </header>

    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @yield('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-note');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                if (confirm('Are you sure you want to delete this note?')) {
                    this.closest('form').submit();
                }
            });
        });
    });
</script>
</body>
</html>