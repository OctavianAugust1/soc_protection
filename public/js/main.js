$(function() {

  'use strict';

  $('.js-menu-toggle').click(function(e) {

  	var $this = $(this);



  	if ( $('body').hasClass('show-sidebar') ) {
  		$('body').removeClass('show-sidebar');
  		$this.removeClass('active');
  	} else {
  		$('body').addClass('show-sidebar');
  		$this.addClass('active');
  	}

  	e.preventDefault();

  });

  // click outisde offcanvas
	$(document).mouseup(function(e) {
    var container = $(".sidebar");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ( $('body').hasClass('show-sidebar') ) {
				$('body').removeClass('show-sidebar');
				$('body').find('.js-menu-toggle').removeClass('active');
			}
    }
	});



});


const populations = () => {
    return fetch(`${window.location.origin}/api/get_population`).then(data => {
        return data.json()
    })
}

if (document.querySelector('#popChart')) {
    populations().then(data => {
        const population = data.populations
        let titles = []
        let count = []
        for (let key in population) {
            titles.push(population[key]['title'])
        }
        for (let key in population) {
            count.push(Math.round(population[key]['quantity']*0.119))
        }
        var popCanvas = document.getElementById("popChart");
        var barChart = new Chart(popCanvas, {
            type: 'bar',
            data: {
                labels: titles,
                datasets: [{
                    label: 'Уровень бедности',
                    data: count,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)'
                    ]
                }]
            }
        });
    })
}
