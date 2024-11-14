<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<section class="px-4 py-12 text-white  mx-auto max-w-7xl">
  <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4 ">
    <div class="p-6 card  rounded-md" style="background-color:#141C2F">
      <div class="flex items-start justify-between ">
        <h2 class="mb-2 font-mono text-4xl font-light leading-none text-gray-300 truncate"><?= $nombre_clients; ?></h2>
        <span class="flex items-center space-x-1 text-sm font-medium leading-none text-green-400">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4">
            <path fill-rule="evenodd"
              d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
              clip-rule="evenodd" />
          </svg>
          <span></span>
        </span>
      </div>
      <p class="text-sm leading-none text-gray-400">Clients</p>
    </div>
  </div>
</section>
<!-- Div pour afficher le graphique -->
<!-- <div class="container mx-auto px-4 py-6 grid grid-cols-1 text-white gap-5 md:grid-cols-2 lg:grid-cols-2">
  <div id="apex-multiple-area-charts-compare-alt" class="w-full rounded-lg shadow-lg bg-gray-800"></div>
  <div class="donut rounded-lg   shadow-lg " style="background-color:#141C2F">
    <h1>LISTRE RRR</h1>
    <div id="apex-doughnut-chart" class="w-full "></div>
  </div>
  
  <div id="apex-single-area-chart " class="w-full rounded-lg shadow-lg " style="background-color:#141C2F"></div>
</div>
<div id="apex-single-area-chart"></div> -->
</section>

<?= $this->endSection() ?>