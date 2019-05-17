function grafikPeramalan(canvasID, produksi, peramalan, labelProduksi) {

      var peramalanCanvas = document.getElementById(canvasID);
      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 14;

      var dataProduksi = {
        label: "Data Produksi",
        data: produksi,
        lineTension: 0.3,
        fill: false,
        borderColor: "#d54e08",
        backgroundColor: 'transparent',
        pointBorderColor: "#d54e08",
        pointBackgroundColor: 'lightgreen',
        pointRadius: 5,
        pointHoverRadius: 10,
        pointHitRadius: 30,
        pointBorderWidth: 2,
      };

      var dataPeramalan = {
          label: "Hasil Peramalan",
          data: peramalan,
          lineTension: 0.3,
          fill: false,
          borderColor: 'purple',
          backgroundColor: 'transparent',
          pointBorderColor: 'purple',
          pointBackgroundColor: 'lightgreen',
          pointRadius: 5,
          pointHoverRadius: 10,
          pointHitRadius: 30,
          pointBorderWidth: 2,
      };

      var dataGrafik = {
          labels: labelProduksi,
          datasets: [dataProduksi, dataPeramalan]
      };

      var chartOptions = {
      legend: {
          display: true,
          position: 'top',
          labels: {
            boxWidth: 80,
            fontColor: 'black'
          }
        }
      };

      var lineChart = new Chart(peramalanCanvas, {
        type: 'line',
        data: dataGrafik,
        options: chartOptions
      });

}
