<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col h-screen">
    <header class="bg-gray-500 text-white p-2 text-xl font-bold">
        <h1 class="px-8">Codely</h1>
    </header>
    <div class="flex flex-1 overflow-hidden">
        <aside class="bg-white text-white w-64 p-4 hidden md:block border-r-2 border-gray-500">
            <ul class="space-y-2">
                <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900">
                        <span class="ml-3">Dashboard
                            <span class="bg-gray-500 mt-3 w-24 h-0.5 block"></span>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('peserta.index') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-gray-900 hover:bg-gray-300 dark:hover:bg-gray-700">
                        <span class="ml-3">Data Peserta</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('sertif.edit', 1) }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-gray-900 hover:bg-gray-300 dark:hover:bg-gray-700">
                        <span class="ml-3">Settings</span>
                    </a>
                </li>
                <li>
                    <form action="{{ route('logout')}}" method="post">
                        @csrf
                        <button class="flex items-center p-2 text-base w-full font-normal text-gray-900 rounded-lg dark:text-gray-900 hover:bg-gray-300 dark:hover:bg-gray-700" type="submit">
                            <span class="ml-3"><i class=""></i>Log Out</span>
                        </button>
                    </form>
                </li>
            </ul>
        </aside>
        
        <main class="flex-1 p-4 overflow-auto flex justify-center">
            @yield('content')
        </main>
        
        
    </div>
    
</body>
</html>
