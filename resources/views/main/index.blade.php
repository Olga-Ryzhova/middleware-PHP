<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
  @if (Route::has('login'))
    <div class="flex items-center justify-center h-screen bg-gray-100">
      <div class="text-center p-8 bg-white rounded-lg shadow-lg w-full sm:w-80">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Добро пожаловать!</h1>
        <p class="text-lg text-gray-600 mb-8">Зарегистрируйтесь, чтобы создать учетную запись, затем войдите в систему, чтобы получить доступ к панели управления.</p>

        @auth
          <a href="{{ url('/home') }}"
            class="block py-3 px-6 bg-blue-500 text-white text-lg font-semibold rounded-md hover:bg-blue-600 transition duration-300 mb-4">
            Go to Dashboard
          </a>
        @else
          <a href="{{ route('login') }}"
            class="block py-3 px-6 bg-blue-600 text-white text-lg font-semibold rounded-md hover:bg-blue-700 transition duration-300 mb-4">
            Log in
          </a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}"
              class="block py-3 px-6 bg-green-600 text-white text-lg font-semibold rounded-md hover:bg-green-700 transition duration-300">
              Register
            </a>
          @endif
        @endauth
      </div>
    </div>
  @endif

</body>
</html>