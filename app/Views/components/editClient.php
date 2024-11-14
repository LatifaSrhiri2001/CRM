<!-- app/Views/components/clientEdit.php -->
<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>


<div class="  ">
<!-- ---------------------------------form------------------------------------------- -->
<form action="<?= site_url('clients/update/' . $client['id']) ?>" method="post" class="p-8  max-w-lg rounded-lg shadow-lg ">
  <?= csrf_field() ?>
  <!-- DISPLAY MESSAGE ERRORSUCCESS  -->
  <?= view('components/messageEroorSuccess');?>


 
  <div class="mb-6">
    <label for="email" class="block text-gray-300">Nom</label>
    <input type="nom" id="email" name="nom" value="<?= old('nom', $client['nom']) ?>" required
      class="mt-1 p-3 w-full border border-gray-600 rounded-md bg-gray-700 text-gray-900 text-white focus:ring-2 focus:ring-blue-500 focus:outline-none">
  </div>

  <div class="mb-6">
    <label for="email" class="block text-gray-300">Email</label>
    <input type="email" id="email" name="email" value="<?= old('email', $client['email']) ?>" required
      class="mt-1 p-3 w-full border border-gray-600 rounded-md bg-gray-700 text-gray-900 text-white focus:ring-2 focus:ring-blue-500 focus:outline-none">
  </div>

  <div class="mb-6">
    <label for="telephone" class="block text-gray-300">Téléphone</label>
    <input type="text" id="telephone" name="telephone" value="<?= old('telephone', $client['telephone']) ?>" required
      class="mt-1 p-3 w-full border border-gray-600 rounded-md bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none">
  </div>

  <div class="mb-6">
    <label for="adresse" class="block text-gray-300">Adresse</label>
    <textarea id="adresse" name="adresse" required
      class="mt-1 p-3 w-full border border-gray-600 rounded-md bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none"><?= old('adresse', $client['adresse']) ?></textarea>
  </div>

  <button type="submit"
    class="w-full py-3 px-6 bg-blue-600 hover:bg-blue-800 text-white font-semibold rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    Mettre à jour
  </button>
</form>


</div>
<?= $this->endSection() ?>