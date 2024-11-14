<?php
namespace App\Controllers;
use App\Models\TransactionModel;
use App\Models\ClientModel;
use CodeIgniter\Controller;

class TransactionController extends Controller
{
public function listTransactions()
{

    $model = new TransactionModel();
    $data['transactions'] = $model->getTransactionsWithClientAndProduct();
    return view('transaction/listTransaction', $data);
}
}