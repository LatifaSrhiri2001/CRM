<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>login admin</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet" />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");

      html {
        font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
    </style>
  </head>

<body class="leading-normal tracking-normal text-indigo-400 m-6 bg-cover bg-fixed" style="background-image: url('assets/img/header.png');">
    <div class="h-full">
     
        <!--Main-->
        <div class="container pt-24 md:pt-36 mx-auto flex h-sceen justify-center items-center">
            
            <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
              
                <div class="w-full container mx-auto mb-16 flex h-sceen justify-center items-center">
                    <a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                        Admin<span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">CRM</span>
                    </a>
                </div>

                <!-- Affiche le message d'erreur -->
                <?php if(session()->getFlashdata('error')): ?>
                    <div class="bg-red-500 text-white text-center p-2 rounded mb-4">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>

                <form action="/auth/processLogin" method="POST" class="bg-gray-900 opacity-75 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
                    <?= csrf_field() ?> 
                    <div class="mb-4">
                        <label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress">
                            Email
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring"
                            id="emailaddress"
                            type="email"
                            name="email"
                            placeholder="you@somewhere.com"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label class="block text-blue-300 py-2 font-bold mb-2" for="password">
                            Password
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring"
                            id="password"
                            type="password"
                            name="password"
                            placeholder="***********"
                            required
                        />
                    </div>

                    <div class="flex items-center justify-between pt-4">
                        <button
                            class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                            type="submit"
                        >
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
