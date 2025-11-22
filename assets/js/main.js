




document.addEventListener('DOMContentLoaded', (event) => {

alert('wow');








const accordions = document.querySelectorAll(".accordion");

accordions.forEach((accordion, index) => {
  const header = accordion.querySelector(".accordion__header");
  const content = accordion.querySelector(".accordion__content");
  const icon = accordion.querySelector("#accordion-icon");

  header.addEventListener("click", () => {
    const isOpen = content.style.height === `${content.scrollHeight}px`;

    accordions.forEach((a, i) => {
      const c = a.querySelector(".accordion__content");
      const ic = a.querySelector("#accordion-icon");

      if (i === index) {
        // Toggle the clicked accordion
        if (isOpen) {
          c.style.height = "0px";
          ic.classList.add("ri-add-line");
          ic.classList.remove("ri-subtract-fill");
        } else {
          c.style.height = `${c.scrollHeight}px`;
          ic.classList.remove("ri-add-line");
          ic.classList.add("ri-subtract-fill");
        }
      } else {
        // Close all other accordions
        c.style.height = "0px";
        ic.classList.add("ri-add-line");
        ic.classList.remove("ri-subtract-fill");
      }
    });
  });
});


});



















// // Lightbox Gallery

// // Javascript for tab navigation horizontal scroll buttons

const btnLeft = document.querySelector('.left__btn');
const btnRight = document.querySelector('.right__btn');
const tabMenu = document.querySelector('.tab__menu');

if (btnLeft && btnRight && tabMenu) {
  const iconVisibility = () => {
    let scrollLeftValue = Math.ceil(tabMenu.scrollLeft);
    console.log('1.', scrollLeftValue);

    let scrollableWidth = tabMenu.scrollWidth - tabMenu.clientWidth;
    console.log('2.', scrollableWidth);

    btnLeft.style.display = scrollLeftValue > 0 ? 'block' : 'none';
    btnRight.style.display = scrollableWidth > scrollLeftValue ? 'block' : 'none';
  };

  btnRight.addEventListener('click', () => {
    tabMenu.scrollLeft += 300;
    setTimeout(() => iconVisibility(), 50);
  });

  btnLeft.addEventListener('click', () => {
    tabMenu.scrollLeft -= 300;
    setTimeout(() => iconVisibility(), 50);
  });

  window.onload = function () {
    btnRight.style.display = 
      tabMenu.scrollWidth > tabMenu.clientWidth || tabMenu.scrollWidth >= window.innerWidth
        ? 'block' : 'none';
    btnLeft.style.display = tabMenu.scrollWidth >= window.innerWidth ? '' : 'none';
  };

  window.onresize = function () {
    btnRight.style.display = 
      tabMenu.scrollWidth > tabMenu.clientWidth || tabMenu.scrollWidth >= window.innerWidth
        ? 'block' : 'none';
    btnLeft.style.display = tabMenu.scrollWidth >= window.innerWidth ? '' : 'none';

    let scrollLeftValue = Math.round(tabMenu.scrollLeft);
    btnLeft.style.display = scrollLeftValue > 0 ? 'block' : 'none';
  };

  let activeDrag = false;

  tabMenu.addEventListener('mousemove', (drag) => {
    if (!activeDrag) return;
    tabMenu.scrollLeft -= drag.movementX;
    iconVisibility();

    tabMenu.classList.add('dragging');
  });

  document.addEventListener('mouseup', () => {
    activeDrag = false;
    tabMenu.classList.remove('dragging');
  });

  tabMenu.addEventListener('mousedown', () => {
    activeDrag = true;
  });
}

const tabs = document.querySelectorAll('.tab');
const tabBtns = document.querySelectorAll('.tab__btn');

if (tabs.length > 0 && tabBtns.length > 0) {
  const tab_Nav = function (tabBtnClick) {
    tabBtns.forEach((tabBtn) => {
      tabBtn.classList.remove('active');
    });

    tabs.forEach((tab) => {
      tab.classList.remove('active');
    });

    tabBtns[tabBtnClick].classList.add('active');
    tabs[tabBtnClick].classList.add('active');
  };

  tabBtns.forEach((tabBtn, i) => {
    tabBtn.addEventListener('click', () => {
      tab_Nav(i);
    });
  });
}

const lightboxEnabled = document.querySelectorAll('.lightbox-enabled');
const lightboxArray = Array.from(lightboxEnabled);
const lastImage = lightboxArray.length - 1;
const lightboxContainer = document.querySelector('.lightbox-container');
const lightboxImage = document.querySelector('.lightbox-image');
const lightboxBtns = document.querySelectorAll('.lightbox-btn');
const lightboxBtnRight = document.querySelector('#right');
const lightboxBtnLeft = document.querySelector('#left');
const close = document.querySelector('#close');
let activeImage;

if (lightboxContainer && lightboxImage && lightboxBtns.length > 0 && close) {
  const showLightBox = () => { lightboxContainer.classList.add('active'); }

  const hideLightBox = () => { lightboxContainer.classList.remove('active'); }

  const setActiveImage = (image) => {
    lightboxImage.src = image.dataset.imgsrc;
    activeImage = lightboxArray.indexOf(image);
  }

  const transitionSlidesLeft = () => {
    lightboxBtnLeft.focus();
    $('.lightbox-image').addClass('slideright'); 
    setTimeout(function() {
      activeImage === 0 ? setActiveImage(lightboxArray[lastImage]) : setActiveImage(lightboxArray[activeImage - 1]);
    }, 250); 

    setTimeout(function() {
      $('.lightbox-image').removeClass('slideright');
    }, 500);   
  }

  const transitionSlidesRight = () => {
    lightboxBtnRight.focus();
    $('.lightbox-image').addClass('slideleft');  
    setTimeout(function() {
      activeImage === lastImage ? setActiveImage(lightboxArray[0]) : setActiveImage(lightboxArray[activeImage + 1]);
    }, 250); 
    setTimeout(function() {
      $('.lightbox-image').removeClass('slideleft');
    }, 500);  
  }

  const transitionSlideHandler = (moveItem) => {
    moveItem.includes('left') ? transitionSlidesLeft() : transitionSlidesRight();
  }

  lightboxEnabled.forEach(image => {
    image.addEventListener('click', (e) => {
      showLightBox();
      setActiveImage(image);
    })                     
  });

  lightboxContainer.addEventListener('click', () => { hideLightBox(); });
  close.addEventListener('click', () => { hideLightBox(); });

  lightboxBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      transitionSlideHandler(e.currentTarget.id);
    });
  });

  lightboxImage.addEventListener('click', (e) => {
    e.stopPropagation();
  });
}


document.addEventListener('DOMContentLoaded', function() {
    const priceMapping = {
        "Mycie #1": 10,
        "Mycie Inside": 20,
        "Serwis #3": 3000,
        "Serwis #4": 4000,
        "Serwis #5": 5704,
        "Serwis #6": 6348,
        "Serwis #7": 7347,
        "Serwis #8": 8374,
        "Serwis #9": 9347
    };

    // Add data-price attributes to checkboxes
    const checkboxes = document.querySelectorAll('.checkbox-row input[type="checkbox"]');
    checkboxes.forEach(checkbox => {
        const labelText = checkbox.nextElementSibling.textContent.trim();
        if (priceMapping.hasOwnProperty(labelText)) {
            checkbox.setAttribute('data-price', priceMapping[labelText]);
        }
    });

    const priceDisplay = document.querySelector('.price');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updatePrice);
    });

    function updatePrice() {
        let total = 0;
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                const value = parseInt(checkbox.getAttribute('data-price'));
                if (!isNaN(value)) {
                    total += value;
                }
            }
        });
        priceDisplay.textContent = total;
    }
});



document.addEventListener('DOMContentLoaded', function() {
  const header = document.getElementById('masthead');

  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) { // Adjust this value as needed
          header.classList.add('scrolled');
      } else {
          header.classList.remove('scrolled');
      }
  });
});

document.addEventListener("DOMContentLoaded", function() {
  var hamburger = document.querySelector(".hamburger");
  var mobMenu = document.querySelector(".the-mob-menu");
  
  hamburger.addEventListener("click", function() {
    this.classList.toggle("is-active");
    mobMenu.classList.toggle("show-mob");
  });
});


document.addEventListener('DOMContentLoaded', function() {
  // Select all menu items inside #header-menu-id
  var menuItems = document.querySelectorAll('#header-menu-id li');

  menuItems.forEach(function(menuItem) {
      menuItem.addEventListener('click', function() {
        var hamburger = document.querySelector(".hamburger");
        hamburger.classList.toggle("is-active");
          // Select the mobile menu container
          var mobMenu = document.querySelector('.the-mob-menu');
          if (mobMenu) {
              // Remove the 'show-mob' class
              mobMenu.classList.remove('show-mob');
          }
      });
  });
});


