$( document ).ready (function (n) {
    var e,
    o,
    c,
    i,
    t,
    a,
    d = {
    };
    return e = function () {
        t(),
        o()
    },
    o = function () {
        n('#content').on('click touch', '.accordion-heading', function () {
            var e = n(this).attr('data-index'),
            o = d[e];
            o.isOpen === !1 ? c(e)  : i(e)
        })
    },
    c = function (n) {
        d[n].isOpen === !1 && (d[n].isOpen = !0, d[n].$accordionItem.addClass('open'), setTimeout(function () {
            d[n].collabsible.slideDown(400)
        }, 300))
    },
    i = function (n) {
        d[n].isOpen === !0 && (d[n].isOpen = !1, d[n].$accordionItem.removeClass('open'), setTimeout(function () {
            d[n].collabsible.slideUp(400)
        }, 300))
    },
    t = function () {
        a();
        var e,
        o,
        c;
        n('.m2-accordion').each(function (i) {
            e = n(this),
            e.children('.m2-accordion-item').each(function (t) {
                c = 'accordion' + i + '_item' + t,
                o = n(this),
                o.children('.accordion-heading').attr('data-index', c),
                d[c] = {
                    isOpen: !1,
                    accordion: e,
                    collabsible: o.children('.m2-accordion-collapsible'),
                    $accordionItem: o
                }
            })
        })
    },
    a = function () {
        var n,
        e;
        for (n in d) d.hasOwnProperty(n) && (e = d[n], delete e.accordion, delete e.collabsible, delete e.$accordionItem, delete d[n]);
        d = {
        }
    },
    n(document).ready(function () {
        e()
    }),
    {
        openAccordionItem: c,
        closeAccordionItem: i,
        cleanRefs: a,
        update: t
    }
});
