"use strict";

let correctURL = window.location.pathname === '/';
// console.log(correctURL);

function Carousel(setting) {
  var _this = this;

  var privates = {};

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
  };

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


  this.prev_slide = function () {
    --privates.opt.position;
    privates.opt.trans -= 25;

    if (privates.opt.position < 0) {
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

correctURL && new Carousel({
  "main": ".carousel",
  "wrap": ".companies",
  "prev": ".arrow-left",
  "next": ".arrow-right"
});

window.onscroll = function show_header() {
  const header = document.querySelector('.header');

  if (window.pageYOffset > 50) {
    header.classList.add('header-static');
    header.classList.add('hide');
  } else {
    correctURL && header.classList.remove('header-static');
    header.classList.remove('hide');
  }
};

const changeHeader = () => {
  const header = document.querySelector('.header');
  header.classList.add('header-static');
}

!correctURL && changeHeader();