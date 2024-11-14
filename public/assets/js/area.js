


  window.addEventListener("load", () => {
    var options = {
      chart: {
        height: 400,
        type: "area",
        toolbar: { show: true },
        zoom: { enabled: true }
      },
      series: [
        {
          name: "2024",
          data: [20000, 40000, 60000, 30000, 40000, 100000, 70000, 90000, 70000, 65000, 90000, 100000]
        },
        {
          name: "2023",
          data: [7000, 18000, 20000, 40000, 27000, 50000, 19000, 99000, 32000, 70000, 42000, 50000]
        }
      ],
      legend: { show: true, position: "top", horizontalAlign: "right" },
      dataLabels: { enabled: false },
      stroke: { curve: "smooth", width: 2 },
   
      colors: ["#F05A7E", "#7C93C3"], // Couleurs personnalisées
      fill: {
        gradient: {
          shadeIntensity: 1,
          opacityFrom: 0.7,
          gradientToColors: ["#D1E9F6"],
          opacityTo: 0.5,
          stops: [0, 90, 100]
        }
      },
      xaxis: {
  categories: [
    "1 January", "1 February", "1 March", "1 April", "1 May",
    "1 June", "1 July", "1 August", "1 September", "1 October",
    "1 November", "1 December"
  ],
  labels: {
    style: {
      colors: "#FFFFFF",
      fontSize: "12px"
    }
  }
},
yaxis: {
  labels: {
    style: {
      colors: "#FFFFFF", 
      fontSize: "12px"
    },
    formatter: value => (value >= 1000 ? `${value / 1000}k` : value)
  }
}

    };

    var chart = new ApexCharts(document.querySelector("#apex-multiple-area-charts-compare-alt"), options);
    chart.render();
  });



