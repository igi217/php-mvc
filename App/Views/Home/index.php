<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home Page</title>
</head>
<body>
    <main class="bg-base-200 h-[100vh] w-[100%]" >
        <div class="navbar bg-primary text-primary-content">
            <a class="btn btn-ghost normal-case font-white text-xl">Welcome</a>
        </div>
        <div class="hero min-h-screen bg-base-200">
            <div class="hero-content text-center">
                <div class="max-w-md">
                    <h1 class="text-5xl font-bold">Hello, <?= $user['name'] ?></h1>
                     <p class="py-6">Welcome to Website</p>
                     <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>