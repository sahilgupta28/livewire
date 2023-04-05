<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            },
            plugins: [
                require("@tailwindcss/forms")({
                    strategy: 'base', // only generate global styles
                    strategy: 'class', // only generate classes
                }),
            ],
        }
    </script>
</head>

<body>

@livewire('blog-page-header')
    @livewire('blog-page')
    @livewireScripts
@livewireScripts
</body>
</html>
