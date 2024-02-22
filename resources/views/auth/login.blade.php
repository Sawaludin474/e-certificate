<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center h-screen ">
    <div class="w-full max-w-xs">
        <h1 class="flex justify-center text-center font-bold text-3xl">Login</h1>
        <form class="bg-transparent  rounded px-8 pt-6 pb-8 mb-4" action="{{ route('login')}}" method="post">
            @csrf
            <div class="mb-4">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="email" placeholder="Email">
            </div>
            <div class="mb-6">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  name="password" type="password" placeholder="password">
            </div>
            <div class="flex items-center justify-center">
                <button class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Log in
                </button>
            </div>
        </form>
        <h1 class="flex justify-center items-end text-center font-bold h-24 text-3xl">Codely</h1>
    </div>
    
</body>
</html>
