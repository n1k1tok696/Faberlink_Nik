"use strict";

console.log('11213123'); // $(document).ready(function () {
//   $('.carousel').slick({
//     infinite: true,
//     slidesToShow: 3,
//     slidesToScroll: 3
//   });
// });

function Carousel(setting) {
  var _this = this;

  /* Scope privates methods and properties */
  var privates = {};
  /* Privates properties */

  privates.setting = setting;
  privates.sel = {
    "main": document.querySelector(privates.setting.main),
    "wrap": document.querySelector(privates.setting.wrap),
    "children": document.querySelector(privates.setting.wrap).children,
    "prev": document.querySelector(privates.setting.prev),
    "next": document.querySelector(privates.setting.next)
  };
  console.log(privates.sel.children);
  privates.opt = {
    "position": 0,
    "max_position": document.querySelector(privates.setting.wrap).children.length,
    trans: 0
  }; // Control

  if (privates.sel.prev !== null) {
    privates.sel.prev.addEventListener('click', function () {
      _this.prev_slide();
    });
  }

  if (privates.sel.next !== null) {
    privates.sel.next.addEventListener('click', function () {
      _this.next_slide();
    });
  }
  /* Public methods */
  // Prev slide


  this.prev_slide = function () {
    --privates.opt.position;
    privates.opt.trans -= 25;

    if (privates.opt.position < 0) {
      // privates.sel.wrap.classList.add('s-notransition');
      privates.opt.position = privates.opt.max_position - 1;
    } else if (privates.opt.position === 0) {
      privates.opt.position = 0;
      privates.opt.trans = 0;
    }

    console.log(privates.opt.position, privates.opt.trans);
    privates.sel.wrap.style["transform"] = "translateX(".concat(privates.opt.trans, "%)");
  }; // Next slide


  this.next_slide = function () {
    ++privates.opt.position;
    privates.opt.trans += 25;

    if (privates.opt.position >= privates.opt.max_position) {
      privates.opt.position = 0;
      privates.opt.trans = 0;
    }

    console.log(privates.opt.position, privates.opt.trans);
    privates.sel.wrap.style["transform"] = "translateX(".concat(privates.opt.trans, "%)");
  };
}

new Carousel({
  "main": ".carousel",
  "wrap": ".companies",
  "prev": ".arrow-left",
  "next": ".arrow-right"
});

window.onscroll = function show_header() {
  var header = document.querySelector('.header');

  if (window.pageYOffset > 50) {
    header.classList.add('hide');
  } else {
    header.classList.remove('hide');
  }
};