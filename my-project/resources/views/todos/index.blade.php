<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
@if(session('update_success'))
   <div role="alert" class="alert alert-success">
                        <span>{{ session('update_success') }}</span>
                </div>
@endif
  <!-- Container principal -->
  <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
      <!-- Titre -->
      <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Ma Todo List</h1>

      <!-- Formulaire d'ajout de tâche -->

      <form class="mb-6" action="{{ route('todos.store') }}" method="POST">
        @csrf
        <div class="flex flex-col space-y-4">
            <!-- Champ Title -->
            <div class="flex items-center border-b border-gray-300 py-2">
                <input type="text" name="title" placeholder="Titre de la tâche"
                       class="appearance-none bg-transparent border-none w-full text-gray-700 py-1 px-2 leading-tight focus:outline-none" 
                       value="{{ old('title') }}" required />
            </div>
    
            <!-- Champ Task -->
            <div class="flex items-center border-b border-gray-300 py-2">
                <input type="text" name="task" placeholder="Description de la tâche"
                       class="appearance-none bg-transparent border-none w-full text-gray-700 py-1 px-2 leading-tight focus:outline-none"
                       value="{{ old('task') }}" required />
            </div>
    
            <!-- Champ Description -->
            <div class="flex items-center border-b border-gray-300 py-2">
                <textarea name="description" placeholder="Détails supplémentaires" 
                          class="appearance-none bg-transparent border-none w-full text-gray-700 py-1 px-2 leading-tight focus:outline-none"
                          required>{{ old('description') }}</textarea>
            </div>
    
            <!-- Champ Status -->
            <div class="flex items-center border-b border-gray-300 py-2">
                <select name="status" class="appearance-none bg-transparent border-none w-full text-gray-700 py-1 px-2 leading-tight focus:outline-none" required>
                    <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>En attente</option>
                    <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Complété</option>
                    <option value="in-progress" {{ old('status') == 'in-progress' ? 'selected' : '' }}>En cours</option>
                </select>
            </div>
    
            <!-- Champ Due Date -->
            <div class="flex items-center border-b border-gray-300 py-2">
                <input type="date" name="due_date" value="{{ old('due_date') }}" 
                       class="appearance-none bg-transparent border-none w-full text-gray-700 py-1 px-2 leading-tight focus:outline-none" required />
            </div>
    
            <!-- Bouton Ajouter -->
            <div class="flex justify-end mt-4">
            
              @if(session('success'))
               
               <div role="alert" class="alert alert-success">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  class="h-6 w-6 shrink-0 stroke-current">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>{{session('success')}}</span>
              </div>
              @endif
                <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Ajouter
                </button>
            </div>
        </div>
    </form>
    

      <!-- Liste des tâches -->
      <ul class="space-y-4">
                @foreach ($todos as $todo)
                <li class="flex items-center justify-between bg-gray-100 rounded-lg p-3">
                    <!-- Affichage de la tâche -->
                    <span class="text-gray-800">{{ $todo['task'] }}</span>
                    
                    <!-- Affichage d'autres informations de la tâche -->
                    <div>
                        <p class="text-sm text-gray-600">Titre: {{ $todo['title'] }}</p>
                        <p class="text-sm text-gray-500">Description: {{ $todo['description'] }}</p>
                        <p class="text-sm text-gray-400">Échéance: {{ $todo['due_date']}}</p>
                        <p class="text-sm text-gray-400">Statut: {{ $todo['status'] }}</p>
                    </div>
                    <div>
                      <a href={{route("todos.edit",$todo['id'])}} type="button" class="btn btn-primary font-semibold mx-1">
                          Modifier
                      </a>
                      <a href={{route("todos.delete",$todo['id'])}} type="button" class="btn btn-warning font-semibold">
                          Supprimer
                      </a>
                  </div>
                </li>
               
          
        @endforeach
    </ul>
    
  </div>

</body>
</html>