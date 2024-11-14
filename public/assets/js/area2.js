
  window.addEventListener('load', () => {
    ;(function () {
      const buildChart = (selector, options) => {
        const chart = new ApexCharts(document.querySelector(selector), options())
        chart.render()
      }

      buildChart('#apex-single-area-chart', mode => ({
        chart: {
          height: 400,
          type: 'area',
          toolbar: { show: true },
          zoom: { enabled: false }
        },
        series: [
          {
            name: 'Units',
            data: [0, 100, 50, 125, 70, 150, 100, 170, 120, 175, 100, 200]
          }
        ],
        legend: { show: false },
        dataLabels: { enabled: false },
        stroke: { curve: 'smooth', width: 2 },
        
        colors: ['#7E60BF'], // Remplacez par la couleur souhaitée
        fill: {
          type: 'gradient',
          gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            gradientToColors: ['#87CEEB'], // Couleur de fin du dégradé
            opacityTo: 0.3,
            stops: [0, 90, 100]
          }
        },
        xaxis: {
          type: 'category',
          tickPlacement: 'on',
          categories: [
            '1 March 2024', '2 March 2024', '3 March 2024', '4 March 2024',
            '5 March 2024', '6 March 2024', '7 March 2024', '8 March 2024',
            '9 March 2024', '10 March 2024', '11 March 2024', '12 March 2024'
          ],
          axisBorder: { show: false },
          axisTicks: { show: false },
          tooltip: { enabled: false },
          labels: {
            style: {
              colors: '#FFFFFF', // Remplacez par du blanc ou toute autre couleur
              fontSize: '12px',
              fontWeight: 400
            },
            formatter: title => {
              let t = title
              if (t) {
                const newT = t.split(' ')
                t = `${newT[0]} ${newT[1].slice(0, 3)}`
              }
              return t
            }
          }
        },
        yaxis: {
          labels: {
            align: 'left',
            minWidth: 0,
            maxWidth: 140,
            style: {
              colors: '#FFFFFF', // Remplacez par du blanc ou toute autre couleur
              fontSize: '12px',
              fontWeight: 400
            },
            formatter: value => (value >= 1000 ? `${value / 1000}k` : value)
          }
        },
        tooltip: {
          x: { format: 'MMMM yyyy' },
          y: { formatter: value => `${value >= 1000 ? `${value / 1000}k` : value}` },
          custom: function (props) {
            const { categories } = props.ctx.opts.xaxis
            const { dataPointIndex } = props
            const title = categories[dataPointIndex].split(' ')
            const newTitle = `${title[0]} ${title[1]}`
            return buildTooltip(props, {
              title: newTitle,
              mode,
              valuePrefix: '',
              hasTextLabel: true,
              markerExtClasses: 'bg-primary',
              wrapperExtClasses: ''
            })
          }
        },
        responsive: [
          {
            breakpoint: 568,
            options: {
              chart: { height: 300 },
              labels: {
                style: { fontSize: '10px', colors: '#FFFFFF' },
                offsetX: -2,
                formatter: title => title.slice(0, 3)
              },
              yaxis: {
                labels: {
                  align: 'left',
                  minWidth: 0,
                  maxWidth: 140,
                  style: { fontSize: '10px', colors: '#FFFFFF' },
                  formatter: value => (value >= 1000 ? `${value / 1000}k` : value)
                }
              }
            }
          }
        ]
      }))
    })()
  })
