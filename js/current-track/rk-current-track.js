!(function (t) {
    var e = {};
    function n(r) {
        if (e[r]) return e[r].exports;
        var o = (e[r] = { i: r, l: !1, exports: {} });
        return t[r].call(o.exports, o, o.exports, n), (o.l = !0), o.exports;
    }
    (n.m = t),
        (n.c = e),
        (n.d = function (t, e, r) {
            n.o(t, e) || Object.defineProperty(t, e, { enumerable: !0, get: r });
        }),
        (n.r = function (t) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(t, "__esModule", { value: !0 });
        }),
        (n.t = function (t, e) {
            if ((1 & e && (t = n(t)), 8 & e)) return t;
            if (4 & e && "object" == typeof t && t && t.__esModule) return t;
            var r = Object.create(null);
            if ((n.r(r), Object.defineProperty(r, "default", { enumerable: !0, value: t }), 2 & e && "string" != typeof t))
                for (var o in t)
                    n.d(
                        r,
                        o,
                        function (e) {
                            return t[e];
                        }.bind(null, o)
                    );
            return r;
        }),
        (n.n = function (t) {
            var e =
                t && t.__esModule
                    ? function () {
                          return t.default;
                      }
                    : function () {
                          return t;
                      };
            return n.d(e, "a", e), e;
        }),
        (n.o = function (t, e) {
            return Object.prototype.hasOwnProperty.call(t, e);
        }),
        (n.p = ""),
        n((n.s = 16));
})([
    function (t, e, n) {
        var r = n(26);
        "string" == typeof r && (r = [[t.i, r, ""]]);
        var o = { hmr: !0, transform: void 0, insertInto: void 0 };
        n(2)(r, o);
        r.locals && (t.exports = r.locals);
    },
    function (t, e) {
        t.exports = function (t) {
            var e = [];
            return (
                (e.toString = function () {
                    return this.map(function (e) {
                        var n = (function (t, e) {
                            var n = t[1] || "",
                                r = t[3];
                            if (!r) return n;
                            if (e && "function" == typeof btoa) {
                                var o = ((s = r), "/*# sourceMappingURL=data:application/json;charset=utf-8;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(s)))) + " */"),
                                    i = r.sources.map(function (t) {
                                        return "/*# sourceURL=" + r.sourceRoot + t + " */";
                                    });
                                return [n].concat(i).concat([o]).join("\n");
                            }
                            var s;
                            return [n].join("\n");
                        })(e, t);
                        return e[2] ? "@media " + e[2] + "{" + n + "}" : n;
                    }).join("");
                }),
                (e.i = function (t, n) {
                    "string" == typeof t && (t = [[null, t, ""]]);
                    for (var r = {}, o = 0; o < this.length; o++) {
                        var i = this[o][0];
                        "number" == typeof i && (r[i] = !0);
                    }
                    for (o = 0; o < t.length; o++) {
                        var s = t[o];
                        ("number" == typeof s[0] && r[s[0]]) || (n && !s[2] ? (s[2] = n) : n && (s[2] = "(" + s[2] + ") and (" + n + ")"), e.push(s));
                    }
                }),
                e
            );
        };
    },
    function (t, e, n) {
        var r,
            o,
            i = {},
            s =
                ((r = function () {
                    return window && document && document.all && !window.atob;
                }),
                function () {
                    return void 0 === o && (o = r.apply(this, arguments)), o;
                }),
            a = (function (t) {
                var e = {};
                return function (t, n) {
                    if ("function" == typeof t) return t();
                    if (void 0 === e[t]) {
                        var r = function (t, e) {
                            return e ? e.querySelector(t) : document.querySelector(t);
                        }.call(this, t, n);
                        if (window.HTMLIFrameElement && r instanceof window.HTMLIFrameElement)
                            try {
                                r = r.contentDocument.head;
                            } catch (t) {
                                r = null;
                            }
                        e[t] = r;
                    }
                    return e[t];
                };
            })(),
            u = null,
            c = 0,
            l = [],
            f = n(27);
        function p(t, e) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n],
                    o = i[r.id];
                if (o) {
                    o.refs++;
                    for (var s = 0; s < o.parts.length; s++) o.parts[s](r.parts[s]);
                    for (; s < r.parts.length; s++) o.parts.push(v(r.parts[s], e));
                } else {
                    var a = [];
                    for (s = 0; s < r.parts.length; s++) a.push(v(r.parts[s], e));
                    i[r.id] = { id: r.id, refs: 1, parts: a };
                }
            }
        }
        function h(t, e) {
            for (var n = [], r = {}, o = 0; o < t.length; o++) {
                var i = t[o],
                    s = e.base ? i[0] + e.base : i[0],
                    a = { css: i[1], media: i[2], sourceMap: i[3] };
                r[s] ? r[s].parts.push(a) : n.push((r[s] = { id: s, parts: [a] }));
            }
            return n;
        }
        function d(t, e) {
            var n = a(t.insertInto);
            if (!n) throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");
            var r = l[l.length - 1];
            if ("top" === t.insertAt) r ? (r.nextSibling ? n.insertBefore(e, r.nextSibling) : n.appendChild(e)) : n.insertBefore(e, n.firstChild), l.push(e);
            else if ("bottom" === t.insertAt) n.appendChild(e);
            else {
                if ("object" != typeof t.insertAt || !t.insertAt.before)
                    throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");
                var o = a(t.insertAt.before, n);
                n.insertBefore(e, o);
            }
        }
        function y(t) {
            if (null === t.parentNode) return !1;
            t.parentNode.removeChild(t);
            var e = l.indexOf(t);
            e >= 0 && l.splice(e, 1);
        }
        function g(t) {
            var e = document.createElement("style");
            if ((void 0 === t.attrs.type && (t.attrs.type = "text/css"), void 0 === t.attrs.nonce)) {
                var r = (function () {
                    0;
                    return n.nc;
                })();
                r && (t.attrs.nonce = r);
            }
            return b(e, t.attrs), d(t, e), e;
        }
        function b(t, e) {
            Object.keys(e).forEach(function (n) {
                t.setAttribute(n, e[n]);
            });
        }
        function v(t, e) {
            var n, r, o, i;
            if (e.transform && t.css) {
                if (!(i = "function" == typeof e.transform ? e.transform(t.css) : e.transform.default(t.css))) return function () {};
                t.css = i;
            }
            if (e.singleton) {
                var s = c++;
                (n = u || (u = g(e))), (r = _.bind(null, n, s, !1)), (o = _.bind(null, n, s, !0));
            } else
                t.sourceMap && "function" == typeof URL && "function" == typeof URL.createObjectURL && "function" == typeof URL.revokeObjectURL && "function" == typeof Blob && "function" == typeof btoa
                    ? ((n = (function (t) {
                          var e = document.createElement("link");
                          return void 0 === t.attrs.type && (t.attrs.type = "text/css"), (t.attrs.rel = "stylesheet"), b(e, t.attrs), d(t, e), e;
                      })(e)),
                      (r = function (t, e, n) {
                          var r = n.css,
                              o = n.sourceMap,
                              i = void 0 === e.convertToAbsoluteUrls && o;
                          (e.convertToAbsoluteUrls || i) && (r = f(r));
                          o && (r += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(o)))) + " */");
                          var s = new Blob([r], { type: "text/css" }),
                              a = t.href;
                          (t.href = URL.createObjectURL(s)), a && URL.revokeObjectURL(a);
                      }.bind(null, n, e)),
                      (o = function () {
                          y(n), n.href && URL.revokeObjectURL(n.href);
                      }))
                    : ((n = g(e)),
                      (r = function (t, e) {
                          var n = e.css,
                              r = e.media;
                          r && t.setAttribute("media", r);
                          if (t.styleSheet) t.styleSheet.cssText = n;
                          else {
                              for (; t.firstChild; ) t.removeChild(t.firstChild);
                              t.appendChild(document.createTextNode(n));
                          }
                      }.bind(null, n)),
                      (o = function () {
                          y(n);
                      }));
            return (
                r(t),
                function (e) {
                    if (e) {
                        if (e.css === t.css && e.media === t.media && e.sourceMap === t.sourceMap) return;
                        r((t = e));
                    } else o();
                }
            );
        }
        t.exports = function (t, e) {
            if ("undefined" != typeof DEBUG && DEBUG && "object" != typeof document) throw new Error("The style-loader cannot be used in a non-browser environment");
            ((e = e || {}).attrs = "object" == typeof e.attrs ? e.attrs : {}), e.singleton || "boolean" == typeof e.singleton || (e.singleton = s()), e.insertInto || (e.insertInto = "head"), e.insertAt || (e.insertAt = "bottom");
            var n = h(t, e);
            return (
                p(n, e),
                function (t) {
                    for (var r = [], o = 0; o < n.length; o++) {
                        var s = n[o];
                        (a = i[s.id]).refs--, r.push(a);
                    }
                    t && p(h(t, e), e);
                    for (o = 0; o < r.length; o++) {
                        var a;
                        if (0 === (a = r[o]).refs) {
                            for (var u = 0; u < a.parts.length; u++) a.parts[u]();
                            delete i[a.id];
                        }
                    }
                }
            );
        };
        var m,
            w =
                ((m = []),
                function (t, e) {
                    return (m[t] = e), m.filter(Boolean).join("\n");
                });
        function _(t, e, n, r) {
            var o = n ? "" : r.css;
            if (t.styleSheet) t.styleSheet.cssText = w(e, o);
            else {
                var i = document.createTextNode(o),
                    s = t.childNodes;
                s[e] && t.removeChild(s[e]), s.length ? t.insertBefore(i, s[e]) : t.appendChild(i);
            }
        }
    },
    function (t, e, n) {
        var r = n(17).default;
        (t.exports = r), (t.exports.default = r);
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 });
        var r = !1;
        e.config = {
            Promise: void 0,
            set useDeprecatedSynchronousErrorHandling(t) {
                if (t) {
                    var e = new Error();
                    console.warn("DEPRECATED! RxJS was set to use deprecated synchronous error handling behavior by code at: \n" + e.stack);
                } else r && console.log("RxJS: Back to a better error behavior. Thank you. <3");
                r = t;
            },
            get useDeprecatedSynchronousErrorHandling() {
                return r;
            },
        };
    },
    function (t, e, n) {
        t.exports = (function () {
            "use strict";
            var t =
                    Object.freeze ||
                    function (t) {
                        return t;
                    },
                e = t([
                    "a",
                    "abbr",
                    "acronym",
                    "address",
                    "area",
                    "article",
                    "aside",
                    "audio",
                    "b",
                    "bdi",
                    "bdo",
                    "big",
                    "blink",
                    "blockquote",
                    "body",
                    "br",
                    "button",
                    "canvas",
                    "caption",
                    "center",
                    "cite",
                    "code",
                    "col",
                    "colgroup",
                    "content",
                    "data",
                    "datalist",
                    "dd",
                    "decorator",
                    "del",
                    "details",
                    "dfn",
                    "dir",
                    "div",
                    "dl",
                    "dt",
                    "element",
                    "em",
                    "fieldset",
                    "figcaption",
                    "figure",
                    "font",
                    "footer",
                    "form",
                    "h1",
                    "h2",
                    "h3",
                    "h4",
                    "h5",
                    "h6",
                    "head",
                    "header",
                    "hgroup",
                    "hr",
                    "html",
                    "i",
                    "img",
                    "input",
                    "ins",
                    "kbd",
                    "label",
                    "legend",
                    "li",
                    "main",
                    "map",
                    "mark",
                    "marquee",
                    "menu",
                    "menuitem",
                    "meter",
                    "nav",
                    "nobr",
                    "ol",
                    "optgroup",
                    "option",
                    "output",
                    "p",
                    "pre",
                    "progress",
                    "q",
                    "rp",
                    "rt",
                    "ruby",
                    "s",
                    "samp",
                    "section",
                    "select",
                    "shadow",
                    "small",
                    "source",
                    "spacer",
                    "span",
                    "strike",
                    "strong",
                    "style",
                    "sub",
                    "summary",
                    "sup",
                    "table",
                    "tbody",
                    "td",
                    "template",
                    "textarea",
                    "tfoot",
                    "th",
                    "thead",
                    "time",
                    "tr",
                    "track",
                    "tt",
                    "u",
                    "ul",
                    "var",
                    "video",
                    "wbr",
                ]),
                n = t([
                    "svg",
                    "a",
                    "altglyph",
                    "altglyphdef",
                    "altglyphitem",
                    "animatecolor",
                    "animatemotion",
                    "animatetransform",
                    "audio",
                    "canvas",
                    "circle",
                    "clippath",
                    "defs",
                    "desc",
                    "ellipse",
                    "filter",
                    "font",
                    "g",
                    "glyph",
                    "glyphref",
                    "hkern",
                    "image",
                    "line",
                    "lineargradient",
                    "marker",
                    "mask",
                    "metadata",
                    "mpath",
                    "path",
                    "pattern",
                    "polygon",
                    "polyline",
                    "radialgradient",
                    "rect",
                    "stop",
                    "style",
                    "switch",
                    "symbol",
                    "text",
                    "textpath",
                    "title",
                    "tref",
                    "tspan",
                    "video",
                    "view",
                    "vkern",
                ]),
                r = t([
                    "feBlend",
                    "feColorMatrix",
                    "feComponentTransfer",
                    "feComposite",
                    "feConvolveMatrix",
                    "feDiffuseLighting",
                    "feDisplacementMap",
                    "feDistantLight",
                    "feFlood",
                    "feFuncA",
                    "feFuncB",
                    "feFuncG",
                    "feFuncR",
                    "feGaussianBlur",
                    "feMerge",
                    "feMergeNode",
                    "feMorphology",
                    "feOffset",
                    "fePointLight",
                    "feSpecularLighting",
                    "feSpotLight",
                    "feTile",
                    "feTurbulence",
                ]),
                o = t([
                    "math",
                    "menclose",
                    "merror",
                    "mfenced",
                    "mfrac",
                    "mglyph",
                    "mi",
                    "mlabeledtr",
                    "mmultiscripts",
                    "mn",
                    "mo",
                    "mover",
                    "mpadded",
                    "mphantom",
                    "mroot",
                    "mrow",
                    "ms",
                    "mspace",
                    "msqrt",
                    "mstyle",
                    "msub",
                    "msup",
                    "msubsup",
                    "mtable",
                    "mtd",
                    "mtext",
                    "mtr",
                    "munder",
                    "munderover",
                ]),
                i = t(["#text"]),
                s =
                    Object.freeze ||
                    function (t) {
                        return t;
                    },
                a = s([
                    "accept",
                    "action",
                    "align",
                    "alt",
                    "autocomplete",
                    "background",
                    "bgcolor",
                    "border",
                    "cellpadding",
                    "cellspacing",
                    "checked",
                    "cite",
                    "class",
                    "clear",
                    "color",
                    "cols",
                    "colspan",
                    "controls",
                    "coords",
                    "crossorigin",
                    "datetime",
                    "default",
                    "dir",
                    "disabled",
                    "download",
                    "enctype",
                    "face",
                    "for",
                    "headers",
                    "height",
                    "hidden",
                    "high",
                    "href",
                    "hreflang",
                    "id",
                    "integrity",
                    "ismap",
                    "label",
                    "lang",
                    "list",
                    "loop",
                    "low",
                    "max",
                    "maxlength",
                    "media",
                    "method",
                    "min",
                    "multiple",
                    "name",
                    "noshade",
                    "novalidate",
                    "nowrap",
                    "open",
                    "optimum",
                    "pattern",
                    "placeholder",
                    "poster",
                    "preload",
                    "pubdate",
                    "radiogroup",
                    "readonly",
                    "rel",
                    "required",
                    "rev",
                    "reversed",
                    "role",
                    "rows",
                    "rowspan",
                    "spellcheck",
                    "scope",
                    "selected",
                    "shape",
                    "size",
                    "sizes",
                    "span",
                    "srclang",
                    "start",
                    "src",
                    "srcset",
                    "step",
                    "style",
                    "summary",
                    "tabindex",
                    "title",
                    "type",
                    "usemap",
                    "valign",
                    "value",
                    "width",
                    "xmlns",
                ]),
                u = s([
                    "accent-height",
                    "accumulate",
                    "additive",
                    "alignment-baseline",
                    "ascent",
                    "attributename",
                    "attributetype",
                    "azimuth",
                    "basefrequency",
                    "baseline-shift",
                    "begin",
                    "bias",
                    "by",
                    "class",
                    "clip",
                    "clip-path",
                    "clip-rule",
                    "color",
                    "color-interpolation",
                    "color-interpolation-filters",
                    "color-profile",
                    "color-rendering",
                    "cx",
                    "cy",
                    "d",
                    "dx",
                    "dy",
                    "diffuseconstant",
                    "direction",
                    "display",
                    "divisor",
                    "dur",
                    "edgemode",
                    "elevation",
                    "end",
                    "fill",
                    "fill-opacity",
                    "fill-rule",
                    "filter",
                    "filterunits",
                    "flood-color",
                    "flood-opacity",
                    "font-family",
                    "font-size",
                    "font-size-adjust",
                    "font-stretch",
                    "font-style",
                    "font-variant",
                    "font-weight",
                    "fx",
                    "fy",
                    "g1",
                    "g2",
                    "glyph-name",
                    "glyphref",
                    "gradientunits",
                    "gradienttransform",
                    "height",
                    "href",
                    "id",
                    "image-rendering",
                    "in",
                    "in2",
                    "k",
                    "k1",
                    "k2",
                    "k3",
                    "k4",
                    "kerning",
                    "keypoints",
                    "keysplines",
                    "keytimes",
                    "lang",
                    "lengthadjust",
                    "letter-spacing",
                    "kernelmatrix",
                    "kernelunitlength",
                    "lighting-color",
                    "local",
                    "marker-end",
                    "marker-mid",
                    "marker-start",
                    "markerheight",
                    "markerunits",
                    "markerwidth",
                    "maskcontentunits",
                    "maskunits",
                    "max",
                    "mask",
                    "media",
                    "method",
                    "mode",
                    "min",
                    "name",
                    "numoctaves",
                    "offset",
                    "operator",
                    "opacity",
                    "order",
                    "orient",
                    "orientation",
                    "origin",
                    "overflow",
                    "paint-order",
                    "path",
                    "pathlength",
                    "patterncontentunits",
                    "patterntransform",
                    "patternunits",
                    "points",
                    "preservealpha",
                    "preserveaspectratio",
                    "primitiveunits",
                    "r",
                    "rx",
                    "ry",
                    "radius",
                    "refx",
                    "refy",
                    "repeatcount",
                    "repeatdur",
                    "restart",
                    "result",
                    "rotate",
                    "scale",
                    "seed",
                    "shape-rendering",
                    "specularconstant",
                    "specularexponent",
                    "spreadmethod",
                    "stddeviation",
                    "stitchtiles",
                    "stop-color",
                    "stop-opacity",
                    "stroke-dasharray",
                    "stroke-dashoffset",
                    "stroke-linecap",
                    "stroke-linejoin",
                    "stroke-miterlimit",
                    "stroke-opacity",
                    "stroke",
                    "stroke-width",
                    "style",
                    "surfacescale",
                    "tabindex",
                    "targetx",
                    "targety",
                    "transform",
                    "text-anchor",
                    "text-decoration",
                    "text-rendering",
                    "textlength",
                    "type",
                    "u1",
                    "u2",
                    "unicode",
                    "values",
                    "viewbox",
                    "visibility",
                    "version",
                    "vert-adv-y",
                    "vert-origin-x",
                    "vert-origin-y",
                    "width",
                    "word-spacing",
                    "wrap",
                    "writing-mode",
                    "xchannelselector",
                    "ychannelselector",
                    "x",
                    "x1",
                    "x2",
                    "xmlns",
                    "y",
                    "y1",
                    "y2",
                    "z",
                    "zoomandpan",
                ]),
                c = s([
                    "accent",
                    "accentunder",
                    "align",
                    "bevelled",
                    "close",
                    "columnsalign",
                    "columnlines",
                    "columnspan",
                    "denomalign",
                    "depth",
                    "dir",
                    "display",
                    "displaystyle",
                    "fence",
                    "frame",
                    "height",
                    "href",
                    "id",
                    "largeop",
                    "length",
                    "linethickness",
                    "lspace",
                    "lquote",
                    "mathbackground",
                    "mathcolor",
                    "mathsize",
                    "mathvariant",
                    "maxsize",
                    "minsize",
                    "movablelimits",
                    "notation",
                    "numalign",
                    "open",
                    "rowalign",
                    "rowlines",
                    "rowspacing",
                    "rowspan",
                    "rspace",
                    "rquote",
                    "scriptlevel",
                    "scriptminsize",
                    "scriptsizemultiplier",
                    "selection",
                    "separator",
                    "separators",
                    "stretchy",
                    "subscriptshift",
                    "supscriptshift",
                    "symmetric",
                    "voffset",
                    "width",
                    "xmlns",
                ]),
                l = s(["xlink:href", "xml:id", "xlink:title", "xml:space", "xmlns:xlink"]),
                f = Object.hasOwnProperty,
                p = Object.setPrototypeOf,
                h = ("undefined" != typeof Reflect && Reflect).apply;
            function d(t, e) {
                p && p(t, null);
                for (var n = e.length; n--; ) {
                    var r = e[n];
                    if ("string" == typeof r) {
                        var o = r.toLowerCase();
                        o !== r && (Object.isFrozen(e) || (e[n] = o), (r = o));
                    }
                    t[r] = !0;
                }
                return t;
            }
            function y(t) {
                var e = {},
                    n = void 0;
                for (n in t) h(f, t, [n]) && (e[n] = t[n]);
                return e;
            }
            h ||
                (h = function (t, e, n) {
                    return t.apply(e, n);
                });
            var g =
                    Object.seal ||
                    function (t) {
                        return t;
                    },
                b = g(/\{\{[\s\S]*|[\s\S]*\}\}/gm),
                v = g(/<%[\s\S]*|[\s\S]*%>/gm),
                m = g(/^data-[\-\w.\u00B7-\uFFFF]/),
                w = g(/^aria-[\-\w]+$/),
                _ = g(/^(?:(?:(?:f|ht)tps?|mailto|tel|callto|cid|xmpp):|[^a-z]|[a-z+.\-]+(?:[^a-z+.\-:]|$))/i),
                x = g(/^(?:\w+script|data):/i),
                k = g(/[\u0000-\u0020\u00A0\u1680\u180E\u2000-\u2029\u205f\u3000]/g),
                S =
                    "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
                        ? function (t) {
                              return typeof t;
                          }
                        : function (t) {
                              return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t;
                          };
            function O(t) {
                if (Array.isArray(t)) {
                    for (var e = 0, n = Array(t.length); e < t.length; e++) n[e] = t[e];
                    return n;
                }
                return Array.from(t);
            }
            var E = ("undefined" != typeof Reflect && Reflect).apply,
                T = Array.prototype.slice,
                A = Object.freeze,
                j = function () {
                    return "undefined" == typeof window ? null : window;
                };
            E ||
                (E = function (t, e, n) {
                    return t.apply(e, n);
                });
            var P = function (t, e) {
                if ("object" !== (void 0 === t ? "undefined" : S(t)) || "function" != typeof t.createPolicy) return null;
                var n = null;
                e.currentScript && e.currentScript.hasAttribute("data-tt-policy-suffix") && (n = e.currentScript.getAttribute("data-tt-policy-suffix"));
                var r = "dompurify" + (n ? "#" + n : "");
                try {
                    return t.createPolicy(r, {
                        createHTML: function (t) {
                            return t;
                        },
                    });
                } catch (t) {
                    return console.warn("TrustedTypes policy " + r + " could not be created."), null;
                }
            };
            return (function t() {
                var s = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : j(),
                    f = function (e) {
                        return t(e);
                    };
                if (((f.version = "1.0.11"), (f.removed = []), !s || !s.document || 9 !== s.document.nodeType)) return (f.isSupported = !1), f;
                var p = s.document,
                    h = !1,
                    g = !1,
                    L = s.document,
                    R = s.DocumentFragment,
                    C = s.HTMLTemplateElement,
                    N = s.Node,
                    M = s.NodeFilter,
                    D = s.NamedNodeMap,
                    U = void 0 === D ? s.NamedNodeMap || s.MozNamedAttrMap : D,
                    F = s.Text,
                    H = s.Comment,
                    B = s.DOMParser,
                    I = s.TrustedTypes;
                if ("function" == typeof C) {
                    var V = L.createElement("template");
                    V.content && V.content.ownerDocument && (L = V.content.ownerDocument);
                }
                var z = P(I, p),
                    q = z ? z.createHTML("") : "",
                    W = L,
                    $ = W.implementation,
                    K = W.createNodeIterator,
                    G = W.getElementsByTagName,
                    Y = W.createDocumentFragment,
                    J = p.importNode,
                    X = {};
                f.isSupported = $ && void 0 !== $.createHTMLDocument && 9 !== L.documentMode;
                var Q = b,
                    Z = v,
                    tt = m,
                    et = w,
                    nt = x,
                    rt = k,
                    ot = _,
                    it = null,
                    st = d({}, [].concat(O(e), O(n), O(r), O(o), O(i))),
                    at = null,
                    ut = d({}, [].concat(O(a), O(u), O(c), O(l))),
                    ct = null,
                    lt = null,
                    ft = !0,
                    pt = !0,
                    ht = !1,
                    dt = !1,
                    yt = !1,
                    gt = !1,
                    bt = !1,
                    vt = !1,
                    mt = !1,
                    wt = !1,
                    _t = !1,
                    xt = !0,
                    kt = !0,
                    St = !1,
                    Ot = {},
                    Et = d({}, ["audio", "head", "math", "script", "style", "template", "svg", "video"]),
                    Tt = d({}, ["audio", "video", "img", "source", "image"]),
                    At = null,
                    jt = d({}, ["alt", "class", "for", "id", "label", "name", "pattern", "placeholder", "summary", "title", "value", "style", "xmlns"]),
                    Pt = null,
                    Lt = L.createElement("form"),
                    Rt = function (t) {
                        (Pt && Pt === t) ||
                            ((t && "object" === (void 0 === t ? "undefined" : S(t))) || (t = {}),
                            (it = "ALLOWED_TAGS" in t ? d({}, t.ALLOWED_TAGS) : st),
                            (at = "ALLOWED_ATTR" in t ? d({}, t.ALLOWED_ATTR) : ut),
                            (At = "ADD_URI_SAFE_ATTR" in t ? d({}, t.ADD_URI_SAFE_ATTR) : jt),
                            (ct = "FORBID_TAGS" in t ? d({}, t.FORBID_TAGS) : {}),
                            (lt = "FORBID_ATTR" in t ? d({}, t.FORBID_ATTR) : {}),
                            (Ot = "USE_PROFILES" in t && t.USE_PROFILES),
                            (ft = !1 !== t.ALLOW_ARIA_ATTR),
                            (pt = !1 !== t.ALLOW_DATA_ATTR),
                            (ht = t.ALLOW_UNKNOWN_PROTOCOLS || !1),
                            (dt = t.SAFE_FOR_JQUERY || !1),
                            (yt = t.SAFE_FOR_TEMPLATES || !1),
                            (gt = t.WHOLE_DOCUMENT || !1),
                            (mt = t.RETURN_DOM || !1),
                            (wt = t.RETURN_DOM_FRAGMENT || !1),
                            (_t = t.RETURN_DOM_IMPORT || !1),
                            (vt = t.FORCE_BODY || !1),
                            (xt = !1 !== t.SANITIZE_DOM),
                            (kt = !1 !== t.KEEP_CONTENT),
                            (St = t.IN_PLACE || !1),
                            (ot = t.ALLOWED_URI_REGEXP || ot),
                            yt && (pt = !1),
                            wt && (mt = !0),
                            Ot &&
                                ((it = d({}, [].concat(O(i)))),
                                (at = []),
                                !0 === Ot.html && (d(it, e), d(at, a)),
                                !0 === Ot.svg && (d(it, n), d(at, u), d(at, l)),
                                !0 === Ot.svgFilters && (d(it, r), d(at, u), d(at, l)),
                                !0 === Ot.mathMl && (d(it, o), d(at, c), d(at, l))),
                            t.ADD_TAGS && (it === st && (it = y(it)), d(it, t.ADD_TAGS)),
                            t.ADD_ATTR && (at === ut && (at = y(at)), d(at, t.ADD_ATTR)),
                            t.ADD_URI_SAFE_ATTR && d(At, t.ADD_URI_SAFE_ATTR),
                            kt && (it["#text"] = !0),
                            gt && d(it, ["html", "head", "body"]),
                            it.table && d(it, ["tbody"]),
                            A && A(t),
                            (Pt = t));
                    },
                    Ct = function (t) {
                        f.removed.push({ element: t });
                        try {
                            t.parentNode.removeChild(t);
                        } catch (e) {
                            t.outerHTML = q;
                        }
                    },
                    Nt = function (t, e) {
                        try {
                            f.removed.push({ attribute: e.getAttributeNode(t), from: e });
                        } catch (t) {
                            f.removed.push({ attribute: null, from: e });
                        }
                        e.removeAttribute(t);
                    },
                    Mt = function (t) {
                        var e = void 0,
                            n = void 0;
                        if (vt) t = "<remove></remove>" + t;
                        else {
                            var r = t.match(/^[\s]+/);
                            (n = r && r[0]) && (t = t.slice(n.length));
                        }
                        if (h)
                            try {
                                e = new B().parseFromString(t, "text/html");
                            } catch (t) {}
                        if ((g && d(ct, ["title"]), !e || !e.documentElement)) {
                            var o = (e = $.createHTMLDocument("")).body;
                            o.parentNode.removeChild(o.parentNode.firstElementChild), (o.outerHTML = z ? z.createHTML(t) : t);
                        }
                        return n && e.body.insertBefore(L.createTextNode(n), e.body.childNodes[0] || null), G.call(e, gt ? "html" : "body")[0];
                    };
                f.isSupported &&
                    ((function () {
                        try {
                            Mt('<svg><p><style><img src="</style><img src=x onerror=1//">').querySelector("svg img") && (h = !0);
                        } catch (t) {}
                    })(),
                    (function () {
                        try {
                            Mt("<x/><title>&lt;/title&gt;&lt;img&gt;")
                                .querySelector("title")
                                .innerHTML.match(/<\/title/) && (g = !0);
                        } catch (t) {}
                    })());
                var Dt = function (t) {
                        return K.call(
                            t.ownerDocument || t,
                            t,
                            M.SHOW_ELEMENT | M.SHOW_COMMENT | M.SHOW_TEXT,
                            function () {
                                return M.FILTER_ACCEPT;
                            },
                            !1
                        );
                    },
                    Ut = function (t) {
                        return "object" === (void 0 === N ? "undefined" : S(N)) ? t instanceof N : t && "object" === (void 0 === t ? "undefined" : S(t)) && "number" == typeof t.nodeType && "string" == typeof t.nodeName;
                    },
                    Ft = function (t, e, n) {
                        X[t] &&
                            X[t].forEach(function (t) {
                                t.call(f, e, n, Pt);
                            });
                    },
                    Ht = function (t) {
                        var e,
                            n = void 0;
                        if (
                            (Ft("beforeSanitizeElements", t, null),
                            !(
                                (e = t) instanceof F ||
                                e instanceof H ||
                                ("string" == typeof e.nodeName &&
                                    "string" == typeof e.textContent &&
                                    "function" == typeof e.removeChild &&
                                    e.attributes instanceof U &&
                                    "function" == typeof e.removeAttribute &&
                                    "function" == typeof e.setAttribute)
                            ))
                        )
                            return Ct(t), !0;
                        var r = t.nodeName.toLowerCase();
                        if ((Ft("uponSanitizeElement", t, { tagName: r, allowedTags: it }), !it[r] || ct[r])) {
                            if (kt && !Et[r] && "function" == typeof t.insertAdjacentHTML)
                                try {
                                    var o = t.innerHTML;
                                    t.insertAdjacentHTML("AfterEnd", z ? z.createHTML(o) : o);
                                } catch (t) {}
                            return Ct(t), !0;
                        }
                        return "noscript" === r && t.innerHTML.match(/<\/noscript/i)
                            ? (Ct(t), !0)
                            : "noembed" === r && t.innerHTML.match(/<\/noembed/i)
                            ? (Ct(t), !0)
                            : (!dt ||
                                  t.firstElementChild ||
                                  (t.content && t.content.firstElementChild) ||
                                  !/</g.test(t.textContent) ||
                                  (f.removed.push({ element: t.cloneNode() }), t.innerHTML ? (t.innerHTML = t.innerHTML.replace(/</g, "&lt;")) : (t.innerHTML = t.textContent.replace(/</g, "&lt;"))),
                              yt && 3 === t.nodeType && ((n = (n = (n = t.textContent).replace(Q, " ")).replace(Z, " ")), t.textContent !== n && (f.removed.push({ element: t.cloneNode() }), (t.textContent = n))),
                              Ft("afterSanitizeElements", t, null),
                              !1);
                    },
                    Bt = function (t, e, n) {
                        if (xt && ("id" === e || "name" === e) && (n in L || n in Lt)) return !1;
                        if (pt && tt.test(e));
                        else if (ft && et.test(e));
                        else {
                            if (!at[e] || lt[e]) return !1;
                            if (At[e]);
                            else if (ot.test(n.replace(rt, "")));
                            else if (("src" !== e && "xlink:href" !== e) || "script" === t || 0 !== n.indexOf("data:") || !Tt[t])
                                if (ht && !nt.test(n.replace(rt, "")));
                                else if (n) return !1;
                        }
                        return !0;
                    },
                    It = function (t) {
                        var e = void 0,
                            n = void 0,
                            r = void 0,
                            o = void 0,
                            i = void 0;
                        Ft("beforeSanitizeAttributes", t, null);
                        var s = t.attributes;
                        if (s) {
                            var a = { attrName: "", attrValue: "", keepAttr: !0, allowedAttributes: at };
                            for (i = s.length; i--; ) {
                                var u = (e = s[i]),
                                    c = u.name,
                                    l = u.namespaceURI;
                                if (((n = e.value.trim()), (r = c.toLowerCase()), (a.attrName = r), (a.attrValue = n), (a.keepAttr = !0), Ft("uponSanitizeAttribute", t, a), (n = a.attrValue), "name" === r && "IMG" === t.nodeName && s.id))
                                    (o = s.id), (s = E(T, s, [])), Nt("id", t), Nt(c, t), s.indexOf(o) > i && t.setAttribute("id", o.value);
                                else {
                                    if ("INPUT" === t.nodeName && "type" === r && "file" === n && a.keepAttr && (at[r] || !lt[r])) continue;
                                    "id" === c && t.setAttribute(c, ""), Nt(c, t);
                                }
                                if (a.keepAttr) {
                                    yt && (n = (n = n.replace(Q, " ")).replace(Z, " "));
                                    var p = t.nodeName.toLowerCase();
                                    if (Bt(p, r, n))
                                        try {
                                            l ? t.setAttributeNS(l, c, n) : t.setAttribute(c, n), f.removed.pop();
                                        } catch (t) {}
                                }
                            }
                            Ft("afterSanitizeAttributes", t, null);
                        }
                    },
                    Vt = function t(e) {
                        var n = void 0,
                            r = Dt(e);
                        for (Ft("beforeSanitizeShadowDOM", e, null); (n = r.nextNode()); ) Ft("uponSanitizeShadowNode", n, null), Ht(n) || (n.content instanceof R && t(n.content), It(n));
                        Ft("afterSanitizeShadowDOM", e, null);
                    };
                return (
                    (f.sanitize = function (t, e) {
                        var n = void 0,
                            r = void 0,
                            o = void 0,
                            i = void 0,
                            a = void 0;
                        if ((t || (t = "\x3c!--\x3e"), "string" != typeof t && !Ut(t))) {
                            if ("function" != typeof t.toString) throw new TypeError("toString is not a function");
                            if ("string" != typeof (t = t.toString())) throw new TypeError("dirty is not a string, aborting");
                        }
                        if (!f.isSupported) {
                            if ("object" === S(s.toStaticHTML) || "function" == typeof s.toStaticHTML) {
                                if ("string" == typeof t) return s.toStaticHTML(t);
                                if (Ut(t)) return s.toStaticHTML(t.outerHTML);
                            }
                            return t;
                        }
                        if ((bt || Rt(e), (f.removed = []), St));
                        else if (t instanceof N) 1 === (r = (n = Mt("\x3c!--\x3e")).ownerDocument.importNode(t, !0)).nodeType && "BODY" === r.nodeName ? (n = r) : "HTML" === r.nodeName ? (n = r) : n.appendChild(r);
                        else {
                            if (!mt && !yt && !gt && -1 === t.indexOf("<")) return z ? z.createHTML(t) : t;
                            if (!(n = Mt(t))) return mt ? null : q;
                        }
                        n && vt && Ct(n.firstChild);
                        for (var u = Dt(St ? t : n); (o = u.nextNode()); ) (3 === o.nodeType && o === i) || Ht(o) || (o.content instanceof R && Vt(o.content), It(o), (i = o));
                        if (((i = null), St)) return t;
                        if (mt) {
                            if (wt) for (a = Y.call(n.ownerDocument); n.firstChild; ) a.appendChild(n.firstChild);
                            else a = n;
                            return _t && (a = J.call(p, a, !0)), a;
                        }
                        var c = gt ? n.outerHTML : n.innerHTML;
                        return yt && (c = (c = c.replace(Q, " ")).replace(Z, " ")), z ? z.createHTML(c) : c;
                    }),
                    (f.setConfig = function (t) {
                        Rt(t), (bt = !0);
                    }),
                    (f.clearConfig = function () {
                        (Pt = null), (bt = !1);
                    }),
                    (f.isValidAttribute = function (t, e, n) {
                        Pt || Rt({});
                        var r = t.toLowerCase(),
                            o = e.toLowerCase();
                        return Bt(r, o, n);
                    }),
                    (f.addHook = function (t, e) {
                        "function" == typeof e && ((X[t] = X[t] || []), X[t].push(e));
                    }),
                    (f.removeHook = function (t) {
                        X[t] && X[t].pop();
                    }),
                    (f.removeHooks = function (t) {
                        X[t] && (X[t] = []);
                    }),
                    (f.removeAllHooks = function () {
                        X = {};
                    }),
                    f
                );
            })();
        })();
    },
    function (t, e, n) {
        "use strict";
        var r,
            o =
                (this && this.__extends) ||
                ((r = function (t, e) {
                    return (r =
                        Object.setPrototypeOf ||
                        ({ __proto__: [] } instanceof Array &&
                            function (t, e) {
                                t.__proto__ = e;
                            }) ||
                        function (t, e) {
                            for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]);
                        })(t, e);
                }),
                function (t, e) {
                    function n() {
                        this.constructor = t;
                    }
                    r(t, e), (t.prototype = null === e ? Object.create(e) : ((n.prototype = e.prototype), new n()));
                });
        Object.defineProperty(e, "__esModule", { value: !0 });
        var i = n(7),
            s = n(8),
            a = n(32),
            u = n(10),
            c = n(4),
            l = n(9),
            f = (function (t) {
                function e(n, r, o) {
                    var i = t.call(this) || this;
                    switch (((i.syncErrorValue = null), (i.syncErrorThrown = !1), (i.syncErrorThrowable = !1), (i.isStopped = !1), arguments.length)) {
                        case 0:
                            i.destination = s.empty;
                            break;
                        case 1:
                            if (!n) {
                                i.destination = s.empty;
                                break;
                            }
                            if ("object" == typeof n) {
                                n instanceof e ? ((i.syncErrorThrowable = n.syncErrorThrowable), (i.destination = n), n.add(i)) : ((i.syncErrorThrowable = !0), (i.destination = new p(i, n)));
                                break;
                            }
                        default:
                            (i.syncErrorThrowable = !0), (i.destination = new p(i, n, r, o));
                    }
                    return i;
                }
                return (
                    o(e, t),
                    (e.prototype[u.rxSubscriber] = function () {
                        return this;
                    }),
                    (e.create = function (t, n, r) {
                        var o = new e(t, n, r);
                        return (o.syncErrorThrowable = !1), o;
                    }),
                    (e.prototype.next = function (t) {
                        this.isStopped || this._next(t);
                    }),
                    (e.prototype.error = function (t) {
                        this.isStopped || ((this.isStopped = !0), this._error(t));
                    }),
                    (e.prototype.complete = function () {
                        this.isStopped || ((this.isStopped = !0), this._complete());
                    }),
                    (e.prototype.unsubscribe = function () {
                        this.closed || ((this.isStopped = !0), t.prototype.unsubscribe.call(this));
                    }),
                    (e.prototype._next = function (t) {
                        this.destination.next(t);
                    }),
                    (e.prototype._error = function (t) {
                        this.destination.error(t), this.unsubscribe();
                    }),
                    (e.prototype._complete = function () {
                        this.destination.complete(), this.unsubscribe();
                    }),
                    (e.prototype._unsubscribeAndRecycle = function () {
                        var t = this._parentOrParents;
                        return (this._parentOrParents = null), this.unsubscribe(), (this.closed = !1), (this.isStopped = !1), (this._parentOrParents = t), this;
                    }),
                    e
                );
            })(a.Subscription);
        e.Subscriber = f;
        var p = (function (t) {
            function e(e, n, r, o) {
                var a,
                    u = t.call(this) || this;
                u._parentSubscriber = e;
                var c = u;
                return (
                    i.isFunction(n)
                        ? (a = n)
                        : n && ((a = n.next), (r = n.error), (o = n.complete), n !== s.empty && ((c = Object.create(n)), i.isFunction(c.unsubscribe) && u.add(c.unsubscribe.bind(c)), (c.unsubscribe = u.unsubscribe.bind(u)))),
                    (u._context = c),
                    (u._next = a),
                    (u._error = r),
                    (u._complete = o),
                    u
                );
            }
            return (
                o(e, t),
                (e.prototype.next = function (t) {
                    if (!this.isStopped && this._next) {
                        var e = this._parentSubscriber;
                        c.config.useDeprecatedSynchronousErrorHandling && e.syncErrorThrowable ? this.__tryOrSetError(e, this._next, t) && this.unsubscribe() : this.__tryOrUnsub(this._next, t);
                    }
                }),
                (e.prototype.error = function (t) {
                    if (!this.isStopped) {
                        var e = this._parentSubscriber,
                            n = c.config.useDeprecatedSynchronousErrorHandling;
                        if (this._error) n && e.syncErrorThrowable ? (this.__tryOrSetError(e, this._error, t), this.unsubscribe()) : (this.__tryOrUnsub(this._error, t), this.unsubscribe());
                        else if (e.syncErrorThrowable) n ? ((e.syncErrorValue = t), (e.syncErrorThrown = !0)) : l.hostReportError(t), this.unsubscribe();
                        else {
                            if ((this.unsubscribe(), n)) throw t;
                            l.hostReportError(t);
                        }
                    }
                }),
                (e.prototype.complete = function () {
                    var t = this;
                    if (!this.isStopped) {
                        var e = this._parentSubscriber;
                        if (this._complete) {
                            var n = function () {
                                return t._complete.call(t._context);
                            };
                            c.config.useDeprecatedSynchronousErrorHandling && e.syncErrorThrowable ? (this.__tryOrSetError(e, n), this.unsubscribe()) : (this.__tryOrUnsub(n), this.unsubscribe());
                        } else this.unsubscribe();
                    }
                }),
                (e.prototype.__tryOrUnsub = function (t, e) {
                    try {
                        t.call(this._context, e);
                    } catch (t) {
                        if ((this.unsubscribe(), c.config.useDeprecatedSynchronousErrorHandling)) throw t;
                        l.hostReportError(t);
                    }
                }),
                (e.prototype.__tryOrSetError = function (t, e, n) {
                    if (!c.config.useDeprecatedSynchronousErrorHandling) throw new Error("bad call");
                    try {
                        e.call(this._context, n);
                    } catch (e) {
                        return c.config.useDeprecatedSynchronousErrorHandling ? ((t.syncErrorValue = e), (t.syncErrorThrown = !0), !0) : (l.hostReportError(e), !0);
                    }
                    return !1;
                }),
                (e.prototype._unsubscribe = function () {
                    var t = this._parentSubscriber;
                    (this._context = null), (this._parentSubscriber = null), t.unsubscribe();
                }),
                e
            );
        })(f);
        e.SafeSubscriber = p;
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 }),
            (e.isFunction = function (t) {
                return "function" == typeof t;
            });
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 });
        var r = n(4),
            o = n(9);
        e.empty = {
            closed: !0,
            next: function (t) {},
            error: function (t) {
                if (r.config.useDeprecatedSynchronousErrorHandling) throw t;
                o.hostReportError(t);
            },
            complete: function () {},
        };
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 }),
            (e.hostReportError = function (t) {
                setTimeout(function () {
                    throw t;
                }, 0);
            });
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 }), (e.rxSubscriber = "function" == typeof Symbol ? Symbol("rxSubscriber") : "@@rxSubscriber_" + Math.random()), (e.$$rxSubscriber = e.rxSubscriber);
    },
    function (t, e, n) {
        var r = n(28);
        "string" == typeof r && (r = [[t.i, r, ""]]);
        var o = { hmr: !0, transform: void 0, insertInto: void 0 };
        n(2)(r, o);
        r.locals && (t.exports = r.locals);
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 });
        var r = n(29);
        e.fromFetch = r.fromFetch;
    },
    function (t, e, n) {
        var r = n(40);
        "string" == typeof r && (r = [[t.i, r, ""]]);
        var o = { hmr: !0, transform: void 0, insertInto: void 0 };
        n(2)(r, o);
        r.locals && (t.exports = r.locals);
    },
    ,
    ,
    function (t, e, n) {
        t.exports = n(43);
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 });
        var r = (function () {
                function t(t, e) {
                    for (var n = 0; n < e.length; n++) {
                        var r = e[n];
                        (r.enumerable = r.enumerable || !1), (r.configurable = !0), "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r);
                    }
                }
                return function (e, n, r) {
                    return n && t(e.prototype, n), r && t(e, r), e;
                };
            })(),
            o = (function (t) {
                if (t && t.__esModule) return t;
                var e = {};
                if (null != t) for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n]);
                return (e.default = t), e;
            })(n(18)),
            i = p(n(19)),
            s = p(n(20)),
            a = p(n(21)),
            u = p(n(22)),
            c = p(n(23)),
            l = p(n(24)),
            f = p(n(25));
        function p(t) {
            return t && t.__esModule ? t : { default: t };
        }
        var h = (function () {
            function t(e) {
                var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                !(function (t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
                })(this, t),
                    (this.type = "languageDetector"),
                    (this.detectors = {}),
                    this.init(e, n);
            }
            return (
                r(t, [
                    {
                        key: "init",
                        value: function (t) {
                            var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                                n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                            (this.services = t),
                                (this.options = o.defaults(e, this.options || {}, {
                                    order: ["querystring", "cookie", "localStorage", "navigator", "htmlTag"],
                                    lookupQuerystring: "lng",
                                    lookupCookie: "i18next",
                                    lookupLocalStorage: "i18nextLng",
                                    caches: ["localStorage"],
                                    excludeCacheFor: ["cimode"],
                                    checkWhitelist: !0,
                                })),
                                this.options.lookupFromUrlIndex && (this.options.lookupFromPathIndex = this.options.lookupFromUrlIndex),
                                (this.i18nOptions = n),
                                this.addDetector(i.default),
                                this.addDetector(s.default),
                                this.addDetector(a.default),
                                this.addDetector(u.default),
                                this.addDetector(c.default),
                                this.addDetector(l.default),
                                this.addDetector(f.default);
                        },
                    },
                    {
                        key: "addDetector",
                        value: function (t) {
                            this.detectors[t.name] = t;
                        },
                    },
                    {
                        key: "detect",
                        value: function (t) {
                            var e = this;
                            t || (t = this.options.order);
                            var n = [];
                            t.forEach(function (t) {
                                if (e.detectors[t]) {
                                    var r = e.detectors[t].lookup(e.options);
                                    r && "string" == typeof r && (r = [r]), r && (n = n.concat(r));
                                }
                            });
                            var r = void 0;
                            if (
                                (n.forEach(function (t) {
                                    if (!r) {
                                        var n = e.services.languageUtils.formatLanguageCode(t);
                                        (e.options.checkWhitelist && !e.services.languageUtils.isWhitelisted(n)) || (r = n);
                                    }
                                }),
                                !r)
                            ) {
                                var o = this.i18nOptions.fallbackLng;
                                "string" == typeof o && (o = [o]), o || (o = []), (r = "[object Array]" === Object.prototype.toString.apply(o) ? o[0] : o[0] || (o.default && o.default[0]));
                            }
                            return r;
                        },
                    },
                    {
                        key: "cacheUserLanguage",
                        value: function (t, e) {
                            var n = this;
                            e || (e = this.options.caches),
                                e &&
                                    ((this.options.excludeCacheFor && this.options.excludeCacheFor.indexOf(t) > -1) ||
                                        e.forEach(function (e) {
                                            n.detectors[e] && n.detectors[e].cacheUserLanguage(t, n.options);
                                        }));
                        },
                    },
                ]),
                t
            );
        })();
        (h.type = "languageDetector"), (e.default = h);
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 }),
            (e.defaults = function (t) {
                return (
                    o.call(i.call(arguments, 1), function (e) {
                        if (e) for (var n in e) void 0 === t[n] && (t[n] = e[n]);
                    }),
                    t
                );
            }),
            (e.extend = function (t) {
                return (
                    o.call(i.call(arguments, 1), function (e) {
                        if (e) for (var n in e) t[n] = e[n];
                    }),
                    t
                );
            });
        var r = [],
            o = r.forEach,
            i = r.slice;
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 });
        var r = function (t, e, n, r) {
                var o = void 0;
                if (n) {
                    var i = new Date();
                    i.setTime(i.getTime() + 60 * n * 1e3), (o = "; expires=" + i.toGMTString());
                } else o = "";
                (r = r ? "domain=" + r + ";" : ""), (document.cookie = t + "=" + e + o + ";" + r + "path=/");
            },
            o = function (t) {
                for (var e = t + "=", n = document.cookie.split(";"), r = 0; r < n.length; r++) {
                    for (var o = n[r]; " " === o.charAt(0); ) o = o.substring(1, o.length);
                    if (0 === o.indexOf(e)) return o.substring(e.length, o.length);
                }
                return null;
            };
        e.default = {
            name: "cookie",
            lookup: function (t) {
                var e = void 0;
                if (t.lookupCookie && "undefined" != typeof document) {
                    var n = o(t.lookupCookie);
                    n && (e = n);
                }
                return e;
            },
            cacheUserLanguage: function (t, e) {
                e.lookupCookie && "undefined" != typeof document && r(e.lookupCookie, t, e.cookieMinutes, e.cookieDomain);
            },
        };
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 }),
            (e.default = {
                name: "querystring",
                lookup: function (t) {
                    var e = void 0;
                    if ("undefined" != typeof window)
                        for (var n = window.location.search.substring(1).split("&"), r = 0; r < n.length; r++) {
                            var o = n[r].indexOf("=");
                            if (o > 0) n[r].substring(0, o) === t.lookupQuerystring && (e = n[r].substring(o + 1));
                        }
                    return e;
                },
            });
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 });
        var r = void 0;
        try {
            r = "undefined" !== window && null !== window.localStorage;
            window.localStorage.setItem("i18next.translate.boo", "foo"), window.localStorage.removeItem("i18next.translate.boo");
        } catch (t) {
            r = !1;
        }
        e.default = {
            name: "localStorage",
            lookup: function (t) {
                var e = void 0;
                if (t.lookupLocalStorage && r) {
                    var n = window.localStorage.getItem(t.lookupLocalStorage);
                    n && (e = n);
                }
                return e;
            },
            cacheUserLanguage: function (t, e) {
                e.lookupLocalStorage && r && window.localStorage.setItem(e.lookupLocalStorage, t);
            },
        };
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 }),
            (e.default = {
                name: "navigator",
                lookup: function (t) {
                    var e = [];
                    if ("undefined" != typeof navigator) {
                        if (navigator.languages) for (var n = 0; n < navigator.languages.length; n++) e.push(navigator.languages[n]);
                        navigator.userLanguage && e.push(navigator.userLanguage), navigator.language && e.push(navigator.language);
                    }
                    return e.length > 0 ? e : void 0;
                },
            });
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 }),
            (e.default = {
                name: "htmlTag",
                lookup: function (t) {
                    var e = void 0,
                        n = t.htmlTag || ("undefined" != typeof document ? document.documentElement : null);
                    return n && "function" == typeof n.getAttribute && (e = n.getAttribute("lang")), e;
                },
            });
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 }),
            (e.default = {
                name: "path",
                lookup: function (t) {
                    var e = void 0;
                    if ("undefined" != typeof window) {
                        var n = window.location.pathname.match(/\/([a-zA-Z-]*)/g);
                        if (n instanceof Array)
                            if ("number" == typeof t.lookupFromPathIndex) {
                                if ("string" != typeof n[t.lookupFromPathIndex]) return;
                                e = n[t.lookupFromPathIndex].replace("/", "");
                            } else e = n[0].replace("/", "");
                    }
                    return e;
                },
            });
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 }),
            (e.default = {
                name: "subdomain",
                lookup: function (t) {
                    var e = void 0;
                    if ("undefined" != typeof window) {
                        var n = window.location.href.match(/(?:http[s]*\:\/\/)*(.*?)\.(?=[^\/]*\..{2,5})/gi);
                        n instanceof Array &&
                            (e =
                                "number" == typeof t.lookupFromSubdomainIndex
                                    ? n[t.lookupFromSubdomainIndex].replace("http://", "").replace("https://", "").replace(".", "")
                                    : n[0].replace("http://", "").replace("https://", "").replace(".", ""));
                    }
                    return e;
                },
            });
    },
    function (t, e, n) {
        (e = t.exports = n(1)(!1)).push([t.i, "@import url(https://fonts.googleapis.com/css?family=Nunito:400,600&display=swap);", ""]),
            e.push([
                t.i,
                ".src-components-current-track__articleCard--3w8R7 {\n  display: flex;\n  align-items: center;\n  padding: 15px;\n  background: white;\n  border-radius: 4px;\n  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.25);\n  font-family: Nunito, sans-serif;\n}\n\n.src-components-current-track__title-block--2bXfQ {\n  margin-top: auto;\n  overflow: hidden;\n}\n\n.src-components-current-track__title-block--2bXfQ > div {\n  white-space: nowrap;\n  text-overflow: ellipsis;\n  overflow: hidden;\n  line-height: 19px;\n}\n\n.src-components-current-track__image--LPqVW,\n.src-components-current-track__image--LPqVW svg {\n  height: 45px;\n  width: 45px;\n  margin-right: 15px;\n}\n\n.src-components-current-track__infos--36Xzl {\n  display: flex;\n  min-width: 0;\n  margin-right: 10px;\n}\n\n.src-components-current-track__title--23-Af {\n  color: #474747;\n  font-weight: 600;\n  font-size: 14px;\n}\n\n.src-components-current-track__artist--3AuZL {\n  color: #acacac;\n  font-size: 14px;\n  margin-top: 7px;\n}\n\n.src-components-current-track__buy--WJATd {\n  display: flex;\n  margin-left: auto;\n  align-self: center;\n  white-space: nowrap;\n}\n\n.src-components-current-track__buy--WJATd a {\n  padding: 0 12px;\n  margin-left: auto;\n  background-color: white;\n  border: 1px solid #d9d9d9;\n  border-radius: 4px;\n  box-shadow: 0 2px 4px 0 rgba(211, 211, 211, 0.5);\n  color: #474747;\n  text-decoration: none;\n  font-size: 14px;\n  box-sizing: content-box;\n  height: 33px;\n  display: flex;\n  align-items: center;\n}\n\n.src-components-current-track__icon-button--2a_Ph {\n  margin-right: 5px;\n}\n\n.src-components-current-track__icon-button--2a_Ph svg {\n  width: 13px;\n}\n",
                "",
            ]),
            (e.locals = {
                articleCard: "src-components-current-track__articleCard--3w8R7",
                "title-block": "src-components-current-track__title-block--2bXfQ",
                titleBlock: "src-components-current-track__title-block--2bXfQ",
                image: "src-components-current-track__image--LPqVW",
                infos: "src-components-current-track__infos--36Xzl",
                title: "src-components-current-track__title--23-Af",
                artist: "src-components-current-track__artist--3AuZL",
                buy: "src-components-current-track__buy--WJATd",
                "icon-button": "src-components-current-track__icon-button--2a_Ph",
                iconButton: "src-components-current-track__icon-button--2a_Ph",
            });
    },
    function (t, e) {
        t.exports = function (t) {
            var e = "undefined" != typeof window && window.location;
            if (!e) throw new Error("fixUrls requires window.location");
            if (!t || "string" != typeof t) return t;
            var n = e.protocol + "//" + e.host,
                r = n + e.pathname.replace(/\/[^\/]*$/, "/");
            return t.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi, function (t, e) {
                var o,
                    i = e
                        .trim()
                        .replace(/^"(.*)"$/, function (t, e) {
                            return e;
                        })
                        .replace(/^'(.*)'$/, function (t, e) {
                            return e;
                        });
                return /^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(i) ? t : ((o = 0 === i.indexOf("//") ? i : 0 === i.indexOf("/") ? n + i : r + i.replace(/^\.\//, "")), "url(" + JSON.stringify(o) + ")");
            });
        };
    },
    function (t, e, n) {
        (e = t.exports = n(1)(!1)).push([t.i, ".src-view-controllers-main__mainView--2SH1r {\n  width: 100%;\n  margin: 0 auto;\n}\n", ""]), (e.locals = { mainView: "src-view-controllers-main__mainView--2SH1r" });
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 });
        var r = n(30);
        e.fromFetch = function (t, e) {
            return new r.Observable(function (n) {
                var r,
                    o = new AbortController(),
                    i = o.signal,
                    s = !0,
                    a = !1;
                return (
                    e
                        ? (e.signal &&
                              ((r = function () {
                                  i.aborted || o.abort();
                              }),
                              e.signal.addEventListener("abort", r)),
                          (e.signal = i))
                        : (e = { signal: i }),
                    fetch(t, e)
                        .then(function (t) {
                            (s = !1), n.next(t), n.complete();
                        })
                        .catch(function (t) {
                            (s = !1), a || n.error(t);
                        }),
                    function () {
                        (a = !0), s && o.abort();
                    }
                );
            });
        };
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 });
        var r = n(31),
            o = n(36),
            i = n(37),
            s = n(38),
            a = n(4),
            u = (function () {
                function t(t) {
                    (this._isScalar = !1), t && (this._subscribe = t);
                }
                return (
                    (t.prototype.lift = function (e) {
                        var n = new t();
                        return (n.source = this), (n.operator = e), n;
                    }),
                    (t.prototype.subscribe = function (t, e, n) {
                        var r = this.operator,
                            i = o.toSubscriber(t, e, n);
                        if (
                            (r ? i.add(r.call(i, this.source)) : i.add(this.source || (a.config.useDeprecatedSynchronousErrorHandling && !i.syncErrorThrowable) ? this._subscribe(i) : this._trySubscribe(i)),
                            a.config.useDeprecatedSynchronousErrorHandling && i.syncErrorThrowable && ((i.syncErrorThrowable = !1), i.syncErrorThrown))
                        )
                            throw i.syncErrorValue;
                        return i;
                    }),
                    (t.prototype._trySubscribe = function (t) {
                        try {
                            return this._subscribe(t);
                        } catch (e) {
                            a.config.useDeprecatedSynchronousErrorHandling && ((t.syncErrorThrown = !0), (t.syncErrorValue = e)), r.canReportError(t) ? t.error(e) : console.warn(e);
                        }
                    }),
                    (t.prototype.forEach = function (t, e) {
                        var n = this;
                        return new (e = c(e))(function (e, r) {
                            var o;
                            o = n.subscribe(
                                function (e) {
                                    try {
                                        t(e);
                                    } catch (t) {
                                        r(t), o && o.unsubscribe();
                                    }
                                },
                                r,
                                e
                            );
                        });
                    }),
                    (t.prototype._subscribe = function (t) {
                        var e = this.source;
                        return e && e.subscribe(t);
                    }),
                    (t.prototype[i.observable] = function () {
                        return this;
                    }),
                    (t.prototype.pipe = function () {
                        for (var t = [], e = 0; e < arguments.length; e++) t[e] = arguments[e];
                        return 0 === t.length ? this : s.pipeFromArray(t)(this);
                    }),
                    (t.prototype.toPromise = function (t) {
                        var e = this;
                        return new (t = c(t))(function (t, n) {
                            var r;
                            e.subscribe(
                                function (t) {
                                    return (r = t);
                                },
                                function (t) {
                                    return n(t);
                                },
                                function () {
                                    return t(r);
                                }
                            );
                        });
                    }),
                    (t.create = function (e) {
                        return new t(e);
                    }),
                    t
                );
            })();
        function c(t) {
            if ((t || (t = a.config.Promise || Promise), !t)) throw new Error("no Promise impl found");
            return t;
        }
        e.Observable = u;
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 });
        var r = n(6);
        e.canReportError = function (t) {
            for (; t; ) {
                var e = t,
                    n = e.closed,
                    o = e.destination,
                    i = e.isStopped;
                if (n || i) return !1;
                t = o && o instanceof r.Subscriber ? o : null;
            }
            return !0;
        };
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 });
        var r = n(33),
            o = n(34),
            i = n(7),
            s = n(35),
            a = (function () {
                function t(t) {
                    (this.closed = !1), (this._parentOrParents = null), (this._subscriptions = null), t && (this._unsubscribe = t);
                }
                var e;
                return (
                    (t.prototype.unsubscribe = function () {
                        var e;
                        if (!this.closed) {
                            var n = this._parentOrParents,
                                a = this._unsubscribe,
                                c = this._subscriptions;
                            if (((this.closed = !0), (this._parentOrParents = null), (this._subscriptions = null), n instanceof t)) n.remove(this);
                            else if (null !== n)
                                for (var l = 0; l < n.length; ++l) {
                                    n[l].remove(this);
                                }
                            if (i.isFunction(a))
                                try {
                                    a.call(this);
                                } catch (t) {
                                    e = t instanceof s.UnsubscriptionError ? u(t.errors) : [t];
                                }
                            if (r.isArray(c)) {
                                l = -1;
                                for (var f = c.length; ++l < f; ) {
                                    var p = c[l];
                                    if (o.isObject(p))
                                        try {
                                            p.unsubscribe();
                                        } catch (t) {
                                            (e = e || []), t instanceof s.UnsubscriptionError ? (e = e.concat(u(t.errors))) : e.push(t);
                                        }
                                }
                            }
                            if (e) throw new s.UnsubscriptionError(e);
                        }
                    }),
                    (t.prototype.add = function (e) {
                        var n = e;
                        if (!e) return t.EMPTY;
                        switch (typeof e) {
                            case "function":
                                n = new t(e);
                            case "object":
                                if (n === this || n.closed || "function" != typeof n.unsubscribe) return n;
                                if (this.closed) return n.unsubscribe(), n;
                                if (!(n instanceof t)) {
                                    var r = n;
                                    (n = new t())._subscriptions = [r];
                                }
                                break;
                            default:
                                throw new Error("unrecognized teardown " + e + " added to Subscription.");
                        }
                        var o = n._parentOrParents;
                        if (null === o) n._parentOrParents = this;
                        else if (o instanceof t) {
                            if (o === this) return n;
                            n._parentOrParents = [o, this];
                        } else {
                            if (-1 !== o.indexOf(this)) return n;
                            o.push(this);
                        }
                        var i = this._subscriptions;
                        return null === i ? (this._subscriptions = [n]) : i.push(n), n;
                    }),
                    (t.prototype.remove = function (t) {
                        var e = this._subscriptions;
                        if (e) {
                            var n = e.indexOf(t);
                            -1 !== n && e.splice(n, 1);
                        }
                    }),
                    (t.EMPTY = (((e = new t()).closed = !0), e)),
                    t
                );
            })();
        function u(t) {
            return t.reduce(function (t, e) {
                return t.concat(e instanceof s.UnsubscriptionError ? e.errors : e);
            }, []);
        }
        e.Subscription = a;
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 }),
            (e.isArray =
                Array.isArray ||
                function (t) {
                    return t && "number" == typeof t.length;
                });
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 }),
            (e.isObject = function (t) {
                return null !== t && "object" == typeof t;
            });
    },
    function (t, e, n) {
        "use strict";
        function r(t) {
            return (
                Error.call(this),
                (this.message = t
                    ? t.length +
                      " errors occurred during unsubscription:\n" +
                      t
                          .map(function (t, e) {
                              return e + 1 + ") " + t.toString();
                          })
                          .join("\n  ")
                    : ""),
                (this.name = "UnsubscriptionError"),
                (this.errors = t),
                this
            );
        }
        Object.defineProperty(e, "__esModule", { value: !0 }), (r.prototype = Object.create(Error.prototype)), (e.UnsubscriptionError = r);
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 });
        var r = n(6),
            o = n(10),
            i = n(8);
        e.toSubscriber = function (t, e, n) {
            if (t) {
                if (t instanceof r.Subscriber) return t;
                if (t[o.rxSubscriber]) return t[o.rxSubscriber]();
            }
            return t || e || n ? new r.Subscriber(t, e, n) : new r.Subscriber(i.empty);
        };
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 }), (e.observable = ("function" == typeof Symbol && Symbol.observable) || "@@observable");
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 });
        var r = n(39);
        function o(t) {
            return t
                ? 1 === t.length
                    ? t[0]
                    : function (e) {
                          return t.reduce(function (t, e) {
                              return e(t);
                          }, e);
                      }
                : r.noop;
        }
        (e.pipe = function () {
            for (var t = [], e = 0; e < arguments.length; e++) t[e] = arguments[e];
            return o(t);
        }),
            (e.pipeFromArray = o);
    },
    function (t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", { value: !0 }), (e.noop = function () {});
    },
    function (t, e, n) {
        (e = t.exports = n(1)(!1)).push([
            t.i,
            ".src-components-loader__loader--3N_B4 {\n  border-radius: 50%;\n  width: 30px;\n  height: 30px;\n  animation: src-components-loader__spin--3W2vI 2s linear infinite;\n  border: 2px solid #474747;\n  border-top: 2px solid white;\n  display: flex;\n  margin: 20px auto;\n}\n\n@keyframes src-components-loader__spin--3W2vI {\n  0% {\n    transform: rotate(0deg);\n  }\n  100% {\n    transform: rotate(360deg);\n  }\n}\n",
            "",
        ]),
            (e.locals = { loader: "src-components-loader__loader--3N_B4", spin: "src-components-loader__spin--3W2vI" });
    },
    function (t, e, n) {
        var r = n(42);
        "string" == typeof r && (r = [[t.i, r, ""]]);
        var o = { hmr: !0, transform: void 0, insertInto: void 0 };
        n(2)(r, o);
        r.locals && (t.exports = r.locals);
    },
    function (t, e, n) {
        (t.exports = n(1)(!1)).push([t.i, "#app {\n  margin: 0;\n}\n", ""]);
    },
    function (t, e, n) {
        "use strict";
        n.r(e);
        var r = {
            searchParams: "URLSearchParams" in self,
            iterable: "Symbol" in self && "iterator" in Symbol,
            blob:
                "FileReader" in self &&
                "Blob" in self &&
                (function () {
                    try {
                        return new Blob(), !0;
                    } catch (t) {
                        return !1;
                    }
                })(),
            formData: "FormData" in self,
            arrayBuffer: "ArrayBuffer" in self,
        };
        if (r.arrayBuffer)
            var o = ["[object Int8Array]", "[object Uint8Array]", "[object Uint8ClampedArray]", "[object Int16Array]", "[object Uint16Array]", "[object Int32Array]", "[object Uint32Array]", "[object Float32Array]", "[object Float64Array]"],
                i =
                    ArrayBuffer.isView ||
                    function (t) {
                        return t && o.indexOf(Object.prototype.toString.call(t)) > -1;
                    };
        function s(t) {
            if (("string" != typeof t && (t = String(t)), /[^a-z0-9\-#$%&'*+.^_`|~]/i.test(t))) throw new TypeError("Invalid character in header field name");
            return t.toLowerCase();
        }
        function a(t) {
            return "string" != typeof t && (t = String(t)), t;
        }
        function u(t) {
            var e = {
                next: function () {
                    var e = t.shift();
                    return { done: void 0 === e, value: e };
                },
            };
            return (
                r.iterable &&
                    (e[Symbol.iterator] = function () {
                        return e;
                    }),
                e
            );
        }
        function c(t) {
            (this.map = {}),
                t instanceof c
                    ? t.forEach(function (t, e) {
                          this.append(e, t);
                      }, this)
                    : Array.isArray(t)
                    ? t.forEach(function (t) {
                          this.append(t[0], t[1]);
                      }, this)
                    : t &&
                      Object.getOwnPropertyNames(t).forEach(function (e) {
                          this.append(e, t[e]);
                      }, this);
        }
        function l(t) {
            if (t.bodyUsed) return Promise.reject(new TypeError("Already read"));
            t.bodyUsed = !0;
        }
        function f(t) {
            return new Promise(function (e, n) {
                (t.onload = function () {
                    e(t.result);
                }),
                    (t.onerror = function () {
                        n(t.error);
                    });
            });
        }
        function p(t) {
            var e = new FileReader(),
                n = f(e);
            return e.readAsArrayBuffer(t), n;
        }
        function h(t) {
            if (t.slice) return t.slice(0);
            var e = new Uint8Array(t.byteLength);
            return e.set(new Uint8Array(t)), e.buffer;
        }
        function d() {
            return (
                (this.bodyUsed = !1),
                (this._initBody = function (t) {
                    var e;
                    (this._bodyInit = t),
                        t
                            ? "string" == typeof t
                                ? (this._bodyText = t)
                                : r.blob && Blob.prototype.isPrototypeOf(t)
                                ? (this._bodyBlob = t)
                                : r.formData && FormData.prototype.isPrototypeOf(t)
                                ? (this._bodyFormData = t)
                                : r.searchParams && URLSearchParams.prototype.isPrototypeOf(t)
                                ? (this._bodyText = t.toString())
                                : r.arrayBuffer && r.blob && (e = t) && DataView.prototype.isPrototypeOf(e)
                                ? ((this._bodyArrayBuffer = h(t.buffer)), (this._bodyInit = new Blob([this._bodyArrayBuffer])))
                                : r.arrayBuffer && (ArrayBuffer.prototype.isPrototypeOf(t) || i(t))
                                ? (this._bodyArrayBuffer = h(t))
                                : (this._bodyText = t = Object.prototype.toString.call(t))
                            : (this._bodyText = ""),
                        this.headers.get("content-type") ||
                            ("string" == typeof t
                                ? this.headers.set("content-type", "text/plain;charset=UTF-8")
                                : this._bodyBlob && this._bodyBlob.type
                                ? this.headers.set("content-type", this._bodyBlob.type)
                                : r.searchParams && URLSearchParams.prototype.isPrototypeOf(t) && this.headers.set("content-type", "application/x-www-form-urlencoded;charset=UTF-8"));
                }),
                r.blob &&
                    ((this.blob = function () {
                        var t = l(this);
                        if (t) return t;
                        if (this._bodyBlob) return Promise.resolve(this._bodyBlob);
                        if (this._bodyArrayBuffer) return Promise.resolve(new Blob([this._bodyArrayBuffer]));
                        if (this._bodyFormData) throw new Error("could not read FormData body as blob");
                        return Promise.resolve(new Blob([this._bodyText]));
                    }),
                    (this.arrayBuffer = function () {
                        return this._bodyArrayBuffer ? l(this) || Promise.resolve(this._bodyArrayBuffer) : this.blob().then(p);
                    })),
                (this.text = function () {
                    var t,
                        e,
                        n,
                        r = l(this);
                    if (r) return r;
                    if (this._bodyBlob) return (t = this._bodyBlob), (e = new FileReader()), (n = f(e)), e.readAsText(t), n;
                    if (this._bodyArrayBuffer)
                        return Promise.resolve(
                            (function (t) {
                                for (var e = new Uint8Array(t), n = new Array(e.length), r = 0; r < e.length; r++) n[r] = String.fromCharCode(e[r]);
                                return n.join("");
                            })(this._bodyArrayBuffer)
                        );
                    if (this._bodyFormData) throw new Error("could not read FormData body as text");
                    return Promise.resolve(this._bodyText);
                }),
                r.formData &&
                    (this.formData = function () {
                        return this.text().then(b);
                    }),
                (this.json = function () {
                    return this.text().then(JSON.parse);
                }),
                this
            );
        }
        (c.prototype.append = function (t, e) {
            (t = s(t)), (e = a(e));
            var n = this.map[t];
            this.map[t] = n ? n + ", " + e : e;
        }),
            (c.prototype.delete = function (t) {
                delete this.map[s(t)];
            }),
            (c.prototype.get = function (t) {
                return (t = s(t)), this.has(t) ? this.map[t] : null;
            }),
            (c.prototype.has = function (t) {
                return this.map.hasOwnProperty(s(t));
            }),
            (c.prototype.set = function (t, e) {
                this.map[s(t)] = a(e);
            }),
            (c.prototype.forEach = function (t, e) {
                for (var n in this.map) this.map.hasOwnProperty(n) && t.call(e, this.map[n], n, this);
            }),
            (c.prototype.keys = function () {
                var t = [];
                return (
                    this.forEach(function (e, n) {
                        t.push(n);
                    }),
                    u(t)
                );
            }),
            (c.prototype.values = function () {
                var t = [];
                return (
                    this.forEach(function (e) {
                        t.push(e);
                    }),
                    u(t)
                );
            }),
            (c.prototype.entries = function () {
                var t = [];
                return (
                    this.forEach(function (e, n) {
                        t.push([n, e]);
                    }),
                    u(t)
                );
            }),
            r.iterable && (c.prototype[Symbol.iterator] = c.prototype.entries);
        var y = ["DELETE", "GET", "HEAD", "OPTIONS", "POST", "PUT"];
        function g(t, e) {
            var n,
                r,
                o = (e = e || {}).body;
            if (t instanceof g) {
                if (t.bodyUsed) throw new TypeError("Already read");
                (this.url = t.url),
                    (this.credentials = t.credentials),
                    e.headers || (this.headers = new c(t.headers)),
                    (this.method = t.method),
                    (this.mode = t.mode),
                    (this.signal = t.signal),
                    o || null == t._bodyInit || ((o = t._bodyInit), (t.bodyUsed = !0));
            } else this.url = String(t);
            if (
                ((this.credentials = e.credentials || this.credentials || "same-origin"),
                (!e.headers && this.headers) || (this.headers = new c(e.headers)),
                (this.method = ((n = e.method || this.method || "GET"), (r = n.toUpperCase()), y.indexOf(r) > -1 ? r : n)),
                (this.mode = e.mode || this.mode || null),
                (this.signal = e.signal || this.signal),
                (this.referrer = null),
                ("GET" === this.method || "HEAD" === this.method) && o)
            )
                throw new TypeError("Body not allowed for GET or HEAD requests");
            this._initBody(o);
        }
        function b(t) {
            var e = new FormData();
            return (
                t
                    .trim()
                    .split("&")
                    .forEach(function (t) {
                        if (t) {
                            var n = t.split("="),
                                r = n.shift().replace(/\+/g, " "),
                                o = n.join("=").replace(/\+/g, " ");
                            e.append(decodeURIComponent(r), decodeURIComponent(o));
                        }
                    }),
                e
            );
        }
        function v(t, e) {
            e || (e = {}),
                (this.type = "default"),
                (this.status = void 0 === e.status ? 200 : e.status),
                (this.ok = this.status >= 200 && this.status < 300),
                (this.statusText = "statusText" in e ? e.statusText : "OK"),
                (this.headers = new c(e.headers)),
                (this.url = e.url || ""),
                this._initBody(t);
        }
        (g.prototype.clone = function () {
            return new g(this, { body: this._bodyInit });
        }),
            d.call(g.prototype),
            d.call(v.prototype),
            (v.prototype.clone = function () {
                return new v(this._bodyInit, { status: this.status, statusText: this.statusText, headers: new c(this.headers), url: this.url });
            }),
            (v.error = function () {
                var t = new v(null, { status: 0, statusText: "" });
                return (t.type = "error"), t;
            });
        var m = [301, 302, 303, 307, 308];
        v.redirect = function (t, e) {
            if (-1 === m.indexOf(e)) throw new RangeError("Invalid status code");
            return new v(null, { status: e, headers: { location: t } });
        };
        var w = self.DOMException;
        try {
            new w();
        } catch (t) {
            ((w = function (t, e) {
                (this.message = t), (this.name = e);
                var n = Error(t);
                this.stack = n.stack;
            }).prototype = Object.create(Error.prototype)),
                (w.prototype.constructor = w);
        }
        function _(t, e) {
            return new Promise(function (n, o) {
                var i = new g(t, e);
                if (i.signal && i.signal.aborted) return o(new w("Aborted", "AbortError"));
                var s = new XMLHttpRequest();
                function a() {
                    s.abort();
                }
                (s.onload = function () {
                    var t,
                        e,
                        r = {
                            status: s.status,
                            statusText: s.statusText,
                            headers:
                                ((t = s.getAllResponseHeaders() || ""),
                                (e = new c()),
                                t
                                    .replace(/\r?\n[\t ]+/g, " ")
                                    .split(/\r?\n/)
                                    .forEach(function (t) {
                                        var n = t.split(":"),
                                            r = n.shift().trim();
                                        if (r) {
                                            var o = n.join(":").trim();
                                            e.append(r, o);
                                        }
                                    }),
                                e),
                        };
                    r.url = "responseURL" in s ? s.responseURL : r.headers.get("X-Request-URL");
                    var o = "response" in s ? s.response : s.responseText;
                    n(new v(o, r));
                }),
                    (s.onerror = function () {
                        o(new TypeError("Network request failed"));
                    }),
                    (s.ontimeout = function () {
                        o(new TypeError("Network request failed"));
                    }),
                    (s.onabort = function () {
                        o(new w("Aborted", "AbortError"));
                    }),
                    s.open(i.method, i.url, !0),
                    "include" === i.credentials ? (s.withCredentials = !0) : "omit" === i.credentials && (s.withCredentials = !1),
                    "responseType" in s && r.blob && (s.responseType = "blob"),
                    i.headers.forEach(function (t, e) {
                        s.setRequestHeader(e, t);
                    }),
                    i.signal &&
                        (i.signal.addEventListener("abort", a),
                        (s.onreadystatechange = function () {
                            4 === s.readyState && i.signal.removeEventListener("abort", a);
                        })),
                    s.send(void 0 === i._bodyInit ? null : i._bodyInit);
            });
        }
        (_.polyfill = !0), self.fetch || ((self.fetch = _), (self.Headers = c), (self.Request = g), (self.Response = v));
        var x = n(5);
        function k(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                (r.enumerable = r.enumerable || !1), (r.configurable = !0), "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r);
            }
        }
        function S(t, e, n) {
            return e in t ? Object.defineProperty(t, e, { value: n, enumerable: !0, configurable: !0, writable: !0 }) : (t[e] = n), t;
        }
        var O = (function () {
            function t() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                    n = e.elementType,
                    r = void 0 === n ? "div" : n,
                    o = e.className,
                    i = void 0 === o ? "component" : o;
                !(function (t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
                })(this, t),
                    S(this, "$element", void 0),
                    S(this, "children", void 0),
                    S(this, "displayType", void 0),
                    (this.$element = document.createElement(r)),
                    (this.$element.className = i),
                    (this.children = []),
                    (this.displayType = this.$element.style.display);
            }
            var e, n, r;
            return (
                (e = t),
                (n = [
                    {
                        key: "add",
                        value: function (t) {
                            this.$element.appendChild(t.$element), this.children.push(t);
                        },
                    },
                    {
                        key: "remove",
                        value: function (t) {
                            var e = this.children.indexOf(t);
                            if (e < 0) throw new Error("Cannot remove component.");
                            this.children.splice(e, 1), this.$element.removeChild(t.$element);
                        },
                    },
                    {
                        key: "clear",
                        value: function () {
                            for (; this.children.length; ) {
                                var t = this.children.pop();
                                t && this.$element.removeChild(t.$element);
                            }
                        },
                    },
                    {
                        key: "show",
                        value: function (t) {
                            var e = t || this.displayType || "block";
                            this.$element.style.display = "none" === e ? "block" : e;
                        },
                    },
                    {
                        key: "hide",
                        value: function () {
                            (this.displayType = this.$element.style.display), (this.$element.style.display = "none");
                        },
                    },
                    {
                        key: "updateText",
                        value: function (t) {
                            this.$element.innerText = t;
                        },
                    },
                    {
                        key: "updateHtml",
                        value: function (t) {
                            x.setConfig({ ADD_ATTR: ["target", "onchange"] }), (this.$element.innerHTML = x.sanitize(t));
                        },
                    },
                ]) && k(e.prototype, n),
                r && k(e, r),
                t
            );
        })();
        function E(t) {
            return (E =
                "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
                    ? function (t) {
                          return typeof t;
                      }
                    : function (t) {
                          return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t;
                      })(t);
        }
        function T(t) {
            return (T =
                "function" == typeof Symbol && "symbol" === E(Symbol.iterator)
                    ? function (t) {
                          return E(t);
                      }
                    : function (t) {
                          return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : E(t);
                      })(t);
        }
        function A(t, e, n) {
            return e in t ? Object.defineProperty(t, e, { value: n, enumerable: !0, configurable: !0, writable: !0 }) : (t[e] = n), t;
        }
        function j(t) {
            for (var e = 1; e < arguments.length; e++) {
                var n = null != arguments[e] ? arguments[e] : {},
                    r = Object.keys(n);
                "function" == typeof Object.getOwnPropertySymbols &&
                    (r = r.concat(
                        Object.getOwnPropertySymbols(n).filter(function (t) {
                            return Object.getOwnPropertyDescriptor(n, t).enumerable;
                        })
                    )),
                    r.forEach(function (e) {
                        A(t, e, n[e]);
                    });
            }
            return t;
        }
        function P(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
        }
        function L(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                (r.enumerable = r.enumerable || !1), (r.configurable = !0), "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r);
            }
        }
        function R(t, e, n) {
            return e && L(t.prototype, e), n && L(t, n), t;
        }
        function C(t) {
            if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return t;
        }
        function N(t, e) {
            return !e || ("object" !== T(e) && "function" != typeof e) ? C(t) : e;
        }
        function M(t) {
            return (M = Object.setPrototypeOf
                ? Object.getPrototypeOf
                : function (t) {
                      return t.__proto__ || Object.getPrototypeOf(t);
                  })(t);
        }
        function D(t, e) {
            return (D =
                Object.setPrototypeOf ||
                function (t, e) {
                    return (t.__proto__ = e), t;
                })(t, e);
        }
        function U(t, e) {
            if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
            (t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } })), e && D(t, e);
        }
        function F(t) {
            return (
                (function (t) {
                    if (Array.isArray(t)) {
                        for (var e = 0, n = new Array(t.length); e < t.length; e++) n[e] = t[e];
                        return n;
                    }
                })(t) ||
                (function (t) {
                    if (Symbol.iterator in Object(t) || "[object Arguments]" === Object.prototype.toString.call(t)) return Array.from(t);
                })(t) ||
                (function () {
                    throw new TypeError("Invalid attempt to spread non-iterable instance");
                })()
            );
        }
        function H(t, e) {
            return (
                (function (t) {
                    if (Array.isArray(t)) return t;
                })(t) ||
                (function (t, e) {
                    if (Symbol.iterator in Object(t) || "[object Arguments]" === Object.prototype.toString.call(t)) {
                        var n = [],
                            r = !0,
                            o = !1,
                            i = void 0;
                        try {
                            for (var s, a = t[Symbol.iterator](); !(r = (s = a.next()).done) && (n.push(s.value), !e || n.length !== e); r = !0);
                        } catch (t) {
                            (o = !0), (i = t);
                        } finally {
                            try {
                                r || null == a.return || a.return();
                            } finally {
                                if (o) throw i;
                            }
                        }
                        return n;
                    }
                })(t, e) ||
                (function () {
                    throw new TypeError("Invalid attempt to destructure non-iterable instance");
                })()
            );
        }
        var B = {
                type: "logger",
                log: function (t) {
                    this.output("log", t);
                },
                warn: function (t) {
                    this.output("warn", t);
                },
                error: function (t) {
                    this.output("error", t);
                },
                output: function (t, e) {
                    var n;
                    console && console[t] && (n = console)[t].apply(n, F(e));
                },
            },
            I = new ((function () {
                function t(e) {
                    var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                    P(this, t), this.init(e, n);
                }
                return (
                    R(t, [
                        {
                            key: "init",
                            value: function (t) {
                                var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                                (this.prefix = e.prefix || "i18next:"), (this.logger = t || B), (this.options = e), (this.debug = e.debug);
                            },
                        },
                        {
                            key: "setDebug",
                            value: function (t) {
                                this.debug = t;
                            },
                        },
                        {
                            key: "log",
                            value: function () {
                                for (var t = arguments.length, e = new Array(t), n = 0; n < t; n++) e[n] = arguments[n];
                                return this.forward(e, "log", "", !0);
                            },
                        },
                        {
                            key: "warn",
                            value: function () {
                                for (var t = arguments.length, e = new Array(t), n = 0; n < t; n++) e[n] = arguments[n];
                                return this.forward(e, "warn", "", !0);
                            },
                        },
                        {
                            key: "error",
                            value: function () {
                                for (var t = arguments.length, e = new Array(t), n = 0; n < t; n++) e[n] = arguments[n];
                                return this.forward(e, "error", "");
                            },
                        },
                        {
                            key: "deprecate",
                            value: function () {
                                for (var t = arguments.length, e = new Array(t), n = 0; n < t; n++) e[n] = arguments[n];
                                return this.forward(e, "warn", "WARNING DEPRECATED: ", !0);
                            },
                        },
                        {
                            key: "forward",
                            value: function (t, e, n, r) {
                                return r && !this.debug ? null : ("string" == typeof t[0] && (t[0] = "".concat(n).concat(this.prefix, " ").concat(t[0])), this.logger[e](t));
                            },
                        },
                        {
                            key: "create",
                            value: function (e) {
                                return new t(this.logger, j({}, { prefix: "".concat(this.prefix, ":").concat(e, ":") }, this.options));
                            },
                        },
                    ]),
                    t
                );
            })())(),
            V = (function () {
                function t() {
                    P(this, t), (this.observers = {});
                }
                return (
                    R(t, [
                        {
                            key: "on",
                            value: function (t, e) {
                                var n = this;
                                return (
                                    t.split(" ").forEach(function (t) {
                                        (n.observers[t] = n.observers[t] || []), n.observers[t].push(e);
                                    }),
                                    this
                                );
                            },
                        },
                        {
                            key: "off",
                            value: function (t, e) {
                                this.observers[t] &&
                                    (e
                                        ? (this.observers[t] = this.observers[t].filter(function (t) {
                                              return t !== e;
                                          }))
                                        : delete this.observers[t]);
                            },
                        },
                        {
                            key: "emit",
                            value: function (t) {
                                for (var e = arguments.length, n = new Array(e > 1 ? e - 1 : 0), r = 1; r < e; r++) n[r - 1] = arguments[r];
                                if (this.observers[t]) {
                                    var o = [].concat(this.observers[t]);
                                    o.forEach(function (t) {
                                        t.apply(void 0, n);
                                    });
                                }
                                if (this.observers["*"]) {
                                    var i = [].concat(this.observers["*"]);
                                    i.forEach(function (e) {
                                        e.apply(e, [t].concat(n));
                                    });
                                }
                            },
                        },
                    ]),
                    t
                );
            })();
        function z() {
            var t,
                e,
                n = new Promise(function (n, r) {
                    (t = n), (e = r);
                });
            return (n.resolve = t), (n.reject = e), n;
        }
        function q(t) {
            return null == t ? "" : "" + t;
        }
        function W(t, e, n) {
            function r(t) {
                return t && t.indexOf("###") > -1 ? t.replace(/###/g, ".") : t;
            }
            function o() {
                return !t || "string" == typeof t;
            }
            for (var i = "string" != typeof e ? [].concat(e) : e.split("."); i.length > 1; ) {
                if (o()) return {};
                var s = r(i.shift());
                !t[s] && n && (t[s] = new n()), (t = t[s]);
            }
            return o() ? {} : { obj: t, k: r(i.shift()) };
        }
        function $(t, e, n) {
            var r = W(t, e, Object);
            r.obj[r.k] = n;
        }
        function K(t, e) {
            var n = W(t, e),
                r = n.obj,
                o = n.k;
            if (r) return r[o];
        }
        function G(t, e, n) {
            var r = K(t, n);
            return void 0 !== r ? r : K(e, n);
        }
        function Y(t, e, n) {
            for (var r in e) r in t ? ("string" == typeof t[r] || t[r] instanceof String || "string" == typeof e[r] || e[r] instanceof String ? n && (t[r] = e[r]) : Y(t[r], e[r], n)) : (t[r] = e[r]);
            return t;
        }
        function J(t) {
            return t.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
        }
        var X = { "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;", "/": "&#x2F;" };
        function Q(t) {
            return "string" == typeof t
                ? t.replace(/[&<>"'\/]/g, function (t) {
                      return X[t];
                  })
                : t;
        }
        var Z = (function (t) {
                function e(t) {
                    var n,
                        r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : { ns: ["translation"], defaultNS: "translation" };
                    return P(this, e), (n = N(this, M(e).call(this))), V.call(C(n)), (n.data = t || {}), (n.options = r), void 0 === n.options.keySeparator && (n.options.keySeparator = "."), n;
                }
                return (
                    U(e, V),
                    R(e, [
                        {
                            key: "addNamespaces",
                            value: function (t) {
                                this.options.ns.indexOf(t) < 0 && this.options.ns.push(t);
                            },
                        },
                        {
                            key: "removeNamespaces",
                            value: function (t) {
                                var e = this.options.ns.indexOf(t);
                                e > -1 && this.options.ns.splice(e, 1);
                            },
                        },
                        {
                            key: "getResource",
                            value: function (t, e, n) {
                                var r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : {},
                                    o = void 0 !== r.keySeparator ? r.keySeparator : this.options.keySeparator,
                                    i = [t, e];
                                return n && "string" != typeof n && (i = i.concat(n)), n && "string" == typeof n && (i = i.concat(o ? n.split(o) : n)), t.indexOf(".") > -1 && (i = t.split(".")), K(this.data, i);
                            },
                        },
                        {
                            key: "addResource",
                            value: function (t, e, n, r) {
                                var o = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : { silent: !1 },
                                    i = this.options.keySeparator;
                                void 0 === i && (i = ".");
                                var s = [t, e];
                                n && (s = s.concat(i ? n.split(i) : n)), t.indexOf(".") > -1 && ((r = e), (e = (s = t.split("."))[1])), this.addNamespaces(e), $(this.data, s, r), o.silent || this.emit("added", t, e, n, r);
                            },
                        },
                        {
                            key: "addResources",
                            value: function (t, e, n) {
                                var r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : { silent: !1 };
                                for (var o in n) ("string" != typeof n[o] && "[object Array]" !== Object.prototype.toString.apply(n[o])) || this.addResource(t, e, o, n[o], { silent: !0 });
                                r.silent || this.emit("added", t, e, n);
                            },
                        },
                        {
                            key: "addResourceBundle",
                            value: function (t, e, n, r, o) {
                                var i = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : { silent: !1 },
                                    s = [t, e];
                                t.indexOf(".") > -1 && ((r = n), (n = e), (e = (s = t.split("."))[1])), this.addNamespaces(e);
                                var a = K(this.data, s) || {};
                                r ? Y(a, n, o) : (a = j({}, a, n)), $(this.data, s, a), i.silent || this.emit("added", t, e, n);
                            },
                        },
                        {
                            key: "removeResourceBundle",
                            value: function (t, e) {
                                this.hasResourceBundle(t, e) && delete this.data[t][e], this.removeNamespaces(e), this.emit("removed", t, e);
                            },
                        },
                        {
                            key: "hasResourceBundle",
                            value: function (t, e) {
                                return void 0 !== this.getResource(t, e);
                            },
                        },
                        {
                            key: "getResourceBundle",
                            value: function (t, e) {
                                return e || (e = this.options.defaultNS), "v1" === this.options.compatibilityAPI ? j({}, {}, this.getResource(t, e)) : this.getResource(t, e);
                            },
                        },
                        {
                            key: "getDataByLanguage",
                            value: function (t) {
                                return this.data[t];
                            },
                        },
                        {
                            key: "toJSON",
                            value: function () {
                                return this.data;
                            },
                        },
                    ]),
                    e
                );
            })(),
            tt = {
                processors: {},
                addPostProcessor: function (t) {
                    this.processors[t.name] = t;
                },
                handle: function (t, e, n, r, o) {
                    var i = this;
                    return (
                        t.forEach(function (t) {
                            i.processors[t] && (e = i.processors[t].process(e, n, r, o));
                        }),
                        e
                    );
                },
            },
            et = (function (t) {
                function e(t) {
                    var n,
                        r,
                        o,
                        i,
                        s = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                    return (
                        P(this, e),
                        (n = N(this, M(e).call(this))),
                        V.call(C(n)),
                        (r = ["resourceStore", "languageUtils", "pluralResolver", "interpolator", "backendConnector", "i18nFormat", "utils"]),
                        (o = t),
                        (i = C(n)),
                        r.forEach(function (t) {
                            o[t] && (i[t] = o[t]);
                        }),
                        (n.options = s),
                        void 0 === n.options.keySeparator && (n.options.keySeparator = "."),
                        (n.logger = I.create("translator")),
                        n
                    );
                }
                return (
                    U(e, V),
                    R(e, [
                        {
                            key: "changeLanguage",
                            value: function (t) {
                                t && (this.language = t);
                            },
                        },
                        {
                            key: "exists",
                            value: function (t) {
                                var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : { interpolation: {} },
                                    n = this.resolve(t, e);
                                return n && void 0 !== n.res;
                            },
                        },
                        {
                            key: "extractFromKey",
                            value: function (t, e) {
                                var n = e.nsSeparator || this.options.nsSeparator;
                                void 0 === n && (n = ":");
                                var r = void 0 !== e.keySeparator ? e.keySeparator : this.options.keySeparator,
                                    o = e.ns || this.options.defaultNS;
                                if (n && t.indexOf(n) > -1) {
                                    var i = t.split(n);
                                    (n !== r || (n === r && this.options.ns.indexOf(i[0]) > -1)) && (o = i.shift()), (t = i.join(r));
                                }
                                return "string" == typeof o && (o = [o]), { key: t, namespaces: o };
                            },
                        },
                        {
                            key: "translate",
                            value: function (t, e) {
                                var n = this;
                                if (("object" !== T(e) && this.options.overloadTranslationOptionHandler && (e = this.options.overloadTranslationOptionHandler(arguments)), e || (e = {}), null == t)) return "";
                                Array.isArray(t) || (t = [String(t)]);
                                var r = void 0 !== e.keySeparator ? e.keySeparator : this.options.keySeparator,
                                    o = this.extractFromKey(t[t.length - 1], e),
                                    i = o.key,
                                    s = o.namespaces,
                                    a = s[s.length - 1],
                                    u = e.lng || this.language,
                                    c = e.appendNamespaceToCIMode || this.options.appendNamespaceToCIMode;
                                if (u && "cimode" === u.toLowerCase()) {
                                    if (c) {
                                        var l = e.nsSeparator || this.options.nsSeparator;
                                        return a + l + i;
                                    }
                                    return i;
                                }
                                var f = this.resolve(t, e),
                                    p = f && f.res,
                                    h = (f && f.usedKey) || i,
                                    d = (f && f.exactUsedKey) || i,
                                    y = Object.prototype.toString.apply(p),
                                    g = ["[object Number]", "[object Function]", "[object RegExp]"],
                                    b = void 0 !== e.joinArrays ? e.joinArrays : this.options.joinArrays,
                                    v = !this.i18nFormat || this.i18nFormat.handleAsObject,
                                    m = "string" != typeof p && "boolean" != typeof p && "number" != typeof p;
                                if (v && p && m && g.indexOf(y) < 0 && ("string" != typeof b || "[object Array]" !== y)) {
                                    if (!e.returnObjects && !this.options.returnObjects)
                                        return (
                                            this.logger.warn("accessing an object - but returnObjects options is not enabled!"),
                                            this.options.returnedObjectHandler ? this.options.returnedObjectHandler(h, p, e) : "key '".concat(i, " (").concat(this.language, ")' returned an object instead of string.")
                                        );
                                    if (r) {
                                        var w = "[object Array]" === y,
                                            _ = w ? [] : {},
                                            x = w ? d : h;
                                        for (var k in p)
                                            if (Object.prototype.hasOwnProperty.call(p, k)) {
                                                var S = "".concat(x).concat(r).concat(k);
                                                (_[k] = this.translate(S, j({}, e, { joinArrays: !1, ns: s }))), _[k] === S && (_[k] = p[k]);
                                            }
                                        p = _;
                                    }
                                } else if (v && "string" == typeof b && "[object Array]" === y) (p = p.join(b)) && (p = this.extendTranslation(p, t, e));
                                else {
                                    var O = !1,
                                        E = !1;
                                    if (!this.isValidLookup(p) && void 0 !== e.defaultValue) {
                                        if (((O = !0), void 0 !== e.count)) {
                                            var A = this.pluralResolver.getSuffix(u, e.count);
                                            p = e["defaultValue".concat(A)];
                                        }
                                        p || (p = e.defaultValue);
                                    }
                                    this.isValidLookup(p) || ((E = !0), (p = i));
                                    var P = e.defaultValue && e.defaultValue !== p && this.options.updateMissing;
                                    if (E || O || P) {
                                        this.logger.log(P ? "updateKey" : "missingKey", u, a, i, P ? e.defaultValue : p);
                                        var L = [],
                                            R = this.languageUtils.getFallbackCodes(this.options.fallbackLng, e.lng || this.language);
                                        if ("fallback" === this.options.saveMissingTo && R && R[0]) for (var C = 0; C < R.length; C++) L.push(R[C]);
                                        else "all" === this.options.saveMissingTo ? (L = this.languageUtils.toResolveHierarchy(e.lng || this.language)) : L.push(e.lng || this.language);
                                        var N = function (t, r) {
                                            n.options.missingKeyHandler
                                                ? n.options.missingKeyHandler(t, a, r, P ? e.defaultValue : p, P, e)
                                                : n.backendConnector && n.backendConnector.saveMissing && n.backendConnector.saveMissing(t, a, r, P ? e.defaultValue : p, P, e),
                                                n.emit("missingKey", t, a, r, p);
                                        };
                                        if (this.options.saveMissing) {
                                            var M = void 0 !== e.count && "string" != typeof e.count;
                                            this.options.saveMissingPlurals && M
                                                ? L.forEach(function (t) {
                                                      n.pluralResolver.getPluralFormsOfKey(t, i).forEach(function (e) {
                                                          return N([t], e);
                                                      });
                                                  })
                                                : N(L, i);
                                        }
                                    }
                                    (p = this.extendTranslation(p, t, e, f)),
                                        E && p === i && this.options.appendNamespaceToMissingKey && (p = "".concat(a, ":").concat(i)),
                                        E && this.options.parseMissingKeyHandler && (p = this.options.parseMissingKeyHandler(p));
                                }
                                return p;
                            },
                        },
                        {
                            key: "extendTranslation",
                            value: function (t, e, n, r) {
                                var o = this;
                                if (this.i18nFormat && this.i18nFormat.parse) t = this.i18nFormat.parse(t, n, r.usedLng, r.usedNS, r.usedKey, { resolved: r });
                                else if (!n.skipInterpolation) {
                                    n.interpolation && this.interpolator.init(j({}, n, { interpolation: j({}, this.options.interpolation, n.interpolation) }));
                                    var i = n.replace && "string" != typeof n.replace ? n.replace : n;
                                    this.options.interpolation.defaultVariables && (i = j({}, this.options.interpolation.defaultVariables, i)),
                                        (t = this.interpolator.interpolate(t, i, n.lng || this.language, n)),
                                        !1 !== n.nest &&
                                            (t = this.interpolator.nest(
                                                t,
                                                function () {
                                                    return o.translate.apply(o, arguments);
                                                },
                                                n
                                            )),
                                        n.interpolation && this.interpolator.reset();
                                }
                                var s = n.postProcess || this.options.postProcess,
                                    a = "string" == typeof s ? [s] : s;
                                return null != t && a && a.length && !1 !== n.applyPostProcessor && (t = tt.handle(a, t, e, this.options && this.options.postProcessPassResolved ? j({ i18nResolved: r }, n) : n, this)), t;
                            },
                        },
                        {
                            key: "resolve",
                            value: function (t) {
                                var e,
                                    n,
                                    r,
                                    o,
                                    i,
                                    s = this,
                                    a = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                                return (
                                    "string" == typeof t && (t = [t]),
                                    t.forEach(function (t) {
                                        if (!s.isValidLookup(e)) {
                                            var u = s.extractFromKey(t, a),
                                                c = u.key;
                                            n = c;
                                            var l = u.namespaces;
                                            s.options.fallbackNS && (l = l.concat(s.options.fallbackNS));
                                            var f = void 0 !== a.count && "string" != typeof a.count,
                                                p = void 0 !== a.context && "string" == typeof a.context && "" !== a.context,
                                                h = a.lngs ? a.lngs : s.languageUtils.toResolveHierarchy(a.lng || s.language, a.fallbackLng);
                                            l.forEach(function (t) {
                                                s.isValidLookup(e) ||
                                                    ((i = t),
                                                    s.utils &&
                                                        s.utils.hasLoadedNamespace &&
                                                        !s.utils.hasLoadedNamespace(i) &&
                                                        s.logger.warn(
                                                            'key "'.concat(n, '" for namespace "').concat(i, "\" won't get resolved as namespace was not yet loaded"),
                                                            "This means something IS WRONG in your application setup. You access the t function before i18next.init / i18next.loadNamespace / i18next.changeLanguage was done. Wait for the callback or Promise to resolve before accessing it!!!"
                                                        ),
                                                    h.forEach(function (n) {
                                                        if (!s.isValidLookup(e)) {
                                                            o = n;
                                                            var i,
                                                                u,
                                                                l = c,
                                                                h = [l];
                                                            if (s.i18nFormat && s.i18nFormat.addLookupKeys) s.i18nFormat.addLookupKeys(h, c, n, t, a);
                                                            else f && (i = s.pluralResolver.getSuffix(n, a.count)), f && p && h.push(l + i), p && h.push((l += "".concat(s.options.contextSeparator).concat(a.context))), f && h.push((l += i));
                                                            for (; (u = h.pop()); ) s.isValidLookup(e) || ((r = u), (e = s.getResource(n, t, u, a)));
                                                        }
                                                    }));
                                            });
                                        }
                                    }),
                                    { res: e, usedKey: n, exactUsedKey: r, usedLng: o, usedNS: i }
                                );
                            },
                        },
                        {
                            key: "isValidLookup",
                            value: function (t) {
                                return !(void 0 === t || (!this.options.returnNull && null === t) || (!this.options.returnEmptyString && "" === t));
                            },
                        },
                        {
                            key: "getResource",
                            value: function (t, e, n) {
                                var r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : {};
                                return this.i18nFormat && this.i18nFormat.getResource ? this.i18nFormat.getResource(t, e, n, r) : this.resourceStore.getResource(t, e, n, r);
                            },
                        },
                    ]),
                    e
                );
            })();
        function nt(t) {
            return t.charAt(0).toUpperCase() + t.slice(1);
        }
        var rt = (function () {
                function t(e) {
                    P(this, t), (this.options = e), (this.whitelist = this.options.whitelist || !1), (this.logger = I.create("languageUtils"));
                }
                return (
                    R(t, [
                        {
                            key: "getScriptPartFromCode",
                            value: function (t) {
                                if (!t || t.indexOf("-") < 0) return null;
                                var e = t.split("-");
                                return 2 === e.length ? null : (e.pop(), this.formatLanguageCode(e.join("-")));
                            },
                        },
                        {
                            key: "getLanguagePartFromCode",
                            value: function (t) {
                                if (!t || t.indexOf("-") < 0) return t;
                                var e = t.split("-");
                                return this.formatLanguageCode(e[0]);
                            },
                        },
                        {
                            key: "formatLanguageCode",
                            value: function (t) {
                                if ("string" == typeof t && t.indexOf("-") > -1) {
                                    var e = ["hans", "hant", "latn", "cyrl", "cans", "mong", "arab"],
                                        n = t.split("-");
                                    return (
                                        this.options.lowerCaseLng
                                            ? (n = n.map(function (t) {
                                                  return t.toLowerCase();
                                              }))
                                            : 2 === n.length
                                            ? ((n[0] = n[0].toLowerCase()), (n[1] = n[1].toUpperCase()), e.indexOf(n[1].toLowerCase()) > -1 && (n[1] = nt(n[1].toLowerCase())))
                                            : 3 === n.length &&
                                              ((n[0] = n[0].toLowerCase()),
                                              2 === n[1].length && (n[1] = n[1].toUpperCase()),
                                              "sgn" !== n[0] && 2 === n[2].length && (n[2] = n[2].toUpperCase()),
                                              e.indexOf(n[1].toLowerCase()) > -1 && (n[1] = nt(n[1].toLowerCase())),
                                              e.indexOf(n[2].toLowerCase()) > -1 && (n[2] = nt(n[2].toLowerCase()))),
                                        n.join("-")
                                    );
                                }
                                return this.options.cleanCode || this.options.lowerCaseLng ? t.toLowerCase() : t;
                            },
                        },
                        {
                            key: "isWhitelisted",
                            value: function (t) {
                                return ("languageOnly" === this.options.load || this.options.nonExplicitWhitelist) && (t = this.getLanguagePartFromCode(t)), !this.whitelist || !this.whitelist.length || this.whitelist.indexOf(t) > -1;
                            },
                        },
                        {
                            key: "getFallbackCodes",
                            value: function (t, e) {
                                if (!t) return [];
                                if (("string" == typeof t && (t = [t]), "[object Array]" === Object.prototype.toString.apply(t))) return t;
                                if (!e) return t.default || [];
                                var n = t[e];
                                return n || (n = t[this.getScriptPartFromCode(e)]), n || (n = t[this.formatLanguageCode(e)]), n || (n = t.default), n || [];
                            },
                        },
                        {
                            key: "toResolveHierarchy",
                            value: function (t, e) {
                                var n = this,
                                    r = this.getFallbackCodes(e || this.options.fallbackLng || [], t),
                                    o = [],
                                    i = function (t) {
                                        t && (n.isWhitelisted(t) ? o.push(t) : n.logger.warn("rejecting non-whitelisted language code: ".concat(t)));
                                    };
                                return (
                                    "string" == typeof t && t.indexOf("-") > -1
                                        ? ("languageOnly" !== this.options.load && i(this.formatLanguageCode(t)),
                                          "languageOnly" !== this.options.load && "currentOnly" !== this.options.load && i(this.getScriptPartFromCode(t)),
                                          "currentOnly" !== this.options.load && i(this.getLanguagePartFromCode(t)))
                                        : "string" == typeof t && i(this.formatLanguageCode(t)),
                                    r.forEach(function (t) {
                                        o.indexOf(t) < 0 && i(n.formatLanguageCode(t));
                                    }),
                                    o
                                );
                            },
                        },
                    ]),
                    t
                );
            })(),
            ot = [
                { lngs: ["ach", "ak", "am", "arn", "br", "fil", "gun", "ln", "mfe", "mg", "mi", "oc", "pt", "pt-BR", "tg", "ti", "tr", "uz", "wa"], nr: [1, 2], fc: 1 },
                {
                    lngs: [
                        "af",
                        "an",
                        "ast",
                        "az",
                        "bg",
                        "bn",
                        "ca",
                        "da",
                        "de",
                        "dev",
                        "el",
                        "en",
                        "eo",
                        "es",
                        "et",
                        "eu",
                        "fi",
                        "fo",
                        "fur",
                        "fy",
                        "gl",
                        "gu",
                        "ha",
                        "hi",
                        "hu",
                        "hy",
                        "ia",
                        "it",
                        "kn",
                        "ku",
                        "lb",
                        "mai",
                        "ml",
                        "mn",
                        "mr",
                        "nah",
                        "nap",
                        "nb",
                        "ne",
                        "nl",
                        "nn",
                        "no",
                        "nso",
                        "pa",
                        "pap",
                        "pms",
                        "ps",
                        "pt-PT",
                        "rm",
                        "sco",
                        "se",
                        "si",
                        "so",
                        "son",
                        "sq",
                        "sv",
                        "sw",
                        "ta",
                        "te",
                        "tk",
                        "ur",
                        "yo",
                    ],
                    nr: [1, 2],
                    fc: 2,
                },
                { lngs: ["ay", "bo", "cgg", "fa", "id", "ja", "jbo", "ka", "kk", "km", "ko", "ky", "lo", "ms", "sah", "su", "th", "tt", "ug", "vi", "wo", "zh"], nr: [1], fc: 3 },
                { lngs: ["be", "bs", "cnr", "dz", "hr", "ru", "sr", "uk"], nr: [1, 2, 5], fc: 4 },
                { lngs: ["ar"], nr: [0, 1, 2, 3, 11, 100], fc: 5 },
                { lngs: ["cs", "sk"], nr: [1, 2, 5], fc: 6 },
                { lngs: ["csb", "pl"], nr: [1, 2, 5], fc: 7 },
                { lngs: ["cy"], nr: [1, 2, 3, 8], fc: 8 },
                { lngs: ["fr"], nr: [1, 2], fc: 9 },
                { lngs: ["ga"], nr: [1, 2, 3, 7, 11], fc: 10 },
                { lngs: ["gd"], nr: [1, 2, 3, 20], fc: 11 },
                { lngs: ["is"], nr: [1, 2], fc: 12 },
                { lngs: ["jv"], nr: [0, 1], fc: 13 },
                { lngs: ["kw"], nr: [1, 2, 3, 4], fc: 14 },
                { lngs: ["lt"], nr: [1, 2, 10], fc: 15 },
                { lngs: ["lv"], nr: [1, 2, 0], fc: 16 },
                { lngs: ["mk"], nr: [1, 2], fc: 17 },
                { lngs: ["mnk"], nr: [0, 1, 2], fc: 18 },
                { lngs: ["mt"], nr: [1, 2, 11, 20], fc: 19 },
                { lngs: ["or"], nr: [2, 1], fc: 2 },
                { lngs: ["ro"], nr: [1, 2, 20], fc: 20 },
                { lngs: ["sl"], nr: [5, 1, 2, 3], fc: 21 },
                { lngs: ["he"], nr: [1, 2, 20, 21], fc: 22 },
            ],
            it = {
                1: function (t) {
                    return Number(t > 1);
                },
                2: function (t) {
                    return Number(1 != t);
                },
                3: function (t) {
                    return 0;
                },
                4: function (t) {
                    return Number(t % 10 == 1 && t % 100 != 11 ? 0 : t % 10 >= 2 && t % 10 <= 4 && (t % 100 < 10 || t % 100 >= 20) ? 1 : 2);
                },
                5: function (t) {
                    return Number(0 === t ? 0 : 1 == t ? 1 : 2 == t ? 2 : t % 100 >= 3 && t % 100 <= 10 ? 3 : t % 100 >= 11 ? 4 : 5);
                },
                6: function (t) {
                    return Number(1 == t ? 0 : t >= 2 && t <= 4 ? 1 : 2);
                },
                7: function (t) {
                    return Number(1 == t ? 0 : t % 10 >= 2 && t % 10 <= 4 && (t % 100 < 10 || t % 100 >= 20) ? 1 : 2);
                },
                8: function (t) {
                    return Number(1 == t ? 0 : 2 == t ? 1 : 8 != t && 11 != t ? 2 : 3);
                },
                9: function (t) {
                    return Number(t >= 2);
                },
                10: function (t) {
                    return Number(1 == t ? 0 : 2 == t ? 1 : t < 7 ? 2 : t < 11 ? 3 : 4);
                },
                11: function (t) {
                    return Number(1 == t || 11 == t ? 0 : 2 == t || 12 == t ? 1 : t > 2 && t < 20 ? 2 : 3);
                },
                12: function (t) {
                    return Number(t % 10 != 1 || t % 100 == 11);
                },
                13: function (t) {
                    return Number(0 !== t);
                },
                14: function (t) {
                    return Number(1 == t ? 0 : 2 == t ? 1 : 3 == t ? 2 : 3);
                },
                15: function (t) {
                    return Number(t % 10 == 1 && t % 100 != 11 ? 0 : t % 10 >= 2 && (t % 100 < 10 || t % 100 >= 20) ? 1 : 2);
                },
                16: function (t) {
                    return Number(t % 10 == 1 && t % 100 != 11 ? 0 : 0 !== t ? 1 : 2);
                },
                17: function (t) {
                    return Number(1 == t || t % 10 == 1 ? 0 : 1);
                },
                18: function (t) {
                    return Number(0 == t ? 0 : 1 == t ? 1 : 2);
                },
                19: function (t) {
                    return Number(1 == t ? 0 : 0 === t || (t % 100 > 1 && t % 100 < 11) ? 1 : t % 100 > 10 && t % 100 < 20 ? 2 : 3);
                },
                20: function (t) {
                    return Number(1 == t ? 0 : 0 === t || (t % 100 > 0 && t % 100 < 20) ? 1 : 2);
                },
                21: function (t) {
                    return Number(t % 100 == 1 ? 1 : t % 100 == 2 ? 2 : t % 100 == 3 || t % 100 == 4 ? 3 : 0);
                },
                22: function (t) {
                    return Number(1 === t ? 0 : 2 === t ? 1 : (t < 0 || t > 10) && t % 10 == 0 ? 2 : 3);
                },
            };
        var st = (function () {
                function t(e) {
                    var n,
                        r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                    P(this, t),
                        (this.languageUtils = e),
                        (this.options = r),
                        (this.logger = I.create("pluralResolver")),
                        (this.rules =
                            ((n = {}),
                            ot.forEach(function (t) {
                                t.lngs.forEach(function (e) {
                                    n[e] = { numbers: t.nr, plurals: it[t.fc] };
                                });
                            }),
                            n));
                }
                return (
                    R(t, [
                        {
                            key: "addRule",
                            value: function (t, e) {
                                this.rules[t] = e;
                            },
                        },
                        {
                            key: "getRule",
                            value: function (t) {
                                return this.rules[t] || this.rules[this.languageUtils.getLanguagePartFromCode(t)];
                            },
                        },
                        {
                            key: "needsPlural",
                            value: function (t) {
                                var e = this.getRule(t);
                                return e && e.numbers.length > 1;
                            },
                        },
                        {
                            key: "getPluralFormsOfKey",
                            value: function (t, e) {
                                var n = this,
                                    r = [],
                                    o = this.getRule(t);
                                return o
                                    ? (o.numbers.forEach(function (o) {
                                          var i = n.getSuffix(t, o);
                                          r.push("".concat(e).concat(i));
                                      }),
                                      r)
                                    : r;
                            },
                        },
                        {
                            key: "getSuffix",
                            value: function (t, e) {
                                var n = this,
                                    r = this.getRule(t);
                                if (r) {
                                    var o = r.noAbs ? r.plurals(e) : r.plurals(Math.abs(e)),
                                        i = r.numbers[o];
                                    this.options.simplifyPluralSuffix && 2 === r.numbers.length && 1 === r.numbers[0] && (2 === i ? (i = "plural") : 1 === i && (i = ""));
                                    var s = function () {
                                        return n.options.prepend && i.toString() ? n.options.prepend + i.toString() : i.toString();
                                    };
                                    return "v1" === this.options.compatibilityJSON
                                        ? 1 === i
                                            ? ""
                                            : "number" == typeof i
                                            ? "_plural_".concat(i.toString())
                                            : s()
                                        : "v2" === this.options.compatibilityJSON
                                        ? s()
                                        : this.options.simplifyPluralSuffix && 2 === r.numbers.length && 1 === r.numbers[0]
                                        ? s()
                                        : this.options.prepend && o.toString()
                                        ? this.options.prepend + o.toString()
                                        : o.toString();
                                }
                                return this.logger.warn("no plural rule found for: ".concat(t)), "";
                            },
                        },
                    ]),
                    t
                );
            })(),
            at = (function () {
                function t() {
                    var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                    P(this, t),
                        (this.logger = I.create("interpolator")),
                        (this.options = e),
                        (this.format =
                            (e.interpolation && e.interpolation.format) ||
                            function (t) {
                                return t;
                            }),
                        this.init(e);
                }
                return (
                    R(t, [
                        {
                            key: "init",
                            value: function () {
                                var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                                t.interpolation || (t.interpolation = { escapeValue: !0 });
                                var e = t.interpolation;
                                (this.escape = void 0 !== e.escape ? e.escape : Q),
                                    (this.escapeValue = void 0 === e.escapeValue || e.escapeValue),
                                    (this.useRawValueToEscape = void 0 !== e.useRawValueToEscape && e.useRawValueToEscape),
                                    (this.prefix = e.prefix ? J(e.prefix) : e.prefixEscaped || "{{"),
                                    (this.suffix = e.suffix ? J(e.suffix) : e.suffixEscaped || "}}"),
                                    (this.formatSeparator = e.formatSeparator ? e.formatSeparator : e.formatSeparator || ","),
                                    (this.unescapePrefix = e.unescapeSuffix ? "" : e.unescapePrefix || "-"),
                                    (this.unescapeSuffix = this.unescapePrefix ? "" : e.unescapeSuffix || ""),
                                    (this.nestingPrefix = e.nestingPrefix ? J(e.nestingPrefix) : e.nestingPrefixEscaped || J("$t(")),
                                    (this.nestingSuffix = e.nestingSuffix ? J(e.nestingSuffix) : e.nestingSuffixEscaped || J(")")),
                                    (this.maxReplaces = e.maxReplaces ? e.maxReplaces : 1e3),
                                    this.resetRegExp();
                            },
                        },
                        {
                            key: "reset",
                            value: function () {
                                this.options && this.init(this.options);
                            },
                        },
                        {
                            key: "resetRegExp",
                            value: function () {
                                var t = "".concat(this.prefix, "(.+?)").concat(this.suffix);
                                this.regexp = new RegExp(t, "g");
                                var e = "".concat(this.prefix).concat(this.unescapePrefix, "(.+?)").concat(this.unescapeSuffix).concat(this.suffix);
                                this.regexpUnescape = new RegExp(e, "g");
                                var n = "".concat(this.nestingPrefix, "(.+?)").concat(this.nestingSuffix);
                                this.nestingRegexp = new RegExp(n, "g");
                            },
                        },
                        {
                            key: "interpolate",
                            value: function (t, e, n, r) {
                                var o,
                                    i,
                                    s,
                                    a = this,
                                    u = (this.options && this.options.interpolation && this.options.interpolation.defaultVariables) || {};
                                function c(t) {
                                    return t.replace(/\$/g, "$$$$");
                                }
                                var l = function (t) {
                                    if (t.indexOf(a.formatSeparator) < 0) return G(e, u, t);
                                    var r = t.split(a.formatSeparator),
                                        o = r.shift().trim(),
                                        i = r.join(a.formatSeparator).trim();
                                    return a.format(G(e, u, o), i, n);
                                };
                                this.resetRegExp();
                                var f = (r && r.missingInterpolationHandler) || this.options.missingInterpolationHandler;
                                for (s = 0; (o = this.regexpUnescape.exec(t)); ) {
                                    if (void 0 === (i = l(o[1].trim())))
                                        if ("function" == typeof f) {
                                            var p = f(t, o, r);
                                            i = "string" == typeof p ? p : "";
                                        } else this.logger.warn("missed to pass in variable ".concat(o[1], " for interpolating ").concat(t)), (i = "");
                                    else "string" == typeof i || this.useRawValueToEscape || (i = q(i));
                                    if (((t = t.replace(o[0], c(i))), (this.regexpUnescape.lastIndex = 0), ++s >= this.maxReplaces)) break;
                                }
                                for (s = 0; (o = this.regexp.exec(t)); ) {
                                    if (void 0 === (i = l(o[1].trim())))
                                        if ("function" == typeof f) {
                                            var h = f(t, o, r);
                                            i = "string" == typeof h ? h : "";
                                        } else this.logger.warn("missed to pass in variable ".concat(o[1], " for interpolating ").concat(t)), (i = "");
                                    else "string" == typeof i || this.useRawValueToEscape || (i = q(i));
                                    if (((i = this.escapeValue ? c(this.escape(i)) : c(i)), (t = t.replace(o[0], i)), (this.regexp.lastIndex = 0), ++s >= this.maxReplaces)) break;
                                }
                                return t;
                            },
                        },
                        {
                            key: "nest",
                            value: function (t, e) {
                                var n,
                                    r,
                                    o = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {},
                                    i = j({}, o);
                                function s(t, e) {
                                    if (t.indexOf(",") < 0) return t;
                                    var n = t.split(",");
                                    t = n.shift();
                                    var r = n.join(",");
                                    r = (r = this.interpolate(r, i)).replace(/'/g, '"');
                                    try {
                                        (i = JSON.parse(r)), e && (i = j({}, e, i));
                                    } catch (e) {
                                        this.logger.error("failed parsing options string in nesting for key ".concat(t), e);
                                    }
                                    return delete i.defaultValue, t;
                                }
                                for (i.applyPostProcessor = !1, delete i.defaultValue; (n = this.nestingRegexp.exec(t)); ) {
                                    if ((r = e(s.call(this, n[1].trim(), i), i)) && n[0] === t && "string" != typeof r) return r;
                                    "string" != typeof r && (r = q(r)), r || (this.logger.warn("missed to resolve ".concat(n[1], " for nesting ").concat(t)), (r = "")), (t = t.replace(n[0], r)), (this.regexp.lastIndex = 0);
                                }
                                return t;
                            },
                        },
                    ]),
                    t
                );
            })();
        var ut = (function (t) {
            function e(t, n, r) {
                var o,
                    i = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : {};
                return (
                    P(this, e),
                    (o = N(this, M(e).call(this))),
                    V.call(C(o)),
                    (o.backend = t),
                    (o.store = n),
                    (o.services = r),
                    (o.languageUtils = r.languageUtils),
                    (o.options = i),
                    (o.logger = I.create("backendConnector")),
                    (o.state = {}),
                    (o.queue = []),
                    o.backend && o.backend.init && o.backend.init(r, i.backend, i),
                    o
                );
            }
            return (
                U(e, V),
                R(e, [
                    {
                        key: "queueLoad",
                        value: function (t, e, n, r) {
                            var o = this,
                                i = [],
                                s = [],
                                a = [],
                                u = [];
                            return (
                                t.forEach(function (t) {
                                    var r = !0;
                                    e.forEach(function (e) {
                                        var a = "".concat(t, "|").concat(e);
                                        !n.reload && o.store.hasResourceBundle(t, e)
                                            ? (o.state[a] = 2)
                                            : o.state[a] < 0 || (1 === o.state[a] ? s.indexOf(a) < 0 && s.push(a) : ((o.state[a] = 1), (r = !1), s.indexOf(a) < 0 && s.push(a), i.indexOf(a) < 0 && i.push(a), u.indexOf(e) < 0 && u.push(e)));
                                    }),
                                        r || a.push(t);
                                }),
                                (i.length || s.length) && this.queue.push({ pending: s, loaded: {}, errors: [], callback: r }),
                                { toLoad: i, pending: s, toLoadLanguages: a, toLoadNamespaces: u }
                            );
                        },
                    },
                    {
                        key: "loaded",
                        value: function (t, e, n) {
                            var r = H(t.split("|"), 2),
                                o = r[0],
                                i = r[1];
                            e && this.emit("failedLoading", o, i, e), n && this.store.addResourceBundle(o, i, n), (this.state[t] = e ? -1 : 2);
                            var s = {};
                            this.queue.forEach(function (n) {
                                var r, a, u, c, l, f;
                                (r = n.loaded),
                                    (a = i),
                                    (c = W(r, [o], Object)),
                                    (l = c.obj),
                                    (f = c.k),
                                    (l[f] = l[f] || []),
                                    u && (l[f] = l[f].concat(a)),
                                    u || l[f].push(a),
                                    (function (t, e) {
                                        for (var n = t.indexOf(e); -1 !== n; ) t.splice(n, 1), (n = t.indexOf(e));
                                    })(n.pending, t),
                                    e && n.errors.push(e),
                                    0 !== n.pending.length ||
                                        n.done ||
                                        (Object.keys(n.loaded).forEach(function (t) {
                                            s[t] || (s[t] = []),
                                                n.loaded[t].length &&
                                                    n.loaded[t].forEach(function (e) {
                                                        s[t].indexOf(e) < 0 && s[t].push(e);
                                                    });
                                        }),
                                        (n.done = !0),
                                        n.errors.length ? n.callback(n.errors) : n.callback());
                            }),
                                this.emit("loaded", s),
                                (this.queue = this.queue.filter(function (t) {
                                    return !t.done;
                                }));
                        },
                    },
                    {
                        key: "read",
                        value: function (t, e, n) {
                            var r = this,
                                o = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 0,
                                i = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : 250,
                                s = arguments.length > 5 ? arguments[5] : void 0;
                            return t.length
                                ? this.backend[n](t, e, function (a, u) {
                                      a && u && o < 5
                                          ? setTimeout(function () {
                                                r.read.call(r, t, e, n, o + 1, 2 * i, s);
                                            }, i)
                                          : s(a, u);
                                  })
                                : s(null, {});
                        },
                    },
                    {
                        key: "prepareLoading",
                        value: function (t, e) {
                            var n = this,
                                r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {},
                                o = arguments.length > 3 ? arguments[3] : void 0;
                            if (!this.backend) return this.logger.warn("No backend was added via i18next.use. Will not load resources."), o && o();
                            "string" == typeof t && (t = this.languageUtils.toResolveHierarchy(t)), "string" == typeof e && (e = [e]);
                            var i = this.queueLoad(t, e, r, o);
                            if (!i.toLoad.length) return i.pending.length || o(), null;
                            i.toLoad.forEach(function (t) {
                                n.loadOne(t);
                            });
                        },
                    },
                    {
                        key: "load",
                        value: function (t, e, n) {
                            this.prepareLoading(t, e, {}, n);
                        },
                    },
                    {
                        key: "reload",
                        value: function (t, e, n) {
                            this.prepareLoading(t, e, { reload: !0 }, n);
                        },
                    },
                    {
                        key: "loadOne",
                        value: function (t) {
                            var e = this,
                                n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "",
                                r = t.split("|"),
                                o = H(r, 2),
                                i = o[0],
                                s = o[1];
                            this.read(i, s, "read", null, null, function (r, o) {
                                r && e.logger.warn("".concat(n, "loading namespace ").concat(s, " for language ").concat(i, " failed"), r),
                                    !r && o && e.logger.log("".concat(n, "loaded namespace ").concat(s, " for language ").concat(i), o),
                                    e.loaded(t, r, o);
                            });
                        },
                    },
                    {
                        key: "saveMissing",
                        value: function (t, e, n, r, o) {
                            var i = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : {};
                            this.services.utils && this.services.utils.hasLoadedNamespace && !this.services.utils.hasLoadedNamespace(e)
                                ? this.logger.warn(
                                      'did not save key "'.concat(n, '" for namespace "').concat(e, '" as the namespace was not yet loaded'),
                                      "This means something IS WRONG in your application setup. You access the t function before i18next.init / i18next.loadNamespace / i18next.changeLanguage was done. Wait for the callback or Promise to resolve before accessing it!!!"
                                  )
                                : (this.backend && this.backend.create && this.backend.create(t, e, n, r, null, j({}, i, { isUpdate: o })), t && t[0] && this.store.addResource(t[0], e, n, r));
                        },
                    },
                ]),
                e
            );
        })();
        function ct() {
            return {
                debug: !1,
                initImmediate: !0,
                ns: ["translation"],
                defaultNS: ["translation"],
                fallbackLng: ["dev"],
                fallbackNS: !1,
                whitelist: !1,
                nonExplicitWhitelist: !1,
                load: "all",
                preload: !1,
                simplifyPluralSuffix: !0,
                keySeparator: ".",
                nsSeparator: ":",
                pluralSeparator: "_",
                contextSeparator: "_",
                partialBundledLanguages: !1,
                saveMissing: !1,
                updateMissing: !1,
                saveMissingTo: "fallback",
                saveMissingPlurals: !0,
                missingKeyHandler: !1,
                missingInterpolationHandler: !1,
                postProcess: !1,
                postProcessPassResolved: !1,
                returnNull: !0,
                returnEmptyString: !0,
                returnObjects: !1,
                joinArrays: !1,
                returnedObjectHandler: !1,
                parseMissingKeyHandler: !1,
                appendNamespaceToMissingKey: !1,
                appendNamespaceToCIMode: !1,
                overloadTranslationOptionHandler: function (t) {
                    var e = {};
                    if (("object" === T(t[1]) && (e = t[1]), "string" == typeof t[1] && (e.defaultValue = t[1]), "string" == typeof t[2] && (e.tDescription = t[2]), "object" === T(t[2]) || "object" === T(t[3]))) {
                        var n = t[3] || t[2];
                        Object.keys(n).forEach(function (t) {
                            e[t] = n[t];
                        });
                    }
                    return e;
                },
                interpolation: {
                    escapeValue: !0,
                    format: function (t, e, n) {
                        return t;
                    },
                    prefix: "{{",
                    suffix: "}}",
                    formatSeparator: ",",
                    unescapePrefix: "-",
                    nestingPrefix: "$t(",
                    nestingSuffix: ")",
                    maxReplaces: 1e3,
                },
            };
        }
        function lt(t) {
            return (
                "string" == typeof t.ns && (t.ns = [t.ns]),
                "string" == typeof t.fallbackLng && (t.fallbackLng = [t.fallbackLng]),
                "string" == typeof t.fallbackNS && (t.fallbackNS = [t.fallbackNS]),
                t.whitelist && t.whitelist.indexOf("cimode") < 0 && (t.whitelist = t.whitelist.concat(["cimode"])),
                t
            );
        }
        function ft() {}
        var pt = new ((function (t) {
                function e() {
                    var t,
                        n = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                        r = arguments.length > 1 ? arguments[1] : void 0;
                    if ((P(this, e), (t = N(this, M(e).call(this))), V.call(C(t)), (t.options = lt(n)), (t.services = {}), (t.logger = I), (t.modules = { external: [] }), r && !t.isInitialized && !n.isClone)) {
                        if (!t.options.initImmediate) return t.init(n, r), N(t, C(t));
                        setTimeout(function () {
                            t.init(n, r);
                        }, 0);
                    }
                    return t;
                }
                return (
                    U(e, V),
                    R(e, [
                        {
                            key: "init",
                            value: function () {
                                var t = this,
                                    e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                                    n = arguments.length > 1 ? arguments[1] : void 0;
                                function r(t) {
                                    return t ? ("function" == typeof t ? new t() : t) : null;
                                }
                                if (("function" == typeof e && ((n = e), (e = {})), (this.options = j({}, ct(), this.options, lt(e))), (this.format = this.options.interpolation.format), n || (n = ft), !this.options.isClone)) {
                                    this.modules.logger ? I.init(r(this.modules.logger), this.options) : I.init(null, this.options);
                                    var o = new rt(this.options);
                                    this.store = new Z(this.options.resources, this.options);
                                    var i = this.services;
                                    (i.logger = I),
                                        (i.resourceStore = this.store),
                                        (i.languageUtils = o),
                                        (i.pluralResolver = new st(o, { prepend: this.options.pluralSeparator, compatibilityJSON: this.options.compatibilityJSON, simplifyPluralSuffix: this.options.simplifyPluralSuffix })),
                                        (i.interpolator = new at(this.options)),
                                        (i.utils = { hasLoadedNamespace: this.hasLoadedNamespace.bind(this) }),
                                        (i.backendConnector = new ut(r(this.modules.backend), i.resourceStore, i, this.options)),
                                        i.backendConnector.on("*", function (e) {
                                            for (var n = arguments.length, r = new Array(n > 1 ? n - 1 : 0), o = 1; o < n; o++) r[o - 1] = arguments[o];
                                            t.emit.apply(t, [e].concat(r));
                                        }),
                                        this.modules.languageDetector && ((i.languageDetector = r(this.modules.languageDetector)), i.languageDetector.init(i, this.options.detection, this.options)),
                                        this.modules.i18nFormat && ((i.i18nFormat = r(this.modules.i18nFormat)), i.i18nFormat.init && i.i18nFormat.init(this)),
                                        (this.translator = new et(this.services, this.options)),
                                        this.translator.on("*", function (e) {
                                            for (var n = arguments.length, r = new Array(n > 1 ? n - 1 : 0), o = 1; o < n; o++) r[o - 1] = arguments[o];
                                            t.emit.apply(t, [e].concat(r));
                                        }),
                                        this.modules.external.forEach(function (e) {
                                            e.init && e.init(t);
                                        });
                                }
                                var s = ["getResource", "addResource", "addResources", "addResourceBundle", "removeResourceBundle", "hasResourceBundle", "getResourceBundle", "getDataByLanguage"];
                                s.forEach(function (e) {
                                    t[e] = function () {
                                        var n;
                                        return (n = t.store)[e].apply(n, arguments);
                                    };
                                });
                                var a = z(),
                                    u = function () {
                                        t.changeLanguage(t.options.lng, function (e, r) {
                                            (t.isInitialized = !0), t.logger.log("initialized", t.options), t.emit("initialized", t.options), a.resolve(r), n(e, r);
                                        });
                                    };
                                return this.options.resources || !this.options.initImmediate ? u() : setTimeout(u, 0), a;
                            },
                        },
                        {
                            key: "loadResources",
                            value: function () {
                                var t = this,
                                    e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : ft;
                                if (!this.options.resources || this.options.partialBundledLanguages) {
                                    if (this.language && "cimode" === this.language.toLowerCase()) return e();
                                    var n = [],
                                        r = function (e) {
                                            e &&
                                                t.services.languageUtils.toResolveHierarchy(e).forEach(function (t) {
                                                    n.indexOf(t) < 0 && n.push(t);
                                                });
                                        };
                                    if (this.language) r(this.language);
                                    else {
                                        var o = this.services.languageUtils.getFallbackCodes(this.options.fallbackLng);
                                        o.forEach(function (t) {
                                            return r(t);
                                        });
                                    }
                                    this.options.preload &&
                                        this.options.preload.forEach(function (t) {
                                            return r(t);
                                        }),
                                        this.services.backendConnector.load(n, this.options.ns, e);
                                } else e(null);
                            },
                        },
                        {
                            key: "reloadResources",
                            value: function (t, e, n) {
                                var r = z();
                                return (
                                    t || (t = this.languages),
                                    e || (e = this.options.ns),
                                    n || (n = ft),
                                    this.services.backendConnector.reload(t, e, function (t) {
                                        r.resolve(), n(t);
                                    }),
                                    r
                                );
                            },
                        },
                        {
                            key: "use",
                            value: function (t) {
                                return (
                                    "backend" === t.type && (this.modules.backend = t),
                                    ("logger" === t.type || (t.log && t.warn && t.error)) && (this.modules.logger = t),
                                    "languageDetector" === t.type && (this.modules.languageDetector = t),
                                    "i18nFormat" === t.type && (this.modules.i18nFormat = t),
                                    "postProcessor" === t.type && tt.addPostProcessor(t),
                                    "3rdParty" === t.type && this.modules.external.push(t),
                                    this
                                );
                            },
                        },
                        {
                            key: "changeLanguage",
                            value: function (t, e) {
                                var n = this,
                                    r = z();
                                this.emit("languageChanging", t);
                                var o = function (t) {
                                    t &&
                                        ((n.language = t),
                                        (n.languages = n.services.languageUtils.toResolveHierarchy(t)),
                                        n.translator.language || n.translator.changeLanguage(t),
                                        n.services.languageDetector && n.services.languageDetector.cacheUserLanguage(t)),
                                        n.loadResources(function (o) {
                                            !(function (t, o) {
                                                n.translator.changeLanguage(o),
                                                    o && (n.emit("languageChanged", o), n.logger.log("languageChanged", o)),
                                                    r.resolve(function () {
                                                        return n.t.apply(n, arguments);
                                                    }),
                                                    e &&
                                                        e(t, function () {
                                                            return n.t.apply(n, arguments);
                                                        });
                                            })(o, t);
                                        });
                                };
                                return (
                                    t || !this.services.languageDetector || this.services.languageDetector.async
                                        ? !t && this.services.languageDetector && this.services.languageDetector.async
                                            ? this.services.languageDetector.detect(o)
                                            : o(t)
                                        : o(this.services.languageDetector.detect()),
                                    r
                                );
                            },
                        },
                        {
                            key: "getFixedT",
                            value: function (t, e) {
                                var n = this,
                                    r = function t(e, r) {
                                        var o;
                                        if ("object" !== T(r)) {
                                            for (var i = arguments.length, s = new Array(i > 2 ? i - 2 : 0), a = 2; a < i; a++) s[a - 2] = arguments[a];
                                            o = n.options.overloadTranslationOptionHandler([e, r].concat(s));
                                        } else o = j({}, r);
                                        return (o.lng = o.lng || t.lng), (o.lngs = o.lngs || t.lngs), (o.ns = o.ns || t.ns), n.t(e, o);
                                    };
                                return "string" == typeof t ? (r.lng = t) : (r.lngs = t), (r.ns = e), r;
                            },
                        },
                        {
                            key: "t",
                            value: function () {
                                var t;
                                return this.translator && (t = this.translator).translate.apply(t, arguments);
                            },
                        },
                        {
                            key: "exists",
                            value: function () {
                                var t;
                                return this.translator && (t = this.translator).exists.apply(t, arguments);
                            },
                        },
                        {
                            key: "setDefaultNamespace",
                            value: function (t) {
                                this.options.defaultNS = t;
                            },
                        },
                        {
                            key: "hasLoadedNamespace",
                            value: function (t) {
                                var e = this;
                                if (!this.isInitialized) return this.logger.warn("hasLoadedNamespace: i18next was not initialized", this.languages), !1;
                                if (!this.languages || !this.languages.length) return this.logger.warn("hasLoadedNamespace: i18n.languages were undefined or empty", this.languages), !1;
                                var n = this.languages[0],
                                    r = !!this.options && this.options.fallbackLng,
                                    o = this.languages[this.languages.length - 1];
                                if ("cimode" === n.toLowerCase()) return !0;
                                var i = function (t, n) {
                                    var r = e.services.backendConnector.state["".concat(t, "|").concat(n)];
                                    return -1 === r || 2 === r;
                                };
                                return !!this.hasResourceBundle(n, t) || !this.services.backendConnector.backend || !(!i(n, t) || (r && !i(o, t)));
                            },
                        },
                        {
                            key: "loadNamespaces",
                            value: function (t, e) {
                                var n = this,
                                    r = z();
                                return this.options.ns
                                    ? ("string" == typeof t && (t = [t]),
                                      t.forEach(function (t) {
                                          n.options.ns.indexOf(t) < 0 && n.options.ns.push(t);
                                      }),
                                      this.loadResources(function (t) {
                                          r.resolve(), e && e(t);
                                      }),
                                      r)
                                    : (e && e(), Promise.resolve());
                            },
                        },
                        {
                            key: "loadLanguages",
                            value: function (t, e) {
                                var n = z();
                                "string" == typeof t && (t = [t]);
                                var r = this.options.preload || [],
                                    o = t.filter(function (t) {
                                        return r.indexOf(t) < 0;
                                    });
                                return o.length
                                    ? ((this.options.preload = r.concat(o)),
                                      this.loadResources(function (t) {
                                          n.resolve(), e && e(t);
                                      }),
                                      n)
                                    : (e && e(), Promise.resolve());
                            },
                        },
                        {
                            key: "dir",
                            value: function (t) {
                                if ((t || (t = this.languages && this.languages.length > 0 ? this.languages[0] : this.language), !t)) return "rtl";
                                return [
                                    "ar",
                                    "shu",
                                    "sqr",
                                    "ssh",
                                    "xaa",
                                    "yhd",
                                    "yud",
                                    "aao",
                                    "abh",
                                    "abv",
                                    "acm",
                                    "acq",
                                    "acw",
                                    "acx",
                                    "acy",
                                    "adf",
                                    "ads",
                                    "aeb",
                                    "aec",
                                    "afb",
                                    "ajp",
                                    "apc",
                                    "apd",
                                    "arb",
                                    "arq",
                                    "ars",
                                    "ary",
                                    "arz",
                                    "auz",
                                    "avl",
                                    "ayh",
                                    "ayl",
                                    "ayn",
                                    "ayp",
                                    "bbz",
                                    "pga",
                                    "he",
                                    "iw",
                                    "ps",
                                    "pbt",
                                    "pbu",
                                    "pst",
                                    "prp",
                                    "prd",
                                    "ur",
                                    "ydd",
                                    "yds",
                                    "yih",
                                    "ji",
                                    "yi",
                                    "hbo",
                                    "men",
                                    "xmn",
                                    "fa",
                                    "jpr",
                                    "peo",
                                    "pes",
                                    "prs",
                                    "dv",
                                    "sam",
                                ].indexOf(this.services.languageUtils.getLanguagePartFromCode(t)) >= 0
                                    ? "rtl"
                                    : "ltr";
                            },
                        },
                        {
                            key: "createInstance",
                            value: function () {
                                var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                                    n = arguments.length > 1 ? arguments[1] : void 0;
                                return new e(t, n);
                            },
                        },
                        {
                            key: "cloneInstance",
                            value: function () {
                                var t = this,
                                    n = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                                    r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : ft,
                                    o = j({}, this.options, n, { isClone: !0 }),
                                    i = new e(o),
                                    s = ["store", "services", "language"];
                                return (
                                    s.forEach(function (e) {
                                        i[e] = t[e];
                                    }),
                                    (i.translator = new et(i.services, i.options)),
                                    i.translator.on("*", function (t) {
                                        for (var e = arguments.length, n = new Array(e > 1 ? e - 1 : 0), r = 1; r < e; r++) n[r - 1] = arguments[r];
                                        i.emit.apply(i, [t].concat(n));
                                    }),
                                    i.init(o, r),
                                    (i.translator.options = i.options),
                                    i
                                );
                            },
                        },
                    ]),
                    e
                );
            })())(),
            ht = n(3),
            dt = n.n(ht),
            yt = [],
            gt = yt.forEach,
            bt = yt.slice;
        function vt(t) {
            return (
                gt.call(bt.call(arguments, 1), function (e) {
                    if (e) for (var n in e) void 0 === t[n] && (t[n] = e[n]);
                }),
                t
            );
        }
        function mt(t, e) {
            if (e && "object" === T(e)) {
                var n = "",
                    r = encodeURIComponent;
                for (var o in e) n += "&" + r(o) + "=" + r(e[o]);
                if (!n) return t;
                t = t + (-1 !== t.indexOf("?") ? "&" : "?") + n.slice(1);
            }
            return t;
        }
        function wt(t, e, n, r, o) {
            r && "object" === T(r) && (o || (r._t = new Date()), (r = mt("", r).slice(1))), e.queryStringParams && (t = mt(t, e.queryStringParams));
            try {
                var i;
                (i = XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("MSXML2.XMLHTTP.3.0")).open(r ? "POST" : "GET", t, 1),
                    e.crossDomain || i.setRequestHeader("X-Requested-With", "XMLHttpRequest"),
                    (i.withCredentials = !!e.withCredentials),
                    r && i.setRequestHeader("Content-type", "application/x-www-form-urlencoded"),
                    i.overrideMimeType && i.overrideMimeType("application/json");
                var s = e.customHeaders;
                if ((s = "function" == typeof s ? s() : s)) for (var a in s) i.setRequestHeader(a, s[a]);
                (i.onreadystatechange = function () {
                    i.readyState > 3 && n && n(i.responseText, i);
                }),
                    i.send(r);
            } catch (t) {
                console && console.log(t);
            }
        }
        function _t() {
            return {
                loadPath: "/locales/{{lng}}/{{ns}}.json",
                addPath: "/locales/add/{{lng}}/{{ns}}",
                allowMultiLoading: !1,
                parse: JSON.parse,
                parsePayload: function (t, e, n) {
                    return A({}, e, n || "");
                },
                crossDomain: !1,
                ajax: wt,
            };
        }
        var xt = (function () {
            function t(e) {
                var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                P(this, t), this.init(e, n), (this.type = "backend");
            }
            return (
                R(t, [
                    {
                        key: "init",
                        value: function (t) {
                            var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                            (this.services = t), (this.options = vt(e, this.options || {}, _t()));
                        },
                    },
                    {
                        key: "readMulti",
                        value: function (t, e, n) {
                            var r = this.options.loadPath;
                            "function" == typeof this.options.loadPath && (r = this.options.loadPath(t, e));
                            var o = this.services.interpolator.interpolate(r, { lng: t.join("+"), ns: e.join("+") });
                            this.loadUrl(o, n);
                        },
                    },
                    {
                        key: "read",
                        value: function (t, e, n) {
                            var r = this.options.loadPath;
                            "function" == typeof this.options.loadPath && (r = this.options.loadPath([t], [e]));
                            var o = this.services.interpolator.interpolate(r, { lng: t, ns: e });
                            this.loadUrl(o, n);
                        },
                    },
                    {
                        key: "loadUrl",
                        value: function (t, e) {
                            var n = this;
                            this.options.ajax(t, this.options, function (r, o) {
                                if (o.status >= 500 && o.status < 600) return e("failed loading " + t, !0);
                                if (o.status >= 400 && o.status < 500) return e("failed loading " + t, !1);
                                var i, s;
                                try {
                                    i = n.options.parse(r, t);
                                } catch (e) {
                                    s = "failed parsing " + t + " to json";
                                }
                                if (s) return e(s, !1);
                                e(null, i);
                            });
                        },
                    },
                    {
                        key: "create",
                        value: function (t, e, n, r) {
                            var o = this;
                            "string" == typeof t && (t = [t]);
                            var i = this.options.parsePayload(e, n, r);
                            t.forEach(function (t) {
                                var n = o.services.interpolator.interpolate(o.options.addPath, { lng: t, ns: e });
                                o.options.ajax(n, o.options, function (t, e) {}, i);
                            });
                        },
                    },
                ]),
                t
            );
        })();
        xt.type = "backend";
        var kt = xt,
            St = n(0),
            Ot = n.n(St);
        function Et(t) {
            return (Et =
                "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
                    ? function (t) {
                          return typeof t;
                      }
                    : function (t) {
                          return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t;
                      })(t);
        }
        function Tt(t, e) {
            return !e || ("object" !== Et(e) && "function" != typeof e)
                ? (function (t) {
                      if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                      return t;
                  })(t)
                : e;
        }
        function At(t) {
            return (At = Object.setPrototypeOf
                ? Object.getPrototypeOf
                : function (t) {
                      return t.__proto__ || Object.getPrototypeOf(t);
                  })(t);
        }
        function jt(t, e) {
            return (jt =
                Object.setPrototypeOf ||
                function (t, e) {
                    return (t.__proto__ = e), t;
                })(t, e);
        }
        var Pt = (function (t) {
                function e() {
                    var t;
                    return (
                        (function (t, e) {
                            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
                        })(this, e),
                        (t = Tt(this, At(e).call(this, { className: Ot.a.articleCard }))),
                        pt
                            .use(dt.a)
                            .use(kt)
                            .init(
                                {
                                    fallbackLng: "en",
                                    debug: !1,
                                    resources: {
                                        en: { translation: { NO_DATA: "No data." } },
                                        fr: { translation: { NO_DATA: "Aucune donnÃ©e." } },
                                        de: { translation: { NO_DATA: "Keine Daten." } },
                                        es: { translation: { NO_DATA: "No hay datos." } },
                                        it: { translation: { NO_DATA: "Nessun dato." } },
                                        pt: { NO_DATA: "Sem dados." },
                                    },
                                },
                                function () {
                                    t.updateText(pt.t("NO_DATA"));
                                }
                            ),
                        t
                    );
                }
                return (
                    (function (t, e) {
                        if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                        (t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } })), e && jt(t, e);
                    })(e, O),
                    e
                );
            })(),
            Lt = n(11),
            Rt = n.n(Lt),
            Ct = n(12),
            Nt = function (t, e) {
                return (Nt =
                    Object.setPrototypeOf ||
                    ({ __proto__: [] } instanceof Array &&
                        function (t, e) {
                            t.__proto__ = e;
                        }) ||
                    function (t, e) {
                        for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]);
                    })(t, e);
            };
        function Mt(t, e) {
            function n() {
                this.constructor = t;
            }
            Nt(t, e), (t.prototype = null === e ? Object.create(e) : ((n.prototype = e.prototype), new n()));
        }
        function Dt(t) {
            return "function" == typeof t;
        }
        var Ut = !1,
            Ft = {
                Promise: void 0,
                set useDeprecatedSynchronousErrorHandling(t) {
                    t && new Error().stack;
                    Ut = t;
                },
                get useDeprecatedSynchronousErrorHandling() {
                    return Ut;
                },
            };
        function Ht(t) {
            setTimeout(function () {
                throw t;
            }, 0);
        }
        var Bt = {
                closed: !0,
                next: function (t) {},
                error: function (t) {
                    if (Ft.useDeprecatedSynchronousErrorHandling) throw t;
                    Ht(t);
                },
                complete: function () {},
            },
            It =
                Array.isArray ||
                function (t) {
                    return t && "number" == typeof t.length;
                };
        function Vt(t) {
            return null !== t && "object" == typeof t;
        }
        function zt(t) {
            return (
                Error.call(this),
                (this.message = t
                    ? t.length +
                      " errors occurred during unsubscription:\n" +
                      t
                          .map(function (t, e) {
                              return e + 1 + ") " + t.toString();
                          })
                          .join("\n  ")
                    : ""),
                (this.name = "UnsubscriptionError"),
                (this.errors = t),
                this
            );
        }
        zt.prototype = Object.create(Error.prototype);
        var qt = zt,
            Wt = (function () {
                function t(t) {
                    (this.closed = !1), (this._parentOrParents = null), (this._subscriptions = null), t && (this._unsubscribe = t);
                }
                return (
                    (t.prototype.unsubscribe = function () {
                        var e;
                        if (!this.closed) {
                            var n = this._parentOrParents,
                                r = this._unsubscribe,
                                o = this._subscriptions;
                            if (((this.closed = !0), (this._parentOrParents = null), (this._subscriptions = null), n instanceof t)) n.remove(this);
                            else if (null !== n)
                                for (var i = 0; i < n.length; ++i) {
                                    n[i].remove(this);
                                }
                            if (Dt(r))
                                try {
                                    r.call(this);
                                } catch (t) {
                                    e = t instanceof qt ? $t(t.errors) : [t];
                                }
                            if (It(o)) {
                                i = -1;
                                for (var s = o.length; ++i < s; ) {
                                    var a = o[i];
                                    if (Vt(a))
                                        try {
                                            a.unsubscribe();
                                        } catch (t) {
                                            (e = e || []), t instanceof qt ? (e = e.concat($t(t.errors))) : e.push(t);
                                        }
                                }
                            }
                            if (e) throw new qt(e);
                        }
                    }),
                    (t.prototype.add = function (e) {
                        var n = e;
                        if (!e) return t.EMPTY;
                        switch (typeof e) {
                            case "function":
                                n = new t(e);
                            case "object":
                                if (n === this || n.closed || "function" != typeof n.unsubscribe) return n;
                                if (this.closed) return n.unsubscribe(), n;
                                if (!(n instanceof t)) {
                                    var r = n;
                                    (n = new t())._subscriptions = [r];
                                }
                                break;
                            default:
                                throw new Error("unrecognized teardown " + e + " added to Subscription.");
                        }
                        var o = n._parentOrParents;
                        if (null === o) n._parentOrParents = this;
                        else if (o instanceof t) {
                            if (o === this) return n;
                            n._parentOrParents = [o, this];
                        } else {
                            if (-1 !== o.indexOf(this)) return n;
                            o.push(this);
                        }
                        var i = this._subscriptions;
                        return null === i ? (this._subscriptions = [n]) : i.push(n), n;
                    }),
                    (t.prototype.remove = function (t) {
                        var e = this._subscriptions;
                        if (e) {
                            var n = e.indexOf(t);
                            -1 !== n && e.splice(n, 1);
                        }
                    }),
                    (t.EMPTY = (function (t) {
                        return (t.closed = !0), t;
                    })(new t())),
                    t
                );
            })();
        function $t(t) {
            return t.reduce(function (t, e) {
                return t.concat(e instanceof qt ? e.errors : e);
            }, []);
        }
        var Kt = "function" == typeof Symbol ? Symbol("rxSubscriber") : "@@rxSubscriber_" + Math.random(),
            Gt = (function (t) {
                function e(n, r, o) {
                    var i = t.call(this) || this;
                    switch (((i.syncErrorValue = null), (i.syncErrorThrown = !1), (i.syncErrorThrowable = !1), (i.isStopped = !1), arguments.length)) {
                        case 0:
                            i.destination = Bt;
                            break;
                        case 1:
                            if (!n) {
                                i.destination = Bt;
                                break;
                            }
                            if ("object" == typeof n) {
                                n instanceof e ? ((i.syncErrorThrowable = n.syncErrorThrowable), (i.destination = n), n.add(i)) : ((i.syncErrorThrowable = !0), (i.destination = new Yt(i, n)));
                                break;
                            }
                        default:
                            (i.syncErrorThrowable = !0), (i.destination = new Yt(i, n, r, o));
                    }
                    return i;
                }
                return (
                    Mt(e, t),
                    (e.prototype[Kt] = function () {
                        return this;
                    }),
                    (e.create = function (t, n, r) {
                        var o = new e(t, n, r);
                        return (o.syncErrorThrowable = !1), o;
                    }),
                    (e.prototype.next = function (t) {
                        this.isStopped || this._next(t);
                    }),
                    (e.prototype.error = function (t) {
                        this.isStopped || ((this.isStopped = !0), this._error(t));
                    }),
                    (e.prototype.complete = function () {
                        this.isStopped || ((this.isStopped = !0), this._complete());
                    }),
                    (e.prototype.unsubscribe = function () {
                        this.closed || ((this.isStopped = !0), t.prototype.unsubscribe.call(this));
                    }),
                    (e.prototype._next = function (t) {
                        this.destination.next(t);
                    }),
                    (e.prototype._error = function (t) {
                        this.destination.error(t), this.unsubscribe();
                    }),
                    (e.prototype._complete = function () {
                        this.destination.complete(), this.unsubscribe();
                    }),
                    (e.prototype._unsubscribeAndRecycle = function () {
                        var t = this._parentOrParents;
                        return (this._parentOrParents = null), this.unsubscribe(), (this.closed = !1), (this.isStopped = !1), (this._parentOrParents = t), this;
                    }),
                    e
                );
            })(Wt),
            Yt = (function (t) {
                function e(e, n, r, o) {
                    var i,
                        s = t.call(this) || this;
                    s._parentSubscriber = e;
                    var a = s;
                    return (
                        Dt(n) ? (i = n) : n && ((i = n.next), (r = n.error), (o = n.complete), n !== Bt && (Dt((a = Object.create(n)).unsubscribe) && s.add(a.unsubscribe.bind(a)), (a.unsubscribe = s.unsubscribe.bind(s)))),
                        (s._context = a),
                        (s._next = i),
                        (s._error = r),
                        (s._complete = o),
                        s
                    );
                }
                return (
                    Mt(e, t),
                    (e.prototype.next = function (t) {
                        if (!this.isStopped && this._next) {
                            var e = this._parentSubscriber;
                            Ft.useDeprecatedSynchronousErrorHandling && e.syncErrorThrowable ? this.__tryOrSetError(e, this._next, t) && this.unsubscribe() : this.__tryOrUnsub(this._next, t);
                        }
                    }),
                    (e.prototype.error = function (t) {
                        if (!this.isStopped) {
                            var e = this._parentSubscriber,
                                n = Ft.useDeprecatedSynchronousErrorHandling;
                            if (this._error) n && e.syncErrorThrowable ? (this.__tryOrSetError(e, this._error, t), this.unsubscribe()) : (this.__tryOrUnsub(this._error, t), this.unsubscribe());
                            else if (e.syncErrorThrowable) n ? ((e.syncErrorValue = t), (e.syncErrorThrown = !0)) : Ht(t), this.unsubscribe();
                            else {
                                if ((this.unsubscribe(), n)) throw t;
                                Ht(t);
                            }
                        }
                    }),
                    (e.prototype.complete = function () {
                        var t = this;
                        if (!this.isStopped) {
                            var e = this._parentSubscriber;
                            if (this._complete) {
                                var n = function () {
                                    return t._complete.call(t._context);
                                };
                                Ft.useDeprecatedSynchronousErrorHandling && e.syncErrorThrowable ? (this.__tryOrSetError(e, n), this.unsubscribe()) : (this.__tryOrUnsub(n), this.unsubscribe());
                            } else this.unsubscribe();
                        }
                    }),
                    (e.prototype.__tryOrUnsub = function (t, e) {
                        try {
                            t.call(this._context, e);
                        } catch (t) {
                            if ((this.unsubscribe(), Ft.useDeprecatedSynchronousErrorHandling)) throw t;
                            Ht(t);
                        }
                    }),
                    (e.prototype.__tryOrSetError = function (t, e, n) {
                        if (!Ft.useDeprecatedSynchronousErrorHandling) throw new Error("bad call");
                        try {
                            e.call(this._context, n);
                        } catch (e) {
                            return Ft.useDeprecatedSynchronousErrorHandling ? ((t.syncErrorValue = e), (t.syncErrorThrown = !0), !0) : (Ht(e), !0);
                        }
                        return !1;
                    }),
                    (e.prototype._unsubscribe = function () {
                        var t = this._parentSubscriber;
                        (this._context = null), (this._parentSubscriber = null), t.unsubscribe();
                    }),
                    e
                );
            })(Gt);
        function Jt(t, e) {
            return function (n) {
                if ("function" != typeof t) throw new TypeError("argument is not a function. Are you looking for `mapTo()`?");
                return n.lift(new Xt(t, e));
            };
        }
        var Xt = (function () {
                function t(t, e) {
                    (this.project = t), (this.thisArg = e);
                }
                return (
                    (t.prototype.call = function (t, e) {
                        return e.subscribe(new Qt(t, this.project, this.thisArg));
                    }),
                    t
                );
            })(),
            Qt = (function (t) {
                function e(e, n, r) {
                    var o = t.call(this, e) || this;
                    return (o.project = n), (o.count = 0), (o.thisArg = r || o), o;
                }
                return (
                    Mt(e, t),
                    (e.prototype._next = function (t) {
                        var e;
                        try {
                            e = this.project.call(this.thisArg, t, this.count++);
                        } catch (t) {
                            return void this.destination.error(t);
                        }
                        this.destination.next(e);
                    }),
                    e
                );
            })(Gt),
            Zt = (function (t) {
                function e() {
                    return (null !== t && t.apply(this, arguments)) || this;
                }
                return (
                    Mt(e, t),
                    (e.prototype.notifyNext = function (t, e, n, r, o) {
                        this.destination.next(e);
                    }),
                    (e.prototype.notifyError = function (t, e) {
                        this.destination.error(t);
                    }),
                    (e.prototype.notifyComplete = function (t) {
                        this.destination.complete();
                    }),
                    e
                );
            })(Gt),
            te = (function (t) {
                function e(e, n, r) {
                    var o = t.call(this) || this;
                    return (o.parent = e), (o.outerValue = n), (o.outerIndex = r), (o.index = 0), o;
                }
                return (
                    Mt(e, t),
                    (e.prototype._next = function (t) {
                        this.parent.notifyNext(this.outerValue, t, this.outerIndex, this.index++, this);
                    }),
                    (e.prototype._error = function (t) {
                        this.parent.notifyError(t, this), this.unsubscribe();
                    }),
                    (e.prototype._complete = function () {
                        this.parent.notifyComplete(this), this.unsubscribe();
                    }),
                    e
                );
            })(Gt);
        function ee() {
            return "function" == typeof Symbol && Symbol.iterator ? Symbol.iterator : "@@iterator";
        }
        var ne = ee(),
            re = ("function" == typeof Symbol && Symbol.observable) || "@@observable",
            oe = function (t) {
                return t && "number" == typeof t.length && "function" != typeof t;
            };
        function ie(t) {
            return !!t && "function" != typeof t.subscribe && "function" == typeof t.then;
        }
        var se = function (t) {
            if (t && "function" == typeof t[re])
                return (
                    (o = t),
                    function (t) {
                        var e = o[re]();
                        if ("function" != typeof e.subscribe) throw new TypeError("Provided object does not correctly implement Symbol.observable");
                        return e.subscribe(t);
                    }
                );
            if (oe(t))
                return (
                    (r = t),
                    function (t) {
                        for (var e = 0, n = r.length; e < n && !t.closed; e++) t.next(r[e]);
                        t.complete();
                    }
                );
            if (ie(t))
                return (
                    (n = t),
                    function (t) {
                        return (
                            n
                                .then(
                                    function (e) {
                                        t.closed || (t.next(e), t.complete());
                                    },
                                    function (e) {
                                        return t.error(e);
                                    }
                                )
                                .then(null, Ht),
                            t
                        );
                    }
                );
            if (t && "function" == typeof t[ne])
                return (
                    (e = t),
                    function (t) {
                        for (var n = e[ne](); ; ) {
                            var r = n.next();
                            if (r.done) {
                                t.complete();
                                break;
                            }
                            if ((t.next(r.value), t.closed)) break;
                        }
                        return (
                            "function" == typeof n.return &&
                                t.add(function () {
                                    n.return && n.return();
                                }),
                            t
                        );
                    }
                );
            var e,
                n,
                r,
                o,
                i = Vt(t) ? "an invalid object" : "'" + t + "'";
            throw new TypeError("You provided " + i + " where a stream was expected. You can provide an Observable, Promise, Array, or Iterable.");
        };
        function ae() {}
        function ue(t) {
            return t
                ? 1 === t.length
                    ? t[0]
                    : function (e) {
                          return t.reduce(function (t, e) {
                              return e(t);
                          }, e);
                      }
                : ae;
        }
        var ce = (function () {
            function t(t) {
                (this._isScalar = !1), t && (this._subscribe = t);
            }
            return (
                (t.prototype.lift = function (e) {
                    var n = new t();
                    return (n.source = this), (n.operator = e), n;
                }),
                (t.prototype.subscribe = function (t, e, n) {
                    var r = this.operator,
                        o = (function (t, e, n) {
                            if (t) {
                                if (t instanceof Gt) return t;
                                if (t[Kt]) return t[Kt]();
                            }
                            return t || e || n ? new Gt(t, e, n) : new Gt(Bt);
                        })(t, e, n);
                    if (
                        (r ? o.add(r.call(o, this.source)) : o.add(this.source || (Ft.useDeprecatedSynchronousErrorHandling && !o.syncErrorThrowable) ? this._subscribe(o) : this._trySubscribe(o)),
                        Ft.useDeprecatedSynchronousErrorHandling && o.syncErrorThrowable && ((o.syncErrorThrowable = !1), o.syncErrorThrown))
                    )
                        throw o.syncErrorValue;
                    return o;
                }),
                (t.prototype._trySubscribe = function (t) {
                    try {
                        return this._subscribe(t);
                    } catch (e) {
                        Ft.useDeprecatedSynchronousErrorHandling && ((t.syncErrorThrown = !0), (t.syncErrorValue = e)),
                            !(function (t) {
                                for (; t; ) {
                                    var e = t,
                                        n = e.closed,
                                        r = e.destination,
                                        o = e.isStopped;
                                    if (n || o) return !1;
                                    t = r && r instanceof Gt ? r : null;
                                }
                                return !0;
                            })(t)
                                ? console.warn(e)
                                : t.error(e);
                    }
                }),
                (t.prototype.forEach = function (t, e) {
                    var n = this;
                    return new (e = le(e))(function (e, r) {
                        var o;
                        o = n.subscribe(
                            function (e) {
                                try {
                                    t(e);
                                } catch (t) {
                                    r(t), o && o.unsubscribe();
                                }
                            },
                            r,
                            e
                        );
                    });
                }),
                (t.prototype._subscribe = function (t) {
                    var e = this.source;
                    return e && e.subscribe(t);
                }),
                (t.prototype[re] = function () {
                    return this;
                }),
                (t.prototype.pipe = function () {
                    for (var t = [], e = 0; e < arguments.length; e++) t[e] = arguments[e];
                    return 0 === t.length ? this : ue(t)(this);
                }),
                (t.prototype.toPromise = function (t) {
                    var e = this;
                    return new (t = le(t))(function (t, n) {
                        var r;
                        e.subscribe(
                            function (t) {
                                return (r = t);
                            },
                            function (t) {
                                return n(t);
                            },
                            function () {
                                return t(r);
                            }
                        );
                    });
                }),
                (t.create = function (e) {
                    return new t(e);
                }),
                t
            );
        })();
        function le(t) {
            if ((t || (t = Ft.Promise || Promise), !t)) throw new Error("no Promise impl found");
            return t;
        }
        function fe(t, e, n, r, o) {
            if ((void 0 === o && (o = new te(t, n, r)), !o.closed)) return e instanceof ce ? e.subscribe(o) : se(e)(o);
        }
        var pe = (function () {
                function t(t) {
                    this.selector = t;
                }
                return (
                    (t.prototype.call = function (t, e) {
                        return e.subscribe(new he(t, this.selector, this.caught));
                    }),
                    t
                );
            })(),
            he = (function (t) {
                function e(e, n, r) {
                    var o = t.call(this, e) || this;
                    return (o.selector = n), (o.caught = r), o;
                }
                return (
                    Mt(e, t),
                    (e.prototype.error = function (e) {
                        if (!this.isStopped) {
                            var n = void 0;
                            try {
                                n = this.selector(e, this.caught);
                            } catch (e) {
                                return void t.prototype.error.call(this, e);
                            }
                            this._unsubscribeAndRecycle();
                            var r = new te(this, void 0, void 0);
                            this.add(r), fe(this, n, void 0, void 0, r);
                        }
                    }),
                    e
                );
            })(Zt);
        function de(t) {
            var e = t.error;
            t.subscriber.error(e);
        }
        function ye(t, e) {
            if (null != t) {
                if (
                    (function (t) {
                        return t && "function" == typeof t[re];
                    })(t)
                )
                    return (function (t, e) {
                        return new ce(function (n) {
                            var r = new Wt();
                            return (
                                r.add(
                                    e.schedule(function () {
                                        var o = t[re]();
                                        r.add(
                                            o.subscribe({
                                                next: function (t) {
                                                    r.add(
                                                        e.schedule(function () {
                                                            return n.next(t);
                                                        })
                                                    );
                                                },
                                                error: function (t) {
                                                    r.add(
                                                        e.schedule(function () {
                                                            return n.error(t);
                                                        })
                                                    );
                                                },
                                                complete: function () {
                                                    r.add(
                                                        e.schedule(function () {
                                                            return n.complete();
                                                        })
                                                    );
                                                },
                                            })
                                        );
                                    })
                                ),
                                r
                            );
                        });
                    })(t, e);
                if (ie(t))
                    return (function (t, e) {
                        return new ce(function (n) {
                            var r = new Wt();
                            return (
                                r.add(
                                    e.schedule(function () {
                                        return t.then(
                                            function (t) {
                                                r.add(
                                                    e.schedule(function () {
                                                        n.next(t),
                                                            r.add(
                                                                e.schedule(function () {
                                                                    return n.complete();
                                                                })
                                                            );
                                                    })
                                                );
                                            },
                                            function (t) {
                                                r.add(
                                                    e.schedule(function () {
                                                        return n.error(t);
                                                    })
                                                );
                                            }
                                        );
                                    })
                                ),
                                r
                            );
                        });
                    })(t, e);
                if (oe(t))
                    return (function (t, e) {
                        return new ce(function (n) {
                            var r = new Wt(),
                                o = 0;
                            return (
                                r.add(
                                    e.schedule(function () {
                                        o !== t.length ? (n.next(t[o++]), n.closed || r.add(this.schedule())) : n.complete();
                                    })
                                ),
                                r
                            );
                        });
                    })(t, e);
                if (
                    (function (t) {
                        return t && "function" == typeof t[ne];
                    })(t) ||
                    "string" == typeof t
                )
                    return (function (t, e) {
                        if (!t) throw new Error("Iterable cannot be null");
                        return new ce(function (n) {
                            var r,
                                o = new Wt();
                            return (
                                o.add(function () {
                                    r && "function" == typeof r.return && r.return();
                                }),
                                o.add(
                                    e.schedule(function () {
                                        (r = t[ne]()),
                                            o.add(
                                                e.schedule(function () {
                                                    if (!n.closed) {
                                                        var t, e;
                                                        try {
                                                            var o = r.next();
                                                            (t = o.value), (e = o.done);
                                                        } catch (t) {
                                                            return void n.error(t);
                                                        }
                                                        e ? n.complete() : (n.next(t), this.schedule());
                                                    }
                                                })
                                            );
                                    })
                                ),
                                o
                            );
                        });
                    })(t, e);
            }
            throw new TypeError(((null !== t && typeof t) || t) + " is not observable");
        }
        function ge(t, e) {
            return e ? ye(t, e) : t instanceof ce ? t : new ce(se(t));
        }
        var be = (function () {
                function t(t) {
                    this.project = t;
                }
                return (
                    (t.prototype.call = function (t, e) {
                        return e.subscribe(new ve(t, this.project));
                    }),
                    t
                );
            })(),
            ve = (function (t) {
                function e(e, n) {
                    var r = t.call(this, e) || this;
                    return (r.project = n), (r.index = 0), r;
                }
                return (
                    Mt(e, t),
                    (e.prototype._next = function (t) {
                        var e,
                            n = this.index++;
                        try {
                            e = this.project(t, n);
                        } catch (t) {
                            return void this.destination.error(t);
                        }
                        this._innerSub(e, t, n);
                    }),
                    (e.prototype._innerSub = function (t, e, n) {
                        var r = this.innerSubscription;
                        r && r.unsubscribe();
                        var o = new te(this, void 0, void 0);
                        this.destination.add(o), (this.innerSubscription = fe(this, t, e, n, o));
                    }),
                    (e.prototype._complete = function () {
                        var e = this.innerSubscription;
                        (e && !e.closed) || t.prototype._complete.call(this), this.unsubscribe();
                    }),
                    (e.prototype._unsubscribe = function () {
                        this.innerSubscription = null;
                    }),
                    (e.prototype.notifyComplete = function (e) {
                        this.destination.remove(e), (this.innerSubscription = null), this.isStopped && t.prototype._complete.call(this);
                    }),
                    (e.prototype.notifyNext = function (t, e, n, r, o) {
                        this.destination.next(e);
                    }),
                    e
                );
            })(Zt),
            me = function () {
                return function (t) {
                    return t.pipe(
                        (function t(e, n) {
                            return "function" == typeof n
                                ? function (r) {
                                      return r.pipe(
                                          t(function (t, r) {
                                              return ge(e(t, r)).pipe(
                                                  Jt(function (e, o) {
                                                      return n(t, e, r, o);
                                                  })
                                              );
                                          })
                                      );
                                  }
                                : function (t) {
                                      return t.lift(new be(e));
                                  };
                        })(function (t) {
                            return ge(t.json());
                        })
                    );
                };
            },
            we = { rkApi: { widget: "https://api.radioking.io/widget" } };
        function _e(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                (r.enumerable = r.enumerable || !1), (r.configurable = !0), "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r);
            }
        }
        function xe(t, e, n) {
            return e in t ? Object.defineProperty(t, e, { value: n, enumerable: !0, configurable: !0, writable: !0 }) : (t[e] = n), t;
        }
        var ke = (function () {
            function t() {
                var e = this;
                !(function (t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
                })(this, t),
                    xe(this, "url", void 0),
                    xe(this, "fetchCurrentTrack", function (n) {
                        var r,
                            o = "".concat(e.url).concat(n, "/track/current");
                        return Object(Ct.fromFetch)(o).pipe(
                            me(),
                            Jt(function (e) {
                                if (!e.title) throw new Error();
                                return t.convertToTrack(e);
                            }),
                            ((r = function (t) {
                                return (
                                    (e = t),
                                    new ce(
                                        n
                                            ? function (t) {
                                                  return n.schedule(de, 0, { error: e, subscriber: t });
                                              }
                                            : function (t) {
                                                  return t.error(e);
                                              }
                                    )
                                );
                                var e, n;
                            }),
                            function (t) {
                                var e = new pe(r),
                                    n = t.lift(e);
                                return (e.caught = n);
                            })
                        );
                    });
                var n = we.rkApi.widget;
                this.url = "".concat(n, "/radio/");
            }
            var e, n, r;
            return (
                (e = t),
                (r = [
                    {
                        key: "convertToTrack",
                        value: function (t) {
                            return { title: t.title, artist: t.artist, cover: t.cover, buyLink: t.buy_link };
                        },
                    },
                ]),
                (n = null) && _e(e.prototype, n),
                r && _e(e, r),
                t
            );
        })();
        function Se(t) {
            return function (e) {
                return t ? e : "";
            };
        }
        var Oe = {
                en: { translation: { BUY: "Buy" } },
                fr: { translation: { BUY: "Acheter" } },
                de: { translation: { BUY: "Kaufen" } },
                es: { translation: { BUY: "Comprar" } },
                it: { translation: { BUY: "Acquista" } },
                pt: { translation: { BUY: "Comprar" } },
            },
            Ee =
                '<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n\t viewBox="0 0 14 12" style="enable-background:new 0 0 14 12;" xml:space="preserve">\n<style type="text/css">\n\t.st0{fill:#474747;}\n</style>\n<title>shopping-cart</title>\n<desc>Created with Sketch.</desc>\n<g id="Partage">\n\t<g id="Partage---Titres-diffusÃ©s" transform="translate(-1524.000000, -282.000000)">\n\t\t<g id="Group-2" transform="translate(1035.000000, 150.000000)">\n\t\t\t<g id="Group-23">\n\t\t\t\t<g id="Group-21" transform="translate(25.000000, 44.000000)">\n\t\t\t\t\t<g id="BTN-Annuler" transform="translate(452.000000, 77.000000)">\n\t\t\t\t\t\t<g id="BTN-Ajouter-Copy">\n\t\t\t\t\t\t\t<g id="shopping-cart" transform="translate(12.000000, 11.000000)">\n\t\t\t\t\t\t\t\t<path id="Path" class="st0" d="M12.3,7l1.1-4.8c0.1-0.3-0.2-0.7-0.5-0.7H3.7l-0.2-1C3.4,0.2,3.2,0,3,0H0.6\n\t\t\t\t\t\t\t\t\tC0.3,0,0,0.2,0,0.6v0.4c0,0.3,0.3,0.6,0.6,0.6h1.6l1.6,7.9C3.4,9.6,3.2,10,3.2,10.5c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3\n\t\t\t\t\t\t\t\t\tc0-0.4-0.2-0.7-0.4-0.9h4.9c-0.2,0.2-0.4,0.6-0.4,0.9c0,0.7,0.6,1.3,1.3,1.3c0.7,0,1.3-0.6,1.3-1.3c0-0.5-0.3-1-0.7-1.2\n\t\t\t\t\t\t\t\t\tl0.1-0.6c0.1-0.3-0.2-0.7-0.5-0.7H5.1L4.9,7.4h6.8C12,7.4,12.3,7.2,12.3,7z"/>\n\t\t\t\t\t\t\t</g>\n\t\t\t\t\t\t</g>\n\t\t\t\t\t</g>\n\t\t\t\t</g>\n\t\t\t</g>\n\t\t</g>\n\t</g>\n</g>\n</svg>\n',
            Te =
                '<svg version="1.1" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">\n<defs>\n<linearGradient id="a" y1="100%">\n<stop stop-color="#474747" offset="0"/>\n<stop stop-color="#ACACAC" offset="1"/>\n</linearGradient>\n</defs>\n<g fill-rule="evenodd">\n<rect width="500" height="500" fill="url(#a)"/>\n<path d="m348.92 131v196.58c-0.004235 18.858-12.673 35.362-30.889 40.239-18.216 4.8777-37.437-3.0871-46.864-19.419-9.427-16.332-6.7096-36.96 6.6256-50.294 13.335-13.334 33.963-16.049 50.294-6.62v-123.53l-93.75 44.122v115.5c-0.004235 18.858-12.673 35.362-30.889 40.239-18.216 4.8777-37.437-3.0871-46.864-19.419-9.427-16.332-6.7096-36.96 6.6256-50.294 13.335-13.334 33.963-16.049 50.294-6.62v-96.74l135.42-63.75zm-157.08 177c-11.046 0-20 8.9543-20 20s8.9543 20 20 20 20-8.9543 20-20-8.9543-20-20-20zm115 0c-11.046 0-20 8.9543-20 20s8.9543 20 20 20 20-8.9543 20-20-8.9543-20-20-20z" fill="#F2F2F2" fill-rule="nonzero"/>\n</g>\n</svg>\n';
        function Ae(t) {
            return (Ae =
                "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
                    ? function (t) {
                          return typeof t;
                      }
                    : function (t) {
                          return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t;
                      })(t);
        }
        function je(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                (r.enumerable = r.enumerable || !1), (r.configurable = !0), "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r);
            }
        }
        function Pe(t) {
            return (Pe = Object.setPrototypeOf
                ? Object.getPrototypeOf
                : function (t) {
                      return t.__proto__ || Object.getPrototypeOf(t);
                  })(t);
        }
        function Le(t) {
            if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return t;
        }
        function Re(t, e) {
            return (Re =
                Object.setPrototypeOf ||
                function (t, e) {
                    return (t.__proto__ = e), t;
                })(t, e);
        }
        var Ce = (function (t) {
                function e(t, n) {
                    var r, o, i, s;
                    return (
                        (function (t, e) {
                            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
                        })(this, e),
                        (r = (function (t, e) {
                            return !e || ("object" !== Ae(e) && "function" != typeof e) ? Le(t) : e;
                        })(this, Pe(e).call(this, { className: Ot.a.articleCard }))),
                        (o = Le(r)),
                        (s = void 0),
                        (i = "displayBuyLink") in o ? Object.defineProperty(o, i, { value: s, enumerable: !0, configurable: !0, writable: !0 }) : (o[i] = s),
                        (r.displayBuyLink = n),
                        pt
                            .use(dt.a)
                            .use(kt)
                            .init({ fallbackLng: "en", debug: !1, resources: Oe }, function () {
                                r.init(t);
                            }),
                        r
                    );
                }
                var n, r, o;
                return (
                    (function (t, e) {
                        if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                        (t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } })), e && Re(t, e);
                    })(e, O),
                    (n = e),
                    (r = [
                        {
                            key: "init",
                            value: function (t) {
                                var e = "\n      "
                                    .concat(Se(t.cover)("\n          <img src='".concat(t.cover, "' alt='").concat(t.title, "' class='").concat(Ot.a.image, "' />\n      ")), "\n      ")
                                    .concat(Se(!t.cover)('<span class="'.concat(Ot.a.image, '">').concat(Te, "</span>")), '\n      <div class="')
                                    .concat(Ot.a.infos, '"><div class="')
                                    .concat(Ot.a.titleBlock, "\">\n      <div class='")
                                    .concat(Ot.a.title, "'>")
                                    .concat(t.title, "</div>\n      ")
                                    .concat(Se(t.artist)("<div class='".concat(Ot.a.artist, "'>").concat(t.artist, "</div>")), "\n      </div></div>\n    ");
                                this.displayBuyLink &&
                                    t.buyLink &&
                                    (e += '<div class="'.concat(Ot.a.buy, '"><a target="_blank" href="').concat(t.buyLink, '"><span class="').concat(Ot.a.iconButton, '">').concat(Ee, "</span>").concat(pt.t("BUY"), "</a></div>")),
                                    this.updateHtml(e);
                            },
                        },
                    ]) && je(n.prototype, r),
                    o && je(n, o),
                    e
                );
            })(),
            Ne = n(13),
            Me = n.n(Ne);
        function De(t) {
            return (De =
                "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
                    ? function (t) {
                          return typeof t;
                      }
                    : function (t) {
                          return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t;
                      })(t);
        }
        function Ue(t, e) {
            return !e || ("object" !== De(e) && "function" != typeof e)
                ? (function (t) {
                      if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                      return t;
                  })(t)
                : e;
        }
        function Fe(t) {
            return (Fe = Object.setPrototypeOf
                ? Object.getPrototypeOf
                : function (t) {
                      return t.__proto__ || Object.getPrototypeOf(t);
                  })(t);
        }
        function He(t, e) {
            return (He =
                Object.setPrototypeOf ||
                function (t, e) {
                    return (t.__proto__ = e), t;
                })(t, e);
        }
        var Be = (function (t) {
            function e() {
                var t;
                !(function (t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
                })(this, e),
                    (t = Ue(this, Fe(e).call(this)));
                var n = '<div id="send-loader" class="'.concat(Me.a.loader, '"></div>');
                return t.updateHtml(n), t;
            }
            return (
                (function (t, e) {
                    if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                    (t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } })), e && He(t, e);
                })(e, O),
                e
            );
        })();
        function Ie(t) {
            return (Ie =
                "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
                    ? function (t) {
                          return typeof t;
                      }
                    : function (t) {
                          return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t;
                      })(t);
        }
        function Ve(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                (r.enumerable = r.enumerable || !1), (r.configurable = !0), "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r);
            }
        }
        function ze(t) {
            return (ze = Object.setPrototypeOf
                ? Object.getPrototypeOf
                : function (t) {
                      return t.__proto__ || Object.getPrototypeOf(t);
                  })(t);
        }
        function qe(t) {
            if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return t;
        }
        function We(t, e) {
            return (We =
                Object.setPrototypeOf ||
                function (t, e) {
                    return (t.__proto__ = e), t;
                })(t, e);
        }
        function $e(t, e, n) {
            return e in t ? Object.defineProperty(t, e, { value: n, enumerable: !0, configurable: !0, writable: !0 }) : (t[e] = n), t;
        }
        var Ke = (function (t) {
                function e(t, n) {
                    var r;
                    return (
                        (function (t, e) {
                            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
                        })(this, e),
                        (r = (function (t, e) {
                            return !e || ("object" !== Ie(e) && "function" != typeof e) ? qe(t) : e;
                        })(this, ze(e).call(this, { className: Rt.a.mainView }))),
                        $e(qe(r), "errorAlert", new Pt()),
                        $e(qe(r), "content", new O()),
                        $e(qe(r), "loader", new Be()),
                        $e(qe(r), "currentTrack", { artist: "", title: "", cover: "", buyLink: "" }),
                        $e(qe(r), "displayBuyLink", !0),
                        t
                            ? ((r.displayBuyLink = "0" !== n),
                              setInterval(function () {
                                  r.fetchCurrentTrack(t);
                              }, 3e4),
                              r.fetchCurrentTrack(t),
                              r.setupViews())
                            : r.setupErrorView(),
                        r
                    );
                }
                var n, r, o;
                return (
                    (function (t, e) {
                        if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                        (t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } })), e && We(t, e);
                    })(e, O),
                    (n = e),
                    (r = [
                        {
                            key: "setupViews",
                            value: function () {
                                this.add(this.loader), this.add(this.content);
                            },
                        },
                        {
                            key: "setupErrorView",
                            value: function () {
                                this.loader.hide();
                            },
                        },
                        {
                            key: "fetchCurrentTrack",
                            value: function (t) {
                                var e = this;
                                new ke().fetchCurrentTrack(t).subscribe(this.displayCurrentTrack.bind(this), function () {
                                    return e.setupErrorView();
                                });
                            },
                        },
                        {
                            key: "displayCurrentTrack",
                            value: function (t) {
                                this.loader.hide(),
                                    (this.currentTrack && this.currentTrack.artist === t.artist && this.currentTrack.title === t.title) || ((this.currentTrack = t), this.content.clear(), this.content.add(new Ce(t, this.displayBuyLink)));
                            },
                        },
                    ]) && Ve(n.prototype, r),
                    o && Ve(n, o),
                    e
                );
            })(),
            Ge = (n(41), document.querySelector("#rk-current-track-widget")),
            Ye = document.querySelector("#rk-current-track-script");
        if (Ge) {
            var Je = new Ke(Ge.getAttribute("data-id") || "0", Ge.getAttribute("data-buy") || "1");
            Ge.appendChild(Je.$element);
        } else if (Ye && Ye.parentElement) {
            var Xe = document.createElement("div");
            (Xe.innerHTML = '<div id="rk-current-track-app"></div>'), Ye.parentElement.insertBefore(Xe, Ye);
            var Qe = new Ke(Ye.getAttribute("data-id") || "0", Ye.getAttribute("data-buy") || "1"),
                Ze = document.querySelector("#rk-current-track-app");
            Ze && Ze.appendChild(Qe.$element);
        }
    },
]);
//# sourceMappingURL=script.min.js.map
