<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier todos</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-center text-4xl my-5">Modifier task</h1>
    <form action="{{ route('todos.update', ['id' => $data->id]) }}" method="POST">
        @csrf
        @method('PUT')
    
        <div class="flex flex-col space-y-4">
            <!-- Champ Title -->
            <div class="flex items-center border-b border-gray-300 py-2">
                <input type="text" name="title" placeholder="Titre de la tâche"
                       class="appearance-none bg-transparent border-none w-full text-gray-700 py-1 px-2 leading-tight focus:outline-none" 
                       value="{{ old('title', $data->title) }}" />
                @error('title')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
    
            <!-- Champ Task -->
            <div class="flex items-center border-b border-gray-300 py-2">
                <input type="text" name="task" placeholder="Description de la tâche"
                       class="appearance-none bg-transparent border-none w-full text-gray-700 py-1 px-2 leading-tight focus:outline-none"
                       value="{{ old('task', $data->task) }}" required />
                @error('task')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
    
            <!-- Champ Description -->
            <div class="flex items-center border-b border-gray-300 py-2">
                <textarea name="description" placeholder="Détails supplémentaires" 
                          class="appearance-none bg-transparent border-none w-full text-gray-700 py-1 px-2 leading-tight focus:outline-none"
                          required>{{ old('description', $data->description) }}</textarea>
                @error('description')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
    
            <!-- Champ Status -->
            <div class="flex items-center border-b border-gray-300 py-2">
                <select name="status" class="appearance-none bg-transparent border-none w-full text-gray-700 py-1 px-2 leading-tight focus:outline-none" required>
                    <option value="pending" {{ old('status', $data->status) == 'pending' ? 'selected' : '' }}>En attente</option>
                    <option value="completed" {{ old('status', $data->status) == 'completed' ? 'selected' : '' }}>Complété</option>
                    <option value="in-progress" {{ old('status', $data->status) == 'in-progress' ? 'selected' : '' }}>En cours</option>
                </select>
                @error('status')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
    
            <!-- Champ Due Date -->
            <div class="flex items-center border-b border-gray-300 py-2">
                <input type="date" name="due_date" value="{{ old('due_date', $data->due_date) }}" 
                       class="appearance-none bg-transparent border-none w-full text-gray-700 py-1 px-2 leading-tight focus:outline-none" required />
                @error('due_date')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
    
            <!-- Bouton Modifier -->
            <div class="flex justify-end mt-4">
                
                 
              
                <button type="submit" class="bg-red-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Modifier
                </button>
            </div>
        </div>
    </form>
    
</body>
</html>