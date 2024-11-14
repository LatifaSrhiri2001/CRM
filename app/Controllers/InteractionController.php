<?php

namespace App\Controllers;
use App\Models\InteractionModel;
use App\Models\ClientModel;
use CodeIgniter\Controller;

class InteractionController extends Controller
{
/***********************************afficher interaction********************* */
    public function index($client_id)
{
    $modelInteraction = new InteractionModel();
    $interaction['interactions'] = $modelInteraction->where('client_id', $client_id)->findAll();
    $interaction['client_id'] = $client_id;
    return view('interactions/index', $interaction);
}

/***************************************ajouter interaction************************ */
public function storeInteraction($client_id)
{
   
    // Validation des inputs pour l'interaction
    $validation = \Config\Services::validation();
    if (!$this->validate([
        'date' => 'required|valid_date',
        'details' => 'required|min_length[5]', 
        'responsable' => 'required|min_length[3]', 
    ])) {
        session()->setFlashdata('errors', $this->validator->getErrors());
        return redirect()->back()->withInput();
    }

    // Création du modèle d'interaction
    $interactionModel = new InteractionModel();

    // Insérer les données envoyées par l'utilisateur
    $interactionModel->save([
        'client_id' => $client_id,
        'date' => $this->request->getPost('date'),
        'details' => $this->request->getPost('details'),
        'responsable' => $this->request->getPost('responsable')
    ]);

    // Redirection après l'insertion
    return redirect()->back();
}



}

