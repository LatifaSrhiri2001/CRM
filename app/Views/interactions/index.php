<!-- app/Views/interactions/index.php -->
<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container mx-auto ">

  <div class="flex flex-row items-center  justify-between m-7 p-8 rounded-lg " style="background-color:#141C2F">
    <h2 class="text-3xl font-bold text-white mb-6"> Interactions pour ce client</h2>
    <!-------
        <button data-modal-target="interaction-modal" data-modal-toggle=interaction-modal"
           type="button" class="text-gray-800  rounded-lg p-4 font-bold  bg-green-200" > + Ajouter
           interaction
        </button> 
        </div>
     -------->
    <button data-modal-target="client-registration-modal" data-modal-toggle="client-registration-modal" type="button"
      class="text-gray-800  rounded-lg p-4 font-bold  bg-green-200">
       +Ajouter interaction
    </button>

  </div>
  <div class="overflow-x-auto shadow-lg rounded-lg" style="background-color:#141C2F">
    <table class="w-full text-sm text-left text-white  rounded-lg">
      <thead class="border-b  text-white uppercase">
        <tr>
          <th scope="col" class="px-4 py-4">Date</th>
          <th scope="col" class="px-4 py-4">Détails</th>
          <th scope="col" class="px-4 py-4">Responsable</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($interactions as $interaction): ?>
        <tr class="border-b border-gray-700 hover:bg-gray-600">
          <td class="px-6 py-4"><?= esc($interaction['date']) ?></td>
          <td class="px-6 py-4"><?= esc($interaction['details']) ?></td>
          <td class="px-6 py-4"><?= esc($interaction['responsable']) ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<?= view('components/ajouterInteraction'); ?>
<?= $this->endSection() ?>