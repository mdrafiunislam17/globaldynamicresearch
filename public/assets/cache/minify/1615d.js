function _toConsumableArray(t) {
    return _arrayWithoutHoles(t) || _iterableToArray(t) || _nonIterableSpread()
}

function _nonIterableSpread() {
    throw new TypeError("Invalid attempt to spread non-iterable instance")
}

function _iterableToArray(t) {
    if (Symbol.iterator in Object(t) || "[object Arguments]" === Object.prototype.toString.call(t)) return Array.from(t)
}

function _arrayWithoutHoles(t) {
    if (Array.isArray(t)) {
        for (var e = 0, n = new Array(t.length); e < t.length; e++) n[e] = t[e];
        return n
    }
}

function _extends() {
    return (_extends = Object.assign || function(t) {
        for (var e = 1; e < arguments.length; e++) {
            var n = arguments[e];
            for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (t[r] = n[r])
        }
        return t
    }).apply(this, arguments)
}

function _typeof(t) {
    return (_typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
        return typeof t
    } : function(t) {
        return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
    })(t)
}! function(t, e) {
    "object" === ("undefined" == typeof exports ? "undefined" : _typeof(exports)) && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.LazyLoad = e()
}(this, function() {
    "use strict";
    var t = "undefined" != typeof window,
        e = t && !("onscroll" in window) || "undefined" != typeof navigator && /(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent),
        n = t && "IntersectionObserver" in window,
        r = t && "classList" in document.createElement("p"),
        o = {
            elements_selector: "img",
            container: e || t ? document : null,
            threshold: 300,
            thresholds: null,
            data_src: "src",
            data_srcset: "srcset",
            data_sizes: "sizes",
            data_bg: "bg",
            class_loading: "loading",
            class_loaded: "loaded",
            class_error: "error",
            load_delay: 0,
            auto_unobserve: !0,
            callback_enter: null,
            callback_exit: null,
            callback_reveal: null,
            callback_loaded: null,
            callback_error: null,
            callback_finish: null,
            use_native: !1
        },
        a = function(t, e) {
            var n, r = new t(e);
            try {
                n = new CustomEvent("LazyLoad::Initialized", {
                    detail: {
                        instance: r
                    }
                })
            } catch (t) {
                (n = document.createEvent("CustomEvent")).initCustomEvent("LazyLoad::Initialized", !1, !1, {
                    instance: r
                })
            }
            window.dispatchEvent(n)
        };
    var i = function(t, e) {
            return t.getAttribute("data-" + e)
        },
        s = function(t, e, n) {
            var r = "data-" + e;
            null !== n ? t.setAttribute(r, n) : t.removeAttribute(r)
        },
        c = function(t) {
            return "true" === i(t, "was-processed")
        },
        l = function(t, e) {
            return s(t, "ll-timeout", e)
        },
        u = function(t) {
            return i(t, "ll-timeout")
        },
        f = function(t, e) {
            t && t(e)
        },
        d = function(t, e) {
            t._loadingCount += e, 0 === t._elements.length && 0 === t._loadingCount && f(t._settings.callback_finish)
        },
        _ = function(t) {
            for (var e, n = [], r = 0; e = t.children[r]; r += 1) "SOURCE" === e.tagName && n.push(e);
            return n
        },
        v = function(t, e, n) {
            n && t.setAttribute(e, n)
        },
        b = function(t, e) {
            v(t, "sizes", i(t, e.data_sizes)), v(t, "srcset", i(t, e.data_srcset)), v(t, "src", i(t, e.data_src))
        },
        m = {
            IMG: function(t, e) {
                var n = t.parentNode;
                n && "PICTURE" === n.tagName && _(n).forEach(function(t) {
                    b(t, e)
                });
                b(t, e)
            },
            IFRAME: function(t, e) {
                v(t, "src", i(t, e.data_src))
            },
            VIDEO: function(t, e) {
                _(t).forEach(function(t) {
                    v(t, "src", i(t, e.data_src))
                }), v(t, "src", i(t, e.data_src)), t.load()
            }
        },
        g = function(t, e) {
            var n, r, o = e._settings,
                a = t.tagName,
                s = m[a];
            if (s) return s(t, o), d(e, 1), void(e._elements = (n = e._elements, r = t, n.filter(function(t) {
                return t !== r
            })));
            ! function(t, e) {
                var n = i(t, e.data_src),
                    r = i(t, e.data_bg);
                n && (t.style.backgroundImage = 'url("'.concat(n, '")')), r && (t.style.backgroundImage = r)
            }(t, o)
        },
        y = function(t, e) {
            r ? t.classList.add(e) : t.className += (t.className ? " " : "") + e
        },
        h = function(t, e) {
            r ? t.classList.remove(e) : t.className = t.className.replace(new RegExp("(^|\\s+)" + e + "(\\s+|$)"), " ").replace(/^\s+/, "").replace(/\s+$/, "")
        },
        p = function(t, e, n) {
            t.addEventListener(e, n)
        },
        E = function(t, e, n) {
            t.removeEventListener(e, n)
        },
        w = function(t, e, n) {
            E(t, "load", e), E(t, "loadeddata", e), E(t, "error", n)
        },
        A = function(t, e, n) {
            var r = n._settings,
                o = e ? r.class_loaded : r.class_error,
                a = e ? r.callback_loaded : r.callback_error,
                i = t.target;
            h(i, r.class_loading), y(i, o), f(a, i), d(n, -1)
        },
        I = function(t, e) {
            var n = function n(o) {
                    A(o, !0, e), w(t, n, r)
                },
                r = function r(o) {
                    A(o, !1, e), w(t, n, r)
                };
            ! function(t, e, n) {
                p(t, "load", e), p(t, "loadeddata", e), p(t, "error", n)
            }(t, n, r)
        },
        k = ["IMG", "IFRAME", "VIDEO"],
        L = function(t, e) {
            var n = e._observer;
            S(t, e), n && e._settings.auto_unobserve && n.unobserve(t)
        },
        O = function(t) {
            var e = u(t);
            e && (clearTimeout(e), l(t, null))
        },
        x = function(t, e) {
            var n = e._settings.load_delay,
                r = u(t);
            r || (r = setTimeout(function() {
                L(t, e), O(t)
            }, n), l(t, r))
        },
        S = function(t, e, n) {
            var r = e._settings;
            !n && c(t) || (k.indexOf(t.tagName) > -1 && (I(t, e), y(t, r.class_loading)), g(t, e), function(t) {
                s(t, "was-processed", "true")
            }(t), f(r.callback_reveal, t), f(r.callback_set, t))
        },
        z = function(t) {
            return !!n && (t._observer = new IntersectionObserver(function(e) {
                e.forEach(function(e) {
                    return function(t) {
                        return t.isIntersecting || t.intersectionRatio > 0
                    }(e) ? function(t, e) {
                        var n = e._settings;
                        f(n.callback_enter, t), n.load_delay ? x(t, e) : L(t, e)
                    }(e.target, t) : function(t, e) {
                        var n = e._settings;
                        f(n.callback_exit, t), n.load_delay && O(t)
                    }(e.target, t)
                })
            }, {
                root: (e = t._settings).container === document ? null : e.container,
                rootMargin: e.thresholds || e.threshold + "px"
            }), !0);
            var e
        },
        C = ["IMG", "IFRAME"],
        N = function(t, e) {
            return function(t) {
                return t.filter(function(t) {
                    return !c(t)
                })
            }((n = t || function(t) {
                return t.container.querySelectorAll(t.elements_selector)
            }(e), Array.prototype.slice.call(n)));
            var n
        },
        M = function(t) {
            var e = t._settings;
            _toConsumableArray(e.container.querySelectorAll("." + e.class_error)).forEach(function(t) {
                h(t, e.class_error),
                    function(t) {
                        s(t, "was-processed", null)
                    }(t)
            }), t.update()
        },
        R = function(e, n) {
            var r;
            this._settings = function(t) {
                return _extends({}, o, t)
            }(e), this._loadingCount = 0, z(this), this.update(n), r = this, t && window.addEventListener("online", function(t) {
                M(r)
            })
        };
    return R.prototype = {
        update: function(t) {
            var n, r = this,
                o = this._settings;
            (this._elements = N(t, o), !e && this._observer) ? (function(t) {
                return t.use_native && "loading" in HTMLImageElement.prototype
            }(o) && ((n = this)._elements.forEach(function(t) {
                -1 !== C.indexOf(t.tagName) && (t.setAttribute("loading", "lazy"), S(t, n))
            }), this._elements = N(t, o)), this._elements.forEach(function(t) {
                r._observer.observe(t)
            })) : this.loadAll()
        },
        destroy: function() {
            var t = this;
            this._observer && (this._elements.forEach(function(e) {
                t._observer.unobserve(e)
            }), this._observer = null), this._elements = null, this._settings = null
        },
        load: function(t, e) {
            S(t, this, e)
        },
        loadAll: function() {
            var t = this;
            this._elements.forEach(function(e) {
                L(e, t)
            })
        }
    }, t && function(t, e) {
        if (e)
            if (e.length)
                for (var n, r = 0; n = e[r]; r += 1) a(t, n);
            else a(t, e)
    }(R, window.lazyLoadOptions), R
});