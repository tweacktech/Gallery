var mySlider = tns({
    container: '.my-slider',
    items: 2,
    edgePadding: 10,
    gutter: 20,
    autoplayTimeout:4000,
    slideBy: 2,
    autoplay: true,
    autoplayButtonOutput : false,
    autoplayPosition: "autoplay",
    controlsPosition: "bottom",
    navPosition: "bottom",
    controls: false,
    autoplayText:[ "▶","❚❚"],
    responsive: {
        700: {
            // edgePadding: 2,
            gutter: 10,
            items: 8
        }
    }
});

var mainslider = tns({
    container: '.main-slider',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    navPosition: "bottom",
    controls: false,
    autoplayButtonOutput : false
  });


var myLogo = tns({
    container: '.my-logo',
    items: 1,
    edgePadding: 10,
    gutter: 20,
    // autoPlayButton: false,
    slideBy: 'page',
    autoplayButtonOutput : false,
    autoplay: true,
    navPosition: "bottom",
    controls: false,
    responsive: {
        700: {
            edgePadding: 10,
            gutter: 25,
            items: 4
        }
    }
});

var sliderTwo = tns({
    container: '.my-slider-2',
    items: 2,
    // edgePadding: 10,
    gutter: 40,
    autoplayButtonOutput : false,
    slideBy: 'page',
    autoplay: true,
    navPosition: "bottom",
    controls: false,
    responsive: {
        700: {
            // edgePadding: 10,
            gutter: 30,
            items: 6
        }
    }
});

var myLogo2 = tns({
    container: '.my-logo2',
    items: 2,
    edgePadding: 10,
    gutter: 20,
    autoplayTimeout:4000,
    slideBy: 2,
    autoplay: true,
    autoplayButtonOutput : false,
    autoplayPosition: "autoplay",
    controlsPosition: "bottom",
    navPosition: "bottom",
    controls: false,
    autoplayText:[ "▶","❚❚"],
    responsive: {
        700: {
            // edgePadding: 2,
            gutter: 10,
            items: 8
        }
    }
});

// ALERT JS
const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

const alert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    alert('Nice, you triggered this alert message!', 'success')
  })
}