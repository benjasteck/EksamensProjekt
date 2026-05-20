window.addEventListener("load", () => {
gsap.registerPlugin(ScrollTrigger);
const lenis = new Lenis({
  duration: 1.2,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  smoothWheel: true,
});

gsap.ticker.add((time) => lenis.raf(time * 1000));
gsap.ticker.lagSmoothing(0);
    gsap.set("#headerTitle", { color: "#020202", fontSize: "64px" });
    gsap.set("#headerUndertitel", { autoAlpha: 1 });
    gsap.set("#headerInput", { marginTop: "50px" });

// 2. ScrollTrigger sync with Lenis
lenis.on('scroll', ScrollTrigger.update);

// 3. Header animation
const tl = gsap.timeline({
  scrollTrigger: {
    trigger: "#header",
    start: "top top",
    end: `+=${window.innerHeight * 0.5}`,      // how many px of scroll to complete the animation
    scrub: 1,            // ties animation directly to scroll position
    pin: true,           // pins the header while animating
  }
});

tl
  .to(".headerBillede", {
    width: "100%",
    height: "100vh",
    top: "50%",
    borderRadius: 0,
    ease: "none",
  })
  .to("#headerOverlay", {
    opacity: 0,
    ease: "none",
    duration: 0.6,
  }, "<")
  .to("#headerTitle", {
  color: "#FF6000",
  fontSize: "100px",
  ease: "power2.out",
  duration: 0.4,
}, "<")
.to("#headerUndertitel", {
  autoAlpha: 0,
  ease: "power2.out",
  duration: 0.4,
}, "<")
.to("#headerInput", {
  marginTop: "0px",
  ease: "power2.out",
  duration: 0.4,
}, "<"); // "<" means start at the same time as previous tween
gsap.to(".newsLetterRight img", {
    translateY: 0,
    ease: "power2.out",
    duration: 1,
    scrollTrigger: {
        trigger: ".newsletterContainer",
        start: "top 100%",   // starts when container is 80% from top of viewport
        end: "top -100%",
        scrub: 2,
    }
});

gsap.to(".erhvervHero", {
    y: "0",
    width: "100%",
    height: "110vh",
    ease: "none",
    scrollTrigger: {
        trigger: ".erhvervHerosection",
        start: "top bottom",
        end: "top top",
        scrub: 1,
        onUpdate: (self) => {
    if (self.progress >= 0.75) {
        document.querySelector(".erhvervsHeroTop").classList.add("visible");
        document.querySelector(".ervhervsHeroBottom").classList.add("visible");
    } else {
        document.querySelector(".erhvervsHeroTop").classList.remove("visible");
        document.querySelector(".ervhervsHeroBottom").classList.remove("visible");
    }
}
    }
});
ScrollTrigger.create({
    trigger: ".erhvervHerosection",
    start: "top top",
    onEnter: () => {
        document.querySelector(".logoGridSection").style.position = "relative";
    },
    onLeaveBack: () => {
        document.querySelector(".logoGridSection").style.position = "sticky";
    }
});


 

document.querySelector('.headerBillede').playbackRate = 0.8;

const grid = document.getElementById("logoGrid");
const bigCount = 11;
const smallCount = 10;
const rows = 11;

for (let r = 0; r < rows; r++) {
    const isSmallRow = r % 2 !== 0;
    const row = document.createElement("div");
    row.classList.add("logoRow", isSmallRow ? "small-row" : "large-row");

    const count = isSmallRow ? smallCount : bigCount;
    for (let i = 0; i < count; i++) {
        const item = document.createElement("div");
        item.style.backgroundImage = "url('img/lilleLogo.jpg')";
        row.appendChild(item);
    }
    grid.appendChild(row);
}

const fog = document.getElementById("logoGridFog");
const section = document.querySelector(".logoGridSection");

section.addEventListener("mousemove", (e) => {
    const rect = section.getBoundingClientRect();
    const centerX = rect.width / 2;
    const centerY = rect.height / 2;
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    // distance from center as 0-1
    const dist = Math.min(Math.hypot(x - centerX, y - centerY) / (rect.width / 2), 1);

    // closer to center = more transparent
    const opacity = 0.5 + dist * 0.9;
    fog.style.opacity = opacity;
});

section.addEventListener("mouseleave", () => {
    fog.style.opacity = 1;
});

const items = document.querySelectorAll(".erhvervHeroItem");
const tops = document.querySelectorAll(".erhvervsHeroTop1");
const defaultTop = document.querySelector("#top0");
const heroBg = document.querySelector(".erhvervHeroBg");

const images = [
    themeData.erhvervHero1,
    themeData.erhvervHero2,
    themeData.erhvervHero3,
    themeData.erhvervHero4,
    themeData.erhvervHero5,
];

const defaultImage = "img/erhvervimg.jpg";

images.forEach(src => new Image().src = src);

function setImage(src) {
    const next = document.createElement("div");
    next.style.cssText = `
        position: absolute;
        inset: 0;
        background-image: url(${src});
        background-size: cover;
        background-position: center;
        opacity: 0;
        transition: opacity 0.4s ease;
    `;
    heroBg.appendChild(next);
    requestAnimationFrame(() => {
        requestAnimationFrame(() => {
            next.style.opacity = 1;
            setTimeout(() => {
                while (heroBg.children.length > 1) heroBg.removeChild(heroBg.firstChild);
            }, 400);
        });
    });
}

function showTop(id) {
    defaultTop.classList.add("hidden");
    tops.forEach(t => t.classList.remove("active"));
    document.querySelector(`#top${id}`).classList.add("active");
}

function resetTop() {
    tops.forEach(t => t.classList.remove("active"));
    defaultTop.classList.remove("hidden");
}

items.forEach((item, i) => {
    item.addEventListener("mouseenter", () => {
        setImage(images[i]);
        showTop(i + 1);
    });

    item.addEventListener("mouseleave", () => {
        setImage(defaultImage);
        resetTop();
    });
});
});
    const sideMenu = document.querySelector(".headerSideMenuCategories");
const openBtn = document.querySelector(".openMenu");
const closeBtn = document.querySelector(".closeBtn");

// OPEN
openBtn.addEventListener("click", (e) => {
    e.preventDefault();
    sideMenu.classList.add("active");
});

// CLOSE BUTTON
closeBtn.addEventListener("click", () => {
    sideMenu.classList.remove("active");
});

// CLICK OUTSIDE TO CLOSE
document.addEventListener("click", (e) => {
    const clickedInsideMenu = sideMenu.contains(e.target);
    const clickedOpenBtn = openBtn.contains(e.target);

    if (!clickedInsideMenu && !clickedOpenBtn) {
        sideMenu.classList.remove("active");
    }
});

let lastScrollY = window.scrollY;
let ticking = false;

const nav = document.getElementById("nav");
const navBottom = document.querySelector(".navBottom");

const SHRINK_START = 80;   // when nav is allowed to shrink
const THRESHOLD = 8;       // ignore tiny scroll jitter

function updateNav() {
    const currentScrollY = window.scrollY;
    const delta = currentScrollY - lastScrollY;

    const isScrollingDown = delta > THRESHOLD;
    const isScrollingUp = delta < -THRESHOLD;

    // Only shrink after user has actually scrolled down a bit
    if (currentScrollY > SHRINK_START && isScrollingDown) {
        nav.classList.add("shrink");
        navBottom.classList.add("hide");
    }

    if (isScrollingUp) {
        nav.classList.remove("shrink");
        navBottom.classList.remove("hide");
    }

    lastScrollY = currentScrollY;
    ticking = false;
}

window.addEventListener("scroll", () => {
    if (!ticking) {
        requestAnimationFrame(updateNav);
        ticking = true;
    }
});
jQuery(function($){
    $(document).on('click', '.variation-btn', function(){
        const $btn = $(this);
        const $wrap = $btn.closest('.variation-buttons');
        const value = $btn.data('value');

        $wrap.find('.variation-btn').removeClass('selected');
        $btn.addClass('selected');
        $wrap.find('select').val(value).trigger('change');
    });
});
jQuery(function($){
    function openCart() {
        $('#cart-sidebar, #cart-overlay').addClass('open');
        $('body').css('overflow', 'hidden');
    }
    function closeCart() {
        $('#cart-sidebar, #cart-overlay').removeClass('open');
        $('body').css('overflow', '');
    }

    $('#cart-trigger').on('click', openCart);
    $('#cart-close, #cart-overlay').on('click', closeCart);
    $(document.body).on('added_to_cart', openCart);

    // Intercept cart links
    $(document).on('click', 'a[href*="/cart"]', function(e){
        e.preventDefault();
        openCart();
    });
});
$(document.body).on('added_to_cart updated_cart_totals', function() {
    $.get(wc_cart_params.ajax_url, { action: 'get_cart_count' }, function(count) {
        if (count > 0) {
            $('.nav-cart-count').text(count).show();
        } else {
            $('.nav-cart-count').hide();
        }
    });
});