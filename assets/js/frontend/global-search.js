!function (e) {
    var r = function () {
        function r() {
            return f.models
        }
        function t() {
            n()
        }
        function n() {
            var r,
            t,
            n,
            c,
            u,
            d,
            m,
            v,
            w,
            y = 0,
            C = - 1,
            k = e('html').hasClass('touch');
            e('.search').on('keydown', function (e) {
                return 38 === e.keyCode ? !1 : void 0
            }),
            e('.search').on('keyup', function (x) {
                if (x.preventDefault(), r = e(this), t = r.val().toLowerCase(), n = t.length, v = 'search-page-search' === r.attr('id') ? 'search' : k ? 'small' : window.innerWidth >= 960 ? 'large' : 'small', 2 > n) return p[v].hide(),
                !0;
                if (2 === n && - 1 === f.models.indexOf(t)) return p[v].hide(),
                !0;
                if (/(large|search)/.test(v) && w && (38 === x.keyCode || 40 === x.keyCode)) {
                    switch (y = 0 === y ? document.querySelectorAll('#predictive-terms-' + v + ' li').length : y, x.keyCode) {
                        case 38:
                            C = s(C, y, - 1, v);
                            break;
                        case 40:
                            C = s(C, y, 1, v);
                            break;
                        default:
                            console.log('Funky-ness.')
                    }
                    return !0
                }
                l('terms', '/rest/suggest?q=' + t, function () {
                    l('links', '/rest/shortcuts?q=' + t, function () {
                        C = - 1,
                        y = 0,
                        h = '',
                        c = i(),
                        u = f.links[0] || null,
                        d = a(c, t, v),
                        m = o(u, v),
                        d || m ? (w = !0, g[v].html(h), p[v].show())  : (w = !1, p[v].hide())
                    })
                })
            })
        }
        function s(r, t, n, s) {
            var i = r + Number(n);
            return 0 > i && (i = t - 1),
            i === t && (i = 0),
            e('#predictive-terms-' + s + ' a').removeClass('focus'),
            e('#predictive-terms-' + s + ' li').eq(i).find('a').addClass('focus'),
            i
        }
        function i() {
            for (m = [
            ], d = f.terms.length > 4 ? 4 : f.terms.length, u = 0; d > u; u++) f.terms[u].term && m.push(f.terms[u].term);
            return m
        }
        function l(r, t, n) {
            e.ajax(t, {
                dataType: 'json'
            }).done(function (e) {
                f[r] = e,
                n && n()
            })
        }
        function a(e, r, t) {
            if (g[t].html(''), 0 === e.length) return v.addClass('empty-terms'),
            !1;
            v.removeClass('empty-terms');
            var n = '(' + r + ')',
            s = new RegExp(n, 'i');
            for (u = 0; u < e.length; u++) e[u] = e[u].toUpperCase().replace(/0H/gi, '0h').replace(/0t/gi, '0t'),
            h += '<li><a href="/search?q=' + e[u].toLowerCase().replace(/\s/g, '+') + '">' + e[u].replace(s, '<em>$1</em>') + '</a></li>';
            return !0
        }
        function o(e, r) {
            var t;
            return e ? (t = e.url, e.url = e.url.replace(new RegExp('https?://www.', 'g'), ''), e.url = 0 === e.url.indexOf('/') ? 'lexus.com' + e.url : e.url, 'small' === r && (e.url = e.url.substr(0, 30) + '...'), h += '<li id="predictive-destination-' + r + '"><a class="destination" href="' + t + '"><strong>' + e.title + '</strong><span>' + e.url + '</span></a></li>', !0)  : !1
        }
        function c(r) {
            var t,
            n = document.querySelectorAll('.focus'),
            s = e(r).find('.search');
            return n.length ? (window.location.href = n[0].getAttribute('href'), !1)  : (t = s.val().trim(), '' === t ? !1 : (t = t.toLowerCase(), s.val(t), !0))
        }
        var u,
        d,
        h,
        f = {
        },
        m = [
        ],
        p = {
            large: e('#predictive-container-large'),
            small: e('#predictive-container-small'),
            search: e('#predictive-container-search')
        },
        g = {
            large: e('#predictive-terms-large'),
            small: e('#predictive-terms-small'),
            search: e('#predictive-terms-search')
        },
        v = e('#predictive-terms-large-outer, #predictive-terms-search-outer');
        return f.models = [
            'is',
            'es',
            'gs',
            'ls',
            'rx',
            'gx',
            'lx',
            'ct',
            'lf',
            'nx',
            'rc',
            'hs',
            'sc'
        ],
        t(),
        {
            submitRequested: c,
            getModelsList: r
        }
    };
    if ('function' != typeof jQuery) throw new Error('jQuery needs to be defined for the nav to work.');
    e(function () {
        window.LEXUS = window.LEXUS || {
        },
        window.LEXUS.Search = new r
    })
}(jQuery);
