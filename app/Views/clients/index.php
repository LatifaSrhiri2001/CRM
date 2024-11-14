<!-- app/Views/index.php -->
<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- add contact  -->
<div class="container ">
 <!----------------------------- saerch input------------------------- -->
<form class="max-w-md mx-auto mb-6" >   
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input id="search"type="search"  class="block w-full p-4 ps-10 text-sm text-white border border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500 border-gray-600 placeholder-gray-50 " placeholder="Chercher client" required style="background-color:#141C2F" />
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-gray-900 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
    </div>
</form>
<!-- ---------------------------search ---------------------------------- -->
 <div id="resultats"></div>
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
    <table class="w-full text-sm text-left rtl:text-right  ">
      <thead class=" rounded-lg border-b ">
        <tr class="font-bold  text-1xl ">
          <th scope="row" class="px-6 py-4   ">
          <i class="fa-solid fa-user"></i>
            Nom
          </th>
          <td class="px-6 py-6">
          <i class="fa-solid fa-envelope"></i>
            Email
          </td>
          <td class="px-6 py-6">
          <i class="fa-solid fa-phone"></i>
            Telephone
          </td>
          <td class="px-6 py-6">
          <i class="fa-solid fa-square-envelope"></i>
            Adresse
          </td>
          <td class="px-6 py-6">
          <i class="fa-solid fa-gear"></i>
            Action
          </td>
        </tr>

      </thead>
      <tbody id="clients">
        <?php foreach ($clients as $client): ?>
        <tr>
          <td class="px-6 py-7 font-bold text-1xl"><?= esc($client['nom']) ?></td>
          <td class="px-6 py-7"><?= esc($client['email']) ?></td>
          <td class="px-6 py-7"><?= esc($client['telephone']) ?></td>
          <td class="px-6 py-7"><?= esc($client['adresse']) ?></td>
          <td class="px-6 py-7">
            <a href="<?= site_url('clients/indexInteraction/' . $client['id']) ?>"><i class="fas fa-eye"></i></a>
            <a href="<?= site_url('clients/edit/' . $client['id']) ?>"><i class="fas fa-trash"></i></a>
            <a href="#"><i class="fas fa-edit"></i></a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>

    </table>
    <!------------------------------------------ Pagination Links -------------------------------------------------->
    <div class="mt-4  bg-gray-800 text-white">
      <div class="pagination-container flex justify-center flex-row">
        <?= $pagination_link->links() ?>
      </div>
      <!-- ----------------------------------------end pagination----------------------------------------------------- -->
    </div>
  </div>
</div>
<!-- -------------------------------------------call to components----------------------------------------------- -->
<?= view('components/ajouterClient'); ?>


<script>
$(document).ready(function() {
  $("#search").on("keyup", function() {
    var query = $(this).val();
    if (query.length > 1) {
      $.ajax({
        url: "<?= site_url('client/search') ?>",
        method: "POST",
        data: {
          query: query
        },
        success: function(data) {
          $("#clients").html(data); 
        }
      });
    } else {
      
      $.ajax({
        url: "<?= site_url('client/index') ?>",
        method: "GET",
        success: function(data) {
          $("#clients").html($(data).find("#clients").html());
        }
      });
    }
  });
});
</script>
<?= $this->endSection() ?>