<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="h-full bg-gray-100">

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <!-- Affichage de l'alerte en cas de succès -->
  @if($errors->any())
    <div class="alert alert-danger w-4/12 mx-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  @if(session('success'))
    <div role="alert" class="alert alert-success w-4/12 mx-auto p-4 mb-6 bg-green-100 border border-green-400 text-green-800 rounded-md flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span>{{ session('success') }}</span>
    </div>
  @endif    

  <!-- Formulaire d'inscription -->
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">Register</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="post">
      @csrf
      <div>
        <label for="name" class="block text-sm font-medium text-gray-900">Full Name</label>
        <div class="mt-2">
          <input type="text" name="name" id="name" autocomplete="name" required
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border {{ $errors->has('name') ? 'border-red-500' : 'border-gray-300' }} placeholder-gray-400 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:outline-none sm:text-sm">
          @if ($errors->has('name'))
            <p class="text-red-500 text-sm mt-1">{{ $errors->first('name') }}</p>
          @endif
        </div>
      </div>
      <div>
        <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
        <div class="mt-2">
          <input type="email" name="email" id="email" autocomplete="email" required
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} placeholder-gray-400 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:outline-none sm:text-sm">
          @if ($errors->has('email'))
            <p class="text-red-500 text-sm mt-1">{{ $errors->first('email') }}</p>
          @endif
        </div>
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
        <div class="mt-2">
          <input type="password" name="password" id="password" autocomplete="current-password" required
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }} placeholder-gray-400 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:outline-none sm:text-sm">
          @if ($errors->has('password'))
            <p class="text-red-500 text-sm mt-1">{{ $errors->first('password') }}</p>
          @endif
        </div>
      </div>
      <div>
        <label for="password_confirmation" class="block text-sm font-medium text-gray-900">Password confirmation</label>
        <div class="mt-2">
          <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="current-password" required
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border {{ $errors->has('password_confirmation') ? 'border-red-500' : 'border-gray-300' }} placeholder-gray-400 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:outline-none sm:text-sm">
          @if ($errors->has('password_confirmation'))
            <p class="text-red-500 text-sm mt-1">{{ $errors->first('password_confirmation') }}</p>
          @endif
        </div>
      </div>
      <div>
        <button type="submit"
          class="w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-indigo-600">
          Sign up
        </button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Not a member?
      <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Start a 14-day free trial</a>
    </p>
  </div>
</div>

</body>
</html>
