window.addEventListener("load", () => {
  (function () {
    const buildChart = (selector, options) => {
      const chart = new ApexCharts(document.querySelector(selector), options());
      chart.render();
    };

    buildChart("#apex-doughnut-chart", (mode) => ({
      chart: {
        height: 300,
        type: "donut",
      },
      plotOptions: {
        pie: {
          donut: {
            size: "70%",
            labels: {
              show: true,
              name: {
                fontSize: "2rem",
              },
              value: {
                fontSize: "1.5rem",
                color: "#666666",
                formatter: function (val) {
                  return parseInt(val, 10) + "%";
                },
              },
              total: {
                show: true,
                fontSize: "1rem",
                label: "Operational",
                formatter: function (w) {
                  return "42%";
                },
              },
            },
          },
        },
      },
      series: [42, 7, 25, 25],
      labels: ["Operational", "Networking", "Hiring", "R&D"],
      legend: {
        show: true,
        position: "bottom",
        markers: { offsetX: -3 },
        labels: {
          useSeriesColors: true,
        },
      },
      dataLabels: {
        enabled: false,
      },
      stroke: {
        show: false,
        curve: "straight",
      },
      colors: ["#FF885B", "#FCDE70", "#6C48C5", "#48CFCB"], // Remplacez par les couleurs souhaitées
      states: {
        hover: {
          filter: {
            type: "none",
          },
        },
      },
      tooltip: {
        enabled: true,
      },
    }));
  })();
});
