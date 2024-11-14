<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['client_id', 'produit_id', 'titre	', 'etat', 'description',  'date_interaction', 'notes', 'created_at', 'updated_at'];
     
    // joiture pour selectionner nomPRODUIT et nomClient 
     public function getTransactionsWithClientAndProduct()
    {
        return $this->select('transactions.*, clients.nom as client_nom, produits.nom as produit_nom')
                    ->join('clients', 'clients.id = transactions.client_id')
                    ->join('produits', 'produits.id = transactions.produit_id')
                    ->findAll();
    }

}



