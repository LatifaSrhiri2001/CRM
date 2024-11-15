<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- add contact -->
<div class="container text-gray-100">

  <!-- Header Section -->
  <div class="mb-4 text-white p-4 rounded-lg flex justify-between">
    <h1 class="text-2xl font-bold">Liste Transactions</h1>
    <button data-modal-target="client-registration-modal" data-modal-toggle="client-registration-modal" type="button"
      class="text-gray-800 rounded-lg px-4 py-2 font-bold bg-blue-200">+ Ajouter transaction
    </button>
  </div>

  <!-- Filter and Table Section -->
  <div class="flex flex-wrap gap-8">

    <!-- Filter Section -->
    <div class="w-full sm:w-1/4 p-6 rounded-lg" style="background-color:#141C2F">
    
        <form action="#" method="GET" class="flex flex-wrap gap-4">

          <!-- Filter by Client -->
          <select id="client" name="client"
            class="mt-1 block w-full sm:w-auto p-2 border border-gray-400 rounded-full text-white"
            style="background-color:#141C2F">
            <option value="">Client</option>
            <option value="1">Client 1</option>
            <option value="2">Client 2</option>
            <option value="3">Client 3</option>
          </select>

          <!-- Filter by Product -->
          <select id="produit" name="produit"
            class="mt-1 block w-full sm:w-auto p-2 border border-gray-400 rounded-full text-white"
            style="background-color:#141C2F">
            <option value="">Produit</option>
            <option value="1">Produit A</option>
            <option value="2">Produit B</option>
            <option value="3">Produit C</option>
          </select>

          <!-- Filter by Status -->
          <select id="etat" name="etat"
            class="mt-1 block w-full sm:w-auto p-2 border border-gray-400 rounded-full text-white"
            style="background-color:#141C2F">
            <option value="">État</option>
            <option value="en cours">En cours</option>
            <option value="conclu">Conclu</option>
            <option value="perdu">Perdu</option>
          </select>

          <!-- Filter by Last Interaction Date -->
          <input type="date" id="date_interaction" name="date_interaction"
            class="mt-1 block w-full sm:w-auto p-2 border border-gray-400 rounded-full text-white"
            style="background-color:#141C2F">

          <!-- Search Button -->
          <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded-full">Chercher</button>

          <!-- Sort by Dropdown -->
          <select id="sort" name="sort"
            class="mt-1 block w-full sm:w-auto p-2 border border-gray-400 rounded-full text-white"
            style="background-color:#141C2F">
            <option value="date">Date</option>
            <option value="client">Client</option>
            <option value="etat">État</option>
          </select>
        </form>
     

    </div>

    <!-- Table Section -->
    <div class="w-full sm:w-3/4 rounded border text-gray-100 rounded-lg border-gray-600 "
      style="background-color:#141C2F">
      <div class="relative overflow-x-auto  p-3 ">
        <table class="min-w-full ">
          <thead>
            <tr>
              <th class="py-2 px-4 border-b border-gray-400">Titre</th>
              <th class="py-2 px-4 border-b border-gray-400">Nom Client</th>
              <th class="py-2 px-4 border-b border-gray-400">Nom Produit</th>
              <th class="py-2 px-4 border-b border-gray-400">État</th>
              <th class="py-2 px-4 border-b border-gray-400">Date</th>
              <th class="py-2 px-4 border-b border-gray-400">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($transactions as $transaction): ?>
            <tr>
              <td class="py-2 px-4 border-b border-gray-400"><?= $transaction['titre'] ?></td>
              <td class="py-2 px-4 border-b border-gray-400"><?= $transaction['client_nom'] ?></td>
              <td class="py-2 px-4 border-b border-gray-400"><?= $transaction['produit_nom'] ?></td>
              <td class="py-2 px-4 border-b border-gray-400"><?= $transaction['etat'] ?></td>
              <td class="py-2 px-4 border-b border-gray-400"><?= $transaction['derniere_interaction'] ?></td>
              <td class="py-2 px-4 border-b border-gray-400">
                <a href="/transactions/detail/<?= $transaction['id'] ?>" class="text-blue-600">Voir</a> |
                <a href="/transactions/edit/<?= $transaction['id'] ?>" class="text-green-600">Modifier</a> |
                <a href="/transactions/delete/<?= $transaction['id'] ?>" class="text-red-600">Supprimer</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>


<!-- -------------------------------------------call to components----------------------------------------------- -->
<?= view('components/ajouterClient'); ?>

<?= $this->endSection() ?>