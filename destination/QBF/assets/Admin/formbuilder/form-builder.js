/*!
 * jQuery formBuilder: https://formbuilder.online/
 * Version: 3.7.1
 * Author: Kevin Chappell <kevin.b.chappell@gmail.com>
 */
!function(e) {
    "use strict";
    !function(e) {
        var t = {};
        function r(o) {
            if (t[o])
                return t[o].exports;
            var n = t[o] = {
                i: o,
                l: !1,
                exports: {}
            };
            return e[o].call(n.exports, n, n.exports, r),
            n.l = !0,
            n.exports
        }
        r.m = e,
        r.c = t,
        r.d = function(e, t, o) {
            r.o(e, t) || Object.defineProperty(e, t, {
                enumerable: !0,
                get: o
            })
        }
        ,
        r.r = function(e) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                value: "Module"
            }),
            Object.defineProperty(e, "__esModule", {
                value: !0
            })
        }
        ,
        r.t = function(e, t) {
            if (1 & t && (e = r(e)),
            8 & t)
                return e;
            if (4 & t && "object" == typeof e && e && e.__esModule)
                return e;
            var o = Object.create(null);
            if (r.r(o),
            Object.defineProperty(o, "default", {
                enumerable: !0,
                value: e
            }),
            2 & t && "string" != typeof e)
                for (var n in e)
                    r.d(o, n, function(t) {
                        return e[t]
                    }
                    .bind(null, n));
            return o
        }
        ,
        r.n = function(e) {
            var t = e && e.__esModule ? function() {
                return e.default
            }
            : function() {
                return e
            }
            ;
            return r.d(t, "a", t),
            t
        }
        ,
        r.o = function(e, t) {
            return Object.prototype.hasOwnProperty.call(e, t)
        }
        ,
        r.p = "",
        r(r.s = 35)
    }([function(t, r, o) {
        function n(e, t) {
            var r = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var o = Object.getOwnPropertySymbols(e);
                t && (o = o.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }
                ))),
                r.push.apply(r, o)
            }
            return r
        }
        function i(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {};
                t % 2 ? n(Object(r), !0).forEach((function(t) {
                    l(e, t, r[t])
                }
                )) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r)) : n(Object(r)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                }
                ))
            }
            return e
        }
        function l(e, t, r) {
            return t in e ? Object.defineProperty(e, t, {
                value: r,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = r,
            e
        }
        function a(e, t) {
            if (null == e)
                return {};
            var r, o, n = function(e, t) {
                if (null == e)
                    return {};
                var r, o, n = {}, i = Object.keys(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || (n[r] = e[r]);
                return n
            }(e, t);
            if (Object.getOwnPropertySymbols) {
                var i = Object.getOwnPropertySymbols(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || Object.prototype.propertyIsEnumerable.call(e, r) && (n[r] = e[r])
            }
            return n
        }
        o.d(r, "A", (function() {
            return s
        }
        )),
        o.d(r, "C", (function() {
            return c
        }
        )),
        o.d(r, "b", (function() {
            return u
        }
        )),
        o.d(r, "h", (function() {
            return p
        }
        )),
        o.d(r, "n", (function() {
            return b
        }
        )),
        o.d(r, "c", (function() {
            return h
        }
        )),
        o.d(r, "s", (function() {
            return g
        }
        )),
        o.d(r, "k", (function() {
            return y
        }
        )),
        o.d(r, "q", (function() {
            return w
        }
        )),
        o.d(r, "t", (function() {
            return A
        }
        )),
        o.d(r, "u", (function() {
            return j
        }
        )),
        o.d(r, "g", (function() {
            return k
        }
        )),
        o.d(r, "i", (function() {
            return C
        }
        )),
        o.d(r, "B", (function() {
            return E
        }
        )),
        o.d(r, "v", (function() {
            return N
        }
        )),
        o.d(r, "l", (function() {
            return S
        }
        )),
        o.d(r, "p", (function() {
            return L
        }
        )),
        o.d(r, "m", (function() {
            return D
        }
        )),
        o.d(r, "d", (function() {
            return T
        }
        )),
        o.d(r, "a", (function() {
            return F
        }
        )),
        o.d(r, "e", (function() {
            return R
        }
        )),
        o.d(r, "r", (function() {
            return I
        }
        )),
        o.d(r, "x", (function() {
            return P
        }
        )),
        o.d(r, "j", (function() {
            return M
        }
        )),
        o.d(r, "y", (function() {
            return z
        }
        )),
        o.d(r, "o", (function() {
            return U
        }
        )),
        o.d(r, "w", (function() {
            return H
        }
        )),
        o.d(r, "z", (function() {
            return Q
        }
        )),
        window.fbLoaded = {
            js: [],
            css: []
        },
        window.fbEditors = {
            quill: {},
            tinymce: {}
        };
        const s = function(e, t=!1) {
            const r = [null, void 0, ""];
            t && r.push(!1);
            for (const t in e)
                r.includes(e[t]) ? delete e[t] : Array.isArray(e[t]) && (e[t].length || delete e[t]);
            return e
        }
          , d = function(e) {
            return !["values", "enableOther", "other", "label", "subtype"].includes(e)
        }
          , c = e=>Object.entries(e).map(([e,t])=>`${b(e)}="${t}"`).join(" ")
          , u = e=>Object.entries(e).map(([e,t])=>d(e) && Object.values(f(e, t)).join("")).filter(Boolean).join(" ")
          , f = (e,t)=>{
            let r;
            return e = m(e),
            t && (Array.isArray(t) ? r = q(t.join(" ")) : ("boolean" == typeof t && (t = t.toString()),
            r = q(t.trim()))),
            {
                name: e,
                value: t = t ? `="${r}"` : ""
            }
        }
          , p = e=>e.reduce((e,t)=>e.concat(Array.isArray(t) ? p(t) : t), [])
          , m = e=>({
            className: "class"
        }[e] || b(e))
          , b = e=>(e = (e = e.replace(/[^\w\s\-]/gi, "")).replace(/([A-Z])/g, (function(e) {
            return "-" + e.toLowerCase()
        }
        ))).replace(/\s/g, "-").replace(/^-+/g, "")
          , h = e=>e.replace(/-([a-z])/g, (e,t)=>t.toUpperCase())
          , g = function(e) {
            const t = (new Date).getTime();
            return (e.type || b(e.label)) + "-" + t
        }
          , y = e=>void 0 === e ? e : [["array", e=>Array.isArray(e)], ["node", e=>e instanceof window.Node || e instanceof window.HTMLElement], ["component", ()=>e && e.dom], [typeof e, ()=>!0]].find(t=>t[1](e))[0]
          , w = function(e, t="", r={}) {
            let o = y(t);
            const {events: n} = r
              , i = a(r, ["events"])
              , l = document.createElement(e)
              , s = {
                string: e=>{
                    l.innerHTML += e
                }
                ,
                object: e=>{
                    const {tag: t, content: r} = e
                      , o = a(e, ["tag", "content"]);
                    return l.appendChild(w(t, r, o))
                }
                ,
                node: e=>l.appendChild(e),
                array: e=>{
                    for (let t = 0; t < e.length; t++)
                        o = y(e[t]),
                        s[o](e[t])
                }
                ,
                function: e=>{
                    e = e(),
                    o = y(e),
                    s[o](e)
                }
                ,
                undefined: ()=>{}
            };
            for (const e in i)
                if (i.hasOwnProperty(e)) {
                    const t = m(e)
                      , r = Array.isArray(i[e]) ? E(i[e].join(" ").split(" ")).join(" ") : i[e];
                    l.setAttribute(t, r)
                }
            return t && s[o](t),
            ((e,t)=>{
                if (t)
                    for (const r in t)
                        t.hasOwnProperty(r) && e.addEventListener(r, e=>t[r](e))
            }
            )(l, n),
            l
        }
          , v = e=>{
            const t = e.attributes
              , r = {};
            return C(t, e=>{
                let o = t[e].value || "";
                o.match(/false|true/g) ? o = "true" === o : o.match(/undefined/g) && (o = void 0),
                o && (r[h(t[e].name)] = o)
            }
            ),
            r
        }
          , x = e=>{
            const t = [];
            for (let r = 0; r < e.length; r++) {
                const o = i(i({}, v(e[r])), {}, {
                    label: e[r].textContent
                });
                t.push(o)
            }
            return t
        }
          , O = e=>{
            const t = [];
            if (e.length) {
                const r = e[0].getElementsByTagName("value");
                for (let e = 0; e < r.length; e++)
                    t.push(r[e].textContent)
            }
            return t
        }
          , A = e=>{
            const t = (new window.DOMParser).parseFromString(e, "text/xml")
              , r = [];
            if (t) {
                const e = t.getElementsByTagName("field");
                for (let t = 0; t < e.length; t++) {
                    const o = v(e[t])
                      , n = e[t].getElementsByTagName("option")
                      , i = e[t].getElementsByTagName("userData");
                    n && n.length && (o.values = x(n)),
                    i && i.length && (o.userData = O(i)),
                    r.push(o)
                }
            }
            return r
        }
          , j = e=>{
            const t = document.createElement("textarea");
            return t.innerHTML = e,
            t.textContent
        }
          , k = e=>{
            const t = document.createElement("textarea");
            return t.textContent = e,
            t.innerHTML
        }
          , q = e=>{
            const t = {
                '"': "&quot;",
                "&": "&amp;",
                "<": "&lt;",
                ">": "&gt;"
            };
            return "string" == typeof e ? e.replace(/["&<>]/g, e=>t[e] || e) : e
        }
          , C = function(e, t, r) {
            for (let o = 0; o < e.length; o++)
                t.call(r, o, e[o])
        }
          , E = e=>e.filter((e,t,r)=>r.indexOf(e) === t)
          , N = (e,t)=>{
            const r = t.indexOf(e);
            r > -1 && t.splice(r, 1)
        }
          , S = (e,t)=>{
            const r = jQuery;
            let o = [];
            return Array.isArray(e) || (e = [e]),
            L(e) || (o = jQuery.map(e, e=>{
                const r = {
                    dataType: "script",
                    cache: !0,
                    url: (t || "") + e
                };
                return jQuery.ajax(r).done(()=>window.fbLoaded.js.push(e))
            }
            )),
            o.push(jQuery.Deferred(e=>r(e.resolve))),
            jQuery.when(...o)
        }
          , L = (e,t="js")=>{
            let r = !1;
            const o = window.fbLoaded[t];
            return r = Array.isArray(e) ? e.every(e=>o.includes(e)) : o.includes(e),
            r
        }
          , D = (t,r)=>{
            Array.isArray(t) || (t = [t]),
            t.forEach(t=>{
                let o = "href"
                  , n = t
                  , i = "";
                if ("object" == typeof t && (o = t.type || (t.style ? "inline" : "href"),
                i = t.id,
                t = "inline" == o ? t.style : t.href,
                n = i || t.href || t.style),
                !L(n, "css")) {
                    if ("href" == o) {
                        const e = document.createElement("link");
                        e.type = "text/css",
                        e.rel = "stylesheet",
                        e.href = (r || "") + t,
                        document.head.appendChild(e)
                    } else
                        e(`<style type="text/css">${t}</style>`).attr("id", i).appendTo(e(document.head));
                    window.fbLoaded.css.push(n)
                }
            }
            )
        }
          , T = e=>e.replace(/\b\w/g, (function(e) {
            return e.toUpperCase()
        }
        ))
          , B = (e,t)=>{
            const r = Object.assign({}, e, t);
            for (const o in t)
                r.hasOwnProperty(o) && (Array.isArray(t[o]) ? r[o] = Array.isArray(e[o]) ? E(e[o].concat(t[o])) : t[o] : "object" == typeof t[o] ? r[o] = B(e[o], t[o]) : r[o] = t[o]);
            return r
        }
          , F = (e,t,r)=>t.split(" ").forEach(t=>e.addEventListener(t, r, !1))
          , R = (e,t)=>{
            const r = t.replace(".", "");
            for (; (e = e.parentElement) && !e.classList.contains(r); )
                ;
            return e
        }
          , I = ()=>{
            let e = "";
            var t;
            return t = navigator.userAgent || navigator.vendor || window.opera,
            /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(t) && (e = "formbuilder-mobile"),
            e
        }
          , P = e=>e.replace(/\s/g, "-").replace(/[^a-zA-Z0-9[\]_-]/g, "")
          , M = e=>e.replace(/[^0-9]/g, "")
          , z = (e,t)=>t.filter((function(e) {
            return !~this.indexOf(e)
        }
        ), e)
          , U = e=>{
            const t = (e = Array.isArray(e) ? e : [e]).map(({src: e, id: t})=>new Promise(r=>{
                if (window.fbLoaded.css.includes(e))
                    return r(e);
                const o = w("link", null, {
                    href: e,
                    rel: "stylesheet",
                    id: t
                });
                document.head.insertBefore(o, document.head.firstChild)
            }
            ));
            return Promise.all(t)
        }
          , H = e=>{
            const t = document.getElementById(e);
            return t.parentElement.removeChild(t)
        }
        ;
        function Q(e) {
            const t = ["a", "an", "and", "as", "at", "but", "by", "for", "for", "from", "in", "into", "near", "nor", "of", "on", "onto", "or", "the", "to", "with"].map(e=>`\\s${e}\\s`)
              , r = new RegExp(`(?!${t.join("|")})\\w\\S*`,"g");
            return ("" + e).replace(r, e=>e.charAt(0).toUpperCase() + e.substr(1).replace(/[A-Z]/g, e=>" " + e))
        }
        const V = {
            addEventListeners: F,
            attrString: u,
            camelCase: h,
            capitalize: T,
            closest: R,
            getContentType: y,
            escapeAttr: q,
            escapeAttrs: e=>{
                for (const t in e)
                    e.hasOwnProperty(t) && (e[t] = q(e[t]));
                return e
            }
            ,
            escapeHtml: k,
            forceNumber: M,
            forEach: C,
            getScripts: S,
            getStyles: D,
            hyphenCase: b,
            isCached: L,
            markup: w,
            merge: B,
            mobileClass: I,
            nameAttr: g,
            parseAttrs: v,
            parsedHtml: j,
            parseOptions: x,
            parseUserData: O,
            parseXML: A,
            removeFromArray: N,
            safeAttr: f,
            safeAttrName: m,
            safename: P,
            subtract: z,
            trimObj: s,
            unique: E,
            validAttr: d,
            titleCase: Q,
            splitObject: (e,t)=>{
                const r = e=>(t,r)=>(t[r] = e[r],
                t);
                return [Object.keys(e).filter(e=>t.includes(e)).reduce(r(e), {}), Object.keys(e).filter(e=>!t.includes(e)).reduce(r(e), {})]
            }
        };
        r.f = V
    }
    , function(e, t, r) {
        r.d(t, "a", (function() {
            return a
        }
        ));
        var o = r(0)
          , n = r(2)
          , i = r.n(n);
        function l(e, t) {
            if (null == e)
                return {};
            var r, o, n = function(e, t) {
                if (null == e)
                    return {};
                var r, o, n = {}, i = Object.keys(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || (n[r] = e[r]);
                return n
            }(e, t);
            if (Object.getOwnPropertySymbols) {
                var i = Object.getOwnPropertySymbols(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || Object.prototype.propertyIsEnumerable.call(e, r) && (n[r] = e[r])
            }
            return n
        }
        class a {
            constructor(e, t) {
                this.rawConfig = jQuery.extend({}, e),
                e = jQuery.extend({}, e),
                this.preview = t,
                delete e.isPreview,
                this.preview && delete e.required;
                const r = ["label", "description", "subtype", "required", "disabled"];
                for (const t of r)
                    this[t] = e[t],
                    delete e[t];
                e.id || (e.name ? e.id = e.name : e.id = "control-" + Math.floor(1e7 * Math.random() + 1)),
                this.id = e.id,
                this.type = e.type,
                this.description && (e.title = this.description),
                a.controlConfig || (a.controlConfig = {});
                const o = this.subtype ? this.type + "." + this.subtype : this.type;
                this.classConfig = jQuery.extend({}, a.controlConfig[o] || {}),
                this.subtype && (e.type = this.subtype),
                this.required && (e.required = "required",
                e["aria-required"] = "true"),
                this.disabled && (e.disabled = "disabled"),
                this.config = e,
                this.configure()
            }
            static get definition() {
                return {}
            }
            static register(e, t, r) {
                const o = r ? r + "." : "";
                a.classRegister || (a.classRegister = {}),
                Array.isArray(e) || (e = [e]);
                for (const r of e)
                    -1 === r.indexOf(".") ? a.classRegister[o + r] = t : a.error(`Ignoring type ${r}. Cannot use the character '.' in a type name.`)
            }
            static getRegistered(e=!1) {
                const t = Object.keys(a.classRegister);
                return t.length ? t.filter(t=>e ? t.indexOf(e + ".") > -1 : -1 == t.indexOf(".")) : t
            }
            static getRegisteredSubtypes() {
                const e = {};
                for (const t in a.classRegister)
                    if (a.classRegister.hasOwnProperty(t)) {
                        const [r,o] = t.split(".");
                        if (!o)
                            continue;
                        e[r] || (e[r] = []),
                        e[r].push(o)
                    }
                return e
            }
            static getClass(e, t) {
                const r = t ? e + "." + t : e
                  , o = a.classRegister[r] || a.classRegister[e];
                return o || a.error("Invalid control type. (Type: " + e + ", Subtype: " + t + "). Please ensure you have registered it, and imported it correctly.")
            }
            static loadCustom(e) {
                let t = [];
                if (e && (t = t.concat(e)),
                window.fbControls && (t = t.concat(window.fbControls)),
                !this.fbControlsLoaded) {
                    for (const e of t)
                        e(a, a.classRegister);
                    this.fbControlsLoaded = !0
                }
            }
            static mi18n(e, t) {
                const r = this.definition;
                let o = r.i18n || {};
                o = o[i.a.locale] || o.default || o;
                const n = this.camelCase(e)
                  , l = "object" == typeof o ? o[n] || o[e] : o;
                if (l)
                    return l;
                let a = r.mi18n;
                return "object" == typeof a && (a = a[n] || a[e]),
                a || (a = n),
                i.a.get(a, t)
            }
            static active(e) {
                return !Array.isArray(this.definition.inactive) || -1 == this.definition.inactive.indexOf(e)
            }
            static label(e) {
                return this.mi18n(e)
            }
            static icon(e) {
                const t = this.definition;
                return t && "object" == typeof t.icon ? t.icon[e] : t.icon
            }
            configure() {}
            build() {
                const e = this.config
                  , {label: t, type: r} = e
                  , n = l(e, ["label", "type"]);
                return this.markup(r, Object(o.u)(t), n)
            }
            on(e) {
                const t = {
                    prerender: e=>e,
                    render: e=>{
                        const t = ()=>{
                            this.onRender && this.onRender(e)
                        }
                        ;
                        this.css && Object(o.m)(this.css),
                        this.js && !Object(o.p)(this.js) ? Object(o.l)(this.js).done(t) : t()
                    }
                };
                return e ? t[e] : t
            }
            static error(e) {
                throw new Error(e)
            }
            markup(e, t="", r={}) {
                return this.element = Object(o.q)(e, t, r),
                this.element
            }
            parsedHtml(e) {
                return Object(o.u)(e)
            }
            static camelCase(e) {
                return Object(o.c)(e)
            }
        }
    }
    , function(e, t) {
        /*!
 * mi18n - https://github.com/Draggable/mi18n
 * Version: 0.4.7
 * Author: Kevin Chappell <kevin.b.chappell@gmail.com> (http://kevin-chappell.com)
 */
        e.exports = function(e) {
            var t = {};
            function r(o) {
                if (t[o])
                    return t[o].exports;
                var n = t[o] = {
                    i: o,
                    l: !1,
                    exports: {}
                };
                return e[o].call(n.exports, n, n.exports, r),
                n.l = !0,
                n.exports
            }
            return r.m = e,
            r.c = t,
            r.d = function(e, t, o) {
                r.o(e, t) || Object.defineProperty(e, t, {
                    enumerable: !0,
                    get: o
                })
            }
            ,
            r.r = function(e) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                }),
                Object.defineProperty(e, "__esModule", {
                    value: !0
                })
            }
            ,
            r.t = function(e, t) {
                if (1 & t && (e = r(e)),
                8 & t)
                    return e;
                if (4 & t && "object" == typeof e && e && e.__esModule)
                    return e;
                var o = Object.create(null);
                if (r.r(o),
                Object.defineProperty(o, "default", {
                    enumerable: !0,
                    value: e
                }),
                2 & t && "string" != typeof e)
                    for (var n in e)
                        r.d(o, n, function(t) {
                            return e[t]
                        }
                        .bind(null, n));
                return o
            }
            ,
            r.n = function(e) {
                var t = e && e.__esModule ? function() {
                    return e.default
                }
                : function() {
                    return e
                }
                ;
                return r.d(t, "a", t),
                t
            }
            ,
            r.o = function(e, t) {
                return Object.prototype.hasOwnProperty.call(e, t)
            }
            ,
            r.p = "",
            r(r.s = 7)
        }([function(e, t, r) {
            var o = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            }
            : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            }
              , n = r(2)
              , i = r(10)
              , l = Object.prototype.toString;
            function a(e) {
                return "[object Array]" === l.call(e)
            }
            function s(e) {
                return null !== e && "object" === (void 0 === e ? "undefined" : o(e))
            }
            function d(e) {
                return "[object Function]" === l.call(e)
            }
            function c(e, t) {
                if (null != e)
                    if ("object" !== (void 0 === e ? "undefined" : o(e)) && (e = [e]),
                    a(e))
                        for (var r = 0, n = e.length; r < n; r++)
                            t.call(null, e[r], r, e);
                    else
                        for (var i in e)
                            Object.prototype.hasOwnProperty.call(e, i) && t.call(null, e[i], i, e)
            }
            e.exports = {
                isArray: a,
                isArrayBuffer: function(e) {
                    return "[object ArrayBuffer]" === l.call(e)
                },
                isBuffer: i,
                isFormData: function(e) {
                    return "undefined" != typeof FormData && e instanceof FormData
                },
                isArrayBufferView: function(e) {
                    return "undefined" != typeof ArrayBuffer && ArrayBuffer.isView ? ArrayBuffer.isView(e) : e && e.buffer && e.buffer instanceof ArrayBuffer
                },
                isString: function(e) {
                    return "string" == typeof e
                },
                isNumber: function(e) {
                    return "number" == typeof e
                },
                isObject: s,
                isUndefined: function(e) {
                    return void 0 === e
                },
                isDate: function(e) {
                    return "[object Date]" === l.call(e)
                },
                isFile: function(e) {
                    return "[object File]" === l.call(e)
                },
                isBlob: function(e) {
                    return "[object Blob]" === l.call(e)
                },
                isFunction: d,
                isStream: function(e) {
                    return s(e) && d(e.pipe)
                },
                isURLSearchParams: function(e) {
                    return "undefined" != typeof URLSearchParams && e instanceof URLSearchParams
                },
                isStandardBrowserEnv: function() {
                    return ("undefined" == typeof navigator || "ReactNative" !== navigator.product) && "undefined" != typeof window && "undefined" != typeof document
                },
                forEach: c,
                merge: function e() {
                    var t = {};
                    function r(r, n) {
                        "object" === o(t[n]) && "object" === (void 0 === r ? "undefined" : o(r)) ? t[n] = e(t[n], r) : t[n] = r
                    }
                    for (var n = 0, i = arguments.length; n < i; n++)
                        c(arguments[n], r);
                    return t
                },
                extend: function(e, t, r) {
                    return c(t, (function(t, o) {
                        e[o] = r && "function" == typeof t ? n(t, r) : t
                    }
                    )),
                    e
                },
                trim: function(e) {
                    return e.replace(/^\s*/, "").replace(/\s*$/, "")
                }
            }
        }
        , function(e, t, r) {
            (function(t) {
                var o = r(0)
                  , n = r(13)
                  , i = {
                    "Content-Type": "application/x-www-form-urlencoded"
                };
                function l(e, t) {
                    !o.isUndefined(e) && o.isUndefined(e["Content-Type"]) && (e["Content-Type"] = t)
                }
                var a = {
                    adapter: function() {
                        var e;
                        return ("undefined" != typeof XMLHttpRequest || void 0 !== t) && (e = r(3)),
                        e
                    }(),
                    transformRequest: [function(e, t) {
                        return n(t, "Content-Type"),
                        o.isFormData(e) || o.isArrayBuffer(e) || o.isBuffer(e) || o.isStream(e) || o.isFile(e) || o.isBlob(e) ? e : o.isArrayBufferView(e) ? e.buffer : o.isURLSearchParams(e) ? (l(t, "application/x-www-form-urlencoded;charset=utf-8"),
                        e.toString()) : o.isObject(e) ? (l(t, "application/json;charset=utf-8"),
                        JSON.stringify(e)) : e
                    }
                    ],
                    transformResponse: [function(e) {
                        if ("string" == typeof e)
                            try {
                                e = JSON.parse(e)
                            } catch (e) {}
                        return e
                    }
                    ],
                    timeout: 0,
                    xsrfCookieName: "XSRF-TOKEN",
                    xsrfHeaderName: "X-XSRF-TOKEN",
                    maxContentLength: -1,
                    validateStatus: function(e) {
                        return e >= 200 && e < 300
                    },
                    headers: {
                        common: {
                            Accept: "application/json, text/plain, */*"
                        }
                    }
                };
                o.forEach(["delete", "get", "head"], (function(e) {
                    a.headers[e] = {}
                }
                )),
                o.forEach(["post", "put", "patch"], (function(e) {
                    a.headers[e] = o.merge(i)
                }
                )),
                e.exports = a
            }
            ).call(this, r(12))
        }
        , function(e, t, r) {
            e.exports = function(e, t) {
                return function() {
                    for (var r = new Array(arguments.length), o = 0; o < r.length; o++)
                        r[o] = arguments[o];
                    return e.apply(t, r)
                }
            }
        }
        , function(e, t, r) {
            var o = r(0)
              , n = r(14)
              , i = r(16)
              , l = r(17)
              , a = r(18)
              , s = r(4)
              , d = "undefined" != typeof window && window.btoa && window.btoa.bind(window) || r(19);
            e.exports = function(e) {
                return new Promise((function(t, c) {
                    var u = e.data
                      , f = e.headers;
                    o.isFormData(u) && delete f["Content-Type"];
                    var p = new XMLHttpRequest
                      , m = "onreadystatechange"
                      , b = !1;
                    if ("undefined" == typeof window || !window.XDomainRequest || "withCredentials"in p || a(e.url) || (p = new window.XDomainRequest,
                    m = "onload",
                    b = !0,
                    p.onprogress = function() {}
                    ,
                    p.ontimeout = function() {}
                    ),
                    e.auth) {
                        var h = e.auth.username || ""
                          , g = e.auth.password || "";
                        f.Authorization = "Basic " + d(h + ":" + g)
                    }
                    if (p.open(e.method.toUpperCase(), i(e.url, e.params, e.paramsSerializer), !0),
                    p.timeout = e.timeout,
                    p[m] = function() {
                        if (p && (4 === p.readyState || b) && (0 !== p.status || p.responseURL && 0 === p.responseURL.indexOf("file:"))) {
                            var r = "getAllResponseHeaders"in p ? l(p.getAllResponseHeaders()) : null
                              , o = {
                                data: e.responseType && "text" !== e.responseType ? p.response : p.responseText,
                                status: 1223 === p.status ? 204 : p.status,
                                statusText: 1223 === p.status ? "No Content" : p.statusText,
                                headers: r,
                                config: e,
                                request: p
                            };
                            n(t, c, o),
                            p = null
                        }
                    }
                    ,
                    p.onerror = function() {
                        c(s("Network Error", e, null, p)),
                        p = null
                    }
                    ,
                    p.ontimeout = function() {
                        c(s("timeout of " + e.timeout + "ms exceeded", e, "ECONNABORTED", p)),
                        p = null
                    }
                    ,
                    o.isStandardBrowserEnv()) {
                        var y = r(20)
                          , w = (e.withCredentials || a(e.url)) && e.xsrfCookieName ? y.read(e.xsrfCookieName) : void 0;
                        w && (f[e.xsrfHeaderName] = w)
                    }
                    if ("setRequestHeader"in p && o.forEach(f, (function(e, t) {
                        void 0 === u && "content-type" === t.toLowerCase() ? delete f[t] : p.setRequestHeader(t, e)
                    }
                    )),
                    e.withCredentials && (p.withCredentials = !0),
                    e.responseType)
                        try {
                            p.responseType = e.responseType
                        } catch (t) {
                            if ("json" !== e.responseType)
                                throw t
                        }
                    "function" == typeof e.onDownloadProgress && p.addEventListener("progress", e.onDownloadProgress),
                    "function" == typeof e.onUploadProgress && p.upload && p.upload.addEventListener("progress", e.onUploadProgress),
                    e.cancelToken && e.cancelToken.promise.then((function(e) {
                        p && (p.abort(),
                        c(e),
                        p = null)
                    }
                    )),
                    void 0 === u && (u = null),
                    p.send(u)
                }
                ))
            }
        }
        , function(e, t, r) {
            var o = r(15);
            e.exports = function(e, t, r, n, i) {
                var l = new Error(e);
                return o(l, t, r, n, i)
            }
        }
        , function(e, t, r) {
            e.exports = function(e) {
                return !(!e || !e.__CANCEL__)
            }
        }
        , function(e, t, r) {
            function o(e) {
                this.message = e
            }
            o.prototype.toString = function() {
                return "Cancel" + (this.message ? ": " + this.message : "")
            }
            ,
            o.prototype.__CANCEL__ = !0,
            e.exports = o
        }
        , function(e, t, r) {
            t.__esModule = !0,
            t.I18N = void 0;
            var o = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            }
            : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            }
              , n = function() {
                function e(e, t) {
                    for (var r = 0; r < t.length; r++) {
                        var o = t[r];
                        o.enumerable = o.enumerable || !1,
                        o.configurable = !0,
                        "value"in o && (o.writable = !0),
                        Object.defineProperty(e, o.key, o)
                    }
                }
                return function(t, r, o) {
                    return r && e(t.prototype, r),
                    o && e(t, o),
                    t
                }
            }()
              , i = r(8)
              , l = {
                extension: ".lang",
                location: "assets/lang/",
                langs: ["en-US"],
                locale: "en-US",
                override: {}
            }
              , a = t.I18N = function() {
                function e() {
                    var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : l;
                    !function(e, t) {
                        if (!(e instanceof t))
                            throw new TypeError("Cannot call a class as a function")
                    }(this, e),
                    this.langs = Object.create(null),
                    this.loaded = [],
                    this.processConfig(t)
                }
                return e.prototype.processConfig = function(e) {
                    var t = this
                      , r = Object.assign({}, l, e)
                      , o = r.location
                      , n = function(e, t) {
                        var r = {};
                        for (var o in e)
                            t.indexOf(o) >= 0 || Object.prototype.hasOwnProperty.call(e, o) && (r[o] = e[o]);
                        return r
                    }(r, ["location"])
                      , i = o.replace(/\/?$/, "/");
                    this.config = Object.assign({}, {
                        location: i
                    }, n);
                    var a = this.config
                      , s = a.override
                      , d = a.preloaded
                      , c = void 0 === d ? {} : d
                      , u = Object.entries(this.langs).concat(Object.entries(s || c));
                    this.langs = u.reduce((function(e, r) {
                        var o = r[0]
                          , n = r[1];
                        return e[o] = t.applyLanguage.call(t, o, n),
                        e
                    }
                    ), {}),
                    this.locale = this.config.locale || this.config.langs[0]
                }
                ,
                e.prototype.init = function(e) {
                    return this.processConfig.call(this, Object.assign({}, this.config, e)),
                    this.setCurrent(this.locale)
                }
                ,
                e.prototype.addLanguage = function(e) {
                    var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                    t = "string" == typeof t ? this.processFile.call(this, t) : t,
                    this.applyLanguage.call(this, e, t),
                    this.config.langs.push("locale")
                }
                ,
                e.prototype.getValue = function(e) {
                    var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : this.locale;
                    return this.langs[t] && this.langs[t][e] || this.getFallbackValue(e)
                }
                ,
                e.prototype.getFallbackValue = function(e) {
                    var t = Object.values(this.langs).find((function(t) {
                        return t[e]
                    }
                    ));
                    return t && t[e]
                }
                ,
                e.prototype.makeSafe = function(e) {
                    var t = {
                        "{": "\\{",
                        "}": "\\}",
                        "|": "\\|"
                    };
                    return e = e.replace(/\{|\}|\|/g, (function(e) {
                        return t[e]
                    }
                    )),
                    new RegExp(e,"g")
                }
                ,
                e.prototype.put = function(e, t) {
                    return this.current[e] = t
                }
                ,
                e.prototype.get = function(e, t) {
                    var r = this.getValue(e);
                    if (r) {
                        var n = r.match(/\{[^}]+?\}/g)
                          , i = void 0;
                        if (t && n)
                            if ("object" === (void 0 === t ? "undefined" : o(t)))
                                for (var l = 0; l < n.length; l++)
                                    i = n[l].substring(1, n[l].length - 1),
                                    r = r.replace(this.makeSafe(n[l]), t[i] || "");
                            else
                                r = r.replace(/\{[^}]+?\}/g, t);
                        return r
                    }
                }
                ,
                e.prototype.fromFile = function(e) {
                    for (var t, r = e.split("\n"), o = {}, n = 0; n < r.length; n++)
                        (t = r[n].match(/^(.+?) *?= *?([^\n]+)/)) && (o[t[1]] = t[2].replace(/^\s+|\s+$/, ""));
                    return o
                }
                ,
                e.prototype.processFile = function(e) {
                    return this.fromFile(e.replace(/\n\n/g, "\n"))
                }
                ,
                e.prototype.loadLang = function(e) {
                    var t = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1]
                      , r = this;
                    return new Promise((function(o, n) {
                        if (-1 !== r.loaded.indexOf(e) && t)
                            return r.applyLanguage.call(r, r.langs[e]),
                            o(r.langs[e]);
                        var l = [r.config.location, e, r.config.extension].join("");
                        return (0,
                        i.get)(l).then((function(t) {
                            var n = t.data
                              , i = r.processFile(n);
                            return r.applyLanguage.call(r, e, i),
                            r.loaded.push(e),
                            o(r.langs[e])
                        }
                        )).catch((function() {
                            var t = r.applyLanguage.call(r, e);
                            o(t)
                        }
                        ))
                    }
                    ))
                }
                ,
                e.prototype.applyLanguage = function(e) {
                    var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}
                      , r = this.config.override[e] || {}
                      , o = this.langs[e] || {};
                    return this.langs[e] = Object.assign({}, o, t, r),
                    this.langs[e]
                }
                ,
                e.prototype.setCurrent = function() {
                    var e = this
                      , t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "en-US";
                    return this.loadLang(t).then((function() {
                        return e.locale = t,
                        e.current = e.langs[t],
                        e.current
                    }
                    ))
                }
                ,
                n(e, [{
                    key: "getLangs",
                    get: function() {
                        return this.config.langs
                    }
                }]),
                e
            }();
            t.default = new a
        }
        , function(e, t, r) {
            e.exports = r(9)
        }
        , function(e, t, r) {
            var o = r(0)
              , n = r(2)
              , i = r(11)
              , l = r(1);
            function a(e) {
                var t = new i(e)
                  , r = n(i.prototype.request, t);
                return o.extend(r, i.prototype, t),
                o.extend(r, t),
                r
            }
            var s = a(l);
            s.Axios = i,
            s.create = function(e) {
                return a(o.merge(l, e))
            }
            ,
            s.Cancel = r(6),
            s.CancelToken = r(26),
            s.isCancel = r(5),
            s.all = function(e) {
                return Promise.all(e)
            }
            ,
            s.spread = r(27),
            e.exports = s,
            e.exports.default = s
        }
        , function(e, t, r) {
            /*!
 * Determine if an object is a Buffer
 *
 * @author   Feross Aboukhadijeh <https://feross.org>
 * @license  MIT
 */
            function o(e) {
                return !!e.constructor && "function" == typeof e.constructor.isBuffer && e.constructor.isBuffer(e)
            }
            e.exports = function(e) {
                return null != e && (o(e) || function(e) {
                    return "function" == typeof e.readFloatLE && "function" == typeof e.slice && o(e.slice(0, 0))
                }(e) || !!e._isBuffer)
            }
        }
        , function(e, t, r) {
            var o = r(1)
              , n = r(0)
              , i = r(21)
              , l = r(22);
            function a(e) {
                this.defaults = e,
                this.interceptors = {
                    request: new i,
                    response: new i
                }
            }
            a.prototype.request = function(e) {
                "string" == typeof e && (e = n.merge({
                    url: arguments[0]
                }, arguments[1])),
                (e = n.merge(o, {
                    method: "get"
                }, this.defaults, e)).method = e.method.toLowerCase();
                var t = [l, void 0]
                  , r = Promise.resolve(e);
                for (this.interceptors.request.forEach((function(e) {
                    t.unshift(e.fulfilled, e.rejected)
                }
                )),
                this.interceptors.response.forEach((function(e) {
                    t.push(e.fulfilled, e.rejected)
                }
                )); t.length; )
                    r = r.then(t.shift(), t.shift());
                return r
            }
            ,
            n.forEach(["delete", "get", "head", "options"], (function(e) {
                a.prototype[e] = function(t, r) {
                    return this.request(n.merge(r || {}, {
                        method: e,
                        url: t
                    }))
                }
            }
            )),
            n.forEach(["post", "put", "patch"], (function(e) {
                a.prototype[e] = function(t, r, o) {
                    return this.request(n.merge(o || {}, {
                        method: e,
                        url: t,
                        data: r
                    }))
                }
            }
            )),
            e.exports = a
        }
        , function(e, t, r) {
            var o, n, i = e.exports = {};
            function l() {
                throw new Error("setTimeout has not been defined")
            }
            function a() {
                throw new Error("clearTimeout has not been defined")
            }
            function s(e) {
                if (o === setTimeout)
                    return setTimeout(e, 0);
                if ((o === l || !o) && setTimeout)
                    return o = setTimeout,
                    setTimeout(e, 0);
                try {
                    return o(e, 0)
                } catch (t) {
                    try {
                        return o.call(null, e, 0)
                    } catch (t) {
                        return o.call(this, e, 0)
                    }
                }
            }
            !function() {
                try {
                    o = "function" == typeof setTimeout ? setTimeout : l
                } catch (e) {
                    o = l
                }
                try {
                    n = "function" == typeof clearTimeout ? clearTimeout : a
                } catch (e) {
                    n = a
                }
            }();
            var d, c = [], u = !1, f = -1;
            function p() {
                u && d && (u = !1,
                d.length ? c = d.concat(c) : f = -1,
                c.length && m())
            }
            function m() {
                if (!u) {
                    var e = s(p);
                    u = !0;
                    for (var t = c.length; t; ) {
                        for (d = c,
                        c = []; ++f < t; )
                            d && d[f].run();
                        f = -1,
                        t = c.length
                    }
                    d = null,
                    u = !1,
                    function(e) {
                        if (n === clearTimeout)
                            return clearTimeout(e);
                        if ((n === a || !n) && clearTimeout)
                            return n = clearTimeout,
                            clearTimeout(e);
                        try {
                            n(e)
                        } catch (t) {
                            try {
                                return n.call(null, e)
                            } catch (t) {
                                return n.call(this, e)
                            }
                        }
                    }(e)
                }
            }
            function b(e, t) {
                this.fun = e,
                this.array = t
            }
            function h() {}
            i.nextTick = function(e) {
                var t = new Array(arguments.length - 1);
                if (arguments.length > 1)
                    for (var r = 1; r < arguments.length; r++)
                        t[r - 1] = arguments[r];
                c.push(new b(e,t)),
                1 !== c.length || u || s(m)
            }
            ,
            b.prototype.run = function() {
                this.fun.apply(null, this.array)
            }
            ,
            i.title = "browser",
            i.browser = !0,
            i.env = {},
            i.argv = [],
            i.version = "",
            i.versions = {},
            i.on = h,
            i.addListener = h,
            i.once = h,
            i.off = h,
            i.removeListener = h,
            i.removeAllListeners = h,
            i.emit = h,
            i.prependListener = h,
            i.prependOnceListener = h,
            i.listeners = function(e) {
                return []
            }
            ,
            i.binding = function(e) {
                throw new Error("process.binding is not supported")
            }
            ,
            i.cwd = function() {
                return "/"
            }
            ,
            i.chdir = function(e) {
                throw new Error("process.chdir is not supported")
            }
            ,
            i.umask = function() {
                return 0
            }
        }
        , function(e, t, r) {
            var o = r(0);
            e.exports = function(e, t) {
                o.forEach(e, (function(r, o) {
                    o !== t && o.toUpperCase() === t.toUpperCase() && (e[t] = r,
                    delete e[o])
                }
                ))
            }
        }
        , function(e, t, r) {
            var o = r(4);
            e.exports = function(e, t, r) {
                var n = r.config.validateStatus;
                r.status && n && !n(r.status) ? t(o("Request failed with status code " + r.status, r.config, null, r.request, r)) : e(r)
            }
        }
        , function(e, t, r) {
            e.exports = function(e, t, r, o, n) {
                return e.config = t,
                r && (e.code = r),
                e.request = o,
                e.response = n,
                e
            }
        }
        , function(e, t, r) {
            var o = r(0);
            function n(e) {
                return encodeURIComponent(e).replace(/%40/gi, "@").replace(/%3A/gi, ":").replace(/%24/g, "$").replace(/%2C/gi, ",").replace(/%20/g, "+").replace(/%5B/gi, "[").replace(/%5D/gi, "]")
            }
            e.exports = function(e, t, r) {
                if (!t)
                    return e;
                var i;
                if (r)
                    i = r(t);
                else if (o.isURLSearchParams(t))
                    i = t.toString();
                else {
                    var l = [];
                    o.forEach(t, (function(e, t) {
                        null != e && (o.isArray(e) ? t += "[]" : e = [e],
                        o.forEach(e, (function(e) {
                            o.isDate(e) ? e = e.toISOString() : o.isObject(e) && (e = JSON.stringify(e)),
                            l.push(n(t) + "=" + n(e))
                        }
                        )))
                    }
                    )),
                    i = l.join("&")
                }
                return i && (e += (-1 === e.indexOf("?") ? "?" : "&") + i),
                e
            }
        }
        , function(e, t, r) {
            var o = r(0)
              , n = ["age", "authorization", "content-length", "content-type", "etag", "expires", "from", "host", "if-modified-since", "if-unmodified-since", "last-modified", "location", "max-forwards", "proxy-authorization", "referer", "retry-after", "user-agent"];
            e.exports = function(e) {
                var t, r, i, l = {};
                return e ? (o.forEach(e.split("\n"), (function(e) {
                    if (i = e.indexOf(":"),
                    t = o.trim(e.substr(0, i)).toLowerCase(),
                    r = o.trim(e.substr(i + 1)),
                    t) {
                        if (l[t] && n.indexOf(t) >= 0)
                            return;
                        l[t] = "set-cookie" === t ? (l[t] ? l[t] : []).concat([r]) : l[t] ? l[t] + ", " + r : r
                    }
                }
                )),
                l) : l
            }
        }
        , function(e, t, r) {
            var o = r(0);
            e.exports = o.isStandardBrowserEnv() ? function() {
                var e, t = /(msie|trident)/i.test(navigator.userAgent), r = document.createElement("a");
                function n(e) {
                    var o = e;
                    return t && (r.setAttribute("href", o),
                    o = r.href),
                    r.setAttribute("href", o),
                    {
                        href: r.href,
                        protocol: r.protocol ? r.protocol.replace(/:$/, "") : "",
                        host: r.host,
                        search: r.search ? r.search.replace(/^\?/, "") : "",
                        hash: r.hash ? r.hash.replace(/^#/, "") : "",
                        hostname: r.hostname,
                        port: r.port,
                        pathname: "/" === r.pathname.charAt(0) ? r.pathname : "/" + r.pathname
                    }
                }
                return e = n(window.location.href),
                function(t) {
                    var r = o.isString(t) ? n(t) : t;
                    return r.protocol === e.protocol && r.host === e.host
                }
            }() : function() {
                return !0
            }
        }
        , function(e, t, r) {
            function o() {
                this.message = "String contains an invalid character"
            }
            o.prototype = new Error,
            o.prototype.code = 5,
            o.prototype.name = "InvalidCharacterError",
            e.exports = function(e) {
                for (var t, r, n = String(e), i = "", l = 0, a = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="; n.charAt(0 | l) || (a = "=",
                l % 1); i += a.charAt(63 & t >> 8 - l % 1 * 8)) {
                    if ((r = n.charCodeAt(l += .75)) > 255)
                        throw new o;
                    t = t << 8 | r
                }
                return i
            }
        }
        , function(e, t, r) {
            var o = r(0);
            e.exports = o.isStandardBrowserEnv() ? {
                write: function(e, t, r, n, i, l) {
                    var a = [];
                    a.push(e + "=" + encodeURIComponent(t)),
                    o.isNumber(r) && a.push("expires=" + new Date(r).toGMTString()),
                    o.isString(n) && a.push("path=" + n),
                    o.isString(i) && a.push("domain=" + i),
                    !0 === l && a.push("secure"),
                    document.cookie = a.join("; ")
                },
                read: function(e) {
                    var t = document.cookie.match(new RegExp("(^|;\\s*)(" + e + ")=([^;]*)"));
                    return t ? decodeURIComponent(t[3]) : null
                },
                remove: function(e) {
                    this.write(e, "", Date.now() - 864e5)
                }
            } : {
                write: function() {},
                read: function() {
                    return null
                },
                remove: function() {}
            }
        }
        , function(e, t, r) {
            var o = r(0);
            function n() {
                this.handlers = []
            }
            n.prototype.use = function(e, t) {
                return this.handlers.push({
                    fulfilled: e,
                    rejected: t
                }),
                this.handlers.length - 1
            }
            ,
            n.prototype.eject = function(e) {
                this.handlers[e] && (this.handlers[e] = null)
            }
            ,
            n.prototype.forEach = function(e) {
                o.forEach(this.handlers, (function(t) {
                    null !== t && e(t)
                }
                ))
            }
            ,
            e.exports = n
        }
        , function(e, t, r) {
            var o = r(0)
              , n = r(23)
              , i = r(5)
              , l = r(1)
              , a = r(24)
              , s = r(25);
            function d(e) {
                e.cancelToken && e.cancelToken.throwIfRequested()
            }
            e.exports = function(e) {
                return d(e),
                e.baseURL && !a(e.url) && (e.url = s(e.baseURL, e.url)),
                e.headers = e.headers || {},
                e.data = n(e.data, e.headers, e.transformRequest),
                e.headers = o.merge(e.headers.common || {}, e.headers[e.method] || {}, e.headers || {}),
                o.forEach(["delete", "get", "head", "post", "put", "patch", "common"], (function(t) {
                    delete e.headers[t]
                }
                )),
                (e.adapter || l.adapter)(e).then((function(t) {
                    return d(e),
                    t.data = n(t.data, t.headers, e.transformResponse),
                    t
                }
                ), (function(t) {
                    return i(t) || (d(e),
                    t && t.response && (t.response.data = n(t.response.data, t.response.headers, e.transformResponse))),
                    Promise.reject(t)
                }
                ))
            }
        }
        , function(e, t, r) {
            var o = r(0);
            e.exports = function(e, t, r) {
                return o.forEach(r, (function(r) {
                    e = r(e, t)
                }
                )),
                e
            }
        }
        , function(e, t, r) {
            e.exports = function(e) {
                return /^([a-z][a-z\d\+\-\.]*:)?\/\//i.test(e)
            }
        }
        , function(e, t, r) {
            e.exports = function(e, t) {
                return t ? e.replace(/\/+$/, "") + "/" + t.replace(/^\/+/, "") : e
            }
        }
        , function(e, t, r) {
            var o = r(6);
            function n(e) {
                if ("function" != typeof e)
                    throw new TypeError("executor must be a function.");
                var t;
                this.promise = new Promise((function(e) {
                    t = e
                }
                ));
                var r = this;
                e((function(e) {
                    r.reason || (r.reason = new o(e),
                    t(r.reason))
                }
                ))
            }
            n.prototype.throwIfRequested = function() {
                if (this.reason)
                    throw this.reason
            }
            ,
            n.source = function() {
                var e;
                return {
                    token: new n((function(t) {
                        e = t
                    }
                    )),
                    cancel: e
                }
            }
            ,
            e.exports = n
        }
        , function(e, t, r) {
            e.exports = function(e) {
                return function(t) {
                    return e.apply(null, t)
                }
            }
        }
        ])
    }
    , function(e, t, r) {
        r.d(t, "c", (function() {
            return i
        }
        )),
        r.d(t, "d", (function() {
            return l
        }
        )),
        r.d(t, "b", (function() {
            return a
        }
        )),
        r.d(t, "a", (function() {
            return s
        }
        ));
        var o = r(2);
        const n = ()=>null;
        r.n(o).a.addLanguage("en-US", {
            NATIVE_NAME: "English (US)",
            ENGLISH_NAME: "English",
            addOption: "Add Option +",
            allFieldsRemoved: "All fields were removed.",
            allowMultipleFiles: "Allow users to upload multiple files",
            autocomplete: "Autocomplete",
            button: "Button",
            cannotBeEmpty: "This field cannot be empty",
            checkboxGroup: "Checkbox Group",
            checkbox: "Checkbox",
            checkboxes: "Checkboxes",
            className: "Class",
            clearAllMessage: "Are you sure you want to clear all fields?",
            clear: "Clear",
            close: "Close",
            content: "Content",
            copy: "Copy To Clipboard",
            copyButton: "&#43;",
            copyButtonTooltip: "Copy",
            dateField: "Date Field",
            description: "Help Text",
            descriptionField: "Description",
            devMode: "Developer Mode",
            editNames: "Edit Names",
            editorTitle: "Form Elements",
            editXML: "Edit XML",
            enableOther: "Enable &quot;Other&quot;",
            enableOtherMsg: "Let users enter an unlisted option",
            fieldDeleteWarning: "false",
            fieldVars: "Field Variables",
            fieldNonEditable: "This field cannot be edited.",
            fieldRemoveWarning: "Are you sure you want to remove this field?",
            fileUpload: "File Upload",
            formUpdated: "Form Updated",
            getStarted: "Drag a field from the right to this area",
            header: "Header",
            hide: "Edit",
            hidden: "Hidden Input",
            inline: "Inline",
            inlineDesc: "Display {type} inline",
            label: "Label",
            labelEmpty: "Field Label cannot be empty",
            limitRole: "Limit access to one or more of the following roles:",
            mandatory: "Mandatory",
            maxlength: "Max Length",
            minOptionMessage: "This field requires a minimum of 2 options",
            minSelectionRequired: "Minimum {min} selections required",
            multipleFiles: "Multiple Files",
            name: "Name",
            no: "No",
            noFieldsToClear: "There are no fields to clear",
            number: "Number",
            off: "Off",
            on: "On",
            option: "Option",
            optionCount: "Option {count}",
            options: "Options",
            optional: "optional",
            optionLabelPlaceholder: "Label",
            optionValuePlaceholder: "Value",
            optionEmpty: "Option value required",
            other: "Other",
            paragraph: "Paragraph",
            placeholder: "Placeholder",
            "placeholders.value": "Value",
            "placeholders.label": "Label",
            "placeholders.email": "Enter your email",
            "placeholders.className": "space separated classes",
            "placeholders.password": "Enter your password",
            preview: "Preview",
            radioGroup: "Radio Group",
            radio: "Radio",
            removeMessage: "Remove Element",
            removeOption: "Remove Option",
            remove: "&#215;",
            required: "Required",
            requireValidOption: "Only accept a pre-defined Option",
            richText: "Rich Text Editor",
            roles: "Access",
            rows: "Rows",
            save: "Save",
            selectOptions: "Options",
            select: "Select",
            selectColor: "Select Color",
            selectionsMessage: "Allow Multiple Selections",
            size: "Size",
            "size.xs": "Extra Small",
            "size.sm": "Small",
            "size.m": "Default",
            "size.lg": "Large",
            style: "Style",
            "styles.btn.default": "Default",
            "styles.btn.danger": "Danger",
            "styles.btn.info": "Info",
            "styles.btn.primary": "Primary",
            "styles.btn.success": "Success",
            "styles.btn.warning": "Warning",
            subtype: "Type",
            text: "Text Field",
            textArea: "Text Area",
            toggle: "Toggle",
            warning: "Warning!",
            value: "Value",
            viewJSON: "[{&hellip;}]",
            viewXML: "&lt;/&gt;",
            yes: "Yes"
        });
        const i = {
            actionButtons: [],
            allowStageSort: !0,
            append: !1,
            controlOrder: ["autocomplete", "button", "checkbox-group", "checkbox", "date", "file", "header", "hidden", "number", "paragraph", "radio-group", "select", "text", "textarea"],
            controlPosition: "right",
            dataType: "json",
            defaultFields: [],
            disabledActionButtons: [],
            disabledAttrs: [],
            disabledFieldButtons: {},
            disabledSubtypes: {},
            disableFields: [],
            disableHTMLLabels: !1,
            disableInjectedStyle: !1,
            editOnAdd: !1,
            fields: [],
            fieldRemoveWarn: !1,
            fieldEditContainer: null,
            inputSets: [],
            notify: {
                error: e=>{
                    console.log(e)
                }
                ,
                success: e=>{
                    console.log(e)
                }
                ,
                warning: e=>{
                    console.warn(e)
                }
            },
            onAddField: (e,t)=>t,
            onAddFieldAfter: (e,t)=>t,
            onAddOption: e=>e,
            onClearAll: n,
            onCloseFieldEdit: n,
            onOpenFieldEdit: n,
            onSave: n,
            persistDefaultFields: !1,
            prepend: !1,
            replaceFields: [],
            roles: {
                1: "Administrator"
            },
            scrollToFieldOnAdd: !0,
            showActionButtons: !0,
            sortableControls: !1,
            stickyControls: {
                enable: !0,
                offset: {
                    top: 5,
                    bottom: "auto",
                    right: "auto"
                }
            },
            subtypes: {},
            templates: {},
            typeUserAttrs: {},
            typeUserDisabledAttrs: {},
            typeUserEvents: {}
        }
          , l = {
            btn: ["default", "danger", "info", "primary", "success", "warning"]
        }
          , a = {
            location: "assets/lang/"
        }
          , s = {}
    }
    , function(e, t, r) {
        r.d(t, "d", (function() {
            return o
        }
        )),
        r.d(t, "f", (function() {
            return i
        }
        )),
        r.d(t, "b", (function() {
            return l
        }
        )),
        r.d(t, "c", (function() {
            return a
        }
        )),
        r.d(t, "e", (function() {
            return s
        }
        )),
        r.d(t, "a", (function() {
            return c
        }
        ));
        const o = {}
          , n = {
            text: ["text", "password", "email", "color", "tel"],
            header: ["h1", "h2", "h3"],
            // button: ["button", "submit", "reset"],
            button: ["button", "submit", "search"],
            paragraph: ["p", "address", "blockquote", "canvas", "output"],
            textarea: ["textarea", "quill"]
        }
          , i = e=>{
            e.parentNode && e.parentNode.removeChild(e)
        }
          , l = e=>{
            for (; e.firstChild; )
                e.removeChild(e.firstChild);
            return e
        }
          , a = (e,t,r=!0)=>{
            const o = [];
            let n = ["none", "block"];
            r && (n = n.reverse());
            for (let r = e.length - 1; r >= 0; r--) {
                -1 !== e[r].textContent.toLowerCase().indexOf(t.toLowerCase()) ? (e[r].style.display = n[0],
                o.push(e[r])) : e[r].style.display = n[1]
            }
            return o
        }
          , s = ["select", "checkbox-group", "checkbox", "radio-group", "autocomplete"]
          , d = new RegExp(`(${s.join("|")})`);
        class c {
            constructor(e) {
                return this.optionFields = s,
                this.optionFieldsRegEx = d,
                this.subtypes = n,
                this.empty = l,
                this.filter = a,
                o[e] = this,
                o[e]
            }
            onRender(e, t) {
                e.parentElement ? t(e) : window.requestAnimationFrame(()=>this.onRender(e, t))
            }
        }
    }
    , function(e, t, r) {
        function o(e) {
            let t;
            return "function" == typeof Event ? t = new Event(e) : (t = document.createEvent("Event"),
            t.initEvent(e, !0, !0)),
            t
        }
        const n = {
            loaded: o("loaded"),
            viewData: o("viewData"),
            userDeclined: o("userDeclined"),
            modalClosed: o("modalClosed"),
            modalOpened: o("modalOpened"),
            formSaved: o("formSaved"),
            fieldAdded: o("fieldAdded"),
            fieldRemoved: o("fieldRemoved"),
            fieldRendered: o("fieldRendered"),
            fieldEditOpened: o("fieldEditOpened"),
            fieldEditClosed: o("fieldEditClosed")
        };
        t.a = n
    }
    , function(e, t, r) {
        r.d(t, "a", (function() {
            return l
        }
        ));
        var o = r(1)
          , n = r(2)
          , i = r.n(n);
        class l extends o.a {
            static register(e={}, t=[]) {
                l.customRegister = {},
                l.def || (l.def = {
                    icon: {},
                    i18n: {}
                }),
                l.templates = e;
                const r = i.a.locale;
                l.def.i18n[r] || (l.def.i18n[r] = {}),
                o.a.register(Object.keys(e), l);
                for (const n of t) {
                    let t = n.type;
                    if (n.attrs = n.attrs || {},
                    !t) {
                        if (!n.attrs.type) {
                            this.error("Ignoring invalid custom field definition. Please specify a type property.");
                            continue
                        }
                        t = n.attrs.type
                    }
                    let i = n.subtype || t;
                    if (!e[t]) {
                        const e = o.a.getClass(t, n.subtype);
                        if (!e) {
                            this.error("Error while registering custom field: " + t + (n.subtype ? ":" + n.subtype : "") + ". Unable to find any existing defined control or template for rendering.");
                            continue
                        }
                        i = n.datatype ? n.datatype : `${t}-${Math.floor(9e3 * Math.random() + 1e3)}`,
                        l.customRegister[i] = jQuery.extend(n, {
                            type: t,
                            class: e
                        })
                    }
                    l.def.i18n[r][i] = n.label,
                    l.def.icon[i] = n.icon
                }
            }
            static getRegistered(e=!1) {
                return e ? o.a.getRegistered(e) : Object.keys(l.customRegister)
            }
            static lookup(e) {
                return l.customRegister[e]
            }
            static get definition() {
                return l.def
            }
            build() {
                let e = l.templates[this.type];
                if (!e)
                    return this.error("Invalid custom control type. Please ensure you have registered it correctly as a template option.");
                const t = Object.assign(this.config)
                  , r = ["label", "description", "subtype", "id", "isPreview", "required", "title", "aria-required", "type"];
                for (const e of r)
                    t[e] = this.config[e] || this[e];
                return e = e.bind(this),
                e = e(t),
                e.js && (this.js = e.js),
                e.css && (this.css = e.css),
                this.onRender = e.onRender,
                {
                    field: e.field,
                    layout: e.layout
                }
            }
        }
        l.customRegister = {}
    }
    , function(e, t, r) {
        e.exports = function(e) {
            var t = [];
            return t.toString = function() {
                return this.map((function(t) {
                    var r = function(e, t) {
                        var r = e[1] || ""
                          , o = e[3];
                        if (!o)
                            return r;
                        if (t && "function" == typeof btoa) {
                            var n = (l = o,
                            a = btoa(unescape(encodeURIComponent(JSON.stringify(l)))),
                            s = "sourceMappingURL=data:application/json;charset=utf-8;base64,".concat(a),
                            "/*# ".concat(s, " */"))
                              , i = o.sources.map((function(e) {
                                return "/*# sourceURL=".concat(o.sourceRoot || "").concat(e, " */")
                            }
                            ));
                            return [r].concat(i).concat([n]).join("\n")
                        }
                        var l, a, s;
                        return [r].join("\n")
                    }(t, e);
                    return t[2] ? "@media ".concat(t[2], " {").concat(r, "}") : r
                }
                )).join("")
            }
            ,
            t.i = function(e, r, o) {
                "string" == typeof e && (e = [[null, e, ""]]);
                var n = {};
                if (o)
                    for (var i = 0; i < this.length; i++) {
                        var l = this[i][0];
                        null != l && (n[l] = !0)
                    }
                for (var a = 0; a < e.length; a++) {
                    var s = [].concat(e[a]);
                    o && n[s[0]] || (r && (s[2] ? s[2] = "".concat(r, " and ").concat(s[2]) : s[2] = r),
                    t.push(s))
                }
            }
            ,
            t
        }
    }
    , function(e) {
        e.exports = JSON.parse('{"a":"formbuilder-icon-"}')
    }
    , function(e, t, r) {
        var o, n = function() {
            return void 0 === o && (o = Boolean(window && document && document.all && !window.atob)),
            o
        }, i = function() {
            var e = {};
            return function(t) {
                if (void 0 === e[t]) {
                    var r = document.querySelector(t);
                    if (window.HTMLIFrameElement && r instanceof window.HTMLIFrameElement)
                        try {
                            r = r.contentDocument.head
                        } catch (e) {
                            r = null
                        }
                    e[t] = r
                }
                return e[t]
            }
        }(), l = [];
        function a(e) {
            for (var t = -1, r = 0; r < l.length; r++)
                if (l[r].identifier === e) {
                    t = r;
                    break
                }
            return t
        }
        function s(e, t) {
            for (var r = {}, o = [], n = 0; n < e.length; n++) {
                var i = e[n]
                  , s = t.base ? i[0] + t.base : i[0]
                  , d = r[s] || 0
                  , c = "".concat(s, " ").concat(d);
                r[s] = d + 1;
                var u = a(c)
                  , f = {
                    css: i[1],
                    media: i[2],
                    sourceMap: i[3]
                };
                -1 !== u ? (l[u].references++,
                l[u].updater(f)) : l.push({
                    identifier: c,
                    updater: h(f, t),
                    references: 1
                }),
                o.push(c)
            }
            return o
        }
        function d(e) {
            var t = document.createElement("style")
              , o = e.attributes || {};
            if (void 0 === o.nonce) {
                var n = r.nc;
                n && (o.nonce = n)
            }
            if (Object.keys(o).forEach((function(e) {
                t.setAttribute(e, o[e])
            }
            )),
            "function" == typeof e.insert)
                e.insert(t);
            else {
                var l = i(e.insert || "head");
                if (!l)
                    throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
                l.appendChild(t)
            }
            return t
        }
        var c, u = (c = [],
        function(e, t) {
            return c[e] = t,
            c.filter(Boolean).join("\n")
        }
        );
        function f(e, t, r, o) {
            var n = r ? "" : o.media ? "@media ".concat(o.media, " {").concat(o.css, "}") : o.css;
            if (e.styleSheet)
                e.styleSheet.cssText = u(t, n);
            else {
                var i = document.createTextNode(n)
                  , l = e.childNodes;
                l[t] && e.removeChild(l[t]),
                l.length ? e.insertBefore(i, l[t]) : e.appendChild(i)
            }
        }
        function p(e, t, r) {
            var o = r.css
              , n = r.media
              , i = r.sourceMap;
            if (n ? e.setAttribute("media", n) : e.removeAttribute("media"),
            i && btoa && (o += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(i)))), " */")),
            e.styleSheet)
                e.styleSheet.cssText = o;
            else {
                for (; e.firstChild; )
                    e.removeChild(e.firstChild);
                e.appendChild(document.createTextNode(o))
            }
        }
        var m = null
          , b = 0;
        function h(e, t) {
            var r, o, n;
            if (t.singleton) {
                var i = b++;
                r = m || (m = d(t)),
                o = f.bind(null, r, i, !1),
                n = f.bind(null, r, i, !0)
            } else
                r = d(t),
                o = p.bind(null, r, t),
                n = function() {
                    !function(e) {
                        if (null === e.parentNode)
                            return !1;
                        e.parentNode.removeChild(e)
                    }(r)
                }
                ;
            return o(e),
            function(t) {
                if (t) {
                    if (t.css === e.css && t.media === e.media && t.sourceMap === e.sourceMap)
                        return;
                    o(e = t)
                } else
                    n()
            }
        }
        e.exports = function(e, t) {
            (t = t || {}).singleton || "boolean" == typeof t.singleton || (t.singleton = n());
            var r = s(e = e || [], t);
            return function(e) {
                if (e = e || [],
                "[object Array]" === Object.prototype.toString.call(e)) {
                    for (var o = 0; o < r.length; o++) {
                        var n = a(r[o]);
                        l[n].references--
                    }
                    for (var i = s(e, t), d = 0; d < r.length; d++) {
                        var c = a(r[d]);
                        0 === l[c].references && (l[c].updater(),
                        l.splice(c, 1))
                    }
                    r = i
                }
            }
        }
    }
    , function(e, t, r) {
        r.d(t, "a", (function() {
            return i
        }
        ));
        var o = r(0);
        const n = (e,t)=>{
            let r = e.id ? `formbuilder-${e.type} form-group field-${e.id}` : "";
            if (e.className) {
                let o = e.className.split(" ");
                o = o.filter(e=>/^col-(xs|sm|md|lg)-([^\s]+)/.test(e) || e.startsWith("row-")),
                o && o.length > 0 && (r += " " + o.join(" "));
                for (let e = 0; e < o.length; e++) {
                    const r = o[e];
                    t.classList.remove(r)
                }
            }
            return r
        }
        ;
        class i {
            constructor(e, t) {
                this.preview = t,
                this.templates = {
                    label: null,
                    help: null,
                    default: (e,t,r,o)=>(r && t.appendChild(r),
                    this.markup("div", [t, e], {
                        className: n(o, e)
                    })),
                    noLabel: (e,t,r,o)=>this.markup("div", e, {
                        className: n(o, e)
                    }),
                    hidden: e=>e
                },
                e && (this.templates = jQuery.extend(this.templates, e)),
                this.configure()
            }
            configure() {}
            build(e, t, r) {
                this.preview && (t.name ? t.name = t.name + "-preview" : t.name = o.f.nameAttr(t) + "-preview"),
                t.id = t.name,
                this.data = jQuery.extend({}, t);
                const n = new e(t,this.preview);
                let i = n.build();
                "object" == typeof i && i.field || (i = {
                    field: i
                });
                const l = this.label()
                  , a = this.help();
                let s;
                s = r && this.isTemplate(r) ? r : this.isTemplate(i.layout) ? i.layout : "default";
                const d = this.processTemplate(s, i.field, l, a);
                return n.on("prerender")(d),
                d.addEventListener("fieldRendered", n.on("render")),
                d
            }
            label() {
                const e = this.data.label || ""
                  , t = [o.f.parsedHtml(e)];
                return this.data.required && t.push(this.markup("span", "*", {
                    className: "formbuilder-required"
                })),
                this.isTemplate("label") ? this.processTemplate("label", t) : this.markup("label", t, {
                    for: this.data.id,
                    className: `formbuilder-${this.data.type}-label`
                })
            }
            help() {
                return this.data.description ? this.isTemplate("help") ? this.processTemplate("help", this.data.description) : this.markup("span", "?", {
                    className: "tooltip-element",
                    tooltip: this.data.description
                }) : null
            }
            isTemplate(e) {
                return "function" == typeof this.templates[e]
            }
            processTemplate(e, ...t) {
                let r = this.templates[e](...t, this.data);
                return r.jquery && (r = r[0]),
                r
            }
            markup(e, t="", r={}) {
                return o.f.markup(e, t, r)
            }
        }
    }
    , function(e, t) {
        e.exports = function(e) {
            var t = typeof e;
            return null != e && ("object" == t || "function" == t)
        }
    }
    , function(t, r, o) {
        var n = o(1)
          , i = o(4);
        function l(e, t) {
            if (null == e)
                return {};
            var r, o, n = function(e, t) {
                if (null == e)
                    return {};
                var r, o, n = {}, i = Object.keys(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || (n[r] = e[r]);
                return n
            }(e, t);
            if (Object.getOwnPropertySymbols) {
                var i = Object.getOwnPropertySymbols(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || Object.prototype.propertyIsEnumerable.call(e, r) && (n[r] = e[r])
            }
            return n
        }
        class a extends n.a {
            static get definition() {
                return {
                    mi18n: {
                        requireValidOption: "requireValidOption"
                    }
                }
            }
            build() {
                const e = this.config
                  , {values: t, type: r} = e
                  , o = l(e, ["values", "type"])
                  , n = e=>{
                    const t = e.target.nextSibling.nextSibling
                      , r = e.target.nextSibling
                      , o = this.getActiveOption(t);
                    let n = new Map([[38, ()=>{
                        const e = this.getPreviousOption(o);
                        e && this.selectOption(t, e)
                    }
                    ], [40, ()=>{
                        const e = this.getNextOption(o);
                        e && this.selectOption(t, e)
                    }
                    ], [13, ()=>{
                        o ? (e.target.value = o.innerHTML,
                        r.value = o.getAttribute("value"),
                        "none" === t.style.display ? this.showList(t, o) : this.hideList(t)) : this.config.requireValidOption && (this.isOptionValid(t, e.target.value) || (e.target.value = "",
                        e.target.nextSibling.value = "")),
                        e.preventDefault()
                    }
                    ], [27, ()=>{
                        this.hideList(t)
                    }
                    ]]).get(e.keyCode);
                    return n || (n = ()=>!1),
                    n()
                }
                  , a = {
                    focus: e=>{
                        const t = e.target.nextSibling.nextSibling
                          , r = Object(i.c)(t.querySelectorAll("li"), e.target.value);
                        if (e.target.addEventListener("keydown", n),
                        e.target.value.length > 0) {
                            const e = r.length > 0 ? r[r.length - 1] : null;
                            this.showList(t, e)
                        }
                    }
                    ,
                    blur: e=>{
                        e.target.removeEventListener("keydown", n);
                        const t = setTimeout(()=>{
                            e.target.nextSibling.nextSibling.style.display = "none",
                            clearTimeout(t)
                        }
                        , 200);
                        if (this.config.requireValidOption) {
                            const t = e.target.nextSibling.nextSibling;
                            this.isOptionValid(t, e.target.value) || (e.target.value = "",
                            e.target.nextSibling.value = "")
                        }
                    }
                    ,
                    input: e=>{
                        const t = e.target.nextSibling.nextSibling;
                        e.target.nextSibling.value = e.target.value;
                        const r = Object(i.c)(t.querySelectorAll("li"), e.target.value);
                        if (0 == r.length)
                            this.hideList(t);
                        else {
                            let e = this.getActiveOption(t);
                            e || (e = r[r.length - 1]),
                            this.showList(t, e)
                        }
                    }
                }
                  , s = Object.assign({}, o, {
                    id: o.id + "-input",
                    autocomplete: "off",
                    events: a
                })
                  , d = Object.assign({}, o, {
                    type: "hidden"
                });
                delete s.name;
                const c = [this.markup("input", null, s), this.markup("input", null, d)]
                  , u = t.map(e=>{
                    const t = e.label
                      , r = {
                        events: {
                            click: t=>{
                                const r = t.target.parentElement
                                  , o = r.previousSibling.previousSibling;
                                o.value = e.label,
                                o.nextSibling.value = e.value,
                                this.hideList(r)
                            }
                        },
                        value: e.value
                    };
                    return this.markup("li", t, r)
                }
                );
                return c.push(this.markup("ul", u, {
                    id: o.id + "-list",
                    className: `formbuilder-${r}-list`
                })),
                c
            }
            hideList(e) {
                this.selectOption(e, null),
                e.style.display = "none"
            }
            showList(e, t) {
                this.selectOption(e, t),
                e.style.display = "block",
                e.style.width = e.parentElement.offsetWidth + "px"
            }
            getActiveOption(e) {
                const t = e.getElementsByClassName("active-option")[0];
                return t && "none" !== t.style.display ? t : null
            }
            getPreviousOption(e) {
                let t = e;
                do {
                    t = t ? t.previousSibling : null
                } while (null != t && "none" === t.style.display);
                return t
            }
            getNextOption(e) {
                let t = e;
                do {
                    t = t ? t.nextSibling : null
                } while (null != t && "none" === t.style.display);
                return t
            }
            selectOption(e, t) {
                const r = e.querySelectorAll("li");
                for (let e = 0; e < r.length; e++)
                    r[e].classList.remove("active-option");
                t && t.classList.add("active-option")
            }
            isOptionValid(e, t) {
                const r = e.querySelectorAll("li");
                let o = !1;
                for (let e = 0; e < r.length; e++)
                    if (r[e].innerHTML === t) {
                        o = !0;
                        break
                    }
                return o
            }
            onRender(t) {
                if (this.config.userData) {
                    const t = e("#" + this.config.name)
                      , r = t.next()
                      , o = this.config.userData[0];
                    let n = null;
                    if (r.find("li").each((function() {
                        e(this).attr("value") !== o || (n = e(this).get(0))
                    }
                    )),
                    null === n)
                        return this.config.requireValidOption ? void 0 : void t.prev().val(this.config.userData[0]);
                    t.prev().val(n.innerHTML),
                    t.val(n.getAttribute("value"));
                    const i = t.next().get(0);
                    "none" === i.style.display ? this.showList(i, n) : this.hideList(i)
                }
                return t
            }
        }
        n.a.register("autocomplete", a);
        class s extends n.a {
            build() {
                return {
                    field: this.markup("button", this.label, this.config),
                    layout: "noLabel"
                }
            }
        }
        n.a.register("button", s),
        // n.a.register(["button", "submit", "reset"], s, "button");
        n.a.register(["button", "submit", "search"], s, "button");
        var d = o(6);
        class c extends n.a {
            build() {
                return {
                    field: this.markup("input", null, this.config),
                    layout: "hidden"
                }
            }
            onRender() {
                this.config.userData && e("#" + this.config.name).val(this.config.userData[0])
            }
        }
        n.a.register("hidden", c);
        var u = o(0);
        function f(e, t) {
            if (null == e)
                return {};
            var r, o, n = function(e, t) {
                if (null == e)
                    return {};
                var r, o, n = {}, i = Object.keys(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || (n[r] = e[r]);
                return n
            }(e, t);
            if (Object.getOwnPropertySymbols) {
                var i = Object.getOwnPropertySymbols(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || Object.prototype.propertyIsEnumerable.call(e, r) && (n[r] = e[r])
            }
            return n
        }
        class p extends n.a {
            build() {
                const e = this.config
                  , {type: t} = e
                  , r = f(e, ["type"]);
                let o = t;
                const n = {
                    paragraph: "p",
                    header: this.subtype
                };
                return n[t] && (o = n[t]),
                {
                    field: this.markup(o, u.f.parsedHtml(this.label), r),
                    layout: "noLabel"
                }
            }
        }
        function m(e, t) {
            if (null == e)
                return {};
            var r, o, n = function(e, t) {
                if (null == e)
                    return {};
                var r, o, n = {}, i = Object.keys(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || (n[r] = e[r]);
                return n
            }(e, t);
            if (Object.getOwnPropertySymbols) {
                var i = Object.getOwnPropertySymbols(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || Object.prototype.propertyIsEnumerable.call(e, r) && (n[r] = e[r])
            }
            return n
        }
        n.a.register(["paragraph", "header"], p),
        n.a.register(["p", "address", "blockquote", "canvas", "output"], p, "paragraph"),
        n.a.register(["h1", "h2", "h3", "h4", "h5", "h6"], p, "header");
        class b extends n.a {
            static get definition() {
                return {
                    inactive: ["checkbox"],
                    mi18n: {
                        minSelectionRequired: "minSelectionRequired"
                    }
                }
            }
            build() {
                const e = []
                  , t = this.config
                  , {values: r, value: o, placeholder: n, type: i, inline: l, other: a, toggle: s} = t
                  , d = m(t, ["values", "value", "placeholder", "type", "inline", "other", "toggle"])
                  , c = i.replace("-group", "")
                  , f = "select" === i;
                if ((d.multiple || "checkbox-group" === i) && (d.name = d.name + "[]"),
                "checkbox-group" === i && d.required && (this.onRender = this.groupRequired),
                delete d.title,
                r) {
                    n && f && e.push(this.markup("option", n, {
                        disabled: null,
                        selected: null
                    }));
                    for (let t = 0; t < r.length; t++) {
                        let i = r[t];
                        "string" == typeof i && (i = {
                            label: i,
                            value: i
                        });
                        const {label: a=""} = i
                          , u = m(i, ["label"]);
                        if (u.id = `${d.id}-${t}`,
                        u.selected && !n || delete u.selected,
                        void 0 !== o && u.value === o && (u.selected = !0),
                        f) {
                            const t = this.markup("option", document.createTextNode(a), u);
                            e.push(t)
                        } else {
                            const t = [a];
                            let r = "formbuilder-" + c;
                            l && (r += "-inline"),
                            u.type = c,
                            u.selected && (u.checked = "checked",
                            delete u.selected);
                            const o = this.markup("input", null, Object.assign({}, d, u))
                              , n = {
                                for: u.id
                            };
                            let i = [o, this.markup("label", t, n)];
                            s && (n.className = "kc-toggle",
                            t.unshift(o, this.markup("span")),
                            i = this.markup("label", t, n));
                            const f = this.markup("div", i, {
                                className: r
                            });
                            e.push(f)
                        }
                    }
                    if (!f && a) {
                        const t = {
                            id: d.id + "-other",
                            className: d.className + " other-option",
                            value: ""
                        };
                        let r = "formbuilder-" + c;
                        l && (r += "-inline");
                        const o = Object.assign({}, d, t);
                        o.type = c;
                        const n = {
                            type: "text",
                            events: {
                                input: e=>{
                                    const t = e.target
                                      , r = t.parentElement.previousElementSibling;
                                    r.value = t.value,
                                    r.name = d.id + "[]"
                                }
                            },
                            id: t.id + "-value",
                            className: "other-val"
                        }
                          , i = this.markup("input", null, o)
                          , a = [document.createTextNode("Other"), this.markup("input", null, n)]
                          , s = this.markup("label", a, {
                            for: o.id
                        })
                          , u = this.markup("div", [i, s], {
                            className: r
                        });
                        e.push(u)
                    }
                }
                return this.dom = "select" == i ? this.markup(c, e, Object(u.A)(d, !0)) : this.markup("div", e, {
                    className: i
                }),
                this.dom
            }
            groupRequired() {
                const e = this.element.getElementsByTagName("input")
                  , t = (e,t)=>{
                    [].forEach.call(e, e=>{
                        t ? e.removeAttribute("required") : e.setAttribute("required", "required"),
                        ((e,t)=>{
                            const r = n.a.mi18n("minSelectionRequired", 1);
                            t ? e.setCustomValidity("") : e.setCustomValidity(r)
                        }
                        )(e, t)
                    }
                    )
                }
                  , r = ()=>{
                    const r = [].some.call(e, e=>e.checked);
                    t(e, r)
                }
                ;
                for (let t = e.length - 1; t >= 0; t--)
                    e[t].addEventListener("change", r);
                r()
            }
            onRender() {
                if (this.config.userData) {
                    const t = this.config.userData.slice();
                    "select" === this.config.type ? e(this.dom).val(t).prop("selected", !0) : this.config.type.endsWith("-group") && this.dom.querySelectorAll("input").forEach(e=>{
                        if (!e.classList.contains("other-val")) {
                            for (let r = 0; r < t.length; r++)
                                if (e.value === t[r]) {
                                    e.setAttribute("checked", !0),
                                    t.splice(r, 1);
                                    break
                                }
                            if (e.id.endsWith("-other")) {
                                const r = document.getElementById(e.id + "-value");
                                if (0 === t.length)
                                    return;
                                e.setAttribute("checked", !0),
                                r.value = e.value = t[0],
                                r.style.display = "inline-block"
                            }
                        }
                    }
                    )
                }
            }
        }
        n.a.register(["select", "checkbox-group", "radio-group", "checkbox"], b);
        class h extends n.a {
            static get definition() {
                return {
                    mi18n: {
                        date: "dateField",
                        file: "fileUpload"
                    }
                }
            }
            build() {
                let {name: e} = this.config;
                e = this.config.multiple ? e + "[]" : e;
                const t = Object.assign({}, this.config, {
                    name: e
                });
                return this.dom = this.markup("input", null, t),
                this.dom
            }
            onRender() {
                this.config.userData && e(this.dom).val(this.config.userData[0])
            }
        }
        n.a.register(["text", "file", "date", "number"], h),
        n.a.register(["text", "password", "email", "color", "tel"], h, "text");
        class g extends h {
            static get definition() {
                return {
                    i18n: {
                        default: "Fine Uploader"
                    }
                }
            }
            configure() {
                this.js = this.classConfig.js || "//cdnjs.cloudflare.com/ajax/libs/file-uploader/5.14.2/jquery.fine-uploader/jquery.fine-uploader.min.js",
                this.css = [this.classConfig.css || "//cdnjs.cloudflare.com/ajax/libs/file-uploader/5.14.2/jquery.fine-uploader/fine-uploader-gallery.min.css", {
                    type: "inline",
                    id: "fineuploader-inline",
                    style: "\n          .qq-uploader .qq-error-message {\n            position: absolute;\n            left: 20%;\n            top: 20px;\n            width: 60%;\n            color: #a94442;\n            background: #f2dede;\n            border: solid 1px #ebccd1;\n            padding: 15px;\n            line-height: 1.5em;\n            text-align: center;\n            z-index: 99999;\n          }\n          .qq-uploader .qq-error-message span {\n            display: inline-block;\n            text-align: left;\n          }"
                }],
                this.handler = this.classConfig.handler || "/upload";
                ["js", "css", "handler"].forEach(e=>delete this.classConfig[e]);
                const t = this.classConfig.template || '\n      <div class="qq-uploader-selector qq-uploader qq-gallery" qq-drop-area-text="Drop files here">\n        <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">\n          <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>\n        </div>\n        <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>\n          <span class="qq-upload-drop-area-text-selector"></span>\n        </div>\n        <div class="qq-upload-button-selector qq-upload-button">\n          <div>Upload a file</div>\n        </div>\n        <span class="qq-drop-processing-selector qq-drop-processing">\n          <span>Processing dropped files...</span>\n          <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>\n        </span>\n        <ul class="qq-upload-list-selector qq-upload-list" role="region" aria-live="polite" aria-relevant="additions removals">\n          <li>\n            <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>\n            <div class="qq-progress-bar-container-selector qq-progress-bar-container">\n              <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>\n            </div>\n            <span class="qq-upload-spinner-selector qq-upload-spinner"></span>\n            <div class="qq-thumbnail-wrapper">\n              <img class="qq-thumbnail-selector" qq-max-size="120" qq-server-scale>\n            </div>\n            <button type="button" class="qq-upload-cancel-selector qq-upload-cancel">X</button>\n            <button type="button" class="qq-upload-retry-selector qq-upload-retry">\n              <span class="qq-btn qq-retry-icon" aria-label="Retry"></span>\n              Retry\n            </button>\n            <div class="qq-file-info">\n              <div class="qq-file-name">\n                <span class="qq-upload-file-selector qq-upload-file"></span>\n                <span class="qq-edit-filename-icon-selector qq-btn qq-edit-filename-icon" aria-label="Edit filename"></span>\n              </div>\n              <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">\n              <span class="qq-upload-size-selector qq-upload-size"></span>\n              <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">\n                <span class="qq-btn qq-delete-icon" aria-label="Delete"></span>\n              </button>\n              <button type="button" class="qq-btn qq-upload-pause-selector qq-upload-pause">\n                <span class="qq-btn qq-pause-icon" aria-label="Pause"></span>\n              </button>\n              <button type="button" class="qq-btn qq-upload-continue-selector qq-upload-continue">\n                <span class="qq-btn qq-continue-icon" aria-label="Continue"></span>\n              </button>\n            </div>\n          </li>\n        </ul>\n        <dialog class="qq-alert-dialog-selector">\n          <div class="qq-dialog-message-selector"></div>\n          <div class="qq-dialog-buttons">\n            <button type="button" class="qq-cancel-button-selector">Close</button>\n          </div>\n        </dialog>\n        <dialog class="qq-confirm-dialog-selector">\n          <div class="qq-dialog-message-selector"></div>\n          <div class="qq-dialog-buttons">\n            <button type="button" class="qq-cancel-button-selector">No</button>\n            <button type="button" class="qq-ok-button-selector">Yes</button>\n          </div>\n        </dialog>\n        <dialog class="qq-prompt-dialog-selector">\n          <div class="qq-dialog-message-selector"></div>\n          <input type="text">\n          <div class="qq-dialog-buttons">\n            <button type="button" class="qq-cancel-button-selector">Cancel</button>\n            <button type="button" class="qq-ok-button-selector">Ok</button>\n          </div>\n        </dialog>\n      </div>';
                this.fineTemplate = e("<div/>").attr("id", "qq-template").html(t)
            }
            build() {
                return this.input = this.markup("input", null, {
                    type: "hidden",
                    name: this.config.name,
                    id: this.config.name
                }),
                this.wrapper = this.markup("div", "", {
                    id: this.config.name + "-wrapper"
                }),
                [this.input, this.wrapper]
            }
            onRender() {
                const t = e(this.wrapper)
                  , r = e(this.input)
                  , o = jQuery.extend(!0, {
                    request: {
                        endpoint: this.handler
                    },
                    deleteFile: {
                        enabled: !0,
                        endpoint: this.handler
                    },
                    chunking: {
                        enabled: !0,
                        concurrent: {
                            enabled: !0
                        },
                        success: {
                            endpoint: this.handler + (-1 == this.handler.indexOf("?") ? "?" : "&") + "done"
                        }
                    },
                    resume: {
                        enabled: !0
                    },
                    retry: {
                        enableAuto: !0,
                        showButton: !0
                    },
                    callbacks: {
                        onError: (r,o,n)=>{
                            "." != n.slice(-1) && (n += ".");
                            const i = e("<div />").addClass("qq-error-message").html(`<span>Error processing upload: <b>${o}</b>.<br />Reason: ${n}</span>`).prependTo(t.find(".qq-uploader"))
                              , l = window.setTimeout(()=>{
                                i.fadeOut(()=>{
                                    i.remove(),
                                    window.clearTimeout(l)
                                }
                                )
                            }
                            , 6e3);
                            return r
                        }
                        ,
                        onStatusChange: (e,o,n)=>{
                            const i = t.fineUploader("getUploads")
                              , l = [];
                            for (const e of i)
                                "upload successful" == e.status && l.push(e.name);
                            return r.val(l.join(", ")),
                            {
                                id: e,
                                oldStatus: o,
                                newStatus: n
                            }
                        }
                    },
                    template: this.fineTemplate
                }, this.classConfig);
                t.fineUploader(o)
            }
        }
        function y(e, t) {
            if (null == e)
                return {};
            var r, o, n = function(e, t) {
                if (null == e)
                    return {};
                var r, o, n = {}, i = Object.keys(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || (n[r] = e[r]);
                return n
            }(e, t);
            if (Object.getOwnPropertySymbols) {
                var i = Object.getOwnPropertySymbols(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || Object.prototype.propertyIsEnumerable.call(e, r) && (n[r] = e[r])
            }
            return n
        }
        h.register("file", h, "file"),
        h.register("fineuploader", g, "file");
        class w extends n.a {
            static get definition() {
                return {
                    mi18n: {
                        textarea: "textArea"
                    }
                }
            }
            build() {
                const e = this.config
                  , {value: t=""} = e
                  , r = y(e, ["value"]);
                return this.field = this.markup("textarea", this.parsedHtml(t), r),
                this.field
            }
            onRender() {
                this.config.userData && e("#" + this.config.name).val(this.config.userData[0])
            }
            on(t) {
                return "prerender" == t && this.preview ? t=>{
                    this.field && (t = this.field),
                    e(t).on("mousedown", e=>{
                        e.stopPropagation()
                    }
                    )
                }
                : super.on(t)
            }
        }
        function v(e, t) {
            if (null == e)
                return {};
            var r, o, n = function(e, t) {
                if (null == e)
                    return {};
                var r, o, n = {}, i = Object.keys(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || (n[r] = e[r]);
                return n
            }(e, t);
            if (Object.getOwnPropertySymbols) {
                var i = Object.getOwnPropertySymbols(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || Object.prototype.propertyIsEnumerable.call(e, r) && (n[r] = e[r])
            }
            return n
        }
        n.a.register("textarea", w),
        n.a.register("textarea", w, "textarea");
        class x extends w {
            configure() {
                if (this.js = ["https://cdn.tinymce.com/4/tinymce.min.js"],
                this.classConfig.js) {
                    let e = this.classConfig.js;
                    Array.isArray(e) || (e = new Array(e)),
                    this.js.concat(e),
                    delete this.classConfig.js
                }
                this.classConfig.css && (this.css = this.classConfig.css),
                this.editorOptions = {
                    height: 250,
                    paste_data_images: !0,
                    plugins: ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste code"],
                    toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | table"
                }
            }
            build() {
                const e = this.config
                  , {value: t=""} = e
                  , r = v(e, ["value"]);
                return this.field = this.markup("textarea", this.parsedHtml(t), r),
                r.disabled && (this.editorOptions.readonly = !0),
                this.field
            }
            onRender(e) {
                window.tinymce.editors[this.id] && window.tinymce.editors[this.id].remove();
                const t = jQuery.extend(this.editorOptions, this.classConfig);
                return t.target = this.field,
                window.tinymce.init(t),
                this.config.userData && window.tinymce.editors[this.id].setContent(this.parsedHtml(this.config.userData[0])),
                e
            }
        }
        function O(e, t) {
            if (null == e)
                return {};
            var r, o, n = function(e, t) {
                if (null == e)
                    return {};
                var r, o, n = {}, i = Object.keys(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || (n[r] = e[r]);
                return n
            }(e, t);
            if (Object.getOwnPropertySymbols) {
                var i = Object.getOwnPropertySymbols(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || Object.prototype.propertyIsEnumerable.call(e, r) && (n[r] = e[r])
            }
            return n
        }
        function A(e, t) {
            var r = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var o = Object.getOwnPropertySymbols(e);
                t && (o = o.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }
                ))),
                r.push.apply(r, o)
            }
            return r
        }
        function j(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {};
                t % 2 ? A(Object(r), !0).forEach((function(t) {
                    k(e, t, r[t])
                }
                )) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r)) : A(Object(r)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                }
                ))
            }
            return e
        }
        function k(e, t, r) {
            return t in e ? Object.defineProperty(e, t, {
                value: r,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = r,
            e
        }
        w.register("tinymce", x, "textarea");
        class q extends w {
            configure() {
                const e = {
                    modules: {
                        toolbar: [[{
                            header: [1, 2, !1]
                        }], ["bold", "italic", "underline"], ["code-block"]]
                    },
                    placeholder: this.config.placeholder || "",
                    theme: "snow"
                }
                  , [t,r] = u.f.splitObject(this.classConfig, ["css", "js"]);
                Object.assign(this, j(j({}, {
                    js: "//cdn.quilljs.com/1.2.4/quill.js",
                    css: "//cdn.quilljs.com/1.2.4/quill.snow.css"
                }), t)),
                this.editorConfig = j(j({}, e), r)
            }
            build() {
                const e = this.config
                  , {value: t=""} = e
                  , r = O(e, ["value"]);
                return this.field = this.markup("div", null, r),
                this.field
            }
            onRender(e) {
                const t = this.config.value || ""
                  , r = window.Quill.import("delta");
                window.fbEditors.quill[this.id] = {};
                const o = window.fbEditors.quill[this.id];
                return o.instance = new window.Quill(this.field,this.editorConfig),
                o.data = new r,
                t && o.instance.setContents(window.JSON.parse(this.parsedHtml(t))),
                o.instance.on("text-change", (function(e) {
                    o.data = o.data.compose(e)
                }
                )),
                e
            }
        }
        w.register("quill", q, "textarea");
        d.a
    }
    , function(e, t, r) {
        var o = r(20)
          , n = "object" == typeof self && self && self.Object === Object && self
          , i = o || n || Function("return this")();
        e.exports = i
    }
    , function(e, t, r) {
        var o = r(13).Symbol;
        e.exports = o
    }
    , function(e, t, r) {
        var o = r(18)
          , n = r(11);
        e.exports = function(e, t, r) {
            var i = !0
              , l = !0;
            if ("function" != typeof e)
                throw new TypeError("Expected a function");
            return n(r) && (i = "leading"in r ? !!r.leading : i,
            l = "trailing"in r ? !!r.trailing : l),
            o(e, t, {
                leading: i,
                maxWait: t,
                trailing: l
            })
        }
    }
    , function(e, t, r) {
        var o = r(9)
          , n = r(17);
        "string" == typeof (n = n.__esModule ? n.default : n) && (n = [[e.i, n, ""]]);
        var i = {
            attributes: {
                class: "formBuilder-injected-style"
            },
            insert: "head",
            singleton: !1
        };
        o(n, i);
        e.exports = n.locals || {}
    }
    , function(e, t, r) {
        r.r(t);
        var o = r(7)
          , n = r.n(o)()(!1);
        n.push([e.i, "@font-face{font-family:'formbuilder-icons';src:url(\"data:application/octet-stream;base64,d09GRgABAAAAABu0AA8AAAAAMegAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABHU1VCAAABWAAAADsAAABUIIslek9TLzIAAAGUAAAAQwAAAFY+IFQTY21hcAAAAdgAAACqAAACbnpHyFBjdnQgAAAChAAAABMAAAAgBtX/BGZwZ20AAAKYAAAFkAAAC3CKkZBZZ2FzcAAACCgAAAAIAAAACAAAABBnbHlmAAAIMAAAEA4AAByklMHRx2hlYWQAABhAAAAAMwAAADYZ1vNNaGhlYQAAGHQAAAAdAAAAJAc8A2VobXR4AAAYlAAAACEAAABMRoz//2xvY2EAABi4AAAAKAAAAChJjFGYbWF4cAAAGOAAAAAgAAAAIAKGDJhuYW1lAAAZAAAAAZkAAAM5OICt5nBvc3QAABqcAAAAmwAAAN59hsARcHJlcAAAGzgAAAB6AAAAhuVBK7x4nGNgZGBg4GIwYLBjYHJx8wlh4MtJLMljkGJgYYAAkDwymzEnMz2RgQPGA8qxgGkOIGaDiAIAJjsFSAB4nGNgZN7OOIGBlYGBqYppDwMDQw+EZnzAYMjIBBRlYGVmwAoC0lxTGA68YPjkyxz0P4shijmIYRpQmBEkBwAMiQy7AHic7ZHLFYJADEXvAOIP5FOCC1e2ws6CXFlr1jSgL5OUYTiXScIMcHKBA9CKp+igfCh4vNUttd9yqf2Ol+qTrgZstGXfvl9l2BRZjaLndx41a3S20xd6juqe9Z4rAyM3JmYWVm3q+cdQ75bVGmktZcCSOvXEjVni1ixxm5Zo6lii+WOJTGCJnGCJW7ZEnrDE/84SuZP5QBZlPsDXOcDXJZBj9i1g/QFjZzHOAAB4nGNgQAMSEMgc9D8LhAESbAPdAHicrVZpd9NGFB15SZyELCULLWphxMRpsEYmbMGACUGyYyBdnK2VoIsUO+m+8Ynf4F/zZNpz6Dd+Wu8bLySQtOdwmpOjd+fN1czbZRJaktgL65GUmy/F1NYmjew8CemGTctRfCg7eyFlisnfBVEQrZbatx2HREQiULWusEQQ+x5ZmmR86FFGy7akV03KLT3pLlvjQb1V334aOsqxO6GkZjN0aD2yJVUYVaJIpj1S0qZlqPorSSu8v8LMV81QwohOImm8GcbQSN4bZ7TKaDW24yiKbLLcKFIkmuFBFHmU1RLn5IoJDMoHzZDyyqcR5cP8iKzYo5xWsEu20/y+L3mndzk/sV9vUbbkQB/Ijuzg7HQlX4RbW2HctJPtKFQRdtd3QmzZ7FT/Zo/ymkYDtysyvdCMYKl8hRArP6HM/iFZLZxP+ZJHo1qykRNB62VO7Es+gdbjiClxzRhZ0N3RCRHU/ZIzDPaYPh788d4plgsTAngcy3pHJZwIEylhczRJ2jByYCVliyqp9a6YOOV1WsRbwn7t2tGXzmjjUHdiPFsPHVs5UcnxaFKnmUyd2knNoykNopR0JnjMrwMoP6JJXm1jNYmVR9M4ZsaERCICLdxLU0EsO7GkKQTNoxm9uRumuXYtWqTJA/Xco/f05la4udNT2g70s0Z/VqdiOtgL0+lp5C/xadrlIkXp+ukZfkziQdYCMpEtNsOUgwdv/Q7Sy9eWHIXXBtju7fMrqH3WRPCkAfsb0B5P1SkJTIWYVYhWQGKta1mWydWsFqnI1HdDmla+rNMEinIcF8e+jHH9XzMzlpgSvt+J07MjLj1z7UsI0xx8m3U9mtepxXIBcWZ5TqdZlu/rNMfyA53mWZ7X6QhLW6ejLD/UaYHlRzodY3lBC5p038GQizDkAg6QMISlA0NYXoIhLBUMYbkIQ1gWYQjLJRjC8mMYwnIZhrC8rGXV1FNJ49qZWAZsQmBijh65zEXlaiq5VEK7aFRqQ54SbpVUFM+qf2WgXjzyhjmwFkiXyJpfMc6Vj0bl+NYVLW8aO1fAsepvH472OfFS1ouFPwX/1dZUJb1izcOTq/Abhp5sJ6o2qXh0TZfPVT26/l9UVFgL9BtIhVgoyrJscGcihI86nYZqoJVDzGzMPLTrdcuan8P9NzFCFlD9+DcUGgvcg05ZSVnt4KzV19uy3DuDcjgTLEkxN/P6VvgiI7PSfpFZyp6PfB5wBYxKZdhqA60VvNknMQ+Z3iTPBHFbUTZI2tjOBIkNHPOAefOdBCZh6qoN5E7hhg34BWFuwXknXKJ6oyyH7kXs8yik/Fun4kT2qGiMwLPZG2Gv70LKb3EMJDT5pX4MVBWhqRg1FdA0Um6oBl/G2bptQsYO9CMqdsOyrOLDxxb3lZJtGYR8pIjVo6Of1l6iTqrcfmYUl++dvgXBIDUxf3vfdHGQyrtayTJHbQNTtxqVU9eaQ+NVh+rmUfW94+wTOWuabronHnpf06rbwcVcLLD2bQ7SUiYX1PVhhQ2iy8WlUOplNEnvuAcYFhjQ71CKjf+r+th8nitVhdFxJN9O1LfR52AM/A/Yf0f1A9D3Y+hyDS7P95oTn2704WyZrqIX66foNzBrrblZugbc0HQD4iFHrY64yg18pwZxeqS5HOkh4GPdFeIBwCaAxeAT3bWM5lMAo/mMOT7A58xh0GQOgy3mMNhmzhrADnMY7DKHwR5zGHzBnHWAL5nDIGQOg4g5DJ4wJwB4yhwGXzGHwdfMYfANc+4DfMscBjFzGCTMYbCv6dYwzC1e0F2gtkFVoANTT1jcw+JQU2XI/o4Xhv29Qcz+wSCm/qjp9pD6Ey8M9WeDmPqLQUz9VdOdIfU3Xhjq7wYx9Q+DmPpMvxjLZQa/jHyXCgeUXWw+5++J9w/bxUC5AAEAAf//AA94nM1ZW3Bbx3nef88VwMEBDnAO7iAuBxcRoEQKV0qkAEiiREqkJJKmJFKyQNY0HVc0TSlJq9ox7TZynKgvrmcqT6dR22EznXGcTOvIE+fB6kynkpt6PHamje126pdOXyq/+KHNS2EB6r+40KwkZ9xkPJPF2QvP7v5nd//b9y+Jk5C757nb3CzhiERsxEHcxEuCJEJMkiZZMkmmyRyZJ8/Q0cnX9On52ks8UHOHSVesICcTSTmxRhKZZCKzGoOIZ8ATWSED0ejAsu7WOEdYDTtWDJeTU/v61OUQ+PrBpD5ziexID9kHeYnskOoCR4nNQkEkUE8pVCRJWUzWd0FmZ5Z6IhnPYi6+m4uSsCMaXgyC3x84RQIBZYL09XkXiNdr9x4JTr5m4ML+uLuwHWufs7KBtQcvLaz2rX5pa6u9/IWW5RmIrm6tS1378he2sFA7f/LkzIzPpyhP/96l3/2dr3/tqxfXzz/+lcdWHl1+5LeWFuvnzp6cPzl/+tTM3MzcQ7PTJ45PHRk/fGjs4IH9tcpwMTeUzfTvSKeSCTMei0b6wiFf0BcM+L0eQ3e7NKfiUBwujSVnXghmIW+YadPIlzHjU8TH9GJOY4PrtllmnWDoKmRB00UzFk8VtUIF8rGiWYwZphHL9QHXD0YsWWRkTAMKKTOmmdidb+dYXAyD7sm3B7NJuVIRLlWrG5UKPo1qu6pWb+Cb9oMN+HEg64/EQ01XyMQWvLwBezbgtD8beLN1pXWFftJ8EYfR11xq6/s4v1JpnVc1Te2NU100wMhXqt2y2ny32k70jxr+TKD1nVA8HqI/Q3o4uxrINt+/8SkjA++rrtZPqxX8udSGquHUiqYSgjrIdHLzgTqZJ2UyQqrkBPka+ZPa1f1JGnYd2Zng3GE6HovQsNsSnguC2++1cxbZbVn0eRRONjSJE3hZqOtOkeMdNo4DwkM9AC5X33wU+vqUCdVKOUJC8yQUsoeOfPXC2vmvPLa8dO7sqYeOTR0aq1b2jY7s3TNcLhULuwf70z2eI8N9XY53kzMuhLM9bqa31XBPzRULKaQjSobuKedzJdg2vtzt83b7yp/JQmkEiqzIecI4o9OSjHzOM765+db162/1Svju669/eP06/HBz88PXX7+liAnJCp3yu+1XH25uuqyyKSmApWz9l4HQnU/CmUx4ooBKWviwlDCTJRgPZ05sbm4mrl+/nths3tpssCJxHYY229Q22exWCvs2N1e3vRpoFhkp+k44U0oWCslSp8wgbyny9h+5/6B/T3TST3K1wfYBuonEURjXAQ4RIJQDuoS8J9wc4Tg0vtieKo6UC7zgY3qhAh7GLuhqRs7jLUsWEJJFpgpx0dCY+KPYc1Mozc33UO6wprlY3vryB633W+9BDgY0tfme6nKpNKdqNNBSeoOwzsRO/3frKrz86BsKE/POOCLjul95oJ94srYaBl6IgIX3g2wJgigbIInCeB8IAbB4QOQOe0Eaw4kU7VbdCgLhLQJfJxYiixa5TkQbjpfO4OnAKQKgkCOKIss9K6LaZZtsYwLmVAR/VouhIcAsYKFhs4htB6S9bqmTudt3fCzDJZpvvsvyxrV6/Vo3c3rlzcqbHRVtVG/Uo8/CG/XoBvwYC9zV/XuMIpeKpIJ+cA6Ejgc8Q2xUoLaVILgsrgtsWzbclk+hgh14q8AvecFKHKLVsUREImmihIrmJJrq1Jb8oBK3rLqXQjqVDQ+1uGTL0rZ9B2tnO8SFtS+B+kLtwLGpWrVcymbiMUN3Omemp+aOzR0+VJ2sTY7sLVXKldxQppgtppKx/nh/MKBHjajT7dzSbmcYlXuLAe1sMA4YHIojCiMaZxTOdFzUPblSIdV9i8qpi/e+vHdoj2t76MXmi738UVssc23ZRFkMoTh2BDVdLqfxRdDlst83pM3iRpX9qvBGINPuy2UCGy7sDLla32wPL84WN3C0oRutF7vzsXi2MwbPzOjKgr5N0juW9yAZR2k4QR4ip8lZskgukW+Q58hl8m1u/+RrFpSPPyOj0og0unIYhsuiOLyyDwgpFUmpjoJUyBQL9fzuwZ18tj8RDfkEymXp4o5DyYOx/eGq38Klx8wDkVqw4rXwAsfXU/G+gEcQDLfmsAs2RbDVc0O7BviM7nKqvGLNKHViJRbZaqmjhkqjslTHNe7dM7K3TvaQ8vCeMmoXgDhLRBEWCIhwDNGSFRf5l79skQO4SJLJ0szsr7tUbqC70oFfaaU2XOmfb19peVhc+w07z9pfdBY4svYbusIFxHp/9cwzc3PT01NTExNjY7Xa6OjwMCXffuFbz1/+5h/8/jPPPfPcsxvfePqpHg68sP7k2hOr53+7gwYZFnz47JmF+bnTc6dPnZx+aPqh2ZmpE1Mnjh+bmJyYPHpkbHwMkWHtYA2x4Wh1FMHC8MgwwgWGFvK53UODu3YO3IsWtyEHp1UiDuoYF/QsbPdfWiElIGw0MEOMWZ32L4+w776cNMx9NG94H1j1oCGCROP+3KYKXUeSxsy9eudqyDRD3CritjtP5TBxq3eu9nLu3OzpmfpkfaY+0FyfnH1lZub7k5N/MzPzh2xgrj4zz7omz3XnNF0dW7bRUuAXnB4PM5BphugnIfN5l93dvEIH7G7Fbd9KEbfbjlbtvjKKhV1UesmvuJtXGYCtVAlxbvktBds68ZEQ+q0E2UEGyBApkGEy2rFbUOx4sMeCYOMUzrZCFJ5Xlv1eaggewVgJ+KhHFD3LcV1z8HZJlewrbhaJyLK6bAG+L0QhzMNiImJyYSIYYaHOfJBdlBZjgABBJueswHH0VBQoVTj0Zk90P6Ss4Zc4hV/tfcqz1v6W4BFXP/uYutb5mqTKq7/C5xZqJ5ls79xpoPHeLpPVyhZ4RXHcObQTJfJBAmn4DJTJtkgi6sDDVNyFpODBkGB3TyTzWtvldd2eG8WKiaiGudzLKFPJbX9DOi90BRX5fjEUb9w5/ZmPa9y4cefnLFboRSOtK702fFC9dOd/kMHcbEcgaR6GKzfevIFz6MUb1Urz3Uo3NdolXDjUYKTwkHq+q4djWOTwkw7v9xOE/jxZUQCsPFhXiayCTZRt7bPlEE70cJqd4TTCcJrVYrHOEqvVskAsVgtavAMdGrD2qxNZqKWiURm5GDWjyIK+oMeNZ64wqGe1IHrkkQKnOQQjW8aDTqJehiG2D/Dg3dr/xbmcFtNuwC9aymen+mY89JkOV+5c/R47Ihb+4Zkx1euqIWdF9fyEoWty9z+52/SD7q3H2do8w+AIxKHOq5TYwWoj1rrioDbE2aJNWJJBlCRxFitROkUQvB6NRoEwcepsJ9CzbQ6rzDaD4XoEIs62hWOWiNm0zg5GwGgHssWuxQMUsX7Q0Ao11+uN+rVgwgxdwwZ9KRQ37zx9jf6suU5fovMslEz5WldCJgsbzRBc8qVak3CpdQUuIXzBQyd3f8Qdo3eRIzrxozV4oebtAyqEPaqE6/FzGO/hHjEQHJ98zYWCkSYCFdZx43Sdnf064kYgy+hLeB5msQL+NOP6ZLCWun8kWb9/4EINgVQs6vM6HRYZlyHqErLTW05jvIZxuxmXQDT0fK4MpbQXzCLoiOPLpVwEPO/kLucnYFER+NY/8XaBh0Gu73Zr6DZ3TD93+5w+4rmsS/nL+dFxKip86595LGEXf/F2a/Bj+NOwce7jhw3jsoedA9fWhVdRF3g0GA5yqHbACvwhWaS8wK8TgQjrEnprZBBXR34DnSWUMsBM4ajFAsTisDC5tDE24iDclwW5mGQIWELth7LX1EwNPmhluVerGxvNC43GtRvf+/TTjQq80Wi0fgp7COks5Dad/5w7tsGtqH47tvy72t/2220WSeAk2KFYZZGn6CeB1HG+qjnUOtGI060560jNZbhddcSsOkbMdaTt8Xs9deS6L+j31bPppBmLhKVgIBCc3fojGDiVSSXi0b6QFAgGjqJjn0O3Po1OfQpd+kTvqmd75P8FfHkvUBjAQMG97V7n3iz8kvx5c9zd24POHc49D7Oi3KtYn7qn/nnPnm5/qp0BNFDZnjaqG9vy9gSXKi2lytgIrKB/Ta+jj+2rBX2aleMpgXFmLcg6Bu70Md2ne1mkXixUIZ0qMIFGqfagdKNzEeODGOzGU4GbNwOFw4FbN/0TOf/Nm/7chP/mLf9E/kwiwOqc/9Yt9u7WzUCnP4+fle6TIx+JkQG6+yeZdIKzyDDewfbHJeAQJHLWNQ2sCrEu20GRibLsANViE9QVFmLaULOpYKHCKtsSh2LlRJ9qUVnEKPC8MEsEgemxgArfweFjW1TtisZZZaTrUNEiIq2VB9KyPZiW9qWskFmw6QdTlVfbZC2qbe3/T9eNdGfuoaus/tqEa7NfiKbFRle/MNEFlmpmwI/ql+3fkUqa8b6wPxZgob5P8/VU0yWEsm6Gc/OaiXU/YC304vA0i9XjKLTevFHOS14zbZgVBmXZvWYH0lYqzX+Np9MH0+nY0J49S3v3vh15bMfFp/rXIqhObRd0FPVlMXcqh4+/9kQNH35p6fzTTz7Z0R/0S29xNvIsOV6bXJgrcKLgRWsrs3uvcRntq0QFkRfY9QZQEZasQFHj5rCiZJ5jajb19FMX1ldXlhbnT544fnTs6559SzbUNyGeiotmPFUuVGi5tA8KaYYTHKCj38t5vLoodQcU2wOKaa1cShUGYRekd4GI00rlHB5CPoemTIyLkmh4GcDokNpFi/f3u7dIcz/wP5J7xG93gisQtbhAMlrf8UhgWOJ9OiiOwOO76z676vL0YR86GcpTWZDjPg8oauDxoSWPqroCIasOkgNeUCVwW3eFVNX36OCST1V1X1zSwW2JhlygnOB5n93lpKJoO/hvisBx/35CEXmnS/UB69GcPC/ZD0bgHxx2FQlanVTgabc7wLoF5fgtim7z+nFFpIpnW4f9WPO/DiAxDDR9HT7Rt5FPWbKrlg3LFHk0joePDFhhuOFJBjH4OcLz7IKSJ1P78u5hUxD8WcDjQefODkjTxSywe1tzq5VK44+dZYldXdK3dTVEVR489lFVn3Y5sZwtH04mlg9WfgA2Vacf9zsTwKliX3ND1XWVvtKcZzUYUiB2cP/0w99Cl9e9Vz3PrWIMxPzqeG2MR3FxOO2cIBKhripUREslyQhN2eKVCSvIsl0+QghzYDhny4dpWwldGBTNsim1s5Fv53y5nfE9vs5zq9ciG5EG5o/eifxwW/taI9KAjzYamDYa3arRYOb77t3u/9sYKh8hz9ccJvBCFkWdWAAkDm24gjZnAFWaE/gVBmBEjrQv+xB0otIL8jyRZWUC4Rl6AkrtFAOtnZ3h3NoXGr9QU4qxlO4ulrymBbcpbIPUXgSi7u59e1pDQ4BcQiPAbuRxhNSFrKhl2Mc4yG0qYnNTtlpluihZJwrJ5mayAKUEXUwWPpywys3OvfiZM4kSFJL4trSPLrLhnQ66wsZ3OqDwozNn2qMZwYkOjQL5XxyYz4kAAHicY2BkYGAAYoWQLZPj+W2+MnAzvwCKMNzOCL8Go////5/F/II5CMjlYGACiQIAb6wN5AB4nGNgZGBgDvqfBSRf/AcC5hcMQBEUIAwAtq0HpgAAAHicY37BwMAMwgugNC4ciWAzrUNinwLS2SD2//8Ae2MRwgAAAAAAAAABygK4AxQDhgSMBuIH6giCCOwJcAmyCpgK1gw4DQwNZA24DlIAAQAAABMAiAAWAAAAAAACAI4AngBzAAABWwtwAAAAAHicjZLPSutAFId/qVXRgqAXXB/uQhQxjRE3rgoFXbkR7FJI08mfkmbKZCrU/V35IL6BOx/Al9BX8dfpcFGKaMIk3/nOmcnMIQD28IYAy+ucY8kBdhktuYVNXHpeo7/23CbfeV5HB9rzBv2D520c49FzB3/wzBWC9hajMV49B/gbnHluYSe49bxGn3puk/95Xsd+8OR5g/7F8zYGwbvnDg5a5309nZsyL6wc9o8kjuJIhnPRVGWdVJLMbKFNIz3JdG1VVekw1ZNMm8lwVlYjZU7KVNfNjcpnVWJW/IoYKNOUupbTMFrJXalamcSq0WIHzX0eW5tJZvRELv23ZWr0WKU2LKydXnS7n/eEPps7xRwGJXIUsBAc0h7xHSNyQzBkhbByWVWiRoKKJsGMMwqXaRj3ODJGNa1iRUUOkfI5cd7wPeSckpkRKwxOyKmb0eCGJme24rrmF/U/VwycaWgWseCUu4l+Me+KpnY2cScZ/e9Bg3vuMaa1XGdxWuNOJ/yRv55b2NdFbkyT0oeuu5b2Al3e3/TpA2udouQAAAB4nG3IWw7CIBBGYX5FbK133YaLmg6jECkQpInu3mjjm+fpy1EzNbVS/zthhjk0FjBYokGLFTqsscEWO+xxwBEnnNWaxpo4DTlIFW2pSsNO+N6n5/aHy62kMXeFrE+T2+LZXao8q3lIEK7Nx1SE9HdmieyDvvogxnlrJRqmyBJMP9aaonFCVkqbqdCtUHYmjkMvRXPKL6Xep1o2rQB4nGPw3sFwIihiIyNjX+QGxp0cDBwMyQUbGVidNjEwMmiBGJu5mBg5ICw+BjCLzWkX0wGgNCeQze60i8EBwmZmcNmowtgRGLHBoSNiI3OKy0Y1EG8XRwMDI4tDR3JIBEhJJBBs5mFi5NHawfi/dQNL70YmBhcADHYj9AAA\") format(\"woff\")}[class^=\"formbuilder-icon-\"]:before,[class*=\" formbuilder-icon-\"]:before{font-family:\"formbuilder-icons\";font-style:normal;font-weight:normal;speak:never;display:inline-block;text-decoration:inherit;width:1em;margin-right:.2em;text-align:center;font-variant:normal;text-transform:none;line-height:1em;margin-left:.2em}.formbuilder-icon-autocomplete:before{content:'\\e800'}.formbuilder-icon-date:before{content:'\\e801'}.formbuilder-icon-checkbox:before{content:'\\e802'}.formbuilder-icon-checkbox-group:before{content:'\\e803'}.formbuilder-icon-radio-group:before{content:'\\e804'}.formbuilder-icon-rich-text:before{content:'\\e805'}.formbuilder-icon-select:before{content:'\\e806'}.formbuilder-icon-textarea:before{content:'\\e807'}.formbuilder-icon-text:before{content:'\\e808'}.formbuilder-icon-pencil:before{content:'\\e809'}.formbuilder-icon-file:before{content:'\\e80a'}.formbuilder-icon-hidden:before{content:'\\e80b'}.formbuilder-icon-cancel:before{content:'\\e80c'}.formbuilder-icon-button:before{content:'\\e80d'}.formbuilder-icon-header:before{content:'\\e80f'}.formbuilder-icon-paragraph:before{content:'\\e810'}.formbuilder-icon-number:before{content:'\\e811'}.formbuilder-icon-copy:before{content:'\\f24d'}.form-wrap.form-builder{position:relative}.form-wrap.form-builder *{box-sizing:border-box}.form-wrap.form-builder button,.form-wrap.form-builder input,.form-wrap.form-builder select,.form-wrap.form-builder textarea{font-family:inherit;font-size:inherit;line-height:inherit}.form-wrap.form-builder input{line-height:normal}.form-wrap.form-builder textarea{overflow:auto}.form-wrap.form-builder button,.form-wrap.form-builder input,.form-wrap.form-builder select,.form-wrap.form-builder textarea{font-family:inherit;font-size:inherit;line-height:inherit}.form-wrap.form-builder .btn-group{position:relative;display:inline-block;vertical-align:middle}.form-wrap.form-builder .btn-group>.btn{position:relative;float:left}.form-wrap.form-builder .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.form-wrap.form-builder .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){border-radius:0}.form-wrap.form-builder .btn-group .btn+.btn,.form-wrap.form-builder .btn-group .btn+.btn-group,.form-wrap.form-builder .btn-group .btn-group+.btn,.form-wrap.form-builder .btn-group .btn-group+.btn-group{margin-left:-1px}.form-wrap.form-builder .btn-group>.btn:last-child:not(:first-child),.form-wrap.form-builder .btn-group>.dropdown-toggle:not(:first-child),.form-wrap.form-builder .btn-group .input-group .form-control:last-child,.form-wrap.form-builder .btn-group .input-group-addon:last-child,.form-wrap.form-builder .btn-group .input-group-btn:first-child>.btn-group:not(:first-child)>.btn,.form-wrap.form-builder .btn-group .input-group-btn:first-child>.btn:not(:first-child),.form-wrap.form-builder .btn-group .input-group-btn:last-child>.btn,.form-wrap.form-builder .btn-group .input-group-btn:last-child>.btn-group>.btn,.form-wrap.form-builder .btn-group .input-group-btn:last-child>.dropdown-toggle{border-top-left-radius:0;border-bottom-left-radius:0}.form-wrap.form-builder .btn-group>.btn.active,.form-wrap.form-builder .btn-group>.btn:active,.form-wrap.form-builder .btn-group>.btn:focus,.form-wrap.form-builder .btn-group>.btn:hover{z-index:2}.form-wrap.form-builder .btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;user-select:none;background-image:none;border-radius:4px}.form-wrap.form-builder .btn.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.form-wrap.form-builder .btn.btn-sm{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.form-wrap.form-builder .btn.btn-xs{padding:1px 5px;font-size:12px;line-height:1.5;border-radius:3px}.form-wrap.form-builder .btn.active,.form-wrap.form-builder .btn.btn-active,.form-wrap.form-builder .btn:active{background-image:none}.form-wrap.form-builder .input-group .form-control:last-child,.form-wrap.form-builder .input-group-addon:last-child,.form-wrap.form-builder .input-group-btn:first-child>.btn-group:not(:first-child)>.btn,.form-wrap.form-builder .input-group-btn:first-child>.btn:not(:first-child),.form-wrap.form-builder .input-group-btn:last-child>.btn,.form-wrap.form-builder .input-group-btn:last-child>.btn-group>.btn,.form-wrap.form-builder .input-group-btn:last-child>.dropdown-toggle{border-top-left-radius:0;border-bottom-left-radius:0}.form-wrap.form-builder .input-group .form-control,.form-wrap.form-builder .input-group-addon,.form-wrap.form-builder .input-group-btn{display:table-cell}.form-wrap.form-builder .input-group-lg>.form-control,.form-wrap.form-builder .input-group-lg>.input-group-addon,.form-wrap.form-builder .input-group-lg>.input-group-btn>.btn{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333}.form-wrap.form-builder .input-group{position:relative;display:table;border-collapse:separate}.form-wrap.form-builder .input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.form-wrap.form-builder .form-control,.form-wrap.form-builder output{font-size:14px;line-height:1.42857143;display:block}.form-wrap.form-builder textarea.form-control{height:auto}.form-wrap.form-builder .form-control{height:34px;display:block;width:100%;padding:6px 12px;font-size:14px;line-height:1.42857143;border-radius:4px}.form-wrap.form-builder .form-control:focus{outline:0;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(102,175,233,0.6)}.form-wrap.form-builder .form-group{margin-left:0px;margin-bottom:15px}.form-wrap.form-builder .btn,.form-wrap.form-builder .form-control{background-image:none}.form-wrap.form-builder .pull-right{float:right}.form-wrap.form-builder .pull-left{float:left}.form-wrap.form-builder .formbuilder-required,.form-wrap.form-builder .required-asterisk{color:#c10000}.form-wrap.form-builder .formbuilder-checkbox-group input[type='checkbox'],.form-wrap.form-builder .formbuilder-checkbox-group input[type='radio'],.form-wrap.form-builder .formbuilder-radio-group input[type='checkbox'],.form-wrap.form-builder .formbuilder-radio-group input[type='radio']{margin:0 4px 0 0}.form-wrap.form-builder .formbuilder-checkbox-inline,.form-wrap.form-builder .formbuilder-radio-inline{margin-right:8px;display:inline-block;vertical-align:middle;padding-left:0}.form-wrap.form-builder .formbuilder-checkbox-inline label input[type='text'],.form-wrap.form-builder .formbuilder-radio-inline label input[type='text']{margin-top:0}.form-wrap.form-builder .formbuilder-checkbox-inline:first-child,.form-wrap.form-builder .formbuilder-radio-inline:first-child{padding-left:0}.form-wrap.form-builder .formbuilder-autocomplete-list{background-color:#fff;display:none;list-style:none;padding:0;border:1px solid #ccc;border-width:0 1px 1px;position:absolute;z-index:20;max-height:200px;overflow-y:auto}.form-wrap.form-builder .formbuilder-autocomplete-list li{display:none;cursor:default;padding:5px;margin:0;transition:background-color 200ms ease-in-out}.form-wrap.form-builder .formbuilder-autocomplete-list li:hover,.form-wrap.form-builder .formbuilder-autocomplete-list li.active-option{background-color:rgba(0,0,0,0.075)}@keyframes PLACEHOLDER{0%{height:1px}100%{height:15px}}.form-wrap.form-builder .cb-wrap{width:26%;transition:transform 250ms}.form-wrap.form-builder .cb-wrap.pull-left .form-actions{float:left}.form-wrap.form-builder .cb-wrap h4{margin-top:0;color:#666}@media (max-width: 481px){.form-wrap.form-builder .cb-wrap{width:64px}.form-wrap.form-builder .cb-wrap h4{display:none}}.form-wrap.form-builder .frmb-control{margin:0;padding:0;border-radius:5px}.form-wrap.form-builder .frmb-control li{cursor:move;list-style:none;margin:0 0 -1px 0;padding:10px;text-align:left;background:#fff;-webkit-user-select:none;user-select:none;white-space:nowrap;text-overflow:ellipsis;overflow:hidden;box-shadow:inset 0 0 0 1px #c5c5c5}.form-wrap.form-builder .frmb-control li .control-icon{width:16px;height:auto;margin-right:10px;margin-left:0.2em;display:inline-block}.form-wrap.form-builder .frmb-control li .control-icon img,.form-wrap.form-builder .frmb-control li .control-icon svg{max-width:100%;height:auto}.form-wrap.form-builder .frmb-control li:first-child{border-radius:5px 5px 0 0;margin-top:0}.form-wrap.form-builder .frmb-control li:last-child{border-radius:0 0 5px 5px}.form-wrap.form-builder .frmb-control li::before{margin-right:10px;font-size:16px}.form-wrap.form-builder .frmb-control li:hover{background-color:#f2f2f2}.form-wrap.form-builder .frmb-control li.ui-sortable-helper{border-radius:5px;transition:box-shadow 250ms;box-shadow:2px 2px 6px 0 #666;border:1px solid #fff}.form-wrap.form-builder .frmb-control li.ui-state-highlight{width:0;overflow:hidden;padding:0;margin:0;border:0 none}.form-wrap.form-builder .frmb-control li.moving{opacity:.6}.form-wrap.form-builder .frmb-control li.formbuilder-separator{background-color:transparent;box-shadow:none;padding:0;cursor:default}.form-wrap.form-builder .frmb-control li.formbuilder-separator hr{margin:10px 0}@media (max-width: 481px){.form-wrap.form-builder .frmb-control li::before{font-size:30px}.form-wrap.form-builder .frmb-control li span{display:none}}.form-wrap.form-builder .frmb-control.sort-enabled li.ui-state-highlight{box-shadow:none;height:0;width:100%;background:radial-gradient(ellipse at center, #545454 0%, rgba(0,0,0,0) 75%);border:0 none;-webkit-clip-path:polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);clip-path:polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);visibility:visible;overflow:hidden;margin:1px 0 3px;animation:PLACEHOLDER 250ms forwards}.form-wrap.form-builder .formbuilder-mobile .form-actions{width:100%}.form-wrap.form-builder .formbuilder-mobile .form-actions button{width:100%;font-size:.85em !important;display:block !important;border-radius:0 !important;margin-top:-1px;margin-left:0 !important}.form-wrap.form-builder .formbuilder-mobile .form-actions button:first-child{border-radius:5px 5px 0 0 !important;margin-top:0 !important;border-bottom:0 none}.form-wrap.form-builder .formbuilder-mobile .form-actions button:last-child{border-radius:0 0 5px 5px !important}.form-wrap.form-builder .form-actions{float:right;margin-top:5px}.form-wrap.form-builder .form-actions button{border:0 none}.form-wrap.form-builder .stage-wrap{position:relative;padding:0;margin:0;width:calc(74% - 5px)}@media (max-width: 481px){.form-wrap.form-builder .stage-wrap{width:calc(100% - 64px)}}.form-wrap.form-builder .stage-wrap.empty{border:3px dashed #ccc;background-color:rgba(255,255,255,0.25)}.form-wrap.form-builder .stage-wrap.empty::after{content:attr(data-content);position:absolute;text-align:center;top:50%;left:0;width:100%;margin-top:-1em}.form-wrap.form-builder .frmb{list-style-type:none;min-height:200px;transition:background-color 500ms ease-in-out}.form-wrap.form-builder .frmb .formbuilder-required{color:#c10000}.form-wrap.form-builder .frmb.removing{overflow:hidden}.form-wrap.form-builder .frmb>li:hover{border-color:#66afe9;outline:0;box-shadow:inset 0 1px 1px rgba(0,0,0,0.1),0 0 8px rgba(102,175,233,0.6)}.form-wrap.form-builder .frmb>li:hover .field-actions{opacity:1}.form-wrap.form-builder .frmb>li:hover li :hover{background:#fefefe}.form-wrap.form-builder .frmb li{position:relative;padding:6px;clear:both;margin-left:0;margin-bottom:3px;background-color:#fff;transition:background-color 250ms ease-in-out, margin-top 400ms}.form-wrap.form-builder .frmb li.hidden-field{background-color:rgba(255,255,255,0.6)}.form-wrap.form-builder .frmb li:first-child{border-top-right-radius:5px;border-top-left-radius:5px}.form-wrap.form-builder .frmb li:first-child .field-actions .btn:last-child{border-radius:0 5px 0 0}.form-wrap.form-builder .frmb li:last-child{border-bottom-right-radius:5px;border-bottom-left-radius:5px}.form-wrap.form-builder .frmb li.no-fields label{font-weight:400}@keyframes PLACEHOLDER{0%{height:0}100%{height:15px}}.form-wrap.form-builder .frmb li.frmb-placeholder,.form-wrap.form-builder .frmb li.ui-state-highlight{height:0;padding:0;background:radial-gradient(ellipse at center, #545454 0%, rgba(0,0,0,0) 75%);border:0 none;-webkit-clip-path:polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);clip-path:polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);visibility:visible;overflow:hidden;margin-bottom:3px;animation:PLACEHOLDER 250ms forwards}.form-wrap.form-builder .frmb li.moving,.form-wrap.form-builder .frmb li.ui-sortable-helper{transition:box-shadow 500ms ease-in-out;box-shadow:2px 2px 6px 0 #666;border:1px solid #fff;border-radius:5px}.form-wrap.form-builder .frmb li.disabled-field{z-index:1;position:relative;overflow:visible}.form-wrap.form-builder .frmb li.disabled-field:hover .frmb-tt{display:inline-block}.form-wrap.form-builder .frmb li.disabled-field [type='checkbox']{float:left;margin-right:10px}.form-wrap.form-builder .frmb li.disabled-field h2{border-bottom:0 none}.form-wrap.form-builder .frmb li.disabled-field label{font-size:12px;font-weight:400;color:#666}.form-wrap.form-builder .frmb li.disabled-field .prev-holder{cursor:default;line-height:28px;padding-left:5px}.form-wrap.form-builder .frmb li .close-field{position:absolute;color:#666;left:50%;bottom:6px;background:#fff;border-top:1px solid #c5c5c5;border-left:1px solid #c5c5c5;border-right:1px solid #c5c5c5;transform:translateX(-50%);padding:0 5px;border-top-right-radius:3px;border-top-left-radius:3px;cursor:pointer;transition:background-color 250ms ease-in-out}.form-wrap.form-builder .frmb li .close-field:hover{text-decoration:none}.form-wrap.form-builder .frmb li.button-field h1,.form-wrap.form-builder .frmb li.button-field h2,.form-wrap.form-builder .frmb li.button-field h3,.form-wrap.form-builder .frmb li.button-field p,.form-wrap.form-builder .frmb li.button-field canvas,.form-wrap.form-builder .frmb li.button-field output,.form-wrap.form-builder .frmb li.button-field address,.form-wrap.form-builder .frmb li.button-field blockquote,.form-wrap.form-builder .frmb li.button-field .prev-holder,.form-wrap.form-builder .frmb li.header-field h1,.form-wrap.form-builder .frmb li.header-field h2,.form-wrap.form-builder .frmb li.header-field h3,.form-wrap.form-builder .frmb li.header-field p,.form-wrap.form-builder .frmb li.header-field canvas,.form-wrap.form-builder .frmb li.header-field output,.form-wrap.form-builder .frmb li.header-field address,.form-wrap.form-builder .frmb li.header-field blockquote,.form-wrap.form-builder .frmb li.header-field .prev-holder,.form-wrap.form-builder .frmb li.paragraph-field h1,.form-wrap.form-builder .frmb li.paragraph-field h2,.form-wrap.form-builder .frmb li.paragraph-field h3,.form-wrap.form-builder .frmb li.paragraph-field p,.form-wrap.form-builder .frmb li.paragraph-field canvas,.form-wrap.form-builder .frmb li.paragraph-field output,.form-wrap.form-builder .frmb li.paragraph-field address,.form-wrap.form-builder .frmb li.paragraph-field blockquote,.form-wrap.form-builder .frmb li.paragraph-field .prev-holder{margin:0}.form-wrap.form-builder .frmb li.button-field .field-label,.form-wrap.form-builder .frmb li.header-field .field-label,.form-wrap.form-builder .frmb li.paragraph-field .field-label{display:none}.form-wrap.form-builder .frmb li.button-field.editing .field-label,.form-wrap.form-builder .frmb li.header-field.editing .field-label,.form-wrap.form-builder .frmb li.paragraph-field.editing .field-label{display:block}.form-wrap.form-builder .frmb li.paragraph-field .fld-label{min-height:150px;overflow-y:auto}.form-wrap.form-builder .frmb li.checkbox-field .field-label{display:none}.form-wrap.form-builder .frmb li.deleting,.form-wrap.form-builder .frmb li.delete:hover,.form-wrap.form-builder .frmb li:hover li.delete:hover{background-color:#fdd}.form-wrap.form-builder .frmb li.deleting .close-field,.form-wrap.form-builder .frmb li.delete:hover .close-field,.form-wrap.form-builder .frmb li:hover li.delete:hover .close-field{background-color:#fdd}.form-wrap.form-builder .frmb li.deleting{z-index:20;pointer-events:none}.form-wrap.form-builder .frmb.disabled-field{padding:0 5px}.form-wrap.form-builder .frmb.disabled-field :hover{border-color:transparent}.form-wrap.form-builder .frmb.disabled-field .form-element{float:none;margin-bottom:10px;overflow:visible;padding:5px 0;position:relative}.form-wrap.form-builder .frmb .frm-holder{display:none}.form-wrap.form-builder .frmb .tooltip{left:20px}.form-wrap.form-builder .frmb .prev-holder{display:block}.form-wrap.form-builder .frmb .prev-holder .form-group{margin:0}.form-wrap.form-builder .frmb .prev-holder .ql-editor{min-height:125px}.form-wrap.form-builder .frmb .prev-holder .form-group>label:not([class='formbuilder-checkbox-label']){display:none}.form-wrap.form-builder .frmb .prev-holder select,.form-wrap.form-builder .frmb .prev-holder input[type='text'],.form-wrap.form-builder .frmb .prev-holder textarea,.form-wrap.form-builder .frmb .prev-holder input[type='number']{background-color:#fff;border:1px solid #ccc;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.form-wrap.form-builder .frmb .prev-holder input[type='color']{width:60px;padding:2px;display:inline-block}.form-wrap.form-builder .frmb .prev-holder input[type='date']{width:auto}.form-wrap.form-builder .frmb .prev-holder select[multiple]{height:auto}.form-wrap.form-builder .frmb .prev-holder label{font-weight:normal}.form-wrap.form-builder .frmb .prev-holder input[type='number']{width:auto}.form-wrap.form-builder .frmb .prev-holder input[type='color']{width:60px;padding:2px;display:inline-block}.form-wrap.form-builder .frmb .required-asterisk{display:none}.form-wrap.form-builder .frmb .field-label,.form-wrap.form-builder .frmb .legend{color:#666;margin-bottom:5px;line-height:27px;font-size:16px;font-weight:normal}.form-wrap.form-builder .frmb .disabled-field .field-label{display:block}.form-wrap.form-builder .frmb .other-option:checked+label input{display:inline-block}.form-wrap.form-builder .frmb .other-val{margin-left:5px;display:none}.form-wrap.form-builder .frmb .field-actions{position:absolute;top:0;right:0;opacity:0}.form-wrap.form-builder .frmb .field-actions a::before{margin:0}.form-wrap.form-builder .frmb .field-actions a:hover{text-decoration:none;color:#000}.form-wrap.form-builder .frmb .field-actions .btn{display:inline-block;width:32px;height:32px;padding:0 6px;border-radius:0;border-color:#c5c5c5;background-color:#fff;color:#c5c5c5;line-height:32px;font-size:16px;border-width:0 0 1px 1px}.form-wrap.form-builder .frmb .field-actions .btn:first-child{border-bottom-left-radius:5px}.form-wrap.form-builder .frmb .field-actions .toggle-form:hover{background-color:#65aac6;color:#fff}.form-wrap.form-builder .frmb .field-actions .copy-button:hover{background-color:#6fc665;color:#fff}.form-wrap.form-builder .frmb .field-actions .del-button:hover{background-color:#c66865;color:#fff}.form-wrap.form-builder .frmb .option-actions{text-align:right;margin-top:10px;width:100%;margin-left:2%}.form-wrap.form-builder .frmb .option-actions button,.form-wrap.form-builder .frmb .option-actions a{background:#fff;padding:5px 10px;border:1px solid #c5c5c5;font-size:14px;border-radius:5px;cursor:default}.form-wrap.form-builder .frmb .sortable-options-wrap{width:81.33333333%;display:inline-block}.form-wrap.form-builder .frmb .sortable-options-wrap label{font-weight:normal}@media (max-width: 481px){.form-wrap.form-builder .frmb .sortable-options-wrap{display:block;width:100%}}.form-wrap.form-builder .frmb .radio-group-field .sortable-options li:nth-child(2) .remove{display:none}.form-wrap.form-builder .frmb .sortable-options{display:inline-block;width:100%;margin-left:2%;background:#c5c5c5;margin-bottom:0;border-radius:5px;list-style:none;padding:0}.form-wrap.form-builder .frmb .sortable-options>li{display:flex;cursor:move;margin:1px;padding-right:28px}.form-wrap.form-builder .frmb .sortable-options>li:nth-child(1) .remove{display:none}.form-wrap.form-builder .frmb .sortable-options>li .remove{position:absolute;opacity:1;right:8px;height:18px;width:18px;top:14px;font-size:12px;padding:0;color:#c10000}.form-wrap.form-builder .frmb .sortable-options>li .remove::before{margin:0}.form-wrap.form-builder .frmb .sortable-options>li .remove:hover{background-color:#c10000;text-decoration:none;color:#fff}.form-wrap.form-builder .frmb .sortable-options .option-selected{margin:0;width:5%}.form-wrap.form-builder .frmb .sortable-options input[type='text']{width:calc(44.5% - 17px);margin:0 3px;float:none}.form-wrap.form-builder .frmb .form-field .form-group{width:100%;clear:left;float:none}.form-wrap.form-builder .frmb .col-md-6 .form-elements,.form-wrap.form-builder .frmb .col-md-8 .form-elements{width:100%}.form-wrap.form-builder .frmb .field-options .add-area .add{clear:both}.form-wrap.form-builder .frmb .style-wrap button.selected{border:1px solid #000;margin-top:0;margin-right:1px;box-shadow:0 0 0 1px #fff inset;padding:1px 5px}.form-wrap.form-builder .frmb .form-elements{padding:10px 5px;background:#f7f7f7;border-radius:3px;margin:0;border:1px solid #c5c5c5}.form-wrap.form-builder .frmb .form-elements .input-wrap{width:81.33333333%;margin-left:2%;float:left}.form-wrap.form-builder .frmb .form-elements .input-wrap>input[type='checkbox']{margin-top:8px}.form-wrap.form-builder .frmb .form-elements .btn-group{margin-left:2%}.form-wrap.form-builder .frmb .form-elements .add{clear:both}.form-wrap.form-builder .frmb .form-elements [contenteditable],.form-wrap.form-builder .frmb .form-elements select[multiple]{height:auto}.form-wrap.form-builder .frmb .form-elements [contenteditable].form-control,.form-wrap.form-builder .frmb .form-elements input[type='text'],.form-wrap.form-builder .frmb .form-elements input[type='number'],.form-wrap.form-builder .frmb .form-elements input[type='date'],.form-wrap.form-builder .frmb .form-elements input[type='color'],.form-wrap.form-builder .frmb .form-elements textarea,.form-wrap.form-builder .frmb .form-elements select{transition:background 250ms ease-in-out;padding:6px 12px;border:1px solid #c5c5c5;background-color:#fff}@media (max-width: 481px){.form-wrap.form-builder .frmb .form-elements .input-wrap{width:100%;margin-left:0;float:none}}.form-wrap.form-builder .frmb .form-elements input[type='number']{width:auto}.form-wrap.form-builder .frmb .form-elements .btn-group{margin-left:2%}.col-md-6 .form-wrap.form-builder .frmb .form-elements .false-label,.col-md-8 .form-wrap.form-builder .frmb .form-elements .false-label,.col-md-6 .form-wrap.form-builder .frmb .form-elements label,.col-md-8 .form-wrap.form-builder .frmb .form-elements label{display:block}.form-wrap.form-builder .frmb .form-elements .false-label:first-child,.form-wrap.form-builder .frmb .form-elements label:first-child{width:16.66666667%;padding-top:7px;margin-bottom:0;text-align:right;font-weight:700;float:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;text-transform:capitalize}@media (max-width: 481px){.form-wrap.form-builder .frmb .form-elements .false-label:first-child,.form-wrap.form-builder .frmb .form-elements label:first-child{display:block;width:auto;float:none;text-align:left}.form-wrap.form-builder .frmb .form-elements .false-label:first-child.empty-label,.form-wrap.form-builder .frmb .form-elements label:first-child.empty-label{display:none}}.form-wrap.form-builder .frmb .form-elements .false-label.multiple,.form-wrap.form-builder .frmb .form-elements .false-label.required-label,.form-wrap.form-builder .frmb .form-elements .false-label.toggle-label,.form-wrap.form-builder .frmb .form-elements .false-label.roles-label,.form-wrap.form-builder .frmb .form-elements .false-label.other-label,.form-wrap.form-builder .frmb .form-elements label.multiple,.form-wrap.form-builder .frmb .form-elements label.required-label,.form-wrap.form-builder .frmb .form-elements label.toggle-label,.form-wrap.form-builder .frmb .form-elements label.roles-label,.form-wrap.form-builder .frmb .form-elements label.other-label{text-align:left;float:none;margin-bottom:-3px;font-weight:400;width:calc(81.3333% - 23px)}.form-wrap.form-builder .frmb .form-elements input.error{border:1px solid #c10000}.form-wrap.form-builder .frmb .form-elements input.fld-maxlength{width:75px}.form-wrap.form-builder .frmb .form-elements input.field-error{background:#fefefe;border:1px solid #c5c5c5}.form-wrap.form-builder .frmb .form-elements label em{display:block;font-weight:400;font-size:0.75em}.form-wrap.form-builder .frmb .form-elements label.maxlength-label{line-height:1em}.form-wrap.form-builder .frmb .form-elements .available-roles{display:none;padding:10px;margin:10px 0;background:#e6e6e6;box-shadow:inset 0 0 2px 0 #b3b3b3}@media (max-width: 481px){.form-wrap.form-builder .frmb .form-elements .available-roles{margin-left:0}}.form-wrap.form-builder .frmb .form-elements .available-roles label{font-weight:400;width:auto;float:none;display:inline}.form-wrap.form-builder .frmb .form-elements .available-roles input{display:inline;top:auto}.form-wrap.form-builder .autocomplete-field .sortable-options .option-selected{display:none}.form-wrap.form-builder .formbuilder-mobile .field-actions{opacity:1}.form-wrap.form-builder *[tooltip]{position:relative}.form-wrap.form-builder *[tooltip]:hover:after{background:rgba(0,0,0,0.9);border-radius:5px 5px 5px 0;bottom:23px;color:#fff;content:attr(tooltip);padding:10px 5px;position:absolute;z-index:98;left:2px;width:230px;text-shadow:none;font-size:12px;line-height:1.5em;cursor:default}.form-wrap.form-builder *[tooltip]:hover:before{border:solid;border-color:#222 transparent;border-width:6px 6px 0;bottom:17px;content:'';left:2px;position:absolute;z-index:99;cursor:default}.form-wrap.form-builder .tooltip-element{visibility:visible;color:#fff;background:#000;width:16px;height:16px;border-radius:8px;display:inline-block;text-align:center;line-height:16px;margin:0 5px;font-size:12px;cursor:default}.form-wrap.form-builder .kc-toggle{padding-left:0 !important}.form-wrap.form-builder .kc-toggle span{position:relative;width:48px;height:24px;background:#e6e6e6;display:inline-block;border-radius:4px;border:1px solid #ccc;padding:2px;overflow:hidden;float:left;margin-right:5px;will-change:transform}.form-wrap.form-builder .kc-toggle span::after,.form-wrap.form-builder .kc-toggle span::before{position:absolute;display:inline-block;top:0}.form-wrap.form-builder .kc-toggle span::after{position:relative;content:'';width:50%;height:100%;left:0;border-radius:3px;background:linear-gradient(to bottom, #fff 0%, #ccc 100%);border:1px solid #999;transition:transform 100ms;transform:translateX(0)}.form-wrap.form-builder .kc-toggle span::before{border-radius:4px;top:2px;left:2px;content:'';width:calc(100% - 4px);height:18px;box-shadow:0 0 1px 1px #b3b3b3 inset;background-color:transparent}.form-wrap.form-builder .kc-toggle input{height:0;overflow:hidden;width:0;opacity:0;pointer-events:none;margin:0}.form-wrap.form-builder .kc-toggle input:checked+span::after{transform:translateX(100%)}.form-wrap.form-builder .kc-toggle input:checked+span::before{background-color:#6fc665}.form-wrap.form-builder::after{content:'';display:table;clear:both}.cb-wrap,.stage-wrap{vertical-align:top}.cb-wrap.pull-right,.stage-wrap.pull-right{float:right}.cb-wrap.pull-left,.stage-wrap.pull-left{float:left}.form-elements,.form-group,.multi-row span,textarea{display:block}.form-elements::after,.form-group::after{content:'.';display:block;height:0;clear:both;visibility:hidden}.form-elements .field-options div:hover,.frmb .legend,.frmb .prev-holder{cursor:move}.frmb-tt{display:none;position:absolute;top:0;left:0;border:1px solid #262626;background-color:#666;border-radius:5px;padding:5px;color:#fff;z-index:20;text-align:left;font-size:12px;pointer-events:none}.frmb-tt::before{border-color:#262626 transparent;bottom:-11px}.frmb-tt::before,.frmb-tt::after{content:'';position:absolute;border-style:solid;border-width:10px 10px 0;border-color:#666 transparent;display:block;width:0;z-index:1;margin-left:-10px;bottom:-10px;left:20px}.frmb-tt a{text-decoration:underline;color:#fff}.frmb li:hover .del-button,.frmb li:hover .toggle-form,.formbuilder-mobile .frmb li .del-button,.formbuilder-mobile .frmb li .toggle-form{opacity:1}.frmb-xml .ui-dialog-content{white-space:pre-wrap;word-wrap:break-word;font-size:12px;padding:0 30px;margin-top:0}.toggle-form{opacity:0}.toggle-form:hover{border-color:#ccc}.toggle-form::before{margin:0}.formb-field-vars .copy-var{display:inline-block;width:24px;height:24px;background:#b3b3b3;text-indent:-9999px}.ui-button .ui-button-text{line-height:0}.form-builder-overlay{position:fixed;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,0.5);display:none;z-index:10}.form-builder-overlay.visible{display:block}.form-builder-dialog{position:absolute;border-radius:5px;background:#fff;z-index:20;transform:translate(-50%, -50%);top:0;left:0;padding:10px;box-shadow:0 3px 10px #000;min-width:166px;max-height:80%;overflow-y:scroll}.form-builder-dialog h3{margin-top:0}.form-builder-dialog.data-dialog{width:65%;background-color:#23241f}.form-builder-dialog.data-dialog pre{background:none;border:0 none;box-shadow:none;margin:0;color:#f2f2f2}.form-builder-dialog.positioned{transform:translate(-50%, -100%)}.form-builder-dialog.positioned .button-wrap::before{content:'';width:0;height:0;border-left:15px solid transparent;border-right:15px solid transparent;border-top:10px solid #fff;position:absolute;left:50%;top:100%;transform:translate(-50%, 10px)}.form-builder-dialog .button-wrap{position:relative;margin-top:10px;text-align:right;clear:both}.form-builder-dialog .button-wrap .btn{margin-left:10px}\n", ""]),
        t.default = n
    }
    , function(e, t, r) {
        var o = r(11)
          , n = r(19)
          , i = r(22)
          , l = Math.max
          , a = Math.min;
        e.exports = function(e, t, r) {
            var s, d, c, u, f, p, m = 0, b = !1, h = !1, g = !0;
            if ("function" != typeof e)
                throw new TypeError("Expected a function");
            function y(t) {
                var r = s
                  , o = d;
                return s = d = void 0,
                m = t,
                u = e.apply(o, r)
            }
            function w(e) {
                return m = e,
                f = setTimeout(x, t),
                b ? y(e) : u
            }
            function v(e) {
                var r = e - p;
                return void 0 === p || r >= t || r < 0 || h && e - m >= c
            }
            function x() {
                var e = n();
                if (v(e))
                    return O(e);
                f = setTimeout(x, function(e) {
                    var r = t - (e - p);
                    return h ? a(r, c - (e - m)) : r
                }(e))
            }
            function O(e) {
                return f = void 0,
                g && s ? y(e) : (s = d = void 0,
                u)
            }
            function A() {
                var e = n()
                  , r = v(e);
                if (s = arguments,
                d = this,
                p = e,
                r) {
                    if (void 0 === f)
                        return w(p);
                    if (h)
                        return clearTimeout(f),
                        f = setTimeout(x, t),
                        y(p)
                }
                return void 0 === f && (f = setTimeout(x, t)),
                u
            }
            return t = i(t) || 0,
            o(r) && (b = !!r.leading,
            c = (h = "maxWait"in r) ? l(i(r.maxWait) || 0, t) : c,
            g = "trailing"in r ? !!r.trailing : g),
            A.cancel = function() {
                void 0 !== f && clearTimeout(f),
                m = 0,
                s = p = d = f = void 0
            }
            ,
            A.flush = function() {
                return void 0 === f ? u : O(n())
            }
            ,
            A
        }
    }
    , function(e, t, r) {
        var o = r(13);
        e.exports = function() {
            return o.Date.now()
        }
    }
    , function(e, t, r) {
        (function(t) {
            var r = "object" == typeof t && t && t.Object === Object && t;
            e.exports = r
        }
        ).call(this, r(21))
    }
    , function(e, t) {
        var r;
        r = function() {
            return this
        }();
        try {
            r = r || new Function("return this")()
        } catch (e) {
            "object" == typeof window && (r = window)
        }
        e.exports = r
    }
    , function(e, t, r) {
        var o = r(23)
          , n = r(11)
          , i = r(25)
          , l = /^[-+]0x[0-9a-f]+$/i
          , a = /^0b[01]+$/i
          , s = /^0o[0-7]+$/i
          , d = parseInt;
        e.exports = function(e) {
            if ("number" == typeof e)
                return e;
            if (i(e))
                return NaN;
            if (n(e)) {
                var t = "function" == typeof e.valueOf ? e.valueOf() : e;
                e = n(t) ? t + "" : t
            }
            if ("string" != typeof e)
                return 0 === e ? e : +e;
            e = o(e);
            var r = a.test(e);
            return r || s.test(e) ? d(e.slice(2), r ? 2 : 8) : l.test(e) ? NaN : +e
        }
    }
    , function(e, t, r) {
        var o = r(24)
          , n = /^\s+/;
        e.exports = function(e) {
            return e ? e.slice(0, o(e) + 1).replace(n, "") : e
        }
    }
    , function(e, t) {
        var r = /\s/;
        e.exports = function(e) {
            for (var t = e.length; t-- && r.test(e.charAt(t)); )
                ;
            return t
        }
    }
    , function(e, t, r) {
        var o = r(26)
          , n = r(29);
        e.exports = function(e) {
            return "symbol" == typeof e || n(e) && "[object Symbol]" == o(e)
        }
    }
    , function(e, t, r) {
        var o = r(14)
          , n = r(27)
          , i = r(28)
          , l = o ? o.toStringTag : void 0;
        e.exports = function(e) {
            return null == e ? void 0 === e ? "[object Undefined]" : "[object Null]" : l && l in Object(e) ? n(e) : i(e)
        }
    }
    , function(e, t, r) {
        var o = r(14)
          , n = Object.prototype
          , i = n.hasOwnProperty
          , l = n.toString
          , a = o ? o.toStringTag : void 0;
        e.exports = function(e) {
            var t = i.call(e, a)
              , r = e[a];
            try {
                e[a] = void 0;
                var o = !0
            } catch (e) {}
            var n = l.call(e);
            return o && (t ? e[a] = r : delete e[a]),
            n
        }
    }
    , function(e, t) {
        var r = Object.prototype.toString;
        e.exports = function(e) {
            return r.call(e)
        }
    }
    , function(e, t) {
        e.exports = function(e) {
            return null != e && "object" == typeof e
        }
    }
    , , , , , , function(t, r, o) {
        o.r(r);
        o(16);
        var n = o(15)
          , i = o.n(n)
          , l = o(4);
        const a = {};
        class s {
            constructor(e) {
                this.formData = {},
                this.formID = e,
                this.layout = "",
                a[e] = this
            }
        }
        var d = o(2)
          , c = o.n(d)
          , u = o(5)
          , f = o(10)
          , p = o(0)
          , m = o(3)
          , b = o(1)
          , h = o(6);
        function g(e, t) {
            if (null == e)
                return {};
            var r, o, n = function(e, t) {
                if (null == e)
                    return {};
                var r, o, n = {}, i = Object.keys(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || (n[r] = e[r]);
                return n
            }(e, t);
            if (Object.getOwnPropertySymbols) {
                var i = Object.getOwnPropertySymbols(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || Object.prototype.propertyIsEnumerable.call(e, r) && (n[r] = e[r])
            }
            return n
        }
        class y {
            constructor(e, t, r) {
                this.data = a[e],
                this.d = l.d[e],
                this.doCancel = !1,
                this.layout = t,
                this.handleKeyDown = this.handleKeyDown.bind(this),
                this.formBuilder = r
            }
            startMoving(e, t) {
                t.item.show().addClass("moving"),
                this.doCancel = !0,
                this.from = t.item.parent()
            }
            stopMoving(t, r) {
                r.item.removeClass("moving"),
                this.doCancel && (r.sender && e(r.sender).sortable("cancel"),
                this.from.sortable("cancel")),
                this.save(),
                this.doCancel = !1
            }
            beforeStop(e, t) {
                const r = this
                  , o = m.a.opts
                  , n = r.d.stage.childNodes.length - 1
                  , i = [];
                r.stopIndex = t.placeholder.index() - 1,
                !o.sortableControls && t.item.parent().hasClass("frmb-control") && i.push(!0),
                o.prepend && i.push(0 === r.stopIndex),
                o.append && i.push(r.stopIndex + 1 === n),
                r.doCancel = i.some(e=>!0 === e)
            }
            getTypes(t) {
                const r = {
                    type: t.attr("type")
                }
                  , o = e(".fld-subtype", t).val();
                return o !== r.type && (r.subtype = o),
                r
            }
            fieldOptionData(t) {
                const r = []
                  , o = e(".sortable-options li", t);
                return o.each(e=>{
                    const t = o[e]
                      , n = t.querySelectorAll("input[type=text], input[type=number], select")
                      , i = t.querySelectorAll("input[type=checkbox], input[type=radio]")
                      , l = {};
                    Object(p.i)(n, e=>{
                        const t = n[e]
                          , r = t.dataset.attr;
                        l[r] = t.value
                    }
                    ),
                    Object(p.i)(i, e=>{
                        const t = i[e]
                          , r = t.getAttribute("data-attr");
                        l[r] = t.checked
                    }
                    ),
                    r.push(l)
                }
                ),
                r
            }
            xmlSave(e) {
                const t = this.prepData(e)
                  , r = new XMLSerializer
                  , o = ["<fields>"];
                t.forEach(e=>{
                    const {values: t} = e
                      , r = g(e, ["values"]);
                    let n = [`<field ${Object(p.C)(r)}>`];
                    if (l.e.includes(e.type)) {
                        const e = t.map(e=>Object(p.q)("option", e.label, e).outerHTML);
                        n = n.concat(e)
                    }
                    n.push("</field>"),
                    o.push(n)
                }
                ),
                o.push("</fields>");
                const n = Object(p.q)("form-template", Object(p.h)(o).join(""));
                return r.serializeToString(n)
            }
            prepData(t) {
                const r = []
                  , o = this.d
                  , n = this;
                return 0 !== t.childNodes.length && Object(p.i)(t.childNodes, (function(t, i) {
                    const l = e(i);
                    if (!l.hasClass("disabled-field")) {
                        let t = n.getTypes(l);
                        const a = e(".roles-field:checked", i)
                          , s = a.map(e=>a[e].value).get();
                        if (t = Object.assign({}, t, n.getAttrVals(i)),
                        t.subtype)
                            if ("quill" === t.subtype) {
                                const e = t.name + "-preview";
                                if (window.fbEditors.quill[e]) {
                                    const r = window.fbEditors.quill[e].instance.getContents();
                                    t.value = window.JSON.stringify(r.ops)
                                }
                            } else if ("tinymce" === t.subtype && window.tinymce) {
                                const e = t.name + "-preview";
                                if (window.tinymce.editors[e]) {
                                    const r = window.tinymce.editors[e];
                                    t.value = r.getContent()
                                }
                            }
                        if (s.length && (t.role = s.join(",")),
                        t.className = t.className || t.class,
                        t.className) {
                            const e = /(?:^|\s)btn-(.*?)(?:\s|$)/g.exec(t.className);
                            e && (t.style = e[1])
                        }
                        t = Object(p.A)(t);
                        t.type && t.type.match(o.optionFieldsRegEx) && (t.values = n.fieldOptionData(l)),
                        r.push(t)
                    }
                }
                )),
                r
            }
            getData(e) {
                const t = this.data;
                if (e || (e = m.a.opts.formData),
                !e)
                    return !1;
                const r = {
                    xml: e=>Array.isArray(e) ? e : Object(p.t)(e),
                    json: e=>"string" == typeof e ? window.JSON.parse(e) : e
                };
                return t.formData = r[m.a.opts.dataType](e) || [],
                t.formData
            }
            save(e) {
                const t = this
                  , r = this.data
                  , o = this.d.stage
                  , n = {
                    xml: e=>t.xmlSave(o, e),
                    json: e=>window.JSON.stringify(t.prepData(o), null, e && "  ")
                };
                return r.formData = n[m.a.opts.dataType](e),
                document.dispatchEvent(u.a.formSaved),
                r.formData
            }
            incrementId(e) {
                const t = e.lastIndexOf("-")
                  , r = parseInt(e.substring(t + 1)) + 1;
                return `${e.substring(0, t)}-${r}`
            }
            getAttrVals(t) {
                const r = Object.create(null)
                  , o = t.querySelectorAll('[class*="fld-"]');
                return Object(p.i)(o, t=>{
                    const n = o[t]
                      , i = Object(p.c)(n.getAttribute("name"))
                      , l = [[n.attributes.contenteditable, ()=>"xml" === m.a.opts.dataType ? Object(p.g)(n.innerHTML) : n.innerHTML], ["checkbox" === n.type, ()=>n.checked], ["number" === n.type && "" !== n.value, ()=>Number(n.value)], [n.attributes.multiple, ()=>e(n).val()], [!0, ()=>n.value]].find(([e])=>!!e)[1]();
                    r[i] = l
                }
                ),
                r
            }
            updatePreview(t) {
                const r = this.d
                  , o = t.attr("class")
                  , n = t[0];
                if (o.includes("input-control"))
                    return;
                const i = t.attr("type")
                  , a = e(".prev-holder", n);
                let s = Object.assign({}, this.getAttrVals(n), {
                    type: i
                });
                i.match(r.optionFieldsRegEx) && (s.values = [],
                s.multiple = e('[name="multiple"]', n).is(":checked"),
                e(".sortable-options li", n).each((function(t, r) {
                    const o = {
                        selected: e(".option-selected", r).is(":checked"),
                        value: e(".option-value", r).val(),
                        label: e(".option-label", r).val()
                    };
                    s.values.push(o)
                }
                ))),
                s = Object(p.A)(s, !0),
                s.className = this.classNames(n, s),
                t.data("fieldData", s);
                const d = h.a.lookup(s.type)
                  , c = d ? d.class : b.a.getClass(s.type, s.subtype)
                  , f = this.layout.build(c, s);
                Object(l.b)(a[0]),
                a[0].appendChild(f),
                f.dispatchEvent(u.a.fieldRendered)
            }
            disabledTT(e) {
                const t = e.querySelectorAll(".disabled-field");
                Object(p.i)(t, e=>{
                    const r = t[e]
                      , o = c.a.get("fieldNonEditable");
                    if (o) {
                        const e = Object(p.q)("p", o, {
                            className: "frmb-tt"
                        });
                        r.appendChild(e),
                        r.addEventListener("mousemove", t=>((e,t)=>{
                            const r = t.field.getBoundingClientRect()
                              , o = e.clientX - r.left - 21
                              , n = e.clientY - r.top - t.tt.offsetHeight - 12;
                            t.tt.style.transform = `translate(${o}px, ${n}px)`
                        }
                        )(t, {
                            tt: e,
                            field: r
                        }))
                    }
                }
                )
            }
            classNames(t, r) {
                const o = t.querySelector(".fld-className")
                  , n = t.querySelector(".btn-style")
                  , i = n && n.value;
                if (!o)
                    return;
                const {type: l} = r
                  , a = o.multiple ? e(o).val() : o.value.trim().split(" ")
                  , s = {
                    button: "btn",
                    submit: "btn"
                }[l];
                if (s && i) {
                    for (let e = 0; e < a.length; e++) {
                        const t = new RegExp(`^${s}-.*`,"g");
                        a[e].match(t) ? a.splice(e, 1, s + "-" + i) : a.push(s + "-" + i)
                    }
                    a.push(s)
                }
                const d = Object(p.B)(a).join(" ").trim();
                return o.value = d,
                d
            }
            closeConfirm(e, t) {
                e || (e = document.getElementsByClassName("form-builder-overlay")[0]),
                e && Object(l.f)(e),
                t || (t = document.getElementsByClassName("form-builder-dialog")[0]),
                t && Object(l.f)(t),
                document.removeEventListener("keydown", this.handleKeyDown, !1),
                document.dispatchEvent(u.a.modalClosed)
            }
            handleKeyDown(e) {
                27 === (e.keyCode || e.which) && (e.preventDefault(),
                this.closeConfirm.call(this))
            }
            editorLayout(e) {
                return {
                    left: {
                        stage: "pull-right",
                        controls: "pull-left"
                    },
                    right: {
                        stage: "pull-left",
                        controls: "pull-right"
                    }
                }[e] || ""
            }
            showOverlay() {
                const e = Object(p.q)("div", null, {
                    className: "form-builder-overlay"
                });
                return document.body.appendChild(e),
                e.classList.add("visible"),
                e.addEventListener("click", ({target: e})=>this.closeConfirm(e), !1),
                document.addEventListener("keydown", this.handleKeyDown, !1),
                e
            }
            confirm(e, t, r=!1, o="") {
                const n = this
                  , i = c.a.current
                  , l = n.showOverlay()
                  , a = Object(p.q)("button", i.yes, {
                    className: "yes btn btn-success btn-sm"
                })
                  , s = Object(p.q)("button", i.no, {
                    className: "no btn btn-danger btn-sm"
                });
                s.onclick = function() {
                    n.closeConfirm(l)
                }
                ,
                a.onclick = function() {
                    t(),
                    n.closeConfirm(l)
                }
                ;
                const d = Object(p.q)("div", [s, a], {
                    className: "button-wrap"
                });
                o = "form-builder-dialog " + o;
                const u = Object(p.q)("div", [e, d], {
                    className: o
                });
                if (r)
                    u.classList.add("positioned");
                else {
                    const e = document.documentElement;
                    r = {
                        pageX: Math.max(e.clientWidth, window.innerWidth || 0) / 2,
                        pageY: Math.max(e.clientHeight, window.innerHeight || 0) / 2
                    },
                    u.style.position = "fixed"
                }
                return u.style.left = r.pageX + "px",
                u.style.top = r.pageY + "px",
                document.body.appendChild(u),
                a.focus(),
                u
            }
            dialog(e, t=!1, r="") {
                const o = document.documentElement.clientWidth
                  , n = document.documentElement.clientHeight;
                this.showOverlay(),
                r = "form-builder-dialog " + r;
                const i = Object(p.q)("div", e, {
                    className: r
                });
                return t ? i.classList.add("positioned") : (t = {
                    pageX: Math.max(o, window.innerWidth || 0) / 2,
                    pageY: Math.max(n, window.innerHeight || 0) / 2
                },
                i.style.position = "fixed"),
                i.style.left = t.pageX + "px",
                i.style.top = t.pageY + "px",
                document.body.appendChild(i),
                document.dispatchEvent(u.a.modalOpened),
                -1 !== r.indexOf("data-dialog") && document.dispatchEvent(u.a.viewData),
                i
            }
            confirmRemoveAll(t) {
                const r = this
                  , o = t.target.id.match(/frmb-\d{13}/)[0]
                  , n = document.getElementById(o)
                  , i = c.a.current
                  , l = e("li.form-field", n)
                  , a = t.target.getBoundingClientRect()
                  , s = document.body.getBoundingClientRect()
                  , d = {
                    pageX: a.left + a.width / 2,
                    pageY: a.top - s.top - 12
                };
                l.length ? r.confirm(i.clearAllMessage, ()=>{
                    r.removeAllFields.call(r, n),
                    m.a.opts.persistDefaultFields && m.a.opts.defaultFields ? this.addDefaultFields() : m.a.opts.notify.success(i.allFieldsRemoved),
                    m.a.opts.onClearAll()
                }
                , d) : r.dialog(i.noFieldsToClear, d)
            }
            addDefaultFields() {
                m.a.opts.defaultFields.forEach(e=>this.formBuilder.prepFieldVars(e)),
                this.d.stage.classList.remove("empty")
            }
            removeAllFields(e) {
                const t = c.a.current
                  , r = m.a.opts
                  , o = [];
                if (!e.querySelectorAll("li.form-field").length)
                    return !1;
                r.prepend && o.push(!0),
                r.append && o.push(!0),
                o.some(Boolean) || (e.classList.add("empty"),
                e.dataset.content = t.getStarted),
                this.emptyStage(e)
            }
            emptyStage(e) {
                Object(l.b)(e).classList.remove("removing"),
                this.save()
            }
            setFieldOrder(t) {
                if (!m.a.opts.sortableControls)
                    return !1;
                const {sessionStorage: r, JSON: o} = window
                  , n = [];
                return t.children().each((t,r)=>{
                    const o = e(r).data("type");
                    o && n.push(o)
                }
                ),
                r && r.setItem("fieldOrder", o.stringify(n)),
                n
            }
            closeAllEdit() {
                const t = e("> li.editing", this.d.stage)
                  , r = e(".toggle-form", this.d.stage)
                  , o = e(".frm-holder", t);
                r.removeClass("open"),
                t.removeClass("editing"),
                e(".prev-holder", t).show(),
                o.hide()
            }
            toggleEdit(t, r=!0) {
                const o = document.getElementById(t);
                if (!o)
                    return o;
                const n = e(".frm-holder", o)
                  , i = e(".prev-holder", o);
                return o.classList.toggle("editing"),
                e(".toggle-form", o).toggleClass("open"),
                r ? (i.slideToggle(250),
                n.slideToggle(250)) : (i.toggle(),
                n.toggle()),
                this.updatePreview(e(o)),
                o.classList.contains("editing") ? (this.formBuilder.currentEditPanel = n[0],
                m.a.opts.onOpenFieldEdit(n[0]),
                document.dispatchEvent(u.a.fieldEditOpened)) : (m.a.opts.onCloseFieldEdit(n[0]),
                document.dispatchEvent(u.a.fieldEditClosed)),
                o
            }
            getStyle(e, t=!1) {
                let r;
                return window.getComputedStyle ? r = window.getComputedStyle(e, null) : e.currentStyle && (r = e.currentStyle),
                t ? r[t] : r
            }
            stickyControls() {
                const {controls: t, stage: r} = this.d
                  , o = e(t).parent()
                  , n = t.getBoundingClientRect()
                  , {top: i} = r.getBoundingClientRect();
                e(window).scroll((function(l) {
                    const a = e(l.target).scrollTop()
                      , s = {
                        top: 5,
                        bottom: "auto",
                        right: "auto",
                        left: n.left
                    }
                      , d = Object.assign({}, s, m.a.opts.stickyControls.offset);
                    if (a > i) {
                        const e = {
                            position: "sticky"
                        }
                          , n = Object.assign(e, d)
                          , i = t.getBoundingClientRect()
                          , l = r.getBoundingClientRect()
                          , s = i.top + i.height
                          , c = l.top + l.height
                          , u = s === c && i.top > a;
                        s > c && i.top !== l.top && o.css({
                            position: "absolute",
                            top: "auto",
                            bottom: 0,
                            right: 0,
                            left: "auto"
                        }),
                        (s < c || u) && o.css(n)
                    } else
                        t.parentElement.removeAttribute("style")
                }
                ))
            }
            showData() {
                let e = this.getFormData(m.a.opts.dataType, !0);
                "xml" === m.a.opts.dataType && (e = Object(p.g)(e));
                const t = Object(p.q)("code", e, {
                    className: "formData-" + m.a.opts.dataType
                });
                this.dialog(Object(p.q)("pre", t), null, "data-dialog")
            }
            removeField(t, r=250) {
                let o = !1;
                const n = this
                  , i = this.d.stage
                  , l = i.getElementsByClassName("form-field");
                if (!l.length)
                    return m.a.opts.notify.warning("No fields to remove"),
                    !1;
                const a = t && document.getElementById(t);
                if (!t || !a) {
                    const e = [].slice.call(l).map(e=>e.id);
                    m.a.opts.notify.warning("fieldID required to remove specific fields."),
                    m.a.opts.notify.warning("Removing last field since no ID was supplied."),
                    m.a.opts.notify.warning("Available IDs: " + e.join(", ")),
                    t = i.lastChild.id
                }
                const s = e(a);
                if (!a)
                    return m.a.opts.notify.warning("Field not found"),
                    !1;
                s.slideUp(r, (function() {
                    s.removeClass("deleting"),
                    s.remove(),
                    o = !0,
                    n.save(),
                    i.childNodes.length || (i.classList.add("empty"),
                    i.dataset.content = c.a.current.getStarted)
                }
                ));
                const d = m.a.opts.typeUserEvents[a.type];
                return d && d.onremove && d.onremove(a),
                document.dispatchEvent(u.a.fieldRemoved),
                o
            }
            processActionButtons(e) {
                const {label: t, events: r} = e
                  , o = g(e, ["label", "events"]);
                let n = t;
                const i = this.data;
                n = n ? c.a.current[n] || n : o.id ? c.a.current[o.id] || Object(p.d)(o.id) : "",
                o.id ? o.id = `${i.formID}-${o.id}-action` : o.id = `${i.formID}-action-${Math.round(1e3 * Math.random())}`;
                const l = Object(p.q)("button", n, o);
                if (r)
                    for (const e in r)
                        r.hasOwnProperty(e) && l.addEventListener(e, t=>r[e](t));
                return l
            }
            processSubtypes(e) {
                const t = m.a.opts.disabledSubtypes;
                for (const t in e)
                    e.hasOwnProperty(t) && b.a.register(e[t], b.a.getClass(t), t);
                const r = b.a.getRegisteredSubtypes()
                  , o = Object.entries(r).reduce((e,[r,o])=>(e[r] = t[r] && Object(p.y)(t[r], o) || o,
                e), {})
                  , n = {};
                for (const e in o)
                    if (o.hasOwnProperty(e)) {
                        const t = [];
                        for (const r of o[e]) {
                            const o = b.a.getClass(e, r)
                              , n = o.mi18n("subtype." + r) || o.mi18n(r) || r;
                            t.push({
                                label: n,
                                value: r
                            })
                        }
                        n[e] = t
                    }
                return n
            }
            editorUI(e) {
                const t = this.d
                  , r = this.data
                  , o = e || r.formID;
                t.editorWrap = Object(p.q)("div", null, {
                    id: r.formID + "-form-wrap",
                    className: "form-wrap form-builder " + Object(p.r)()
                }),
                t.stage = Object(p.q)("ul", null, {
                    id: o,
                    className: "frmb stage-wrap " + r.layout.stage
                }),
                t.controls = Object(p.q)("ul", null, {
                    id: o + "-control-box",
                    className: "frmb-control"
                });
                const n = this.formActionButtons();
                t.formActions = Object(p.q)("div", n, {
                    className: "form-actions btn-group"
                })
            }
            formActionButtons() {
                const e = m.a.opts;
                return e.actionButtons.map(t=>{
                    if (t.id && -1 === e.disabledActionButtons.indexOf(t.id))
                        return this.processActionButtons(t)
                }
                ).filter(Boolean)
            }
            processOptions(e) {
                const t = this
                  , {actionButtons: r, replaceFields: o} = e
                  , n = g(e, ["actionButtons", "replaceFields"]);
                let i = n.fieldEditContainer;
                "string" == typeof n.fieldEditContainer && (i = document.querySelector(n.fieldEditContainer));
                const l = [{
                    type: "button",
                    id: "clear",
                    className: "clear-all btn btn-danger",
                    events: {
                        click: t.confirmRemoveAll.bind(t)
                    }
                }, {
                    type: "button",
                    label: "viewJSON",
                    id: "data",
                    className: "btn btn-default get-data",
                    events: {
                        click: t.showData.bind(t)
                    }
                }, {
                    type: "button",
                    id: "save",
                    className: "btn btn-primary save-template",
                    events: {
                        click: e=>{
                            t.save(),
                            m.a.opts.onSave(e, t.data.formData)
                        }
                    }
                }].concat(r);
                return n.fields = n.fields.concat(o),
                n.disableFields = n.disableFields.concat(o.map(({type: e})=>e && e)),
                "xml" === n.dataType && (n.disableHTMLLabels = !0),
                m.a.opts = Object.assign({}, {
                    actionButtons: l
                }, {
                    fieldEditContainer: i
                }, n),
                m.a.opts
            }
            input(e={}) {
                return Object(p.q)("input", null, e)
            }
            getFormData(e="js", t=!1) {
                const r = this;
                return {
                    js: ()=>r.prepData(r.d.stage),
                    xml: ()=>r.xmlSave(r.d.stage),
                    json: e=>window.JSON.stringify(r.prepData(r.d.stage), null, e && "  ")
                }[e](t)
            }
        }
        o(12);
        var w = o(8);
        class v {
            constructor(e, t) {
                this.opts = e,
                this.dom = t.controls,
                this.custom = h.a,
                this.getClass = b.a.getClass,
                this.getRegistered = b.a.getRegistered,
                b.a.controlConfig = e.controlConfig || {},
                this.init()
            }
            init() {
                this.setupControls(),
                this.appendControls()
            }
            setupControls() {
                const e = this.opts;
                b.a.loadCustom(e.controls),
                Object.keys(e.fields).length && h.a.register(e.templates, e.fields);
                const t = b.a.getRegistered();
                this.registeredControls = t;
                const r = h.a.getRegistered();
                r && jQuery.merge(t, r);
                const o = b.a.getRegisteredSubtypes();
                this.registeredSubtypes = o,
                e.sortableControls && this.dom.classList.add("sort-enabled"),
                this.controlList = [],
                this.allControls = {};
                for (let e = 0; e < t.length; e++) {
                    const r = t[e];
                    let o, n = h.a.lookup(r);
                    if (n)
                        o = n.class;
                    else if (n = {},
                    o = b.a.getClass(r),
                    !o || !o.active(r))
                        continue;
                    const i = n.icon || o.icon(r);
                    let l = n.label || o.label(r);
                    const a = i ? "" : n.iconClassName || "" + (w.a + r.replace(/-[\d]{4}$/, ""));
                    i && (l = `<span class="control-icon">${i}</span>${l}`);
                    const s = Object(p.q)("li", Object(p.q)("span", l), {
                        className: `${a} input-control input-control-${e}`
                    });
                    s.dataset.type = r,
                    this.controlList.push(r),
                    this.allControls[r] = s
                }
                e.inputSets.length && e.inputSets.forEach((e,t)=>{
                    let {name: r, label: o} = e;
                    r = r || Object(p.n)(o),
                    e.icon && (o = `<span class="control-icon">${e.icon}</span>${o}`);
                    const n = Object(p.q)("li", o, {
                        className: "input-set-control input-set-" + t
                    });
                    n.dataset.type = r,
                    this.controlList.push(r),
                    this.allControls[r] = n
                }
                )
            }
            orderFields(e) {
                const t = this.opts
                  , r = t.controlOrder.concat(e);
                let o;
                return window.sessionStorage && (t.sortableControls ? o = window.sessionStorage.getItem("fieldOrder") : window.sessionStorage.removeItem("fieldOrder")),
                o ? (o = window.JSON.parse(o),
                o = Object(p.B)(o.concat(e)),
                o = Object.keys(o).map(e=>o[e])) : o = Object(p.B)(r),
                o.forEach(e=>{
                    const t = new RegExp("-[\\d]{4}$");
                    if (e.match(t)) {
                        const r = o.indexOf(e.replace(t, ""));
                        -1 !== r && (o.splice(o.indexOf(e), 1),
                        o.splice(r + 1, o.indexOf(e), e))
                    }
                }
                ),
                t.disableFields.length && (o = o.filter(e=>!t.disableFields.includes(e))),
                o.filter(Boolean)
            }
            appendControls() {
                const e = document.createDocumentFragment();
                Object(l.b)(this.dom),
                this.orderFields(this.controlList).forEach(t=>{
                    const r = this.allControls[t];
                    r && e.appendChild(r)
                }
                ),
                this.dom.appendChild(e)
            }
        }
        function x(e, t) {
            if (null == e)
                return {};
            var r, o, n = function(e, t) {
                if (null == e)
                    return {};
                var r, o, n = {}, i = Object.keys(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || (n[r] = e[r]);
                return n
            }(e, t);
            if (Object.getOwnPropertySymbols) {
                var i = Object.getOwnPropertySymbols(e);
                for (o = 0; o < i.length; o++)
                    r = i[o],
                    t.indexOf(r) >= 0 || Object.prototype.propertyIsEnumerable.call(e, r) && (n[r] = e[r])
            }
            return n
        }
        function O(e, t) {
            var r = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var o = Object.getOwnPropertySymbols(e);
                t && (o = o.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }
                ))),
                r.push.apply(r, o)
            }
            return r
        }
        function A(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {};
                t % 2 ? O(Object(r), !0).forEach((function(t) {
                    j(e, t, r[t])
                }
                )) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r)) : O(Object(r)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                }
                ))
            }
            return e
        }
        function j(e, t, r) {
            return t in e ? Object.defineProperty(e, t, {
                value: r,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = r,
            e
        }
        const k = function(e, t, r) {
            const o = this
              , n = c.a.current
              , a = "frmb-" + (new Date).getTime()
              , d = new s(a)
              , b = new l.a(a);
            e.layout || (e.layout = f.a);
            const h = new e.layout(e.layoutTemplates,!0)
              , g = new y(a,h,o)
              , O = p.q;
            e = g.processOptions(e),
            d.layout = g.editorLayout(e.controlPosition),
            g.editorUI(a),
            d.formID = a,
            d.lastID = d.formID + "-fld-0";
            const j = new v(e,b)
              , k = m.a.subtypes = g.processSubtypes(e.subtypes)
              , q = r(b.stage)
              , C = r(b.controls);
            q.sortable({
                cursor: "move",
                opacity: .9,
                revert: 150,
                beforeStop: (e,t)=>g.beforeStop.call(g, e, t),
                start: (e,t)=>g.startMoving.call(g, e, t),
                stop: (e,t)=>g.stopMoving.call(g, e, t),
                cancel: ["input", "select", "textarea", ".disabled-field", ".form-elements", ".btn", "button", ".is-locked"].join(", "),
                placeholder: "frmb-placeholder"
            }),
            e.allowStageSort || q.sortable("disable"),
            C.sortable({
                helper: "clone",
                opacity: .9,
                connectWith: q,
                cancel: ".formbuilder-separator",
                cursor: "move",
                scroll: !1,
                placeholder: "ui-state-highlight",
                start: (e,t)=>g.startMoving.call(g, e, t),
                stop: (e,t)=>g.stopMoving.call(g, e, t),
                revert: 150,
                beforeStop: (e,t)=>g.beforeStop.call(g, e, t),
                distance: 3,
                update: function(t, r) {
                    if (g.doCancel)
                        return !1;
                    r.item.parent()[0] === b.stage ? (g.doCancel = !0,
                    E(r.item)) : (g.setFieldOrder(C),
                    g.doCancel = !e.sortableControls)
                }
            });
            const E = t=>{
                if (t[0].classList.contains("input-set-control")) {
                    const r = []
                      , o = e.inputSets.find(e=>Object(p.n)(e.name || e.label) === t[0].dataset.type);
                    if (o && o.showHeader) {
                        const e = {
                            type: "header",
                            subtype: "h2",
                            id: o.name,
                            label: o.label
                        };
                        r.push(e)
                    }
                    r.push(...o.fields),
                    r.forEach(e=>{
                        L(e, !0),
                        (g.stopIndex || 0 === g.stopIndex) && g.stopIndex++
                    }
                    )
                } else
                    L(t, !0)
            }
              , N = r(b.editorWrap)
              , S = O("div", b.controls, {
                id: d.formID + "-cb-wrap",
                className: "cb-wrap " + d.layout.controls
            });
            e.showActionButtons && S.appendChild(b.formActions),
            N.append(b.stage, S),
            "textarea" !== t.type ? r(t).append(N) : r(t).replaceWith(N),
            r(b.controls).on("click", "li", ({target: e})=>{
                const t = r(e).closest("li");
                g.stopIndex = void 0,
                E(t),
                g.save.call(g)
            }
            );
            const L = (t,o=!1)=>{
                let n = {};
                if (t instanceof jQuery)
                    if (n.type = t[0].dataset.type,
                    n.type) {
                        const e = j.custom.lookup(n.type);
                        if (e)
                            n = Object.assign({}, e);
                        else {
                            const e = j.getClass(n.type);
                            n.label = e.label(n.type)
                        }
                    } else {
                        const e = t[0].attributes;
                        o || (n.values = t.children().map((e,t)=>({
                            label: r(t).text(),
                            value: r(t).attr("value"),
                            selected: Boolean(r(t).attr("selected"))
                        })));
                        for (let t = e.length - 1; t >= 0; t--)
                            n[e[t].name] = e[t].value
                    }
                else
                    n = Object.assign({}, t);
                n.name || (n.name = Object(p.s)(n)),
                o && ["text", "number", "file", "date", "select", "textarea", "autocomplete"].includes(n.type) && (n.className = n.className || "form-control");
                const i = /(?:^|\s)btn-(.*?)(?:\s|$)/g.exec(n.className);
                if (i && (n.style = i[1]),
                o) {
                    const e = setTimeout(()=>{
                        document.dispatchEvent(u.a.fieldAdded),
                        clearTimeout(e)
                    }
                    , 10)
                }
                e.onAddField(d.lastID, n),
                W(n, o),
                e.onAddFieldAfter(d.lastID, n),
                b.stage.classList.remove("empty")
            }
            ;
            o.prepFieldVars = L;
            const D = function(t) {
                (t = g.getData(t)) && t.length ? (t.forEach(e=>L(Object(p.A)(e))),
                b.stage.classList.remove("empty")) : e.defaultFields && e.defaultFields.length ? g.addDefaultFields() : e.prepend || e.append || (b.stage.classList.add("empty"),
                b.stage.dataset.content = c.a.get("getStarted")),
                (()=>{
                    const t = []
                      , o = t=>O("li", e[t], {
                        className: "disabled-field form-" + t
                    });
                    return e.prepend && !r(".disabled-field.form-prepend", b.stage).length && (t.push(!0),
                    q.prepend(o("prepend"))),
                    e.append && !r(".disabled-field.form-.append", b.stage).length && (t.push(!0),
                    q.append(o("append"))),
                    g.disabledTT(b.stage),
                    t.some(e=>!0 === e)
                }
                )() && b.stage.classList.remove("empty"),
                g.save()
            }
              , T = t=>{
                const {type: r} = t
                  , o = []
                  , n = j.getClass(r)
                  , i = (e=>{
                    const t = ["required", "label", "description", "placeholder", "className", "name", "access", "value"]
                      , r = !["header", "paragraph", "file", "autocomplete"].concat(b.optionFields).includes(e)
                      , o = {
                        autocomplete: t.concat(["options", "requireValidOption"]),
                        button: ["label", "subtype", "style", "className", "name", "value", "access"],
                        checkbox: ["required", "label", "description", "toggle", "inline", "className", "name", "access", "other", "options"],
                        text: t.concat(["subtype", "maxlength"]),
                        date: t,
                        file: t.concat(["subtype", "multiple"]),
                        header: ["label", "subtype", "className", "access"],
                        hidden: ["name", "value", "access"],
                        paragraph: ["label", "subtype", "className", "access"],
                        number: t.concat(["min", "max", "step"]),
                        select: t.concat(["multiple", "options"]),
                        textarea: t.concat(["subtype", "maxlength", "rows"])
                        
                    };
                    e in j.registeredSubtypes && !(e in o) && (o[e] = t.concat(["subtype"])),
                    o["checkbox-group"] = o.checkbox,
                    o["radio-group"] = o.checkbox;
                    const n = o[e];
                    return "radio-group" === e && Object(p.v)("toggle", n),
                    ["header", "paragraph", "button"].includes(e) && Object(p.v)("description", n),
                    r || Object(p.v)("value", n),
                    n || t
                }
                )(r)
                  , l = {
                    required: ()=>V(t),
                    toggle: ()=>M("toggle", t, {
                        first: c.a.get("toggle")
                    }),
                    inline: ()=>{
                        const e = {
                            first: c.a.get("inline"),
                            second: c.a.get("inlineDesc", r.replace("-group", ""))
                        };
                        return M("inline", t, e)
                    }
                    ,
                    label: ()=>Q("label", t),
                    description: ()=>Q("description", t),
                    subtype: ()=>H("subtype", t, k[r]),
                    style: ()=>z(t.style),
                    placeholder: ()=>Q("placeholder", t),
                    rows: ()=>U("rows", t),
                    className: e=>Q("className", t, e),
                    name: e=>Q("name", t, e),
                    value: ()=>Q("value", t),
                    maxlength: ()=>U("maxlength", t),
                    access: ()=>{
                        const r = [`<div class="available-roles" ${t.role ? 'style="display:block"' : ""}>`];
                        for (a in e.roles)
                            if (e.roles.hasOwnProperty(a)) {
                                const t = `fld-${d.lastID}-roles-${a}`
                                  , o = {
                                    type: "checkbox",
                                    name: "roles[]",
                                    value: a,
                                    id: t,
                                    className: "roles-field"
                                };
                                s.includes(a) && (o.checked = "checked"),
                                r.push(`<label for="${t}">`),
                                r.push(g.input(o).outerHTML),
                                r.push(` ${e.roles[a]}</label>`)
                            }
                        r.push("</div>");
                        const o = {
                            first: c.a.get("roles"),
                            second: c.a.get("limitRole"),
                            content: r.join("")
                        };
                        return M("access", t, o)
                    }
                    ,
                    other: ()=>M("other", t, {
                        first: c.a.get("enableOther"),
                        second: c.a.get("enableOtherMsg")
                    }),
                    options: ()=>function(e) {
                        const {type: t, values: r} = e;
                        let o;
                        const n = [O("a", c.a.get("addOption"), {
                            className: "add add-opt"
                        })]
                          , i = [O("label", c.a.get("selectOptions"), {
                            className: "false-label"
                        })]
                          , l = e.multiple || "checkbox-group" === t
                          , a = e=>{
                            const t = c.a.get("optionCount", e);
                            return {
                                selected: !1,
                                label: t,
                                value: Object(p.n)(t)
                            }
                        }
                        ;
                        if (r && r.length)
                            o = r.map(e=>Object.assign({}, {
                                selected: !1
                            }, e));
                        else {
                            let e = [1, 2, 3];
                            ["checkbox-group", "checkbox"].includes(t) && (e = [1]),
                            o = e.map(a);
                            const r = o[0];
                            r.hasOwnProperty("selected") && "radio-group" !== t && (r.selected = !0)
                        }
                        const s = O("div", n, {
                            className: "option-actions"
                        })
                          , d = O("ol", o.map((e,r)=>{
                            const o = m.a.opts.onAddOption(e, {
                                type: t,
                                index: r,
                                isMultiple: l
                            });
                            return Y(o, l)
                        }
                        ), {
                            className: "sortable-options"
                        })
                          , u = O("div", [d, s], {
                            className: "sortable-options-wrap"
                        });
                        return i.push(u),
                        O("div", i, {
                            className: "form-group field-options"
                        }).outerHTML
                    }(t),
                    requireValidOption: ()=>M("requireValidOption", t, {
                        first: " ",
                        second: c.a.get("requireValidOption")
                    }),
                    multiple: ()=>{
                        const e = {
                            default: {
                                first: "Multiple",
                                second: "set multiple attribute"
                            },
                            file: {
                                first: c.a.get("multipleFiles"),
                                second: c.a.get("allowMultipleFiles")
                            },
                            select: {
                                first: " ",
                                second: c.a.get("selectionsMessage")
                            }
                        };
                        return M("multiple", t, e[r] || e.default)
                    }
                };
                let a;
                const s = void 0 !== t.role ? t.role.split(",") : [];
                ["min", "max", "step"].forEach(e=>{
                    l[e] = ()=>U(e, t)
                }
                );
                const u = ["name", "className"];
                if (Object.keys(i).forEach(t=>{
                    const a = i[t]
                      , s = [!0]
                      , d = e.disabledAttrs.includes(a);
                    if (e.typeUserDisabledAttrs[r]) {
                        const t = e.typeUserDisabledAttrs[r];
                        s.push(!t.includes(a))
                    }
                    if (n.definition.hasOwnProperty("defaultAttrs")) {
                        const e = Object.keys(n.definition.defaultAttrs);
                        s.push(!e.includes(a))
                    }
                    if (e.typeUserAttrs[r]) {
                        const t = Object.keys(e.typeUserAttrs[r]);
                        s.push(!t.includes(a))
                    }
                    d && !u.includes(a) && s.push(!1),
                    s.every(Boolean) && o.push(l[a](d))
                }
                ),
                n.definition.hasOwnProperty("defaultAttrs")) {
                    const e = R(n.definition.defaultAttrs, t);
                    o.push(e)
                }
                if (e.typeUserAttrs[r]) {
                    const n = R(e.typeUserAttrs[r], t);
                    o.push(n)
                }
                return o.join("")
            }
            ;
            function B(e) {
                return [["array", ({options: e})=>!!e], ["boolean", ({type: e})=>"checkbox" === e], [typeof e.value, ()=>!0]].find(t=>t[1](e))[0] || "string"
            }
            function F(e, t) {
                return e.subtype && e.subtype === t
            }
            function R(e, t) {
                const r = []
                  , o = {
                    array: P,
                    string: I,
                    number: U,
                    boolean: (e,r)=>{
                        let o = !1;
                        return "checkbox" === e.type ? o = Boolean(!!r.hasOwnProperty("value") && r.value) : t.hasOwnProperty(e) ? o = t[e] : (r.hasOwnProperty("value") || r.hasOwnProperty("checked")) && (o = r.value || r.checked || !1),
                        M(e, A(A({}, r), {}, {
                            [e]: o
                        }), {
                            first: r.label
                        })
                    }
                };
                for (const i in e)
                    if (e.hasOwnProperty(i)) {
                        const l = B(e[i]);
                        if ("undefined" !== l) {
                            const a = c.a.get(i)
                              , s = e[i]
                              , d = s.value || "";
                            s.value = t[i] || s.value || "",
                            s.label && (n[i] = Array.isArray(s.label) ? c.a.get(...s.label) || s.label[0] : s.label),
                            o[l] && r.push(o[l](i, s)),
                            n[i] = a,
                            s.value = d
                        } else {
                            if ("undefined" !== l || !F(t, i))
                                continue;
                            r.push(R(e[i], t))
                        }
                    }
                return r.join("")
            }
            function I(e, t) {
                const {class: r, className: o} = t
                  , i = x(t, ["class", "className"]);
                let l = {
                    id: e + "-" + d.lastID,
                    title: i.description || i.label || e.toUpperCase(),
                    name: e,
                    type: i.type || "text",
                    className: ["fld-" + e, (r || o || "").trim()],
                    value: i.value || ""
                };
                const a = `<label for="${l.id}">${n[e] || ""}</label>`;
                ["checkbox", "checkbox-group", "radio-group"].includes(l.type) || l.className.push("form-control"),
                l = Object.assign({}, i, l);
                return `<div class="form-group ${e}-wrap">${a}${`<div class="input-wrap">${(()=>{
                    if ("textarea" === l.type) {
                        const e = l.value;
                        return delete l.value,
                        `<textarea ${Object(p.b)(l)}>${e}</textarea>`
                    }
                    return `<input ${Object(p.b)(l)}>`
                }
                )()}</div>`}</div>`
            }
            function P(e, t) {
                const {multiple: r, options: o, label: i, value: l, class: a, className: s} = t
                  , u = x(t, ["multiple", "options", "label", "value", "class", "className"])
                  , f = Object.keys(o).map(e=>{
                    const t = {
                        value: e
                    }
                      , r = o[e]
                      , n = Array.isArray(r) ? c.a.get(...r) || r[0] : r;
                    return (Array.isArray(l) ? l.includes(e) : e === l) && (t.selected = null),
                    O("option", n, t)
                }
                )
                  , p = {
                    id: `${e}-${d.lastID}`,
                    title: u.description || i || e.toUpperCase(),
                    name: e,
                    className: `fld-${e} form-control ${a || s || ""}`.trim()
                };
                r && (p.multiple = !0);
                const m = `<label for="${p.id}">${n[e]}</label>`;
                Object.keys(u).forEach((function(e) {
                    p[e] = u[e]
                }
                ));
                return `<div class="form-group ${e}-wrap">${m}${`<div class="input-wrap">${O("select", f, p).outerHTML}</div>`}</div>`
            }
            const M = (e,t,r={})=>{
                const o = t=>O("label", t, {
                    for: `${e}-${d.lastID}`
                }).outerHTML
                  , n = {
                    type: "checkbox",
                    className: "fld-" + e,
                    name: e,
                    id: `${e}-${d.lastID}`
                };
                t[e] && (n.checked = !0);
                const i = [];
                let l = [O("input", null, n).outerHTML];
                return r.first && i.push(o(r.first)),
                r.second && l.push(" ", o(r.second)),
                r.content && l.push(r.content),
                l = O("div", l, {
                    className: "input-wrap"
                }).outerHTML,
                O("div", i.concat(l), {
                    className: `form-group ${e}-wrap`
                }).outerHTML
            }
              , z = e=>{
                let t = "";
                "undefined" === e && (e = "default");
                const r = `<label>${n.style}</label>`;
                return t += g.input({
                    value: e || "default",
                    type: "hidden",
                    className: "btn-style"
                }).outerHTML,
                t += '<div class="btn-group" role="group">',
                m.d.btn.forEach(r=>{
                    const o = ["btn-xs", "btn", "btn-" + r];
                    e === r && o.push("selected");
                    const n = O("button", c.a.get("styles.btn." + r), {
                        value: r,
                        type: "button",
                        className: o.join(" ")
                    }).outerHTML;
                    t += n
                }
                ),
                t += "</div>",
                t = O("div", [r, t], {
                    className: "form-group style-wrap"
                }),
                t.outerHTML
            }
              , U = (e,t)=>{
                const {class: r, className: o, value: n} = t
                  , i = x(t, ["class", "className", "value"])[e] || n
                  , l = c.a.get(e) || e
                  , a = {
                    type: "number",
                    value: i,
                    name: e,
                    placeholder: c.a.get("placeholder." + e),
                    className: `fld-${e} form-control ${r || o || ""}`.trim(),
                    id: `${e}-${d.lastID}`
                }
                  , s = g.input(Object(p.A)(a)).outerHTML;
                return O("div", [`<label for="${a.id}">${l}</label>`, `<div class="input-wrap">${s}</div>`], {
                    className: `form-group ${e}-wrap`
                }).outerHTML
            }
              , H = (e,t,r)=>{
                const o = r.map((r,o)=>{
                    let i = Object.assign({
                        label: `${n.option} ${o}`,
                        value: void 0
                    }, r);
                    return r.value === t[e] && (i.selected = !0),
                    i = Object(p.A)(i),
                    O("option", i.label, i)
                }
                )
                  , i = {
                    id: e + "-" + d.lastID,
                    name: e,
                    className: `fld-${e} form-control`
                }
                  , l = c.a.get(e) || Object(p.d)(e) || ""
                  , a = O("label", l, {
                    for: i.id
                })
                  , s = O("select", o, i)
                  , u = O("div", s, {
                    className: "input-wrap"
                });
                return O("div", [a, u], {
                    className: `form-group ${i.name}-wrap`
                }).outerHTML
            }
              , Q = (t,r,o=!1)=>{
                const n = ["paragraph"];
                let i = r[t] || ""
                  , l = c.a.get(t);
                "label" === t && (n.includes(r.type) ? l = c.a.get("content") : i = Object(p.u)(i));
                const a = c.a.get("placeholders." + t) || "";
                let s = "";
                if (![].some(e=>!0 === e)) {
                    const n = {
                        name: t,
                        placeholder: a,
                        className: `fld-${t} form-control`,
                        id: `${t}-${d.lastID}`
                    }
                      , c = O("label", l, {
                        for: n.id
                    }).outerHTML;
                    "label" !== t || e.disableHTMLLabels ? (n.value = i,
                    n.type = "text",
                    s += `<input ${Object(p.b)(n)}>`) : (n.contenteditable = !0,
                    s += O("div", i, n).outerHTML);
                    const u = `<div class="input-wrap">${s}</div>`;
                    let f = o ? "none" : "block";
                    "value" === t && (f = r.subtype && "quill" === r.subtype && "none"),
                    s = O("div", [c, u], {
                        className: `form-group ${t}-wrap`,
                        style: "display: " + f
                    })
                }
                return s.outerHTML
            }
              , V = e=>{
                const {type: t} = e
                  , r = [];
                let o = "";
                return ["header", "paragraph", "button"].includes(t) && r.push(!0),
                r.some(e=>!0 === e) || (o = M("required", e, {
                    first: c.a.get("required")
                })),
                o
            }
              , W = function(t, i=!0) {
                d.lastID = g.incrementId(d.lastID);
                const l = t.type || "text";
                let a = t.label || (i ? n.get(l) || c.a.get("label") : "");
                "hidden" === l && (a = `${c.a.get(l)}: ${t.name}`);
                const s = e.disabledFieldButtons[l] || t.disabledFieldButtons;
                let u = [O("a", null, {
                    type: "remove",
                    id: "del_" + d.lastID,
                    className: `del-button btn ${w.a}cancel delete-confirm`,
                    title: c.a.get("removeMessage")
                }), O("a", null, {
                    type: "edit",
                    id: d.lastID + "-edit",
                    className: `toggle-form btn ${w.a}pencil`,
                    title: c.a.get("hide")
                }), O("a", null, {
                    type: "copy",
                    id: d.lastID + "-copy",
                    className: `copy-button btn ${w.a}copy`,
                    title: c.a.get("copyButtonTooltip")
                })];
                s && Array.isArray(s) && (u = u.filter(e=>!s.includes(e.type)));
                const f = [O("div", u, {
                    className: "field-actions"
                })];
                f.push(O("label", Object(p.u)(a), {
                    className: "field-label"
                })),
                f.push(O("span", " *", {
                    className: "required-asterisk",
                    style: t.required ? "display:inline" : ""
                }));
                const m = {
                    className: "tooltip-element",
                    tooltip: t.description,
                    style: t.description ? "display:inline-block" : "display:none"
                };
                f.push(O("span", "?", m)),
                f.push(O("div", "", {
                    className: "prev-holder"
                }));
                const h = O("div", [T(t), O("a", c.a.get("close"), {
                    className: "close-field"
                })], {
                    className: "form-elements"
                })
                  , y = O("div", h, {
                    id: d.lastID + "-holder",
                    className: "frm-holder",
                    dataFieldId: d.lastID
                });
                o.currentEditPanel = y,
                f.push(y);
                const v = O("li", f, {
                    class: l + "-field form-field",
                    type: l,
                    id: d.lastID
                })
                  , x = r(v);
                x.data("fieldData", {
                    attrs: t
                }),
                void 0 !== g.stopIndex ? r("> li", b.stage).eq(g.stopIndex).before(x) : q.append(x),
                r(".sortable-options", x).sortable({
                    update: ()=>g.updatePreview(x)
                }),
                g.updatePreview(x),
                e.typeUserEvents[l] && e.typeUserEvents[l].onadd && e.typeUserEvents[l].onadd(v),
                i && (e.editOnAdd && (g.closeAllEdit(),
                g.toggleEdit(d.lastID, !1)),
                v.scrollIntoView && e.scrollToFieldOnAdd && v.scrollIntoView({
                    behavior: "smooth"
                }))
            }
              , Y = function(e, t) {
                const r = {
                    selected: t ? "checkbox" : "radio"
                }
                  , o = {
                    boolean: (e,t)=>{
                        const o = {
                            value: e,
                            type: r[t] || "checkbox"
                        };
                        return e && (o.checked = !!e),
                        ["input", null, o]
                    }
                    ,
                    number: e=>["input", null, {
                        value: e,
                        type: "number"
                    }],
                    string: (e,t)=>["input", null, {
                        value: e,
                        type: "text",
                        placeholder: c.a.get("placeholder." + t) || ""
                    }],
                    array: e=>["select", e.map(({label: e, value: t})=>O("option", e, {
                        value: t
                    }))],
                    object: e=>{
                        let {tag: t, content: r} = e;
                        return [t, r, x(e, ["tag", "content"])]
                    }
                };
                e = A(A({}, {
                    selected: !1,
                    label: "",
                    value: ""
                }), e);
                const n = Object.entries(e).map(([e,t])=>{
                    const r = Object(p.k)(t)
                      , [n,i,l] = o[r](t, e)
                      , a = `option-${e} option-attr`;
                    return l["data-attr"] = e,
                    l.className = l.className ? `${l.className} ${a}` : a,
                    O(n, i, l)
                }
                )
                  , i = {
                    className: `remove btn ${w.a}cancel`,
                    title: c.a.get("removeMessage")
                };
                return n.push(O("a", null, i)),
                O("li", n).outerHTML
            }
              , X = [".form-elements input", ".form-elements select", ".form-elements textarea"].join(", ");
            q.on("change blur keyup click", X, i()(e=>{
                if (e) {
                    if ([({type: e, target: t})=>"keyup" === e && "className" === t.name].some(t=>t(e)))
                        return !1;
                    g.updatePreview(r(e.target).closest(".form-field")),
                    g.save.call(g)
                }
            }
            , 333, {
                leading: !1
            })),
            q.on("click touchstart", ".remove", t=>{
                const o = r(t.target).parents(".form-field:eq(0)")
                  , n = o[0]
                  , i = n.getAttribute("type")
                  , l = r(t.target.parentElement);
                t.preventDefault();
                n.querySelector(".sortable-options").childNodes.length <= 2 && !i.includes("checkbox") ? e.notify.error("Error: " + c.a.get("minOptionMessage")) : l.slideUp("250", ()=>{
                    l.remove(),
                    g.updatePreview(o),
                    g.save.call(g)
                }
                )
            }
            ),
            q.on("touchstart", "input", e=>{
                const t = r(this);
                if (!0 === e.handled)
                    return !1;
                if ("checkbox" === t.attr("type"))
                    t.trigger("click");
                else {
                    t.focus();
                    const e = t.val();
                    t.val(e)
                }
            }
            ),
            q.on("click touchstart", ".toggle-form, .close-field", (function(e) {
                if (e.stopPropagation(),
                e.preventDefault(),
                !0 === e.handled)
                    return !1;
                {
                    const t = r(e.target).parents(".form-field:eq(0)").attr("id");
                    g.toggleEdit(t),
                    e.handled = !0
                }
            }
            )),
            q.on("dblclick", "li.form-field", e=>{
                if (!["select", "input", "label"].includes(e.target.tagName.toLowerCase()) && "true" !== e.target.contentEditable && (e.stopPropagation(),
                e.preventDefault(),
                !0 !== e.handled)) {
                    const t = "li" == e.target.tagName ? r(e.target).attr("id") : r(e.target).closest("li.form-field").attr("id");
                    g.toggleEdit(t),
                    e.handled = !0
                }
            }
            ),
            q.on("change", '[name="subtype"]', e=>{
                const t = r(e.target).closest("li.form-field");
                r(".value-wrap", t).toggle("quill" !== e.target.value)
            }
            );
            if (q.on("change", [".prev-holder input", ".prev-holder select", ".prev-holder textarea"].join(", "), e=>{
                let t;
                if (e.target.classList.contains("other-option"))
                    return;
                const r = Object(p.e)(e.target, ".form-field");
                if (["select", "checkbox-group", "radio-group"].includes(r.type)) {
                    const o = r.getElementsByClassName("option-value");
                    "select" === r.type ? Object(p.i)(o, t=>{
                        o[t].parentElement.childNodes[0].checked = e.target.value === o[t].value
                    }
                    ) : (t = document.getElementsByName(e.target.name),
                    Object(p.i)(t, e=>{
                        o[e].parentElement.childNodes[0].checked = t[e].checked
                    }
                    ))
                } else {
                    const t = document.getElementById("value-" + r.id);
                    t && (t.value = e.target.value)
                }
                g.save.call(g)
            }
            ),
            Object(p.a)(b.stage, "keyup change", ({target: e})=>{
                if (!e.classList.contains("fld-label"))
                    return;
                const t = e.value || e.innerHTML;
                Object(p.e)(e, ".form-field").querySelector(".field-label").innerHTML = Object(p.u)(t)
            }
            ),
            q.on("keyup", "input.error", ({target: e})=>r(e).removeClass("error")),
            q.on("keyup", 'input[name="description"]', (function(e) {
                const t = r(e.target).parents(".form-field:eq(0)")
                  , o = r(".tooltip-element", t)
                  , n = r(e.target).val();
                if ("" !== n)
                    if (o.length)
                        o.attr("tooltip", n).css("display", "inline-block");
                    else {
                        const e = `<span class="tooltip-element" tooltip="${n}">?</span>`;
                        r(".field-label", t).after(e)
                    }
                else
                    o.length && o.css("display", "none")
            }
            )),
            q.on("change", ".fld-multiple", e=>{
                const t = e.target.checked ? "checkbox" : "radio"
                  , o = r(".option-selected", r(e.target).closest(".form-elements"));
                return o.each(e=>o[e].type = t),
                t
            }
            ),
            q.on("blur", "input.fld-name", (function(e) {
                e.target.value = Object(p.x)(e.target.value),
                "" === e.target.value ? r(e.target).addClass("field-error").attr("placeholder", c.a.get("cannotBeEmpty")) : r(e.target).removeClass("field-error")
            }
            )),
            q.on("blur", "input.fld-maxlength", e=>{
                e.target.value = Object(p.j)(e.target.value)
            }
            ),
            q.on("click touchstart", `.${w.a}copy`, (function(t) {
                t.preventDefault();
                const o = r(t.target).parent().parent("li")
                  , n = function(t) {
                    d.lastID = g.incrementId(d.lastID);
                    const o = t.attr("id")
                      , n = t.attr("type")
                      , i = n + "-" + (new Date).getTime()
                      , l = t.clone();
                    return r(".fld-name", l).val(i),
                    l.find("[id]").each((e,t)=>{
                        t.id = t.id.replace(o, d.lastID)
                    }
                    ),
                    l.find("[for]").each((e,t)=>{
                        const r = t.getAttribute("for").replace(o, d.lastID);
                        t.setAttribute("for", r)
                    }
                    ),
                    l.attr("id", d.lastID),
                    l.attr("name", i),
                    l.addClass("cloned"),
                    r(".sortable-options", l).sortable(),
                    e.typeUserEvents[n] && e.typeUserEvents[n].onclone && e.typeUserEvents[n].onclone(l[0]),
                    l
                }(o);
                n.insertAfter(o),
                g.updatePreview(n),
                g.save.call(g)
            }
            )),
            q.on("click touchstart", ".delete-confirm", t=>{
                t.preventDefault();
                const o = t.target.getBoundingClientRect()
                  , n = document.body.getBoundingClientRect()
                  , i = {
                    pageX: o.left + o.width / 2,
                    pageY: o.top - n.top - 12
                }
                  , l = r(t.target).parents(".form-field:eq(0)").attr("id")
                  , a = r(document.getElementById(l));
                if (document.addEventListener("modalClosed", (function() {
                    a.removeClass("deleting")
                }
                ), !1),
                e.fieldRemoveWarn) {
                    const e = O("h3", c.a.get("warning"))
                      , t = O("p", c.a.get("fieldRemoveWarning"));
                    g.confirm([e, t], ()=>g.removeField(l), i),
                    a.addClass("deleting")
                } else
                    g.removeField(l)
            }
            ),
            q.on("click", ".style-wrap button", e=>{
                const t = r(e.target)
                  , o = t.closest(".form-elements")
                  , n = t.val()
                  , i = r(".btn-style", o);
                i.val(n),
                t.siblings(".btn").removeClass("selected"),
                t.addClass("selected"),
                g.updatePreview(i.closest(".form-field")),
                g.save()
            }
            ),
            q.on("click", ".fld-required", e=>{
                r(e.target).closest(".form-field").find(".required-asterisk").toggle()
            }
            ),
            q.on("click", "input.fld-access", (function(e) {
                const t = r(e.target).closest(".form-field").find(".available-roles")
                  , o = r(e.target);
                t.slideToggle(250, (function() {
                    o.is(":checked") || r("input[type=checkbox]", t).removeAttr("checked")
                }
                ))
            }
            )),
            q.on("click", ".add-opt", (function(e) {
                e.preventDefault();
                const t = r(e.target).closest(".form-field").attr("type")
                  , o = r(e.target).closest(".field-options")
                  , n = r('[name="multiple"]', o)
                  , i = r(".option-selected:eq(0)", o);
                let l = !1;
                l = n.length ? n.prop("checked") : "checkbox" === i.attr("type");
                const a = r(".sortable-options", o)
                  , s = m.a.opts.onAddOption({
                    selected: !1,
                    label: "",
                    value: ""
                }, {
                    type: t,
                    index: a.children().length,
                    isMultiple: l
                });
                a.append(Y(s, l))
            }
            )),
            q.on("mouseover mouseout", ".remove, .del-button", e=>r(e.target).closest("li").toggleClass("delete")),
            D(),
            e.disableInjectedStyle) {
                const e = document.getElementsByClassName("formBuilder-injected-style");
                Object(p.i)(e, t=>Object(l.f)(e[t]))
            }
            return document.dispatchEvent(u.a.loaded),
            o.actions = {
                getFieldTypes: t=>t ? Object(p.y)(j.getRegistered(), e.disableFields) : j.getRegistered(),
                clearFields: e=>g.removeAllFields(b.stage, e),
                showData: g.showData.bind(g),
                save: e=>{
                    const t = g.save(e)
                      , r = window.JSON.parse(t);
                    return m.a.opts.onSave(r),
                    r
                }
                ,
                addField: (e,t)=>{
                    g.stopIndex = d.formData.length ? t : void 0,
                    L(e)
                }
                ,
                removeField: g.removeField.bind(g),
                getData: g.getFormData.bind(g),
                setData: e=>{
                    g.stopIndex = void 0,
                    g.removeAllFields(b.stage, !1),
                    D(e)
                }
                ,
                setLang: e=>{
                    c.a.setCurrent.call(c.a, e).then(()=>{
                        b.stage.dataset.content = c.a.get("getStarted"),
                        j.init(),
                        b.empty(b.formActions),
                        g.formActionButtons().forEach(e=>b.formActions.appendChild(e))
                    }
                    )
                }
                ,
                showDialog: g.dialog.bind(g),
                toggleFieldEdit: e=>{
                    (Array.isArray(e) ? e : [e]).forEach(e=>{
                        ["number", "string"].includes(typeof e) && ("number" == typeof e ? e = b.stage.children[e].id : /^frmb-/.test(e) || (e = b.stage.querySelector(e).id),
                        g.toggleEdit(e))
                    }
                    )
                }
                ,
                toggleAllFieldEdit: ()=>{
                    Object(p.i)(b.stage.children, e=>{
                        g.toggleEdit(b.stage.children[e].id)
                    }
                    )
                }
                ,
                closeAllFieldEdit: g.closeAllEdit.bind(g),
                getCurrentFieldId: ()=>d.lastID
            },
            b.onRender(b.controls, ()=>{
                const t = setTimeout(()=>{
                    b.stage.style.minHeight = b.controls.clientHeight + "px",
                    e.stickyControls.enable && g.stickyControls(q),
                    clearTimeout(t)
                }
                , 0)
            }
            ),
            o
        }
          , q = {
            init: (e,t)=>{
                const r = jQuery.extend({}, m.c, e, !0)
                  , {i18n: o} = r
                  , n = x(r, ["i18n"]);
                m.a.opts = n;
                const i = jQuery.extend({}, m.b, o, !0);
                return q.instance = {
                    actions: {
                        getFieldTypes: null,
                        addField: null,
                        clearFields: null,
                        closeAllFieldEdit: null,
                        getData: null,
                        removeField: null,
                        save: null,
                        setData: null,
                        setLang: null,
                        showData: null,
                        showDialog: null,
                        toggleAllFieldEdit: null,
                        toggleFieldEdit: null,
                        getCurrentFieldId: null
                    },
                    markup: p.q,
                    get formData() {
                        return q.instance.actions.getData && q.instance.actions.getData("json")
                    },
                    promise: new Promise((function(e, r) {
                        c.a.init(i).then(()=>{
                            t.each(e=>{
                                const r = new k(n,t[e],jQuery);
                                jQuery(t[e]).data("formBuilder", r),
                                Object.assign(q, r.actions, {
                                    markup: p.q
                                }),
                                q.instance.actions = r.actions
                            }
                            ),
                            delete q.instance.promise,
                            e(q.instance)
                        }
                        ).catch(e=>{
                            r(e),
                            n.notify.error(e)
                        }
                        )
                    }
                    ))
                },
                q.instance
            }
        };
        jQuery.fn.formBuilder = function(e={}, ...t) {
            if (!("string" == typeof e)) {
                const t = q.init(e, this);
                return Object.assign(q, t),
                t
            }
            if (q[e])
                return "function" == typeof q[e] ? q[e].apply(this, t) : q[e]
        }
    }
    ])
}(jQuery);
