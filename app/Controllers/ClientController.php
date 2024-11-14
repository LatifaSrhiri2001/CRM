<?php

namespace App\Controllers;

use App\Models\ClientModel;
use CodeIgniter\Controller;

class ClientController extends Controller
{
    /****************************************************afficher client************************************ */
    public function index()
    {
        $model = new ClientModel();
        $data['clients'] = $model->paginate(4);
        $data['pagination_link'] = $model->pager;
        return view('clients/index', $data);
    }
/*********************************************************search******************************************** */
public function search()
{
    if ($this->request->isAJAX()) {
        $query = $this->request->getPost('query');
        $model = new ClientModel();
        $results = $model->like('nom', $query)
                         ->orLike('email', $query)
                         ->orLike('adresse', $query)
                         ->findAll(10);

        $output = '';
        if (!empty($results)) {
            foreach ($results as $client) {
                $output .= '<tr>';
                $output .= '<td class="px-6 py-7 font-bold text-1xl">' . esc($client['nom']) . '</td>';
                $output .= '<td class="px-6 py-7">' . esc($client['email']) . '</td>';
                $output .= '<td class="px-6 py-7">' . esc($client['telephone']) . '</td>';
                $output .= '<td class="px-6 py-7">' . esc($client['adresse']) . '</td>';
                $output .= '<td class="px-6 py-7">';
                $output .= '<a href="' . site_url('clients/indexInteraction/' . $client['id']) . '"><i class="fas fa-eye"></i></a>';
                $output .= '<a href="' . site_url('clients/edit/' . $client['id']) . '"><i class="fas fa-trash"></i></a>';
                $output .= '<a href="#"><i class="fas fa-edit"></i></a>';
                $output .= '</td>';
                $output .= '</tr>';
            }
        } else {
            $output .= '<tr><td colspan="5" class="text-center text-white text-2xl py-4">Aucun résultat trouvé</td></tr>';
        }

        echo $output;
    }



}
/************************************************ajouter client********************************************* */
    // ajouter client
    public function store(){
        // validation des inputs
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'nom' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[clients.email]',
            'telephone' => 'required',
            'adresse' => 'required'
        ])) {
            session()->setFlashdata('errors', $this->validator->getErrors());
            return redirect()->back()->withInput();
        }

        // creer instance de mdel clients pour interagir avec DB 
        $clientModel = new ClientModel();
        // inserer les donnes entrer par utilisateur  
        $clientModel->save([
            // recuperer les info envoye avec methode post
            'nom'=>$this->request->getPost('nom'),
            'email' => $this->request->getPost('email'),
            'telephone' => $this->request->getPost('telephone'),
            'adresse' => $this->request->getPost('adresse')
        ]);
        return redirect()->to('/clients');

    }
/****************************************update*************************************** **************/
// ================Passer les données du client à la vue========================//
    public function edit($id)
{
    $clientModel = new ClientModel();
    $client = $clientModel->find($id);
    
    return view('components/editClient', ['client' => $client]);
}

// ===================================process update====================================//

public function update($id)
{
    //1- Validation des inputs
    $validation = \Config\Services::validation();
    if (!$this->validate([
        'nom' => 'required|min_length[3]',
        'email' => 'required|valid_email|is_unique[clients.email,id,' . $id . ']', 
        'telephone' => 'required',
        'adresse' => 'required'
    ])) {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }

    //2- Préparation  des données pour la mise à jour

    $data = [
        'nom' => $this->request->getPost('nom'),
        'email' => $this->request->getPost('email'),
        'telephone' => $this->request->getPost('telephone'),
        'adresse' => $this->request->getPost('adresse')
    ];

    //3- Mettre à jour le client

    $clientModel = new ClientModel();
    if ($clientModel->update($id, $data)) {
        session()->setFlashdata('success', 'Client mis a jour avec success.');
    } else {
        session()->setFlashdata('errors', 'mise a jour echoue .');
    }
    return redirect()->back();
    

}
}