(function () {
  /** (inicio) Prueba Typeahead */

  $('.js-search-input').on('input', function () {
    $(this).siblings('.js-typeahead').show();
  });

  $('.js-search-input').on('blur', function () {
    $(this).siblings('.js-typeahead').hide();
  });

  /** (fin) Prueba Typeahead */
})();


/**
 * Carousel
 *
 * Si la página contiene un Carousel, carga con ajax la librería
 * y luego la inicializa (con listener para eventos de teclado)
 */

(function() {
  var carouselPath = './js/vendor/carousel.js';

  if ($('.Carousel').length) {
    $.getScript(carouselPath)
      .done(function() {
        if (jQuery().owlCarousel) {
          $('.Carousel').owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            navText: ['Anterior', 'Siguiente'],
          });

          $(document).keyup(function(event) {
            var owl = $('.Carousel:focus-within');

            if (owl.is(':focus-within')) {
              if (event.keyCode == 37) {
                owl.trigger('prev.owl.carousel');
              } else if (event.keyCode == 39) {
                owl.trigger('next.owl.carousel');
              }
            }
          });
        }
      })
      .fail(function() {
        throw new Error('No se encontró la librería de Carousel (verifique que el archivo exista en la ruta: ' + carouselPath + ')');
      });
  }
	
})();


/**
 * Carousel MF
 * La parte de Carusel se carga de la misma manera que la galería completa,
 * se separan las funciones particulares de la galería MF para que se cargue unicamente en los lugares que tengan la clase "Carousel--mf"
 */

(function() {
	/* Función para detectar cantidad de items e identificar actual */
	var cadaCarousel = $('.Carousel--mf');

	cadaCarousel.on('changed.owl.carousel', function(event){
		let currentItemIndex = event.item.index;
		let boxMadre = event.target.closest('.Box-multimedia');
		let clonados = $(boxMadre).find('.cloned');
		let currentItem = currentItemIndex - (Math.round(clonados.length/2)-1);
		if (currentItem <= 0){
			currentItem = 1; // Por la demora en cargar
		}
    updateStatus(currentItem, event.item.count, boxMadre);
	});

	function updateStatus(localCurrentItem, localTotalItems, elemento) {
		$(elemento).find('.item-number').text(localCurrentItem);
		$(elemento).find('.total-items').text(localTotalItems);
	}
	
})();

/* Detección de altura para mostrar la galería en un el contenedor */
// Referencia al elemento o elementos fuente
const sourceElements = document.querySelectorAll('.Box--galeria .Box-multimedia');

sourceElements.forEach(sourceElement => {
	// Obtiene todos los items donde va a modificar la altura
  const targetDivs = sourceElement.querySelectorAll('.item');
	// Obtiene la altura del elemento o elementos fuente
  const sourceHeight = sourceElement.clientHeight;

	// Asigna la altura a cada item (dentro del elemento fuente)
  targetDivs.forEach(targetDiv => {
		targetDiv.style.height = `${sourceHeight-[62]}px`;
  });
});



/**
 * Menú del padre de un Minisitio
 *
 */

(function () {

  $('.js-menuSitioTrigger').on('click', function () {
    $('.Header-parent').toggleClass('open');
  });

  $('.js-menuMinisitioTrigger').on('click', function () {
    $('.js-minisitioNav').toggleClass('is-open');
  });

})();

/**
 * Tabla Zoom for responsive
 *
 */
(function () {

  /** Section for insert the class 'active' on bottoms for that the table
   *  show on columns
   */
  $('.table-zoom-controls .btn-icon').on('click', function () {
    $('.table-zoom-controls .btn-icon').removeClass('active');
    $this = $(this)
    $this.addClass('active')
    if ($this.hasClass('table-striped')) {
      $('.table-zoom-body').addClass('Table--responsive');
      $('.table-zoom-controls').addClass('striped');
    } else {
      $('.table-zoom-body').removeClass('Table--responsive')
      $('.table-zoom-controls').removeClass('striped');
    }

  })


  /** 
   *  Section for show a popup where is inserted the complete table
   */
  // insert the table when do click
  $('.zoom-table').on('click', function () {
    let table = $('.table-zoom-body').html();
    $('.table-zoom-popup').addClass('show');
    $('body').addClass('popup-active');
    $('.table-zoom-popup .popup-body .popup-container').html(table)

    if ($(window).width() < respWidth) {
      let widthWindow = $(window).width();
      $('.table-zoom-popup table').css('font-size', (widthWindow * 0.02) + 'px')
    } else {
      $('.table-zoom-popup table').css('font-size', '16px')
    }

    setMiniMapSizeDefault();
  })

  function setMiniMapSizeDefault(){
    let tagTable = $('.table-zoom-popup .popup-body table');
    let widthTable = tagTable.innerWidth() * 0.3;
    let heightTable = tagTable.innerHeight() * 0.3;
    $('#minimap .item').css('width', widthTable + 'px');
    $('#minimap .item').css('height', heightTable + 'px');
    $('#minimap').css('width', widthTable + 'px');
    $('#minimap').css('height', heightTable + 'px');
  }

  // calculate the width where starts to reduce the font-size
  function calculateWidth() {
    let columns = $('.table-zoom-body thead tr').children();
    let countColumns = columns.length;
    let totalSyllables = 0;
    columns.each(function () {
      totalSyllables = totalSyllables + $(this).text().length;
    });
    let averageSyllables = totalSyllables / countColumns;
    return averageSyllables * countColumns * 10;
  }
  var respWidth = calculateWidth()

  // close the popup when is clicked the bottom
  $('.btn.close').on('click', function () {
    $('.table-zoom-popup').removeClass('show');
    $('.table-zoom-popup').removeClass('zoom');
    $('body').removeClass('popup-active');
    $('#minimap').css('width', 'auto');
    $('#minimap').css('height', 'auto');
    $('#minimap .item').css('left', '0');
    $('#minimap .item').css('top', '0');
  })

  // when do resize change the font-size dynamically
  $(window).resize(function () {
    let widthWin = $(window).width();
    let fontSize = widthWin * 0.02
    if (widthWin < respWidth) {
      $('.table-zoom-popup table').css('font-size', fontSize + 'px')
    }
  });


  /** 
   *  Section for implement zoom when do click, also
   *  when do horizontal scroll change dynamically the position of minimap
   */
  $('.btn.fit-screen').on('click', function () {
    $('.table-zoom-popup').toggleClass('zoom')
    let table = $('.table-zoom-popup .popup-body .popup-container table');
    let innerWidthWrap = table.innerWidth() * 0.23;
    let innerHeightWrap = table.innerHeight() * 0.23;
    let innerWidthItem = table.innerWidth() * 0.1;
    let innerHeightItem = table.innerHeight() * 0.1;

    if ($('.table-zoom-popup').hasClass('zoom')) {
      $('#minimap').css('width', innerWidthWrap + 'px');
      $('#minimap').css('height', innerHeightWrap + 'px');
      $('#minimap .item').css('width', innerWidthItem + 'px');
      $('#minimap .item').css('height', innerHeightItem + 'px');
      $(this).find('span').text('Ajustar a la pantalla');
    } else {
      setMiniMapSizeDefault()
      $('#minimap .item').css('left', '0');
      $('#minimap .item').css('top', '0');
      $(this).find('span').text('Ajustando a la pantalla');
    }
  })

  // event scroll for change position of minimap
  $('.table-zoom-popup .popup-body .popup-container').on('scroll', function () {
    const thisTag = $(this)
    if (thisTag.scrollLeft() > 0) {
      let leftWidth = Math.round($(this).scrollLeft() * 0.07);
      $('#minimap .item').css('left', leftWidth + 'px')
    }
    if(thisTag.scrollTop() > 0){
      let topHeight = Math.round(thisTag.scrollTop() * 0.08);
      $('#minimap .item').css('top', topHeight + 'px')
    }
  })

})();

/** section for show number of columns dynamically
 *  according to scroll
 */
document.addEventListener('DOMContentLoaded', function() {
  const table = document.getElementById('data-table');
  const container = document.querySelector('.table-zoom-body');
  const columnCountInfo = document.querySelector('.counter-table-columns p');

  function counterColumnsCompleteVisible() {
    const columns = table.querySelectorAll('tr:first-child th');
    const containerLeft = container.scrollLeft;
    const containerRight = containerLeft + container.clientWidth;
    let columnsCompleteVisible = 0;

    columns.forEach(function(column) {
      const columnLeft = column.offsetLeft;
      const columnRight = columnLeft + column.offsetWidth;

      if (columnLeft >= containerLeft && columnRight <= containerRight) {
        columnsCompleteVisible++;
      }
    });

    return columnsCompleteVisible === 0 ? 1 : columnsCompleteVisible;
  }

  function updateInfoColumnsVisible() {
    const columnsTotal = table.querySelectorAll('tr:first-child th').length;
    const columnsCompleteVisible = counterColumnsCompleteVisible();

    columnCountInfo.textContent = `${columnsCompleteVisible} columnas de ${columnsTotal}`;
  }

  container.addEventListener('scroll', function() {
    updateInfoColumnsVisible();
  });

  window.addEventListener('load', function() {
    updateInfoColumnsVisible();
  });

  window.addEventListener('resize', function() {
    updateInfoColumnsVisible();
  });

  const tableScrollIcon = document.querySelector('.table-scroll');
  tableScrollIcon.addEventListener('click', function(){
    updateInfoColumnsVisible();
  })

});


/**
 * Reproducir y pausar video en Destacado con fondo multimedia
 *
 */

function bgVideoControl(videoId, buttonId) {
	var video = document.getElementById(videoId);
	var button = document.getElementById(buttonId);

	if (video.paused) {
		video.play(); // Si el video está pausado, lo reproduce
		button.classList.remove('is-active'); // Agrega la clase 'is-active' al video	
	} 
	
	else {
		video.pause(); // Si el video está reproduciendo, lo pausa
		button.classList.add('is-active'); // Remueve la clase 'is-active' del video
	}
} 



/*
  Funcionamiento de Cabezales 2023
 *
 */

$wwidth = $(window).width();
$respwidth = 992;

$(function () {

  function setupMenus() {
    $('.js-navDropdown').each(function () {
      var menu = $(this);

      menu.find('ul > li:has(.subnav)').find('a').addClass('w-sub');

      menu.find('> ul > li > a').click(function (e) {
        var subnav = $(this).siblings('.subnav');

        if (subnav.length > 0) {
          e.preventDefault();

          // Oculta todos los submenús y enlaces activos
          menu.find('.subnav').not(subnav).removeClass('show').removeClass('show-right');
          menu.find('ul li a').not(this).removeClass('active');

          // Alterna la visibilidad del submenú actual y su clase activa
          subnav.toggleClass('show');

          // Verifica si el submenú está cortado contra el margen derecho
          if (subnav.offset().left + subnav.outerWidth() > $(window).width()) {
            subnav.addClass('show-right');
          }

          $(this).toggleClass('active');
        }
      });

      // Ocultar el submenú al hacer clic en cualquier parte fuera del menú
      $(document).click(function (event) {
        if (!$(event.target).closest(menu).length) {
          menu.find('.subnav').removeClass('show').removeClass('show-right');;
        }
      });

      // Ocultar el submenú al salir del mismo. (delay 250)
      var hideTimeout; // Variable para almacenar el tiempo de espera para ocultar el submenú

      menu.mouseleave(function () {

        // Establecer un retraso de 250 milisegundos (0.25 segundos) antes de ocultar el submenú
        hideTimeout = setTimeout(function () {
          menu.find('.subnav').removeClass('show').removeClass('show-right');
          menu.find('ul li a').removeClass('active');
        }, 250);
      });

      menu.find('ul li a').mouseenter(function () {

        // Cancelar el tiempo de espera si el usuario vuelve al menú antes de que se oculte
        clearTimeout(hideTimeout);
      });
    });
  }

  // Llama a la función setupMenus para inicializar todos los menús
  setupMenus();

  // Mostrar/ Ocultar menú/ Buscador

    var navFlex = $('.Nav--flex');
    var navSearchWrapper = $('.NavSearch-wrapper');
    var subNav = navFlex.find('.subnav');
    var navTrigger = $('.js-navTrigger');
    var headerBody = $('.Header-body');
    var headerTop = $('.Header-top');
    var searchTrigger = $('.js-searchTrigger');
    var headerSearch = $('.Header-search')

    $('#searchButtonWrap-md, #navButtonWrap-md').click(function(e){
      e.preventDefault();
      headerSearch.toggleClass('show');
      $('.Header-right .searchButtonWrap-md').toggleClass('hide');
      $('.Header-right nav ul').toggleClass('hide');
    });

    $('#searchButtonWrap-md').click(function (e) {
			e.preventDefault();
      $('#search').focus();
      subNav.removeClass('show').removeClass('show-right');
      navFlex.find('ul li a').removeClass('active');
    });

     // Mostrar/Ocultar megamenú
    $('.js-gubuyMegamenu, .close-mega-menu').click(function (e) {
      e.preventDefault();
      $('.gubuy-mega-menu').toggleClass('show');
    });

    navTrigger.click(function (e) {
      e.preventDefault();
      navSearchWrapper.css('top', headerBody.outerHeight() + headerTop.outerHeight() - 1);
      navSearchWrapper.removeClass('openSearch');
      navFlex.toggleClass('is-open');
      searchTrigger.removeClass('show');
			headerSearch.removeClass('show');
      $(this).toggleClass('show');
      navSearchWrapper.toggleClass('openNav'); 
    });

    searchTrigger.click(function (e) {
      e.preventDefault();
      navSearchWrapper.css('top', headerBody.outerHeight() + headerTop.outerHeight() - 1); 
      navSearchWrapper.removeClass('openNav');
			navFlex.removeClass('is-open');
      navTrigger.removeClass('show');
      $(this).toggleClass('show'); 
			navSearchWrapper.toggleClass('openSearch'); 
      $('#search').focus();
    });

    $('.js-site-menu-trigger').click(function (e) {
      e.preventDefault();
      $('.Nav-site').toggleClass('is-open');
      $(this).toggleClass('is-open');
    });
	
	  if ($('.Header--catalogo').length > 0) {
      $('#navButtonWrap-md').click();
      if ($(window).width() < $respwidth) {
        searchTrigger.click();
      }
    }
	
  });
