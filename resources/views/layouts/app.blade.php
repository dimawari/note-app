<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('Lotus-modified (1).png') }}" type="image/x-icon"/>

    <title>Eunoia: solace in every note...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            background: #FBFAF2;
            min-height: 100vh;
        }

        .app-header {
            background: linear-gradient(109.6deg, rgb(255, 219, 47) 11.2%, rgb(244, 253, 0) 100.2%);
            padding: 30px 0;
            text-align: center;
            margin-top: auto;
            border-bottom: 1px solid #e9ecef;
        }

        .app-title {
            font-family: Georgia, Times, "Times New Roman", serif;
            font-size: 24px; 
            font-weight: bold;
            color: #333;
            text-align: center;
                margin: 0;
}

        .app-subtitle {
             font-family: "Times New Roman", Times, serif;
             font-size: 16px; 
             text-align: center; 
             margin-top: 9px; 
             color: #555; 
}

        .app-icon {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="gradient-background">
        <header class="app-header">
            <div class="container">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('Lotus-modified (1).png') }}" alt="Eunoia Icon" class="app-icon">
                    <h1 class="app-title mb-0"><i>Eunoia:</i></h1>
                    <h3 class="app-subtitle"><i>solace in every note...</i></h3>
                        
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

                

                document.addEventListener('visibilitychange', function() {
                    document.title = document.visibilityState === 'hidden' ? "Come Back, Be Here :(" : "Eunoia: Solace In Every Note";
                });
            });
        </script>
    </div>
</body>
</html>
