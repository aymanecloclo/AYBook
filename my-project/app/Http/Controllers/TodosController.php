<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = [
            [
                'id' => 1,
                'title' => 'Acheter du pain',
                'task' => 'Aller à la boulangerie pour acheter du pain',
                'status' => 'pending',  // Statut: en attente
                'description' => 'Acheter du pain de campagne',
                'due_date' => '2024-11-10',  // Date d’échéance
                'created_at' => now(),  // Date de création
                'updated_at' => now(),  // Date de mise à jour
            ],
            [
                'id' => 2,
                'title' => 'Faire du sport',
                'task' => 'Aller à la salle de sport',
                'status' => 'completed',  // Statut: terminé
                'description' => 'Séance de musculation',
                'due_date' => '2024-11-09',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'Terminer le projet Laravel',
                'task' => 'Compléter les fonctionnalités du projet',
                'status' => 'pending',
                'description' => 'Compléter l’implémentation des routes et des contrôleurs',
                'due_date' => '2024-11-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'Lire un livre',
                'task' => 'Lire un chapitre du livre sur Laravel',
                'status' => 'in-progress',  // Statut: en cours
                'description' => 'Chapitre 3 sur l’architecture Laravel',
                'due_date' => '2024-11-12',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        
        return view('todos.index',['todos'=>$todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
  // Assurez-vous que vous avez importé le modèle Todo

    public function store(Request $request)
    {
        // Validation des données reçues
        $request->validate([
            'title' => 'required|string|max:255',
            'task' => 'required|string',
            'description' => 'nullable|string',
            'status' => 'required',
            'due_date' => 'required|date',
        ]);
    
        // Création d'une nouvelle tâche dans la base de données
        Todos::create([
            'title' => $request->title,
            'task' => $request->task,
            'description' => $request->description,
            'status' => $request->status,
            'due_date' => $request->due_date,
        ]);
    
        // Rediriger l'utilisateur vers la page des tâches (vous pouvez ajuster la route)
        return redirect()->route('todos.index')->with('success', 'Tâche ajoutée avec succès.');
    }
    
   

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=Todos::findOrFail($id);
        return view('todos.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'task' => 'required|string',
            'description' => 'nullable|string',
            'status' => 'required',
            'due_date' => 'required|date',
        ]);
        $task=Todos::findOrFail($id);
        $task->title=$request->input('title');
        $task->task=$request->input('task');
        $task->description=$request->input('description');
        $task->status=$request->input('status');
        $task->due_date=$request->input('due_date');
        return redirect()->route('todos.index')->with('update_success','mdofiation effectue avec success');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task=Todos::findOrFail($id);
        $task->delete();
        return redirect()->route('todos.index')->with('delete','element suppriem');
    }
}
