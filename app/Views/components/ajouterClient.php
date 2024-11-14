<!-- Main modal -->
<div id="client-registration-modal" tabindex="-1" aria-hidden="true"
  class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-md max-h-full">
    <!-- Modal content -->
    <div class="relative rounded-lg shadow bg-gray-800">
      <!-- Modal header -->
      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-600">
        <h3 class="text-xl font-semibold text-white">
          Inscription Client
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
        <form class="space-y-4" action="/clients/store" method="post">
          <?= csrf_field() ?>
          <div>
            <label for="nom" class="block mb-2 text-sm font-medium text-white">Nom</label>
            <input type="text" name="nom"
              class="bg-gray-700 border border-gray-500 text-white text-sm rounded-lg focus:ring-gray-800  block w-full p-2.5"
              placeholder="Votre nom" value="<?= old('nom') ?>" required />

            <!-- Affichage de l'erreur pour 'nom' -->
            <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['nom'])) : ?>
            <div class="text-red-500 text-sm"><?= session()->getFlashdata('errors')['nom'] ?></div>
            <?php endif; ?>
          </div>

          <div>
            <?php if (isset(session()->getFlashdata('errors')['email'])): ?>
            <div class="text-red-500 text-sm"><?= session()->getFlashdata('errors')['email'] ?></div>
            <?php endif; ?>

            <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
            <input type="email" name="email"
              class="bg-gray-700 border border-gray-500 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Votre email" value="<?= old('email') ?>" required />

            <!-- Affichage de l'erreur pour 'email' -->

          </div>

          <div>
            <label for="telephone" class="block mb-2 text-sm font-medium text-white">Téléphone</label>
            <input type="tel" name="telephone"
              class="bg-gray-700 border border-gray-500 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Votre téléphone" value="<?= old('telephone') ?>" required />

            <!-- Affichage de l'erreur pour 'telephone' -->
            <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['telephone'])) : ?>
            <div class="text-red-500 text-sm"><?= session()->getFlashdata('errors')['telephone'] ?></div>
            <?php endif; ?>
          </div>

          <div>
            <label for="adresse" class="block mb-2 text-sm font-medium text-white">Adresse</label>
            <textarea name="adresse"
              class="bg-gray-700 border border-gray-500 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Votre adresse" required><?= old('adresse') ?></textarea>

            <!-- Affichage de l'erreur pour 'adresse' -->
            <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['adresse'])) : ?>
            <div class="text-red-500 text-sm"><?= session()->getFlashdata('errors')['adresse'] ?></div>
            <?php endif; ?>
          </div>

          <button type="submit"
            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">S'inscrire</button>
        </form>

      </div>
    </div>
  </div>
</div>