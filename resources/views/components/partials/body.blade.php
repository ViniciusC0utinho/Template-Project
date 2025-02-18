<body class="relative antialiased">
    {{ $slot }}

    @filamentScripts
    @vite('resources/js/app.js')
</body>