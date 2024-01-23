<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    {{-- JQ --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '#pagination a', function (e) {
                e.preventDefault();

                let page = $(this).attr('href').split('page=')[1];

                $.ajax({
                    url: '/load-more-projects?page=' + page,
                    method: 'post',
                    data: {
                        _token: '{{ csrf_token() }}',
                        page: page
                    },
                    success: function (data) {
                        $('#projects-container').html(data); // Assuming '#projects-container' is the ID of the container for displaying projects
                    }
                });
            });
        });
    </script>
</head>
<body>
    <header class="py-14">
        <x-menu/>
    </header>
    {{ $slot }}
    <x-flash />
    <footer class="py-14">
        <x-menu/>
    </footer>
</body>
</html>