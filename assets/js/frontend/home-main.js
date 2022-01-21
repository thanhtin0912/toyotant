/*!
 * Modernizr v2.6.2
 * www.modernizr.com
 *
 * Copyright (c) Faruk Ates, Paul Irish, Alex Sexton
 * Available under the BSD and MIT licenses: www.modernizr.com/license/
 */
/*! HTML5 Shiv v3.6.1 | @afarkas @jdalton @jon_neal @rem | MIT/GPL2 Licensed */
window.Modernizr = function (e, t, i) {
    function n(e) {
        x.cssText = e
    }
    function o(e, t) {
        return n(E.join(e + ';') + (t || ''))
    }
    function a(e, t) {
        return typeof e === t
    }
    function r(e, t) {
        return !!~('' + e).indexOf(t)
    }
    function l(e, t) {
        for (var n in e) {
            var o = e[n];
            if (!r(o, '-') && x[o] !== i) return 'pfx' == t ? o : !0
        }
        return !1
    }
    function s(e, t, n) {
        for (var o in e) {
            var r = t[e[o]];
            if (r !== i) return n === !1 ? e[o] : a(r, 'function') ? r.bind(n || t)  : r
        }
        return !1
    }
    function c(e, t, i) {
        var n = e.charAt(0).toUpperCase() + e.slice(1),
        o = (e + ' ' + k.join(n + ' ') + n).split(' ');
        return a(t, 'string') || a(t, 'undefined') ? l(o, t)  : (o = (e + ' ' + S.join(n + ' ') + n).split(' '), s(o, t, i))
    }
    function u() {
        g.input = function (i) {
            for (var n = 0, o = i.length; o > n; n++) N[i[n]] = !!(i[n] in b);
            return N.list && (N.list = !(!t.createElement('datalist') || !e.HTMLDataListElement)),
            N
        }('autocomplete autofocus list placeholder max min multiple pattern required step'.split(' ')),
        g.inputtypes = function (e) {
            for (var n, o, a, r = 0, l = e.length; l > r; r++) b.setAttribute('type', o = e[r]),
            n = 'text' !== b.type,
            n && (b.value = T, b.style.cssText = 'position:absolute;visibility:hidden;', /^range$/.test(o) && b.style.WebkitAppearance !== i ? (m.appendChild(b), a = t.defaultView, n = a.getComputedStyle && 'textfield' !== a.getComputedStyle(b, null).WebkitAppearance && 0 !== b.offsetHeight, m.removeChild(b))  : /^(search|tel)$/.test(o) || (n = /^(url|email)$/.test(o) ? b.checkValidity && b.checkValidity() === !1 : b.value != T)),
            $[e[r]] = !!n;
            return $
        }('search tel url email datetime date month week time datetime-local number range color'.split(' '))
    }
    var d,
    p,
    f = '2.6.2',
    g = {
    },
    h = !0,
    m = t.documentElement,
    v = 'modernizr',
    y = t.createElement(v),
    x = y.style,
    b = t.createElement('input'),
    T = ':)',
    C = {
    }.toString,
    E = ' -webkit- -moz- -o- -ms- '.split(' '),
    w = 'Webkit Moz O ms',
    k = w.split(' '),
    S = w.toLowerCase().split(' '),
    P = {
        svg: 'http://www.w3.org/2000/svg'
    },
    R = {
    },
    $ = {
    },
    N = {
    },
    D = [
    ],
    A = D.slice,
    _ = function (e, i, n, o) {
        var a,
        r,
        l,
        s,
        c = t.createElement('div'),
        u = t.body,
        d = u || t.createElement('body');
        if (parseInt(n, 10)) for (; n--; ) l = t.createElement('div'),
        l.id = o ? o[n] : v + (n + 1),
        c.appendChild(l);
        return a = [
            '&#173;',
            '<style id="s',
            v,
            '">',
            e,
            '</style>'
        ].join(''),
        c.id = v,
        (u ? c : d).innerHTML += a,
        d.appendChild(c),
        u || (d.style.background = '', d.style.overflow = 'hidden', s = m.style.overflow, m.style.overflow = 'hidden', m.appendChild(d)),
        r = i(c, e),
        u ? c.parentNode.removeChild(c)  : (d.parentNode.removeChild(d), m.style.overflow = s),
        !!r
    },
    B = function (t) {
        var i = e.matchMedia || e.msMatchMedia;
        if (i) return i(t).matches;
        var n;
        return _('@media ' + t + ' { #' + v + ' { position: absolute; } }', function (t) {
            n = 'absolute' == (e.getComputedStyle ? getComputedStyle(t, null)  : t.currentStyle).position
        }),
        n
    },
    L = function () {
        function e(e, o) {
            o = o || t.createElement(n[e] || 'div'),
            e = 'on' + e;
            var r = e in o;
            return r || (o.setAttribute || (o = t.createElement('div')), o.setAttribute && o.removeAttribute && (o.setAttribute(e, ''), r = a(o[e], 'function'), a(o[e], 'undefined') || (o[e] = i), o.removeAttribute(e))),
            o = null,
            r
        }
        var n = {
            select: 'input',
            change: 'input',
            submit: 'form',
            reset: 'form',
            error: 'img',
            load: 'img',
            abort: 'img'
        };
        return e
    }(),
    M = {
    }.hasOwnProperty;
    p = a(M, 'undefined') || a(M.call, 'undefined') ? function (e, t) {
        return t in e && a(e.constructor.prototype[t], 'undefined')
    }
     : function (e, t) {
        return M.call(e, t)
    },
    Function.prototype.bind || (Function.prototype.bind = function (e) {
        var t = this;
        if ('function' != typeof t) throw new TypeError;
        var i = A.call(arguments, 1),
        n = function () {
            if (this instanceof n) {
                var o = function () {
                };
                o.prototype = t.prototype;
                var a = new o,
                r = t.apply(a, i.concat(A.call(arguments)));
                return Object(r) === r ? r : a
            }
            return t.apply(e, i.concat(A.call(arguments)))
        };
        return n
    }),
    R.flexbox = function () {
        return c('flexWrap')
    },
    R.flexboxlegacy = function () {
        return c('boxDirection')
    },
    R.canvas = function () {
        var e = t.createElement('canvas');
        return !(!e.getContext || !e.getContext('2d'))
    },
    R.canvastext = function () {
        return !(!g.canvas || !a(t.createElement('canvas').getContext('2d').fillText, 'function'))
    },
    R.webgl = function () {
        return !!e.WebGLRenderingContext
    },
    R.touch = function () {
        var i;
        return 'ontouchstart' in e || e.DocumentTouch && t instanceof DocumentTouch ? i = !0 : _(['@media (',
        E.join('touch-enabled),('),
        v,
        ')',
        '{#modernizr{top:9px;position:absolute}}'].join(''), function (e) {
            i = 9 === e.offsetTop
        }),
        i
    },
    R.geolocation = function () {
        return 'geolocation' in navigator
    },
    R.postmessage = function () {
        return !!e.postMessage
    },
    R.websqldatabase = function () {
        return !!e.openDatabase
    },
    R.indexedDB = function () {
        return !!c('indexedDB', e)
    },
    R.hashchange = function () {
        return L('hashchange', e) && (t.documentMode === i || t.documentMode > 7)
    },
    R.history = function () {
        return !(!e.history || !history.pushState)
    },
    R.draganddrop = function () {
        var e = t.createElement('div');
        return 'draggable' in e || 'ondragstart' in e && 'ondrop' in e
    },
    R.websockets = function () {
        return 'WebSocket' in e || 'MozWebSocket' in e
    },
    R.rgba = function () {
        return n('background-color:rgba(150,255,150,.5)'),
        r(x.backgroundColor, 'rgba')
    },
    R.hsla = function () {
        return n('background-color:hsla(120,40%,100%,.5)'),
        r(x.backgroundColor, 'rgba') || r(x.backgroundColor, 'hsla')
    },
    R.multiplebgs = function () {
        return n('background:url(https://),url(https://),red url(https://)'),
        /(url\s*\(.*?){3}/.test(x.background)
    },
    R.backgroundsize = function () {
        return c('backgroundSize')
    },
    R.borderimage = function () {
        return c('borderImage')
    },
    R.borderradius = function () {
        return c('borderRadius')
    },
    R.boxshadow = function () {
        return c('boxShadow')
    },
    R.textshadow = function () {
        return '' === t.createElement('div').style.textShadow
    },
    R.opacity = function () {
        return o('opacity:.55'),
        /^0.55$/.test(x.opacity)
    },
    R.cssanimations = function () {
        return c('animationName')
    },
    R.csscolumns = function () {
        return c('columnCount')
    },
    R.cssgradients = function () {
        var e = 'background-image:',
        t = 'gradient(linear,left top,right bottom,from(#9f9),to(white));',
        i = 'linear-gradient(left top,#9f9, white);';
        return n((e + '-webkit- '.split(' ').join(t + e) + E.join(i + e)).slice(0, - e.length)),
        r(x.backgroundImage, 'gradient')
    },
    R.cssreflections = function () {
        return c('boxReflect')
    },
    R.csstransforms = function () {
        return !!c('transform')
    },
    R.csstransforms3d = function () {
        var e = !!c('perspective');
        return e && 'webkitPerspective' in m.style && _('@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}', function (t) {
            e = 9 === t.offsetLeft && 3 === t.offsetHeight
        }),
        e
    },
    R.csstransitions = function () {
        return c('transition')
    },
    R.fontface = function () {
        var e;
        return _('@font-face {font-family:"font";src:url("https://")}', function (i, n) {
            var o = t.getElementById('smodernizr'),
            a = o.sheet || o.styleSheet,
            r = a ? a.cssRules && a.cssRules[0] ? a.cssRules[0].cssText : a.cssText || '' : '';
            e = /src/i.test(r) && 0 === r.indexOf(n.split(' ') [0])
        }),
        e
    },
    R.generatedcontent = function () {
        var e;
        return _(['#',
        v,
        '{font:0/0 a}#',
        v,
        ':after{content:"',
        T,
        '";visibility:hidden;font:3px/1 a}'].join(''), function (t) {
            e = t.offsetHeight >= 3
        }),
        e
    },
    R.video = function () {
        var e = t.createElement('video'),
        i = !1;
        try {
            (i = !!e.canPlayType) && (i = new Boolean(i), i.ogg = e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/, ''), i.h264 = e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/, ''), i.webm = e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/, ''))
        } catch (n) {
        }
        return i
    },
    R.audio = function () {
        var e = t.createElement('audio'),
        i = !1;
        try {
            (i = !!e.canPlayType) && (i = new Boolean(i), i.ogg = e.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/, ''), i.mp3 = e.canPlayType('audio/mpeg;').replace(/^no$/, ''), i.wav = e.canPlayType('audio/wav; codecs="1"').replace(/^no$/, ''), i.m4a = (e.canPlayType('audio/x-m4a;') || e.canPlayType('audio/aac;')).replace(/^no$/, ''))
        } catch (n) {
        }
        return i
    },
    R.localstorage = function () {
        try {
            return localStorage.setItem(v, v),
            localStorage.removeItem(v),
            !0
        } catch (e) {
            return !1
        }
    },
    R.sessionstorage = function () {
        try {
            return sessionStorage.setItem(v, v),
            sessionStorage.removeItem(v),
            !0
        } catch (e) {
            return !1
        }
    },
    R.webworkers = function () {
        return !!e.Worker
    },
    R.applicationcache = function () {
        return !!e.applicationCache
    },
    R.svg = function () {
        return !!t.createElementNS && !!t.createElementNS(P.svg, 'svg').createSVGRect
    },
    R.inlinesvg = function () {
        var e = t.createElement('div');
        return e.innerHTML = '<svg/>',
        (e.firstChild && e.firstChild.namespaceURI) == P.svg
    },
    R.smil = function () {
        return !!t.createElementNS && /SVGAnimate/.test(C.call(t.createElementNS(P.svg, 'animate')))
    },
    R.svgclippaths = function () {
        return !!t.createElementNS && /SVGClipPath/.test(C.call(t.createElementNS(P.svg, 'clipPath')))
    };
    for (var V in R) p(R, V) && (d = V.toLowerCase(), g[d] = R[V](), D.push((g[d] ? '' : 'no-') + d));
    return g.input || u(),
    g.addTest = function (e, t) {
        if ('object' == typeof e) for (var n in e) p(e, n) && g.addTest(n, e[n]);
         else {
            if (e = e.toLowerCase(), g[e] !== i) return g;
            t = 'function' == typeof t ? t()  : t,
            'undefined' != typeof h && h && (m.className += ' ' + (t ? '' : 'no-') + e),
            g[e] = t
        }
        return g
    },
    n(''),
    y = b = null,
    function (e, t) {
        function i(e, t) {
            var i = e.createElement('p'),
            n = e.getElementsByTagName('head') [0] || e.documentElement;
            return i.innerHTML = 'x<style>' + t + '</style>',
            n.insertBefore(i.lastChild, n.firstChild)
        }
        function n() {
            var e = v.elements;
            return 'string' == typeof e ? e.split(' ')  : e
        }
        function o(e) {
            var t = m[e[g]];
            return t || (t = {
            }, h++, e[g] = h, m[h] = t),
            t
        }
        function a(e, i, n) {
            if (i || (i = t), u) return i.createElement(e);
            n || (n = o(i));
            var a;
            return a = n.cache[e] ? n.cache[e].cloneNode()  : f.test(e) ? (n.cache[e] = n.createElem(e)).cloneNode()  : n.createElem(e),
            a.canHaveChildren && !p.test(e) ? n.frag.appendChild(a)  : a
        }
        function r(e, i) {
            if (e || (e = t), u) return e.createDocumentFragment();
            i = i || o(e);
            for (var a = i.frag.cloneNode(), r = 0, l = n(), s = l.length; s > r; r++) a.createElement(l[r]);
            return a
        }
        function l(e, t) {
            t.cache || (t.cache = {
            }, t.createElem = e.createElement, t.createFrag = e.createDocumentFragment, t.frag = t.createFrag()),
            e.createElement = function (i) {
                return v.shivMethods ? a(i, e, t)  : t.createElem(i)
            },
            e.createDocumentFragment = Function('h,f', 'return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(' + n().join().replace(/\w+/g, function (e) {
                return t.createElem(e),
                t.frag.createElement(e),
                'c("' + e + '")'
            }) + ');return n}') (v, t.frag)
        }
        function s(e) {
            e || (e = t);
            var n = o(e);
            return !v.shivCSS || c || n.hasCSS || (n.hasCSS = !!i(e, 'article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}')),
            u || l(e, n),
            e
        }
        var c,
        u,
        d = e.html5 || {
        },
        p = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
        f = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,
        g = '_html5shiv',
        h = 0,
        m = {
        };
        !function () {
            try {
                var e = t.createElement('a');
                e.innerHTML = '<xyz></xyz>',
                c = 'hidden' in e,
                u = 1 == e.childNodes.length || function () {
                    t.createElement('a');
                    var e = t.createDocumentFragment();
                    return 'undefined' == typeof e.cloneNode || 'undefined' == typeof e.createDocumentFragment || 'undefined' == typeof e.createElement
                }()
            } catch (i) {
                c = !0,
                u = !0
            }
        }();
        var v = {
            elements: d.elements || 'abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video',
            shivCSS: d.shivCSS !== !1,
            supportsUnknownElements: u,
            shivMethods: d.shivMethods !== !1,
            type: 'default',
            shivDocument: s,
            createElement: a,
            createDocumentFragment: r
        };
        e.html5 = v,
        s(t)
    }(this, t),
    g._version = f,
    g._prefixes = E,
    g._domPrefixes = S,
    g._cssomPrefixes = k,
    g.mq = B,
    g.hasEvent = L,
    g.testProp = function (e) {
        return l([e])
    },
    g.testAllProps = c,
    g.testStyles = _,
    g.prefixed = function (e, t, i) {
        return t ? c(e, t, i)  : c(e, 'pfx')
    },
    m.className = m.className.replace(/(^|\s)no-js(\s|$)/, '$1$2') + (h ? ' js ' + D.join(' ')  : ''),
    g
}(this, this.document),
define('modernizr', function (e) {
    return function () {
        var t;
        return t || e.Modernizr
    }
}(this)),
define('mvc/Observable', [
], function () {
    var e = function () {
        this._listeners = {
        }
    };
    return e.prototype = {
        _listeners: null,
        on: function (e, t, i) {
            for (var n = this._listeners[e] = this._listeners[e] || [], o = n.length - 1; o >= 0; o -= 1) if (t === n[o].listener && i === n[o].scope) return;
            n.push({
                listener: t,
                scope: i
            })
        },
        off: function (e, t, i) {
            var n = this._listeners[e];
            if (n) for (var o = n.length - 1; o >= 0; o -= 1) {
                var a = n[o];
                if (a.listener === t && a.scope === i) return void n.splice(o, 1)
            }
        },
        trigger: function (e, t) {
            var i = this._listeners[e];
            if (i) for (var n = i.length, o = 0; n > o; o += 1) {
                var a = i[o].listener,
                r = i[o].scope;
                a.apply(r, t)
            }
        },
        hasListeners: function (e, t) {
            return this.getListeners(e, t).length > 0
        },
        getListeners: function (e, t) {
            var i = this._listeners[e],
            n = [
            ];
            if (i && i.length > 0) if (t) for (var o, a = i.length - 1; a >= 0; a -= 1) o = i[a],
            o.scope === t && n.push(o);
             else n = i.concat([]);
            return n
        }
    },
    e
}),
define('util/geolocationHelper', [
    'mvc/Observable',
    'jquery'
], function (e, t) {
    var i = '/rest/location',
    n = '/rest/offers/marketByZip',
    o = '00000',
    a = 'Unknown',
    r = {
        marketName: a,
        marketURL: '',
        yldURL: a,
        marketZip: o,
        radius: '',
        zip: [
        ]
    },
    l = t.extend(new e, {
        DATA_READY: 'dataReady',
        ready: !1,
        data: null,
        fetchData: function (e, n, o) {
            this.on(this.DATA_READY, e, n);
            var a = {
                dataType: 'json',
                url: i
            };
            return 'undefined' != typeof o && t.extend(a, o),
            t.ajax(a).done(t.proxy(this.saveData, this)).error(t.proxy(this.saveData, this))
        },
        saveData: function (e) {
            this._api.data = {
                city: 'New York',
                zip: 10010,
                latitude: 40.715244,
                longitude: - 74.068731
            },
            this._api.data = e.data,
            this.ready = !0,
            this.trigger(this.DATA_READY, [
                this._api
            ])
        },
        getApi: function (e) {
            return e ? (this._api.data = e, this._api)  : this.ready ? this._api : null
        },
        _api: {
            getZip: function () {
                var e;
                try {
                    e = this.data.zip.toString(),
                    e && void 0 !== e && null !== e && '0' !== e || (e = o)
                } catch (t) {
                    e = o
                } finally {
                    return e
                }
            },
            getCity: function () {
                try {
                    var e = this.data.city.toString();
                    return e ? e : a
                } catch (t) {
                    return a
                }
            },
            getMarketName: function () {
                try {
                    var e = this.data.marketName.toString();
                    return e ? e : r
                } catch (t) {
                    return r
                }
            },
            getMarketDataForZip: function (e) {
                var i = {
                    dataType: 'json',
                    url: n + '/' + e
                };
                return t.ajax(i)
            },
            getMarketData: function () {
                return this.getMarketDataForZip(this.getZip())
            },
            getRegionCodeForZip: function (e) {
                return this.getMarketDataForZip(e).marketZip
            },
            getRegionCode: function () {
                return this.getRegionCodeForZip(this.getZip())
            },
            isMarketDataValid: function (e) {
                return e.marketZip && e.marketZip !== o
            }
        }
    });
    return l
}),
define('page/home/dealerTileController', [
    'util/geolocationHelper',
    'jquery'
], function (e, t) {
    return {
        initDealerTile: function (i) {
            this.$tile = t(i),
            this.$description = this.$tile.find('.description'),
            e.fetchData(this._onDataReady, this)
        },
        _onDataReady: function (e) {
            var t = e.getMarketName();
            this.$description.text('string' == typeof t && '' !== t ? t + ' area' : 'In your area')
        }
    }
}),
define('util/pointrollUtil', [
    'jquery'
], function (e) {
    var t = {
        pointRollURLBase: '/rest/offers',
        data: null,
        getURL: function (e) {
            return this.pointRollURLBase + '/' + e + '/lowestAPR'
        },
        fetchDataForMarket: function (t) {
            return e.ajax({
                dataType: 'json',
                url: this.getURL(t)
            })
        },
        findLowestAPR: function (e) {
            var t = 1 / 0;
            return 200 === e.status && 'number' == typeof e.data && e.data >= 0 && (t = e.data),
            t
        }
    };
    return t
}),
define('page/home/specialOfferTileController', [
    'util/pointrollUtil',
    'util/geolocationHelper',
    'jquery'
], function (e, t, i) {
    return {
        image: null,
        apr: 0,
        initSpecialOfferTile: function (e) {
            this.$tile = i(e),
            this.$tile.hasClass('mboxTile') || t.fetchData(this._onDataReady, this)
        },
        _onDataReady: function (t) {
            if (!this.$tile.hasClass('mboxTile')) {
                var n = this.$tile.find('.description');
                this.image = this.$tile.find('img.background') [0];
                var o = this,
                a = t.getMarketName();
                'object' == typeof a && (a = a.marketName),
                'string' == typeof a && '' !== a && 'Unknown' !== a && n.text(a + ' area'),
                e.fetchDataForMarket(a).done(i.proxy(this._updateView, this)).fail(function () {
                    var e = i(o.image);
                    e.attr('src', e.data('square-src')),
                    e.load(o._loadImage)
                })
            }
        },
        _updateView: function (t) {
            if (!this.$tile.hasClass('mboxTile')) {
                var n,
                o = e.findLowestAPR(t),
                a = i(this.image);
                if (o >= 0 && 100 > o && !isNaN(o)) {
                    n = i(this.image).data('aprSrc');
                    var r = n + o + '.png';
                    a.data('squareSrc', r),
                    a.attr('src', r),
                    a.attr('alt', o + '% APR')
                } else a.attr('src', a.data('square-src'));
                a.load(this._loadImage)
            }
        },
        _loadImage: function () {
            var e = i(this);
            Modernizr.cssanimations ? e.parent('.tile').addClass('loaded')  : e.parent('.tile').animate({
                opacity: 1
            }, 1000),
            e.parent('.tile').addClass('img-loaded')
        }
    }
}),
define('page/home/mboxTileController', [
    'jquery'
], function (e) {
    return {
        init: function () {
            var e = null;
            if ('undefined' != typeof mboxRecipe) {
                e = mboxRecipe[0].options;
                for (var t = 0, i = mboxRecipe.length; i > t; ++t) for (var n = 0, o = mboxRecipe[t].options.length; o > n; ++n) mboxRecipe[t].options[n].hasOwnProperty('id') && mboxRecipe[t].options[n].hasOwnProperty('image') && mboxRecipe[t].options[n].hasOwnProperty('caption') && mboxRecipe[t].options[n].hasOwnProperty('button') && this.swapTile(mboxRecipe[t].options[n])
            }
        },
        swapTile: function (t) {
            $tile = e('#' + t.id),
            $tile.addClass('mboxTile');
            var i = $tile.find('.background');
            i.data('squareSrc', t.image.srcSquare),
            i.data('rectSrc', t.image.srcRect),
            $tile.hasClass('square') ? i.attr('src', t.image.srcSquare)  : i.attr('src', t.image.srcRect),
            i.attr('title', t.image.title);
            var n = $tile.find('.caption');
            n.find('.title').text(t.caption.title),
            n.find('.description').text(t.caption.description),
            n.find('.btn').text(t.button.text),
            t.caption.darkOnLight && n.addClass('inverted'),
            $tile.find('.hit-area').attr('href', t.button.url),
            $tile.find('.caption-inner>a').attr('href', t.button.url);
            var o = $tile.find('.image-disclaimer');
            0 === o.length && $tile.find('.caption-inner').append('<div class="image-disclaimer "><ul></ul></div>'),
            o = $tile.find('.image-disclaimer ul'),
            console.log(t.disclaimers),
            t.disclaimers && t.disclaimers.length > 0 ? o.append('<li>' + t.disclaimers.join('</li><li>') + '</li>')  : o.empty(),
            i.load(function () {
                Modernizr.cssanimations ? $tile.addClass('loaded')  : $tile.animate({
                    opacity: 1
                }, 1000),
                $tile.addClass('img-loaded')
            })
        }
    }
}),
define('page/home/tile-video', [
    'jquery',
    'PointBreak'
], function (e, t) {
    function i() {
        if (H = document.location.search.indexOf('debug') >= 0, N = e('.tile.video'), N.length <= 0) return H === !0 && console.log('No video tiles found!'),
        null;
        window.enableVideoTile = y,
        window.disableVideoTile = x,
        q = q[Modernizr.prefixed('transition')];
        var t,
        i,
        a,
        r;
        return $ = e('body'),
        N.each(function (n) {
            $tile = e(this),
            t = $tile[0].id,
            t || ($tile.attr('id', 'tile-' + n), t = 'tile-' + n),
            a = $tile.attr('data-video-opts'),
            r = $tile.attr('data-image-opts'),
            i = {
                tile: $tile,
                id: t,
                animEl: $tile.find('.tile-video'),
                isPreloading: !1,
                loadStart: null,
                loadEnd: null,
                isPlaying: !1,
                loop: a && 'video_loop' === a || 'video_loop' === $tile.attr('data-video-opts'),
                playStatus: 'video_play_one_time' === a ? A : D,
                autoPlay: 'true' === $tile.attr('data-auto-play'),
                alwaysOn: $tile.hasClass('always-on'),
                playable: $tile.hasClass('playable'),
                hasBindings: !1
            },
            I && (i.loop = W[n].loop, i.playStatus = W[n].playStatus, i.autoPlay = W[n].autoPlay, $tile.attr('data-image-opts', W[n].imgOpt)),
            O.push(i),
            V[t] = i
        }),
        c(),
        n(),
        e(window).on('scroll', k),
        {
            startPreloading: o,
            enableVideos: c,
            disableVideos: u,
            resetVideo: C,
            stopVideo: f,
            restartVideo: p,
            startVideo: d,
            muteAllToggle: g,
            muteAll: h,
            unmuteAll: m,
            getVideoTile: v
        }
    }
    function n() {
        R = new t,
        R.registerBreakpoint('tablet1024', 1024),
        R.addEventListener(t.BREAKPOINT_CHANGE_EVENT, function (e) {
            H === !0 && console.log('\n\n** pointbreak change :: event: ', e, '\n\n'),
            !R.isSmallerOrEqual('tablet1024') || e.oldBreakpoint !== t.LARGE_BREAKPOINT && 'max' !== e.oldBreakpoint ? !R.isBigger('tablet1024') || e.oldBreakpoint !== t.MED_BREAKPOINT && e.oldBreakpoint !== t.SMALL_BREAKPOINT && 'tablet1024' !== e.oldBreakpoint || (H === !0 && console.log('\n---------------------------\n breakpoint change out of tablet'), b())  : (H === !0 && console.log('\n---------------------------\n breakpoint change into tablet'), T())
        }),
        R.isSmallerOrEqual('tablet1024') && T()
    }
    function o() {
        H === !0 && console.log('\n\n--------------- startPreloading --------------------'),
        U = !0,
        a(O[M])
    }
    function a(e) {
        if (!e || e.loadStart || e.loadEnd || M >= O.length) return void (H === !0 && console.log('preloadNextVideo :: returning because something is missing. this might be because there are no more videos to preload.'));
        if (H === !0 && console.log('isTouch: ', B, ' :: isTouchPC: ', L, ' :: tile.playable: ', e.playable), M++, e.checkNextWhenDoneLoading = !0, B && !L && e.playable === !1 || e.playable === !0) {
            if (H === !0 && console.log('preloadNextVideo :: video tile ', e.id, ' is not playable on touch devices. skipping it and checking next video to preload.'), e.playable === !1) {
                var t = e.tile.find('.loading.animation');
                LEXUS.loadingAnimation.unregister(t[0].id),
                t.remove()
            }
            return void a(O[M])
        }
        H === !0 && console.log('preloadNextVideo :: tile.id', e.id),
        r(e)
    }
    function r(t) {
        var i,
        n = t.animEl,
        o = '',
        a = n.attr('data-webm'),
        r = n.attr('data-mpfour');
        i = n.detach(),
        o += '<source src="' + a + '" type="video/webm"></source>',
        o += '<source src="' + r + '" type="video/mp4"></source>',
        i.append(o),
        t.tile.prepend(i),
        t.tile = e('#' + t.id),
        n = t.animEl = t.tile.find('.tile-video'),
        setTimeout(function () {
            n[0].load(),
            t.loadStart = Date.now(),
            s(t)
        }, 0)
    }
    function l(e) {
        for (var t, i, n = e.buffered, o = n.length, a = (e.duration, 0); o--; ) t = n.start(o),
        i = n.end(o),
        a += i - t;
        return a
    }
    function s(e) {
        var t,
        i,
        n,
        o,
        r,
        c;
        return t = e.animEl,
        n = t[0].duration,
        i = t[0].buffered.length,
        H === !0 && console.log('\n--------------- [' + e.id + '] -------------------'),
        1 > i || n > 0 == !1 ? (setTimeout(function () {
            s(e)
        }, 300), H === !0 && console.log('bail'), void (H === !0 && console.log('----------------------------------\n')))  : (o = l(t[0]), r = o / n, H === !0 && console.log('perc: ', r), r === e.percBuffered && (e.percBufferedUnchanged = e.percBufferedUnchanged > 0 ? e.percBufferedUnchanged + 1 : 1), e.percBuffered = r, H === !0 && console.log('tile.percBufferedUnchanged: ', e.percBufferedUnchanged), H === !0 && console.log('----------------------------------\n'), void (r >= 0.7 || e.percBufferedUnchanged > 10 ? (e.loadEnd = Date.now(), e.tile.addClass('video-ready'), e.checkNextWhenDoneLoading === !0 && (delete e.checkNextWhenDoneLoading, a(O[M])), e.tile.removeClass('video-loading'), e.playable === !1 && (c = e.tile.find('.loading.animation'), LEXUS.loadingAnimation.unregister(c[0].id), c.remove()), H === !0 && (console.log('\n---------- checking autoplay for ' + e.id + ' ------------'), console.log('tile.autoPlay: ', e.autoPlay), console.log('tile.tile.hasClass("hover"): ', e.tile.hasClass('hover')), console.log('isTileVisible(tile): ', w(e)), console.log('force: ', L || !L && !B), console.log('\n--------------------------------------')), (e.autoPlay === !0 || e.tile.hasClass('hover')) && (w(e) ? setTimeout(function () {
            var t = L || !L && !B;
            H === !0 && console.log('starting autoplay :: force: ', t),
            d(e, t)
        }, 100)  : j.push(e)))  : setTimeout(function () {
            s(e)
        }, 300)))
    }
    function c() {
        $.on('mouseenter', '.tile.video:not(.always-on)', function () {
            z !== !1 && (V[this.id].playStatus && V[this.id].playStatus !== A || (V[this.id].tile.addClass('hover'), V[this.id].loadEnd && d(V[this.id])))
        }).on('mouseleave', '.tile.video:not(.always-on)', function () {
            V[this.id].tile.removeClass('hover'),
            V[this.id].isPlaying && C(V[this.id])
        })
    }
    function u() {
        $.off('mouseenter', '.tile.video').off('mouseleave', '.tile.video')
    }
    function d(e, t) {
        if (H === !0 && console.log('\n---------- startVideo [start] -------------'), t = t !== !0 && t !== !1 ? L || !L && !B : t, z !== !1 || t === !0) {
            var i;
            if (i = 'string' == typeof e ? V[e] : e) {
                if (i.tile.addClass('hover'), S(i.tile), i.tile.hasClass('video-ready') === !1 && i.playable === !0) return i.tile.addClass('video-loading'),
                void r(i);
                if (H === !0 && console.log('startVideo :: tile id: ', i.id, 'isPlaying: ', i.isPlaying), E(i), (B === !1 || L === !0) && i.playable && i.isPlaying !== !1) return void (H === !0 && console.log('not starting video since this is a playble video that is already playing.'));
                i.isPlaying = !0;
                var n = i.animEl;
                n[0].pause(),
                isNaN(n[0].duration) || (n[0].currentTime = 0),
                n[0].play(),
                H === !0 && (console.log('startVideo :: play called'), console.log('---------- startVideo [end] -------------\n')),
                i.hasBindings === !1 && (i.hasBindings = !0, n.one('ended', function () {
                    i.loop !== !0 || i.autoPlay !== !1 && i.alwaysOn !== !0 ? (f(i), P(i.tile))  : ('boolean' == typeof n[0].loop && n[0].loop === !1 && (n[0].loop = !0), H === !0 && console.log('\n*** looping video: ', i.id, '\n'), p(i))
                }))
            }
        }
    }
    function p(e) {
        H === !0 && console.log('restartVideo: ', e.id, '\n');
        var t = e.animEl;
        t[0].currentTime = 0,
        t[0].play(),
        e.tile.addClass('hover')
    }
    function f(e) {
        var t;
        if (t = 'string' == typeof e ? V[e] : e, !t) return void (H === !0 && console.log('stopVideo :: tile undefined, not stopping video.'));
        if (t.autoPlay = !1, E(t), 'false' === t.tile.attr('data-auto-play') && t.loop === !1 && t.isPlaying !== !0) return void (H === !0 && console.log('stopVideo :: autoplay false, loop false, isPlaying false, not stopping video.'));
        t.playStatus === A && (t.playStatus = _, setTimeout(function () {
            t.tile.addClass('played-once')
        }, 1100), t.tile.find('.background').one(q, function () {
            H === !0 && console.log('stopVideo :: calling disableVideoTile from css animation end event....'),
            x(t)
        })),
        t.isPlaying = !1,
        t.tile.removeClass('hover');
        var i = t.animEl;
        i[0].pause(),
        H === !0 && console.log('stopVideo :: video paused.')
    }
    function g() {
        F = !F;
        for (var e = 0; e < O.length; e++) O[e].animEl[0].muted = F
    }
    function h() {
        for (var e = 0; e < O.length; e++) O[e].animEl[0].muted = F = !0
    }
    function m() {
        for (var e = 0; e < O.length; e++) O[e].animEl[0].muted = F = !1
    }
    function v(e) {
        return V[e]
    }
    function y(e) {
        e = e || O[0],
        e.playStatus = D,
        e.tile.removeClass('played-once'),
        e.tile.removeClass('img'),
        H === !0 && console.log('enableVideoTile ', e.id),
        e.alwaysOn === !0 && e.loop === !0 && 'true' === e.tile.attr('data-auto-play') && e.playable === !1 && e.tile.hasClass('video-ready') && p(e)
    }
    function x(e, t) {
        H === !0 && console.log('   disableVideoTile :: ', e.id, ' :: force: ', t, ' :: playable: ', e.playable),
        (t || e.playable === !1) && (H === !0 && console.log('   disabling ', e.id), e = e || O[0], e.playStatus = _, e.tile.addClass('played-once'), e.tile.addClass('img'))
    }
    function b() {
        z = !0;
        for (var e = 0; e < O.length; e++) y(O[e]);
        U === !1 && o()
    }
    function T() {
        H === !0 && console.log('\n---------- disableVideoTiles [start] -------------'),
        z = !1;
        for (var e = 0; e < O.length; e++) {
            if (L === !0 || B === !1) return void (H === !0 && (console.log('not disabling ', O[e].id, ' because this is not a mobile device.'), console.log('   ---')));
            f(O[e]),
            x(O[e]),
            H === !0 && console.log('   ---')
        }
        H === !0 && console.log('---------- disableVideoTiles [end] -------------\n')
    }
    function C(e) {
        if (e.autoPlay = !1, E(e), e.isPlaying !== !0) return void (H === !0 && console.log('resetVideo :: isPlaying false, not reseting'));
        H === !0 && console.log('resetVideo :: resetting video'),
        e.tile.removeClass('hover');
        var t = e.animEl;
        e.resetTimeout = setTimeout(function () {
            e.isPlaying = !1,
            e.resetTimeout = null,
            t[0].pause(),
            t[0].currentTime = 0
        }, 1100)
    }
    function E(e) {
        e.resetTimeout && (clearTimeout(e.resetTimeout), e.resetTimeout = null)
    }
    function w(t) {
        {
            var i = t.tile,
            n = e(window),
            o = n.scrollTop(),
            a = o + n.height(),
            r = i.offset().top;
            r + i.height()
        }
        return a > r && r > o
    }
    function k() {
        var e;
        for (e = 0; e < j.length; e++) w(j[e]) && (d(j[e]), j.splice(e, 1), e--)
    }
    function S(e) {
        if (!Modernizr.cssanimations) {
            var t = e.find('.caption'),
            i = t.find('h2'),
            n = t.find('p'),
            o = t.find('button');
            i.animate({
                bottom: '18px',
                duration: 200,
                opacity: 1
            }, {
                queue: !1
            }),
            n.css({
                visibility: 'visible'
            }),
            n.animate({
                bottom: '20px',
                duration: 300,
                opacity: 1
            }, {
                queue: !1
            }),
            n.css('height', 'auto'),
            o.css({
                visibility: 'visible'
            }),
            o.animate({
                opacity: 1,
                top: '-15px',
                height: '37px',
                duration: 400
            }, {
                queue: !1
            })
        }
    }
    function P(e) {
        if (!Modernizr.cssanimations) {
            var t = e.find('.caption'),
            i = t.find('h2'),
            n = t.find('p'),
            o = t.find('button');
            i.animate({
                bottom: '-25px',
                duration: 300
            }, {
                queue: !1
            }),
            n.css({
                visibility: 'hidden'
            }),
            n.animate({
                bottom: '0px',
                duration: 200,
                opacity: '0',
                height: '22px'
            }, {
                queue: !1
            }),
            o.css({
                visibility: 'hidden'
            }),
            o.animate({
                opacity: '0',
                top: '-25px',
                height: 0,
                duration: 100
            }, {
                queue: !1
            })
        }
    }
    var R,
    $,
    N,
    D = 0,
    A = 1,
    _ = 2,
    B = e('html').hasClass('touch') || e('html').hasClass('mstouch'),
    L = B && e('html').hasClass('no-mobiledevice'),
    M = 0,
    V = {
    },
    O = [
    ],
    q = {
        WebkitTransition: 'webkitTransitionEnd',
        MozTransition: 'transitionend',
        transition: 'transitionend'
    },
    j = [
    ],
    U = !1,
    I = !1,
    z = !0,
    F = !1,
    H = !1,
    W = [
        {
            loop: !1,
            playStatus: A,
            autoPlay: !0,
            imgOpt: 'center'
        },
        {
            loop: !1,
            playStatus: !1,
            autoPlay: !1,
            imgOpt: 'center'
        },
        {
            loop: !0,
            playStatus: !1,
            autoPlay: !1,
            imgOpt: 'center'
        },
        {
            loop: !1,
            playStatus: !1,
            autoPlay: !1,
            imgOpt: 'top'
        },
        {
            loop: !1,
            playStatus: !1,
            autoPlay: !1,
            imgOpt: 'center'
        },
        {
            loop: !1,
            playStatus: !1,
            autoPlay: !1,
            imgOpt: 'center'
        },
        {
            loop: !1,
            playStatus: !1,
            autoPlay: !1,
            imgOpt: 'center'
        },
        {
            loop: !1,
            playStatus: !1,
            autoPlay: !1,
            imgOpt: 'center'
        },
        {
            loop: !1,
            playStatus: !1,
            autoPlay: !1,
            imgOpt: 'right'
        },
        {
            loop: !1,
            playStatus: !1,
            autoPlay: !1,
            imgOpt: 'center'
        }
    ];
    return i()
}),
require(['modernizr',
'jquery',
'PointBreak',
'page/home/dealerTileController',
'page/home/specialOfferTileController',
'page/home/mboxTileController',
'page/home/tile-video',
'analytics',
'transit'], function (e, t, i, n, o, a, r, l) {
    function s() {
        console.log('tileVideo: ', r),
        T = new i,
        y = t('.hero').length > 0,
        x = t('.grid-sema').length > 0,
        b = t('html').hasClass('touch') || t('html').hasClass('mstouch');
        {
            var s = t('.tile'),
            d = (s.find('img'), t('.recall-warning')),
            p = t('.tile.dealer'),
            f = t('.tile.offer');
            t('.tile.owner')
        }
        if (w = s.length, k = w > 7, s.on('click touch', g), d.on('click touch', 'a', h), p.length >= 1 && n.initDealerTile(p), f.length >= 1 && o.initSpecialOfferTile(f), a.init(), e.cssanimations || c(), u(), t('html').hasClass('lte-ie10') ? (t('.browser-not-supported-content a').on('click touchstart', function () {
            var e = t(this),
            i = 'Install Browser',
            n = 'Upgrade Google Chrome';
            e.hasClass('microsoft') && (i = 'Upgrade Browser', n = 'Upgrade Internet Explorer'),
            e.hasClass('firefox') && (i = 'Install Browser', n = 'Upgrade Firefox'),
            l.helper.fireTag('2604.2', {
                '<section>': 'IE Version Unsupported',
                '<module>': i,
                '<action>': n
            })
        }), l.helper.fireTag('2604.1', {
            '<section>': 'IE Version Unsupported'
        }))  : l.helper.fireHomePageLoad(S), LEXUS.recentbuildType) {
            var m = LEXUS.recentbuildType.split('-') [1];
            l.helper.fireRecentBuildPresent(S, E[m], C[m])
        }
    }
    function c() {
        function e(e) {
            var i = t(e.currentTarget),
            n = i.find('.caption'),
            o = n.find('h2'),
            a = n.find('p'),
            r = n.find('button');
            o.animate({
                bottom: '18px',
                duration: 200,
                opacity: 1
            }, {
                queue: !1
            }),
            a.css({
                visibility: 'visible'
            }),
            a.animate({
                bottom: '20px',
                duration: 300,
                opacity: 1
            }, {
                queue: !1
            }),
            a.css('height', 'auto'),
            r.css({
                visibility: 'visible'
            }),
            r.animate({
                opacity: 1,
                top: '-15px',
                height: '37px',
                duration: 400
            }, {
                queue: !1
            })
        }
        function i(e) {
            var i = t(e.currentTarget),
            n = i.find('.caption'),
            o = n.find('h2'),
            a = n.find('p'),
            r = n.find('button');
            o.animate({
                bottom: '-25px',
                duration: 300
            }, {
                queue: !1
            }),
            a.css({
                visibility: 'hidden'
            }),
            a.animate({
                bottom: '0px',
                duration: 200,
                opacity: '0',
                height: '22px'
            }, {
                queue: !1
            }),
            r.css({
                visibility: 'hidden'
            }),
            r.animate({
                opacity: '0',
                top: '-25px',
                height: 0,
                duration: 100
            }, {
                queue: !1
            })
        }
        function n(e) {
            var i = t(e.currentTarget),
            n = i.find('button');
            n.css({
                visibility: 'visible'
            }),
            n.animate({
                opacity: 1,
                top: '-15px',
                height: '37px',
                duration: 400
            }, {
                queue: !1
            })
        }
        function o(e) {
            var i = t(e.currentTarget),
            n = i.find('button');
            n.css({
                visibility: 'hidden'
            }),
            n.animate({
                opacity: '0',
                top: '-25px',
                height: 0,
                duration: 100
            }, {
                queue: !1
            })
        }
        if (t.support.transition || (t.fn.transition = t.fn.animate), !b) {
            var a = t('.tile'),
            r = a.find('.caption'),
            l = r.find('p'),
            s = r.find('button'),
            c = a.find('.hit-grid a');
            a.on('mouseenter', e).on('mouseleave', i),
            c.on('mouseenter', n).on('mouseleave', o),
            l.css({
                visibility: 'hidden'
            }),
            s.css({
                visibility: 'hidden'
            }),
            r.each(function () {
                if (t(this).hasClass(N)) {
                    var e = t(this).find('button').outerHeight();
                    t(this).find('.btn-outer').height(e)
                }
            })
        }
    }
    function u() {
        function e() {
            B = D,
            f([R,
            P,
            P,
            P,
            P,
            P,
            P,
            P,
            P,
            P]),
            C = [
                '1x1',
                '1x2',
                '1x3',
                '1x4',
                '1x5',
                '1x6',
                '1x7',
                '1x8',
                '1x9',
                '1x10'
            ],
            E = [
                '1x1',
                '1x1',
                '1x1',
                '1x1',
                '1x1',
                '1x1',
                '1x1',
                '1x1',
                '1x1',
                '1x1'
            ],
            S = k ? '1x10' : '1x7'
        }
        function t() {
            B = A,
            y ? (f([$,
            $,
            P,
            $,
            P,
            $,
            P,
            P,
            P,
            P]), C = [
                '1x1',
                '1x3',
                '3x3',
                '1x4',
                '2x4',
                '1x5',
                '3x5',
                '1x6',
                '2x6',
                '3x6'
            ], E = [
                '3x2',
                '2x1',
                '1x1',
                '1x1',
                '2x1',
                '2x1',
                '1x1',
                '1x1',
                '1x1',
                '1x1'
            ], S = k ? '3x6' : '3x5')  : (f(x ? [
                R,
                P,
                P,
                P,
                P,
                $,
                P,
                P,
                P,
                P
            ] : [
                R,
                P,
                P,
                $,
                P,
                $,
                P,
                P,
                P,
                P
            ]), C = [
                '1x1',
                '3x1',
                '3x2',
                '2x3',
                '1x3',
                '1x4',
                '3x4',
                '1x5',
                '2x5',
                '3x5'
            ], E = [
                '2x2',
                '1x1',
                '1x1',
                '2x1',
                '1x1',
                '2x1',
                '1x1',
                '1x1',
                '1x1',
                '1x1'
            ], S = k ? '3x5' : '3x4')
        }
        function n() {
            B = _,
            y ? (f([$,
            P,
            P,
            $,
            P,
            $,
            P,
            $,
            P,
            P]), C = [
                '1x1',
                '1x3',
                '2x3',
                '3x3',
                '1x4',
                '2x4',
                '4x4',
                '1x5',
                '3x5',
                '4x5'
            ], E = [
                '4x2',
                '1x1',
                '1x1',
                '2x1',
                '1x1',
                '2x1',
                '1x1',
                '2x1',
                '1x1',
                '1x1'
            ], S = k ? '4x5' : '4x4')  : (f(x ? [
                R,
                P,
                P,
                P,
                P,
                $,
                P,
                $,
                P,
                P
            ] : [
                R,
                P,
                P,
                $,
                P,
                $,
                P,
                $,
                P,
                P
            ]), C = [
                '1x1',
                '3x1',
                '4x1',
                '3x2',
                '1x3',
                '2x3',
                '4x3',
                '1x4',
                '3x4',
                '4x4'
            ], E = [
                '2x2',
                '1x1',
                '1x1',
                '2x1',
                '1x1',
                '2x1',
                '1x1',
                '2x1',
                '1x1',
                '1x1'
            ], S = k ? '4x4' : '4x3')
        }
        var o = T.getCurrentBreakpoint();
        T.addSmallListener(e),
        T.addMediumListener(t),
        T.addLargeListener(n),
        T.addMaxListener(n),
        o === i.SMALL_BREAKPOINT && e(),
        o === i.MED_BREAKPOINT && t(),
        (o === i.LARGE_BREAKPOINT || o === i.MAX_BREAKPOINT) && n()
    }
    function d(e) {
        var i = t(e).attr('id'),
        n = parseInt(i.substr('tile-'.length), 10);
        if (isNaN(n)) throw new Error('This tile isn\'t a valid tile.');
        return n
    }
    function p(e) {
        return t('#tile-' + e)
    }
    function f(e) {
        v(p(0), e[0], function () {
            for (var t = 1, i = e.length; i > t; t += 1) v(p(t), e[t])
        })
    }
    function g(e) {
        var i = t(e.currentTarget),
        n = i.find('.title').text(),
        o = d(i);
        l.helper.fireHomepageTileClick(i, n, S, E[o], C[o])
    }
    function h(e) {
        var i = t(e.delegateTarget),
        n = i.find('.warning-header').text() + ' - ' + i.find('.warning-description').text(),
        o = i.data('container');
        l.helper.fireHomepageAlertClick(n, o)
    }
    function m() {
        L++,
        r && L === w && B !== D && (!b || b && window.innerWidth >= 1024) && r.startPreloading()
    }
    function v(i, n, o) {
        i = t(i);
        var a = i.find('.background'),
        r = i.find('.caption');
        i.removeClass(P).removeClass($).removeClass(R),
        a.length && (a.load(function () {
            var i = t(this).closest('.tile');
            m(),
            e.cssanimations ? i.addClass('loaded')  : i.animate({
                opacity: 1
            }, 1000),
            a.parent('.tile').addClass('img-loaded'),
            'function' == typeof o && o()
        }).error(function () {
            m()
        }), r.attr('style', ''), i.addClass(n), n === $ ? a.attr('src', a.data('rectSrc'))  : a.attr('src', a.data('squareSrc')))
    }
    var y,
    x,
    b,
    T,
    C = [
    ],
    E = [
    ],
    w = 0,
    k = !1,
    S = '',
    P = 'square',
    R = 'herosquare',
    $ = 'rect',
    N = 'bottom',
    D = 'small',
    A = 'medium',
    _ = 'large',
    B = null,
    L = 0;
    s()
}),
define('page/home/home-main', function () {
});
