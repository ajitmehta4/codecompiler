$(window).scroll(function (e) {
    var $el = $('.sticky');
    var isPositionFixed = ($el.css('position') == 'fixed');
    if ($(this).scrollTop() > 100 && !isPositionFixed) {
        $el.css({ 'position': 'fixed', 'top': '0px', 'left': '0px' });
    }
    if ($(this).scrollTop() < 100 && isPositionFixed) {
        $el.css({ 'position': 'static', 'top': '0px', 'left': '0px' });
    }
});

function PathLoader(el) {
    this.el = el;
    this.strokeLength = el.getTotalLength();

    // set dash offset to 0
    this.el.style.strokeDasharray =
    this.el.style.strokeDashoffset = this.strokeLength;
}

PathLoader.prototype._draw = function (val) {
    this.el.style.strokeDashoffset = this.strokeLength * (1 - val);
}

PathLoader.prototype.setProgress = function (val, cb) {
    this._draw(val);
    if (cb && typeof cb === 'function') cb();
}

PathLoader.prototype.setProgressFn = function (fn) {
    if (typeof fn === 'function') fn(this);
}

var body = document.body,
    svg = document.querySelector('svg path');

if (svg !== null) {
    svg = new PathLoader(svg);

    setTimeout(function () {
        document.body.classList.add('active');
        svg.setProgress(1);
    }, 200);
}

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})