

<!-- Main modal -->
<div id="client-registration-modal" tabindex="-1" aria-hidden="true"
  class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-md max-h-full">
    <!-- Modal content -->
    <div class="relative rounded-lg shadow " style="background-color:#141C2F">
      <!-- Modal header -->
      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-600">
        <h3 class="text-xl font-semibold text-white">
          Ajouter Interaction
        </h3>
        <button type="button"
          class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-600 hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
          data-modal-hide="client-registration-modal">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Fermer le modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="p-4 md:p-5">
       

      <form class="space-y-4" action="/interactions/storeInteraction/<?= $client_id ?>" method="post">
        
          <?= csrf_field() ?>
          <input type="hidden" name="client_id" value="<?= $client_id ?>" />
          <!-- Date de l'interaction -->
          <div>
            <label for="date" class="block mb-2 text-sm font-medium text-white">Date de l'interaction</label>
            <input type="date" name="date"
              class="bg-gray-700 border border-gray-500 text-white text-sm rounded-lg focus:ring-gray-800  block w-full p-2.5"
              placeholder="Date de l'interaction" value="<?= old('date') ?>" required />

            <!-- Affichage de l'erreur pour 'date' -->
            <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['date'])) : ?>
            <div class="text-red-500 text-sm"><?= session()->getFlashdata('errors')['date'] ?></div>
            <?php endif; ?>
          </div>

          <!-- Détails de l'interaction -->
          <div>
            <label for="details" class="block mb-2 text-sm font-medium text-white">Détails de l'interaction</label>
            <textarea name="details"
              class="bg-gray-700 border border-gray-500 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Détails de l'interaction" required><?= old('details') ?></textarea>

            <!-- Affichage de l'erreur pour 'details' -->
            <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['details'])) : ?>
            <div class="text-red-500 text-sm"><?= session()->getFlashdata('errors')['details'] ?></div>
            <?php endif; ?>
          </div>

          <!-- Responsable de l'interaction -->
          <div>
            <label for="responsable" class="block mb-2 text-sm font-medium text-white">Responsable de l'interaction</label>
            <input type="text" name="responsable"
              class="bg-gray-700 border border-gray-500 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Responsable" value="<?= old('responsable') ?>" required />

            <!-- Affichage de l'erreur pour 'responsable' -->
            <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['responsable'])) : ?>
            <div class="text-red-500 text-sm"><?= session()->getFlashdata('errors')['responsable'] ?></div>
            <?php endif; ?>
          </div>

          <!-- Soumettre le formulaire -->
          <button type="submit"
            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ajouter Interaction</button>
        </form>
      </div>
    </div>
  </div>
</div>
