// On click functions

(function ($) {
    // Disable console log in production
    var DEBUG = false;
    if (!DEBUG) {
        if (!window.console) window.console = {};
        var methods = ["log", "debug", "warn", "info"];
        for (var i = 0; i < methods.length; i++) {
            console[methods[i]] = function () {
            };
        }
    }

    // Player
    $(".lds-dual-ring").click(function (e) {
        playRS();
    })
    setInterval(function () {
        var playerDiv = $("div[class^='src-components-current-track__title--']");
        if (playerDiv[0] && playerDiv[0].childNodes[0].length > 25) {
            //TODO: defilement du player

        }
    }, 1000)
    $("#sidebar-player").click(function (e) {
        e.preventDefault();
        playRS();
    });

    document.body.onkeydown = function (e) {
        if (e.key === " " ||
            e.code === "Space" ||
            e.keyCode === 32
        ) {
            e.preventDefault();
            playRS();
        }
    }

    if (!$(location).attr('hash').split('#').pop()) {
        $("#page-ondes").hide();
    }

    $(document).ready(function () {
        // hide player spinner
        $(".lds-dual-ring").hide();
        $("#sidebar-player").show();

        // Navigation: Open page from anchor
        var anchor = $(location).attr('hash').split('#').pop();

        // Url to Article
        if (anchor.includes("article-")) {

            fetchPost(anchor.substr(anchor.lastIndexOf('article-') + 8))

        } else if (anchor.includes("radio-")) {
            fetchHideShowPage("page-" + anchor, selectorRadioToPageName("page-" + anchor), true)
        }
        // Url to Page
        else if (anchor.includes("page-") && anchor) {
            fetchHideShowPage(anchor, selectorToPageName(anchor), false)
        } else {
            fetchHideShowPage("page-radio-ondes", selectorToPageName("page-ondes"), true)
        }

        // Menu to Page
        $(".pageSelector").click(function (e) {
            if ($(this).attr("mobileMenu")) {
                $("#menu__toggle").click()
            }
            fetchHideShowPage($(this).attr("pageSelector"), selectorToPageName($(this).attr("pageSelector")), false);
        });
        $(".pageTemplateSelector").click(function (e) {
            if ($(this).attr("mobileMenu")) {
                $("#menu__toggle").click()
            }
            fetchHideShowPage($(this).attr("pageSelector"), selectorRadioToPageName($(this).attr("pageSelector")), true);
        });

        $("#menu__close").click(function (e) {
            $("#menu__toggle").click()
        })

        // Mobile Menu toggle
        /*$("#menu-toggle").click(function () {
            $("#primary-menu").toggle();
        });*/

        /*        // ARTICLES
                // Home articles
                $(".bloc-articles a").click(function (e) {
                    var url = new URL($(this).attr('href'));
                    openPage(null, "page-journal", "Journal");
                    fetchPost(url.pathname.replace(/\//g, ""));
                    window.location = '#article-' + url.pathname.replace(/\//g, "");
                    e.preventDefault();
                });*/

        handleReplayIframe();

        // Block alerts
        alert = function () {
        };
        window.alert = function () {
        };

        $("#link-all-articles").click(function () {
            $(".post-single").hide();
        })

        if (!localStorage.getItem("debug")) {
            // Load all pages in background after 30 min and every hour
           /* setTimeout(function () {
                var pagesToLoad = ["Ondes", "Convives", "Residence"]
                for (const pageName of pagesToLoad) {
                    setTimeout(function () {
                        console.debug("[loadPageBackground] fetchPage")
                        setInterval(function () {
                            fetchPage(null, pageName, true, null)
                        }, 3600000)
                    }, 1000)
                }
            }, 1800000)*/
        }

        var siteMainDiv = $(".site-main");
        siteMainDiv.on('scroll', function () {
            /*if(siteMainDiv.scrollTop() === 0){
                $(".site-branding").fadeIn();
            }*/
            var largeurEcran = $(window).width();
            if (siteMainDiv.scrollTop() > 0 && largeurEcran < 700) {
                $(".site-branding").fadeOut(1000);
            }
        });

        // PREVIOUS NAV
        window.addEventListener('popstate', (event) => {
            console.log("location: " + document.location + ", state: " + JSON.stringify(event.state), ", history: ", event);
            if (event.state) {
                window.location.reload();
            }
        });




        // CAROUSEL

        setTimeout(function () {


const slideContainer = document.querySelector(".slider-sofadumois");
const slidesFlex = document.querySelector(".slides-flex");
const navigation = document.querySelector(".slider-navigation");

(function slider(container, slidesFlex, navigation) {
  let initialX,
    finalX,
    leftPos = -100,
    clicked = false,
    counter = 0,
    slideDistance,
    interval = null,
    numberOfSlides = slidesFlex.childElementCount,
    slidesWidth = slidesFlex.offsetWidth,
    threshold = 40;

  // *******EVENT LISTENERS******
  // initiate interval
  document.addEventListener("DOMContentLoaded", createInterval);

  // mouse events
  container.addEventListener("mousedown", dragStart);

  // touch events
  container.addEventListener("touchstart", dragStart);
  container.addEventListener("touchmove", dragging);
  container.addEventListener("touchend", dragStop);

  // ******FUNCTIONS******
  function moveSlide() {
    slidesFlex.style.left = `${leftPos * counter}%`;
    document.getElementById("radio" + (counter + 1)).checked = true;
  }

  function animate() {
    if (clicked) return; //stop if dragging
    counter++;
    if (counter > numberOfSlides - 1) {
      counter = 0;
      slidesFlex.style.transition = "none";
    } else {
      slidesFlex.style.transition = "0.8s";
    }
    moveSlide();
  }

  function createInterval() {
    if (!interval) {
      interval = setInterval(animate, 5000);
    }
  }

  function dragStart(e) {
    clearInterval(interval);
    interval = null;

    // handling manual navigation
    if (navigation.contains(e.target)) {
      counter = e.target.id ? parseInt(e.target.id) - 1 : counter;
      slidesFlex.style.transition = "0.8s";
      moveSlide();
      createInterval();
      return;
    }
    e.preventDefault(); // for touchscreen defaults

    // sliding animation
    slidesFlex.style.transition = "0.5s";
    container.style.cursor = "grabbing";
    document.body.style.cursor = "grabbing";

    clicked = true;

    if (e.type == "touchstart") {
      initialX = e.touches[0].clientX;
    } else {
      initialX = e.clientX;
      document.onmousemove = dragging;
      document.onmouseup = dragStop;
    }
  }

  function dragging(e) {
    if (!clicked) return;

    if (e.type == "touchmove") {
      finalX = e.touches[0].clientX;
    } else {
      finalX = e.clientX;
    }

    let currentPosition = counter * leftPos;

    slideDistance =
      ((initialX - finalX) / (slidesWidth / numberOfSlides)) * 100;

    if (Math.abs(slideDistance) < threshold) {
      slidesFlex.style.left = `${currentPosition - slideDistance}%`;
    }
  }

  function dragStop(e) {
    if (navigation.contains(e.target)) return;

    // check threshold and counter before changing slides
    if (finalX < initialX && counter < numberOfSlides - 1 && slideDistance >= threshold) {
      counter++;
    } else if (
      finalX > initialX &&
      counter > 0 &&
      -slideDistance >= threshold
    ) {
      counter--;
    }
    moveSlide();

    // return to default
    createInterval();
    document.body.style.cursor = "default";
    container.style.cursor = "grab";
    initialX = undefined;
    finalX = undefined;
    clicked = false;
    document.onmousemove = null;
    document.onmouseup = null;
  }
})(slideContainer, slidesFlex, navigation);


        },500);

// END CAROUSEL
        console.log("[Main Script] Document ready");
    });
    // End document ready

})(jQuery);