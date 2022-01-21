!function (e) {
    var t = function () {
        function t() {
            n(),
            e('html').hasClass('lte-ie10') || a(),
            h()
        }
        function n() {
            var t = e('.pn'),
            n = /Mobile|iP(hone|od|ad)|Android|BlackBerry|IEMobile|Kindle|NetFront|Silk-Accelerated|(hpw|web)OS|Fennec|Minimo|Opera M(obi|ini)|Blazer|Dolfin|Dolphin|Skyfire|Zune/,
            a = navigator.userAgent,
            o = n.test(a);
            n = /iPad/i;
            var i,
            r = n.test(a),
            l = navigator.msMaxTouchPoints,
            d = l && l > 0,
            c = function (e, t, n, a) {
                var o,
                i,
                r,
                l = document.createElement('div'),
                d = document.body,
                c = d ? d : document.createElement('body');
                if (parseInt(n, 10)) for (; n--; ) r = document.createElement('div'),
                r.id = a ? a[n] : 'modernizr' + (n + 1),
                l.appendChild(r);
                return o = [
                    '&#173;',
                    '<style id="s',
                    'modernizr',
                    '">',
                    e,
                    '</style>'
                ].join(''),
                l.id = 'modernizr',
                (d ? l : c).innerHTML += o,
                c.appendChild(l),
                d || (c.style.background = '', docElement.appendChild(c)),
                i = t(l, e),
                d ? l.parentNode.removeChild(l)  : c.parentNode.removeChild(c),
                !!i
            },
            s = ' -webkit- -moz- -o- -ms- '.split(' ');
            'ontouchstart' in window || window.DocumentTouch && document instanceof DocumentTouch ? i = !0 : c(['@media (',
            s.join('touch-enabled),('),
            'modernizr',
            ')',
            '{#modernizr{top:9px;position:absolute}}'].join(''), function (e) {
                i = 9 === e.offsetTop
            }),
            t.size() > 0 && t.each(function () {
                var t = document.createElement('div'),
                n = (o ? 'mobiledevice ' : 'no-mobiledevice ') + (r ? 'ipad ' : 'no-ipad ') + (d ? 'mstouch ' : 'no-mstouch ') + (i ? 'touch ' : 'no-touch ');
                t.className = n,
                e(this).children().prependTo(t),
                e(this).prepend(t)
            })
        }
        function a() {
            N.on('click', u),
            N.on('mouseover', u),
            B.on('click', c),
            j.on('mouseleave', f),
            U.on('click', r),
            W.on('click', r),
            Q.on('click', d),
            X.on('click', o),
            window.addEventListener('pagehide', i, !1)
        }
        function o() {
            var t = e(this);
            return t.hasClass('expanded') ? (t.removeClass('expanded'), !0)  : (X.removeClass('expanded'), void e(this).addClass('expanded'))
        }
        function i() {
            e('#searchMobileContainer').removeClass('expanded'),
            e('#predictive-container-small').hide(),
            e('#predictive-terms-small').html(''),
            e('#mobileMenuList').hide()
        }
        function r(t) {
            return t.stopPropagation(),
            f(),
            e('#searchMobileContainer').removeClass('searchMobileTransition'),
            'search-page-search' === U.attr('id') ? !0 : (U.addClass('expanded'), q.is(':focus') || q.focus(), void e('#mobileMenuList').addClass('expanded'))
        }
        function l(t) {
            var n = e(t.target);
            !n.parents('div#mobileMenu').length && H.hasClass('open') && c(t)
        }
        function d(t) {
            var n;
            return t.preventDefault(),
            t.stopPropagation(),
            'close-search-search' === e(this).attr('id') ? (document.getElementById('search-page-search').value = '', e('#predictive-container-search').hide(), e('#predictive-terms-search').html(''), !0)  : (U.removeClass('expanded'), e('#mobileMenuList').removeClass('expanded'), n = O ? 'small' : window.innerWidth > 960 ? 'large' : 'small', 'small' === n ? document.getElementById('search-mobile').value = '' : document.getElementById('search-desktop').value = '', e('#predictive-container-' + n).hide(), e('#predictive-terms-' + n).html(''), void e('#searchMobileContainer').addClass('searchMobileTransition'))
        }
        function c(t) {
            t.preventDefault(),
            H.slideToggle(w, function () {
                H.hasClass('open') ? e('body').bind('click', l)  : e('body').unbind('click', l)
            }).toggleClass(T)
        }
        function s() {
            f(),
            g()
        }
        function u(t) {
            t.preventDefault();
            var n = e(this).index();
            e(this).hasClass(L) || (z.find(x).length ? (z.find(x).removeClass(L).hide(), z.removeClass('nav-open'), z.find(P).eq(n).stop(!0, !0).fadeIn(M, function () {
                z.addClass('nav-open')
            }))  : (z.addClass(A), z.find(P).stop(!0, !0).eq(n).slideDown(w)), _.find(x).removeClass(L), e(this).addClass(L), z.find(P).eq(n).addClass(L))
        }
        function f() {
            var t = e('.tooltip-background');
            (t.length <= 0 || t.is(':hidden')) && (z.removeClass(A), z.find(x).removeClass(L).stop(!0, !0).slideUp(w), _.find(x).removeClass(L), document.getElementById('predictive-container-large').style.display = 'none')
        }
        function g() {
            H.slideUp(w).removeClass(T)
        }
        function h() {
            'function' == typeof fireTag && (m(), p())
        }
        function m() {
            var t = e('.header-wrapper'),
            n = t.find('#logo'),
            a = t.find('.search'),
            o = t.find('.model-flyout-compare'),
            i = t.find('.find-a-dealer'),
            r = t.find('.certified-preowned'),
            l = t.find('.owners-link'),
            d = t.find('.navModel');
            n.click(function () {
                b('Header', 'Home Link', 'Lexus Logo')
            }),
            a.focus(function (e) {
                e.stopPropagation();
                var t = e.target.getAttribute('data-category') || 'Search';
                b('Header', t, 'Internal Search')
            }),
            l.click(function (e) {
                var t = e.target.getAttribute('data-category') || '',
                n = e.target.getAttribute('data-label') || '';
                fireTag(E, {
                    '<container>': 'Header',
                    '<category>': t,
                    '<label>': n,
                    '<break_point>': C(),
                    '<orientation>': k()
                })
            }),
            r.click(function (e) {
                var t = e.target.getAttribute('data-category') || '',
                n = e.target.getAttribute('data-label') || '';
                fireTag(E, {
                    '<container>': 'Header',
                    '<category>': t,
                    '<label>': n,
                    '<break_point>': C(),
                    '<orientation>': k()
                })
            }),
            i.click(function (e) {
                var t = e.target.getAttribute('data-container') || 'Header';
                fireTag(D, {
                    '<container>': t,
                    '<break_point>': C(),
                    '<orientation>': k()
                })
            }),
            o.click(function () {
                fireTag(S, {
                    '<container>': 'Model Flyout',
                    '<break_point>': C(),
                    '<orientation>': k()
                })
            }),
            d.click(function (t) {
                var n,
                a;
                'asterisk' !== t.target.className && (n = t.target.getAttribute('data-label') || e(t.target).closest('a').data('label') || 'Category not found', a = t.target.getAttribute('data-model') || e(t.target).closest('a').data('model') || 'Model data not found', v('Model Flyout', 'Vehicle Click', n, 'Select Model', a.toUpperCase().replace('-', ' ')))
            }),
            e('.mobileMenuItem:not(.nonCategory) a').click(function (t) {
                var n = t.target.getAttribute('data-title') || e(t.target).data('title') || 'Label not found';
                e(this).hasClass('legacy-nav') || b('Header', 'Mobile Menu', n)
            })
        }
        function p() {
            var t,
            n;
            e('.high-level-links a').click(function (e) {
                t = 'Information',
                n = e.target.getAttribute('data-label'),
                b('Footer', t, n)
            }),
            e('.secondary-links a, .secondary-links-footer a').click(function (a) {
                t = a.target.getAttribute('data-category') || e(a.target).closest('a').data('category') || 'No Category Found',
                n = a.target.getAttribute('data-label') || e(a.target).closest('a').data('label') || 'No Label Found',
                b('Footer', t, n)
            }),
            e('footer .social a').click(function (a) {
                t = 'Social Links',
                n = a.target.getAttribute('data-label') || e(a.target).closest('a').data('label') || 'No Label Found',
                b('Footer', t, n)
            }),
            e('.footer-disclaimer a').click(function (e) {
                fireTag(I, {
                    '<container>': 'Footer',
                    '<message>': e.target.textContent,
                    '<break_point>': C(),
                    '<orientation>': k()
                })
            })
        }
        function b(e, t, n) {
            fireTag(E, {
                '<container>': e,
                '<category>': t,
                '<label>': n,
                '<break_point>': C(),
                '<orientation>': k()
            })
        }
        function v(e, t, n, a, o) {
            fireTag(F, {
                '<container>': e,
                '<category>': t,
                '<label>': n,
                '<action>': a,
                '<model_name>': o,
                '<break_point>': C(),
                '<orientation>': k()
            })
        }
        function C() {
            return window.innerWidth > 1204 ? 'Max' : window.innerWidth > 959 ? 'Large' : window.innerWidth > 640 ? 'Medium' : 'Small'
        }
        function k() {
            return window.innerWidth <= window.innerHeight ? 'Portrait' : 'Landscape'
        }
        function y(e, t) {
            var n,
            a,
            o;
            e.preventDefault(),
            e.stopPropagation(),
            f(),
            a = /build/gi.test(e.target.textContent) ? 'Build Your Lexus' : e.target.textContent,
            n = e.target.getAttribute('data-label') || 'Category not found',
            o = e.target.getAttribute('data-model') || 'Model data not found',
            'function' == typeof fireTag && v('Model Flyout', 'CTA Click', n, a, o),
            window.location.href = t
        }
        var w = 350,
        M = 200,
        A = 'nav-open',
        T = 'open',
        L = 'active',
        x = '.' + L,
        E = '2576.2',
        F = '2576.3',
        S = '2538.2',
        D = '2538.4',
        I = '2537.3',
        B = e('#mobileMenuButton'),
        H = e('#mobileMenuList'),
        N = e('#categories .vehicleCategoryDropdown'),
        z = e('#navModelSelect'),
        P = '.modelCategoryRow',
        _ = e('#categories'),
        j = e('.header-wrapper'),
        U = e('.search'),
        W = e('#searchMobileContainer'),
        q = e('#searchMobileContainer .search'),
        Q = e('.close-search'),
        X = e('.footer.small h5'),
        O = e('html').hasClass('touch') || e('html').hasClass('mstouch');
        return t(),
        {
            closeAllMenus: s,
            sendTo: y
        }
    };
    if ('function' != typeof jQuery) throw new Error('jQuery needs to be defined for the nav to work.');
    e(function () {
        window.LEXUS = window.LEXUS || {
        },
        window.LEXUS.globalNav = new t
    })
}(jQuery);
