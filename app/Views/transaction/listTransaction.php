
<!-- app/Views/index.php -->
<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- add contact  -->
<div class="container ">
 <!----------------------------- saerch input------------------------- -->
<div class="div mb-8 text-white p-8 rounded-lg" style="background-color:#141C2F">

</div>
<!-- ---------------------------search ---------------------------------- -->

  <div class="relative overflow-x-auto text-white rounded-lg font-3xl p-8  shadow-lg" style="background-color:#141C2F">
    <div class="flex flex-row justify-between mb-6">
      <h1 class="text-white  font-bold text-2xl ">Contact</h1>
      <div class="buttons">
        <button data-modal-target="client-registration-modal" data-modal-toggle="client-registration-modal"
          type="button" class="text-gray-800  rounded-lg p-4 font-bold " style="background-color:#FFBC99"> + Ajouter
          contact
        </button>
        <button type="button" class="text-white rounded-lg p-4 font-bold border  "> Download CSV
        </button>
      </div>
    </div>
    <!-- table -->
    <table class="min-w-full shadow-md rounded my-6">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Titre</th>
                    <th class="py-2 px-4 border-b">Nom Client</th>
                    <th class="py-2 px-4 border-b">Nom Produit</th>
                    <th class="py-2 px-4 border-b">État</th>
                    <th class="py-2 px-4 border-b">Date</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transactions as $transaction): ?>
                <tr>
                    <td class="py-2 px-4 border-b"><?= $transaction['id'] ?></td>
                    <td class="py-2 px-4 border-b"><?= $transaction['titre'] ?></td>
                    <td class="py-2 px-4 border-b"><?= $transaction['client_nom'] ?></td>
                    <td class="py-2 px-4 border-b"><?= $transaction['produit_nom'] ?></td>
                    <td class="py-2 px-4 border-b"><?= $transaction['etat'] ?></td>
                    <td class="py-2 px-4 border-b"><?= $transaction['derniere_interaction'] ?></td>
                    <td class="py-2 px-4 border-b">
                        <a href="/transactions/detail/<?= $transaction['id'] ?>" class="text-blue-600">Voir</a> |
                        <a href="/transactions/edit/<?= $transaction['id'] ?>" class="text-green-600">Modifier</a> |
                        <a href="/transactions/delete/<?= $transaction['id'] ?>" class="text-red-600">Supprimer</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <!------------------------------------------ Pagination Links -------------------------------------------------->
    
      <!-- ----------------------------------------end pagination----------------------------------------------------- -->
    </div>
  </div>
</div>
<!-- -------------------------------------------call to components----------------------------------------------- -->
<?= view('components/ajouterClient'); ?>



<?= $this->endSection() ?>
