<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RATIO請求書ログイン画面</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    
</body>

<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="h-36" src="img/Ratiologo.PNG" alt="logo">    
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-3 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Sign in to your account
                </h1>
                <form action="invoice_login_act.php" method="POST" class="space-y-4 md:space-y-6">
                    <fieldset>
                        
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User name</label>
                            <input type="text" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-gray-600 focus:border-gray-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div class="my-6">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="text" name="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-gray-600 focus:border-gray-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="my-6">
                        
                        <button class="w-full text-white 
                                    bg-blue-500 
                                    hover:bg-orange-500 
                                    transition-colors duration-200 ease-in-out 
                                    focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium 
                                    rounded-lg text-sm px-5 py-2.5 text-center">
                            Login
                        </button>
                            </div>
                        <div class="flex items-center justify-between">
                        <div class="flex items-start my-3">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-gray-600 dark:ring-offset-gray-800" required="">
                            </div>
                            <div class="ml-3  text-sm">
                                <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                            </div>
                        </div>
                        </div>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Don’t have an account yet? <a href="invoice_register.php" class="font-medium text-blue-500 hover:underline dark:text-white-500">Register</a>
                        </p>
                        
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>

</html>