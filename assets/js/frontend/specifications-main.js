
define('util/smartResize', [
    'jquery'
], function () {
    !function (e, n) {
        var i = function (e, n, i) {
            var t;
            return function () {
                function o() {
                    i || e.apply(a, r),
                    t = null
                }
                var a = this,
                r = arguments;
                t ? clearTimeout(t)  : i && e.apply(a, r),
                t = setTimeout(o, n || 100)
            }
        };
        jQuery.fn[n] = function (e) {
            return e ? this.bind('resize', i(e))  : this.trigger(n)
        }
    }(jQuery, 'smartresize')
}),
define('component/Carousel', [
    'jquery',
    'analytics',
    'PointBreak',
    'util/setColumnEqualHeights',
    'touchSwipe',
    'util/smartResize',
    'transit'
], function (e, n, i, t) {
    var o = function (n) {
        function o() {
            if (null === L) throw new Error('Carousel - module instance is required');
            a(),
            L.addClass('carousel'),
            d(),
            E.length > S.slidesPerPage && r(),
            x(),
            l()
        }
        function a() {
            E = L.find(S.slideSelector)
        }
        function r() {
            var n;
            (S.showIndicators === !0 || S.showNextPrev === !0) && (n = e('<div class="indicators" />'), L.append(n)),
            S.showIndicators === !0 && (g(), c(0)),
            S.showNextPrev === !0 && h(),
            n && n.length > 0 && L.on('click.carousel', '.indicators a', s)
        }
        function s(n) {
            n.preventDefault();
            var i = e(this),
            t = e(this).data('num');
            if (N === !1) if (i.hasClass('next')) y();
             else if (i.hasClass('prev')) w();
             else {
                var o = t > z ? 'right' : 'left';
                z = t,
                c(z),
                v(z, o)
            }
        }
        function c(e) {
            S.showIndicators === !0 && (A || (A = L.find('.indicators a')), A.removeClass(b), A.eq(e).addClass(b))
        }
        function l() {
            Modernizr.touch && S.preventSwipe !== !0 && (console.log('enable swipe!'), L.swipe({
                swipe: function (e, n) {
                    N === !1 && (N = !0, 'left' === n ? y()  : 'right' === n && w())
                },
                allowPageScroll: 'vertical',
                tap: S.tapCallback
            }))
        }
        function d() {
            for (var n = 'slide', t = 0; t < E.length; t += S.slidesPerPage) n = t < S.slidesPerPage ? 'slide ' + b : 'slide',
            E.slice(t, t + S.slidesPerPage).wrapAll('<div class="' + n + '" />');
            I = L.find('.slide'),
            S.autoHeight === !0 && u(),
            I.each(function () {
                e(this).addClass('slide-count-' + e(this).children().addClass('single-slide').length)
            }),
            S.equalColumnHeights && (q.isCurrentBreakpoint(i.SMALL_BREAKPOINT) || f(L, '.equal-height')),
            v(0)
        }
        function u() {
            var n = 0;
            I.each(function () {
                n = Math.max(e(this).height(), n)
            }),
            S.viz === !0 ? L.css('padding-top', '43%')  : L.css('padding-top', n)
        }
        function f(e, n) {
            t.setColumnEqualHeights(e, n),
            S.autoHeight === !0 && u()
        }
        function p(e, n) {
            t.removeColumnEqualHeights(e, n),
            S.autoHeight === !0 && u()
        }
        function h() {
            var n = L.find('.indicators'),
            i = e('#visualizer-container').find('.visualizer-carousel'),
            t = null,
            o = null,
            a = L.find('.next'),
            r = L.find('.prev');
            i && i.find('.next').length < 1 && (i.prepend('<a href="javascript:void(0);" class="control prev">'), i.append('<a href="javascript:void(0);" class="control next">'), t = i.find('.next'), o = i.find('.prev')),
            n.prepend('<a href="javascript:void(0);" class="control prev">'),
            n.append('<a href="javascript:void(0);" class="control next">'),
            a.add(t).on('click.carousel', function (e) {
                e.preventDefault(),
                N === !1 && y()
            }),
            r.add(o).on('click.carousel', function (e) {
                e.preventDefault(),
                N === !1 && w()
            })
        }
        function g() {
            var n = L.find('.indicators'),
            t = '';
            I.each(function (e) {
                t += '<a href="javascript:void(0);" class="indicator" data-num="' + e + '" />'
            }),
            n.append(t),
            A = L.find('.indicators a'),
            q.isCurrentBreakpoint(i.SMALL_BREAKPOINT) && I.length > 16 && e('.indicator').css('display', 'none')
        }
        function v(e, n, i) {
            i = i === !0 ? !0 : !1,
            H !== e && (N = !0, c(e), 'undefined' != typeof n ? m(e, n, i)  : H > e ? m(e, 'left', i)  : m(e, 'right', i), z = e, L.trigger(B, {
                previousIndex: H,
                currentIndex: e
            }))
        }
        function m(n, i, t) {
            function o() {
                e(window).trigger('lazyload'),
                I.removeClass(b).hide(),
                I.eq(n).addClass(b).show(),
                N = !1,
                H = n
            }
            var a = L.outerWidth(),
            r = 'left' === i ? a : - a;
            S.autoSlideHeight === !0 && (t ? L.css('padding-top', I.eq(n).height())  : L.animate({
                'padding-top': I.eq(n).height()
            }, S.animationDuration));
            var s = I.eq(n),
            c = L.find('.slide.active');
            s.show(),
            t ? (s.css('left', 0), c.css('left', r), o())  : (s.css({
                left: 'left' === i ? - a : a
            }), s.transition({
                left: 0
            }, S.animationDuration, o), c.transition({
                left: r
            }, S.animationDuration))
        }
        function y() {
            z++,
            z >= I.length && (z = 0),
            v(z, 'right')
        }
        function w() {
            z--,
            0 > z && (z = I.length - 1),
            v(z, 'left')
        }
        function C(n) {
            e.fx.off = !0,
            S = e.extend(S, n),
            z = 0,
            H = 0,
            N = !1,
            L.off('click'),
            k(),
            'undefined' != typeof n && null !== n.slideSelector && a(),
            d(),
            E.length > S.slidesPerPage && r(),
            e.fx.off = !1
        }
        function k() {
            E.unwrap(),
            L.find('.control').remove(),
            L.find('.indicators').remove(),
            L.parents('.visualizer-carousel').find('.control').remove()
        }
        function x() {
            e(window).smartresize(function () {
                var e = z,
                n = E.length;
                n === E.length && v(e, 'left', !0),
                S.equalColumnHeights && (q.isCurrentBreakpoint(i.SMALL_BREAKPOINT) ? p(L, '.equal-height')  : f(L, '.equal-height')),
                S.preventAllPadding || N !== !1 || (L.css('padding-top', 'auto'), u())
            })
        }
        function P() {
            return z
        }
        var S = e.extend({
            instance: null,
            slideSelector: '.item',
            autoHeight: !0,
            slidesPerPage: 1,
            showIndicators: !1,
            showNextPrev: !1,
            animationDuration: 600,
            autoSlideHeight: !1,
            equalColumnHeights: !1,
            viz: !1,
            preventAllPadding: !1,
            preventSwipe: !1
        }, n),
        q = new i,
        L = S.instance,
        E = null,
        I = null,
        A = null,
        b = 'active',
        B = 'slideChanged',
        N = !1,
        H = 0,
        z = 0;
        return o(),
        {
            jumpToIndex: v,
            resetSlides: C,
            next: y,
            prev: w,
            setSlideHeight: u,
            module: L,
            getCurrentIndex: P,
            SLIDE_CHANGED: B
        }
    };
    return o
}),
define('component/ResponsiveImages', [
    'jquery',
    'PointBreak',
    'component/lazyLoadManager'
], function (e, n, i) {
    var t = function () {
        function t() {
            r = s.getBreakpoints(),
            r && (r = _.map(r, function (e, n) {
                return {
                    key: n,
                    value: e
                }
            }), r = _.pluck(_.sortBy(r, 'value'), 'key').reverse()),
            o(),
            s.addChangeListener(o)
        }
        function o() {
            var n = s.getCurrentBreakpoint();
            d.each(function (t, o) {
                var a = e(o),
                s = 'IMG' === a.prop('tagName') ? !0 : !1,
                l = a.data(n);
                if (!l) {
                    var d,
                    u = r.length;
                    for (d = 0; u > d && !(l = a.data(r[d])); d++);
                }
                var f = s ? null : a.css('background-image'),
                p = s ? a.attr('src') !== l : f && - 1 === f.indexOf(l);
                p && (s ? (a.hasClass('lazy-load') ? (a.data('original', l), i.init(a))  : a.attr('src', l), a.hasClass(c) || a.addClass(c))  : a.hasClass('lazy-load') ? (a.data('original', l), i.init(a))  : a.css({
                    'background-image': 'url(\'' + l + '\')'
                }))
            })
        }
        function a() {
            d = e(l),
            o()
        }
        var r,
        s = new n,
        c = 'loaded',
        l = '.responsive-image',
        d = e(l);
        return t(),
        {
            update: a
        }
    };
    return t
});
var LEXUS = LEXUS || {
};
LEXUS.cookie = function () {
    function e() {
        var e = /[^\.]+\.com$/.exec(location.hostname);
        return e && e.length > 0 ? e[0] : location.hostname
    }
    var n = {
        LEAD_FORM_DATA_ANALYTICS_COOKIE: 'leadFormConfirmationAnalytics'
    },
    i = e(),
    t = {
        key: n,
        set: function (e, n) {
            var t = '';
            if (void 0 === n) throw new Error('set() requires 2 parameters');
            t = encodeURIComponent(e) + '=' + n + '; path=/;domain=' + i,
            document.cookie = t
        },
        setWithExpiration: function (e, n, t) {
            var o = '';
            if (void 0 === n) throw new Error('set() requires 2 parameters');
            o = encodeURIComponent(e) + '=' + n + '; path=/;domain=' + i + ';max-age=' + t,
            document.cookie = o
        },
        get: function (e) {
            for (var n = document.cookie.split(';'), i = null, t = 0; t < n.length; t++) {
                i = n[t].split('=');
                var o = i[0].replace(/^\s+|\s+$/gm, '');
                if (o === e) return decodeURIComponent(i[1])
            }
            return void 0
        }
    };
    return t
}(jQuery),
'function' == typeof define && define.amd && define('util/cookie', [
], function () {
    return LEXUS.cookie
}),
require(['jquery',
'util/cookie'], function (e, n) {
    function i() {
        d = r();
        var e = l();
        if (void 0 === d) d = [
        ],
        s(e.model, e.year);
         else {
            var n = t(e.model, 'actions');
            n ? s(e.model, e.year, e.actions)  : s(e.model, e.year)
        }
        a()
    }
    function t(e, n) {
        if (!d) return !1;
        for (var i = 0; i < d.length; i++) if (d[i].model === e) switch (n) {
            case 'actions':
                return d[i].interactions;
            case 'index':
                return i
        }
        return !1
    }
    function o() {
        d = d.filter(function (e) {
            return void 0 !== e
        })
    }
    function a() {
        var e = JSON.stringify(d);
        n.setWithExpiration(f, e, p)
    }
    function r() {
        return n.get(f) ? JSON.parse(n.get(f))  : void 0
    }
    function s(e, n, i) {
        i = void 0 === i ? 1 : i + 1;
        var a = t(e, 'index');
        'number' == typeof a && (d[a] = void 0),
        d.push({
            model: e,
            modelYear: n,
            timestamp: Date.now(),
            interactions: i
        }),
        o(),
        d.length > u && d.shift()
    }
    function c() {
        d = r();
        var e = l();
        s(e.model, e.year, e.actions),
        a()
    }
    function l() {
        var e = LEXUS.page.seriesName;
        e = 'true' === LEXUS.isHybrid || LEXUS.isHybrid === !0 ? e + ' Hybrid' : e;
        var n = LEXUS.modelYear,
        i = t(e, 'actions');
        return {
            model: e,
            year: n,
            actions: i
        }
    }
    var d,
    u = 5,
    f = 'lexus-drivers-viewed-cars',
    p = 2700000;
    i(),
    e(document).ready(function () {
        e('.gallery-item').on('click', c),
        e('#overlay-nav').on('click', c),
        e('.feature-image').on('click', c)
    })
}), define('model-cookie', function () {
}), require(['lexus',
'jquery',
'PointBreak',
'component/Carousel',
'component/ResponsiveImages',
'analytics',
'waypoints',
'waypoints-sticky',
'model-cookie'], function (e, n, i, t, o, a) {
    function r() {
        f(),
        d(),
        u(),
        h(),
        l(),
        s();
        new o;
        g(),
        y.addChangeListener(c),
        n(document).ready(function () {
            - 1 !== document.location.hash.search('#') && (document.location = document.location.hash)
        })
    }
    function s() {
        n('.key-specs-container .key-spec .value').each(function () {
            var e,
            i,
            t,
            o,
            a = n(this).text();
            a && (i = /[@°]+/, t = i.exec(a), o = a.split(t), e = o.join('<small class="tiny">' + t + '</small>'), n(this).html(e))
        })
    }
    function c() {
        n.each(w, function (e) {
            m = n.extend(m, p()),
            w[e].resetSlides(m)
        }),
        d(),
        u(),
        l()
    }
    function l() {
        if (y.isCurrentBreakpoint(i.SMALL_BREAKPOINT)) return !1;
        var e = '.specifications-category.chassis > .bottom-specs-container > .spec',
        t = n(e),
        o = '',
        a = 0,
        r = 0;
        t.hasClass('cutout') && (a = t.length > 1 ? t.length - 3 : t.length - 1, o = t.eq(a), r = - 1 * (n('.spec-wrapper', o).height() - n('.description', o).height() - 10), n('.bottom-specs-container', n('.specifications-category.chassis')).css({
            'margin-bottom': '100px'
        }))
    }
    function d() {
        n('.specifications-category').each(function (e, t) {
            var o = n('.spec', n(t)).length - 1;
            return y.isCurrentBreakpoint(i.SMALL_BREAKPOINT) && n(t).hasClass('engine') ? !0 : (o % 2 ? n('.spec', n(t)).eq(o - 1).addClass(C)  : n('.spec', n(t)).eq(o).addClass('centered'), void n('.spec', n(t)).eq(o).addClass(C))
        }),
        y.isCurrentBreakpoint(i.SMALL_BREAKPOINT) && (n('.specifications-category.engine > .bottom-specs-container .spec').removeClass('centered'), n('.specifications-category.engine > .bottom-specs-container .spec').removeClass(C))
    }
    function u() {
        function e() {
            var e = n('.specifications-category');
            n('.spec-wrapper').height('auto'),
            y.isCurrentBreakpoint(i.SMALL_BREAKPOINT) && (e = n('.specifications-category.performance,.specifications-category.drive-train')),
            e.each(function (e, i) {
                var t = 0;
                n('.spec-wrapper', n(i)).each(function () {
                    n(this).parent().hasClass('centered') || n(this).height() > t && (t = n(this).height())
                }),
                n('.spec-wrapper', n(i)).height(t),
                n('.centered .spec-wrapper', n(i)).height('auto')
            })
        }
        window.addEventListener('resize', function () {
            e()
        }),
        e()
    }
    function f() {
        function i(e) {
            var i,
            a = n(e),
            r = a.siblings('.dropdown-options-container'),
            s = - 1;
            t(n('.specifications-dropdown.open .dropdown-heading'), !1),
            a.parent().addClass('open'),
            r.css({
                display: 'block',
                marginLeft: r.width() / 2 * - 1
            }).stop(!0, !0).transition({
                duration: o,
                opacity: '1',
                marginTop: '28px',
                zIndex: '10',
                display: 'block'
            }, function () {
                var e = 0;
                s = 0,
                i = r.find('li').length - 1,
                n(document).on('keydown', function (n) {
                    switch (e = r.find('li:focus').index(), n.keyCode) {
                        case 13:
                            return n.preventDefault(),
                            0 !== e && r.find('li').eq(e).find('a') [0].click(),
                            !0;
                        case 38:
                            n.preventDefault(),
                            s = 1 > s - 1 ? i : s - 1;
                            break;
                        case 40:
                            n.preventDefault(),
                            s = s + 1 > i ? 1 : s + 1;
                            break;
                        default:
                            return !0
                    }
                    r.find('li').eq(s).trigger('focus')
                })
            })
        }
        function t(e, i) {
            if (i) {
                var t = n(e);
                v(t)
            }
            n(e).parent().removeClass('open'),
            n(e).siblings('.dropdown-options-container').stop(!0, !0).transition({
                duration: o,
                opacity: '0',
                marginTop: '-10px',
                zIndex: '0',
                complete: function () {
                    n(e).siblings('.dropdown-options-container').css({
                        display: 'none'
                    }),
                    n(document).off('keydown')
                }
            })
        }
        if (e.specifications.trimNav.hasOwnProperty('length') && e.specifications.trimNav.length <= 1) return n('.selected-trim > .dropdown-btn').hide(),
        n('.selected-trim').css('cursor', 'default'),
        !1;
        var o = 300,
        a = n('.specifications-dropdown'),
        r = n('.dropdown-heading', a);
        r.on('click', '.selected-trim', function () {
            var e = n(this).closest('.dropdown-heading');
            e.parent().hasClass('open') ? t(e, !0)  : (i(e), v(e))
        }),
        n(document).on('click', function (e) {
            var i = n(e.target);
            i.parents().hasClass('specifications-dropdown') && 'dropdown-hit-area' !== i.attr('class') || t(n('.specifications-dropdown.open .dropdown-heading'), !1)
        })
    }
    function p() {
        return y.isCurrentBreakpoint(i.SMALL_BREAKPOINT) ? {
            slidesPerPage: 1,
            showNextPrev: !1,
            showIndicators: !0,
            animationDuration: 300
        }
         : {
            slidesPerPage: 4,
            showNextPrev: !1,
            showIndicators: !1
        }
    }
    function h() {
        var e;
        n('.key-specs-container').each(function (i, o) {
            m = {
                instance: n(o),
                slideSelector: '.key-spec'
            },
            m = n.extend(m, p()),
            e = new t(m),
            w.push(e)
        })
    }
    function g() {
        var e = document.referrer,
        i = e.match(/\/specifications\/?(.*)?/);
        null === i && a.helper.fireSpecificationsPageLoad(),
        n('.dropdown-options li').on('click touchstart', function (e) {
            if (k) {
                var i = n(e.currentTarget);
                v(i),
                k = !1
            } else k = !0
        })
    }
    function v(e) {
        var n = e,
        i = n.find('.trim-name').text(),
        t = n.closest('.specifications-category').attr('data-category') + ' Specs',
        o = 'Specs Module';
        a.helper.fireGenericModuleClick(t, i, o)
    }
    var m,
    y = new i,
    w = [
    ],
    C = 'no-border',
    k = !0;
    r()
}), define('page/model/specifications/specifications-main', function () {
});
