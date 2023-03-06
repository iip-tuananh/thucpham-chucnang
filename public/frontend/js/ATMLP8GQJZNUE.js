(function() {
    /*release_v1.1*/
    window.atmDataLayer = window.atmDataLayer || [], window.atmVariables = window.atmVariables || [], 0 === window.atmDataLayer.length && window.atmDataLayer.push({
        "atm.start": 1 * new Date,
        event: "atm.js",
        id: 0
    });
    var listener = window.addEventListener ? "addEventListener" : "attachEvent",
        detach = window.removeEventListener ? "removeEventListener" : "detachEvent",
        atmTriggers = {},
        atmTags = {},
        atmTemplates = {},
        atmCodeLoad = {},
        atm = {
            data: {},
            dataLayer: {},
            tagsFired: [],
            eventList: {},
            doms: [],
            pageView: [],
            pvWithRule: [],
            pvNoRule: [],
            windowLoaded: [],
            clickElements: [],
            customEvents: [],
            scrollElements: [],
            historyChanges: [],
            javascriptError: [],
            elementVisibility: [],
            justLink: [],
            timeLoad: [],
            variableData: {},
            params: [],
            codeLoaded: [],
            config: {
                DOCUMENT_WRITE: "useDocumentWrite",
                RESTART: "canBeRestarted",
                IS_RAN: "isRan",
                VERTICAL_SCROLL_DEPTH: "verticalScrollDepths",
                VERTICAL_PERCENT: "verticalPercentages",
                VERTICAL_PIXEL: "verticalPixels",
                HORIZONTAL_SCROLL_DEPTH: "horizontalScrollDepths",
                HORIZONTAL_PERCENT: "horizontalPercentages",
                HORIZONTAL_PIXEL: "horizontalPixels",
                ID: "id",
                CLASS: "class",
                TIMES: "times",
                PERCENT_VISIBLE: "percentVisible",
                ONSCREEN_DURATION: "onscreenDuration",
                OBSERVE_DOM_CHANGE: "observeDomChange",
                WAIT_FOR_TAG: "waitForTag",
                TIME_WAIT: "timeWait",
                DEFAULT: "default"
            },
            init: function() {
                function e(e) {
                    o && window.clearTimeout(o), o = window.setTimeout(function() {
                        l.checkTrigger(l.scrollElements)
                    }, 100)
                }

                function t(e, t, r) {
                    "addEventListener" === listener ? e.addEventListener(t, r, !1) : "attachEvent" === listener && e.attachEvent("on" + t, r)
                }

                function r(e, t, r) {
                    "removeEventListener" === detach ? e.removeEventListener(t, r, !1) : "detachEvent" === detach && e.detachEvent("on" + t, r)
                }

                function a() {
                    return g || (g = !0, u || l.checkTrigger(l.pageView, "custom"), l.atmDataLayerPush({
                        event: "atm.domReady",
                        time: 1 * new Date
                    }), l.checkTrigger(l.doms)), r(document, "DOMContentLoaded", a), r(document, "readystatechange", n), !0
                }

                function i() {
                    r(document, "DOMContentLoaded", a), r(window, "load", i), c || (c = !0, l.atmDataLayerPush({
                        event: "atm.windowLoaded",
                        time: 1 * new Date
                    }), l.windowLoaded.length && l.checkTrigger(l.windowLoaded));
                    var t = l.scrollElements.length;
                    if (t) {
                        for (var n = 0; n < t; n++) l.checkScrollThreshold(l.scrollElements[n]);
                        "attachEvent" !== listener ? document[listener]("scroll", e) : window[listener]("onscroll", e), window.scrollTo(window.scrollX, window.scrollY + 1)
                    }
                }

                function n() {
                    "interactive" === document.readyState && (a(), r(document, "DOMContentLoaded", a), r(document, "readystatechange", n)), "complete" === document.readyState && (r(document, "DOMContentLoaded", a), r(window, "load", i), a(), i())
                }

                function s(e) {
                    e && ("A" === e.tagName && e.href ? "javascript:void(0)" !== e.href && "javascript:;" !== e.href && "javascript:void(0);" !== e.href && (l.getElementInfo(e), l.atmDataLayerPush({
                        event: "atm.linkClick",
                        time: 1 * new Date,
                        element: e,
                        elementClasses: e.className,
                        elementId: e.id,
                        elementUrl: e.href || "",
                        elementTarget: e.target
                    }), l.dataLayer.event.linkClick = {
                        href: e.href,
                        target: e.target || "_self",
                        triggerTime: 1 * new Date - 100
                    }, l.checkTrigger(l.justLink)) : e.parentElement && s(e.parentElement))
                }
                var o, l = this,
                    g = !1,
                    c = !1,
                    u = !1;
                document.getElementsByTagName("body")[0] && (this.checkTrigger(this.pageView, "custom"), u = !0), this.timeLoad.length && this.checkTrigger(this.timeLoad), t(document, "readystatechange", n), t(document, "DOMContentLoaded", a), t(window, "load", function() {
                    a(), i()
                }), "interactive" === document.readyState && a(), "complete" === document.readyState && (a(), i()), (this.clickElements.length || this.justLink.length) && t(document, "mouseup", function(e) {
                    if (l.clickEvent(e), l.atmDataLayerPush({
                            event: "atm.click",
                            time: 1 * new Date,
                            element: (e.target || e.srcElement).toString(),
                            elementClasses: (e.target || e.srcElement).className,
                            elementId: (e.target || e.srcElement).id,
                            elementUrl: (e.target || e.srcElement).href || "",
                            elementTarget: (e.target || e.srcElement).target
                        }), l.clickElements.length && l.checkTrigger(l.clickElements), l.justLink.length) try {
                        return 2 !== e.button && s(e.target || e.srcElement), !0
                    } catch (t) {
                        utis.error(t, "element", e)
                    }
                }), this.historyChanges.length && this.observeHistoryChange(this.getHistoryChange, this.historyChanges), this.javascriptError.length && this.javascriptErrorTrigger(this.javascriptError), this.customEvents.length && this.customEventTrigger()
            },
            getScrollPercent(e) {
                var t = document.documentElement || document.scrollingElement || document.getElementsByTagName("body")[0],
                    r = t.scrollTop,
                    a = t.scrollHeight,
                    i = t.scrollLeft,
                    n = t.scrollWidth,
                    s = Math.floor(r / a * 100),
                    o = Math.floor(i / n * 100);
                return e ? s : o
            },
            atmDataLayerPush: function(e) {
                e.id = atmDataLayer.length;
                var t = utis.mergeObjects({}, this.variableData);
                atmVariables.push(t), atmDataLayer.push(e), this.dataLayerPush()
            },
            isMobile: () => /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
            dataLayerPush: function() {
                this.dataLayer.attributes = {
                    pixel: 10
                }, this.dataLayer.event = this.dataLayer.event || {}, this.dataLayer.event.scrollDepth = this.dataLayer.event.scrollDepth || {}, this.eventList.device = this.isMobile() ? "mobile" : "pc", this.eventList.referer = document.referrer || "", this.eventList.pageUrl = window.location.href || "", this.eventList.pagePath = window.location.pathname || "", this.eventList.pageHostname = window.location.hostname || "", this.eventList.scrollDepthUnits = this.getScrollPercent(1), this.dataLayer[this.config.DEFAULT] = this.eventList || [], this.setVariable()
            },
            checkTagOption: function() {
                this.dataLayer.tagOption = {};
                for (var e = 0; e < this.tags.length; e++) {
                    this.dataLayer.tagOption[this.tags[e].id] = {};
                    for (var t = 0; t < this.tags[e].option.length; t++) this.dataLayer.tagOption[this.tags[e].id][this.tags[e].option[t].key] = "true" === this.tags[e].option[t].value || "false" !== this.tags[e].option[t].value && this.tags[e].option[t].value
                }
            },
            runCode: function(e, t, r) {
                var a = t;
                if (r) {
                    paramTemp = JSON.parse(JSON.stringify(r));
                    var i = paramTemp.length;
                    if (i) {
                        for (var n = 0; n < i; n++) paramTemp[n].value = this.getVariable(paramTemp[n].value, paramTemp[n].type);
                        a && a(), paramTemp = []
                    }
                } else {
                    a.indexOf("%") > 0 && (a = a.replace(/%/g, "%25"));
                    var s, o = decodeURIComponent(this.getVariable(a, "TEXT"));
                    if (document.getElementsByTagName("body")[0]) {
                        e ? (s = document.createElement("div"), s.style.visibility = "hidden", s.style.display = "none", document.getElementsByTagName("body")[0].appendChild(s)) : s = document.getElementsByTagName("body")[0];
                        try {
                            postscribe(s, o)
                        } catch (e) {
                            utis.error(e, "custom", o)
                        }
                    }
                }
            },
            checkTrigger: function(e, t) {
                var r = e.length;
                if (r)
                    for (var a = 0; a < r; a++) this.checkTriggerRule(e[a]) && e[a].isEnabled && this.checkTriggerSetting(e[a], t) && this.runTagWithTriggerId(e[a].id, t)
            },
            checkTriggerRule: function(e, t, r) {
                var a = t ? "autoSettingRule" : "rule";
                if (e[a].length) {
                    var i = 0,
                        n = e[a],
                        s = n.length;
                    if (s)
                        for (var o = 0; o < s; o++)
                            for (var l in this.variableData) {
                                var g;
                                if (n[o].variable_name === l) try {
                                    g = this.checkRule(n[o].operator, n[o].value, this.variableData[l], n[o].variable_name), i = g ? i + 1 : i
                                } catch (e) {
                                    var c = [n[o].operator, n[o].value, this.variableData[l], n[o].variable_name];
                                    utis.error(e, "rule", c)
                                }
                            }
                    return i === n.length ? (t && (this.triggers[r].isEnabled = !0), !0) : (t && (this.triggers[r].isEnabled = !1), !1)
                }
                return t && (this.triggers[r].isEnabled = !0), !0
            },
            checkTriggerSetting: function(e, t) {
                var r = e.type_name;
                return "PAGE_VIEW" === r || "DOM_READY" === r || "WINDOW_LOADED" === r || "CLICK_ELEMENT" === r || "HISTORY_CHANGE" === r || ("LINK_CLICK" === r ? this.checkLinkClickSetting(e, t) : "SCROLL_DEPTHS" === r ? this.checkScrollDepthSetting(e) : "CUSTOM_EVENT" === r ? this.checkCustomEventSetting(e) : "TIME_LOAD" === r && this.checkTimeLoadSetting(e))
            },
            runTagWithTriggerId: function(e, t, r) {
                var a = atmTriggers[e];
                if (a)
                    for (var i = a.length, n = 0; n < i; n++) {
                        var s = [],
                            o = a[n],
                            l = atmTags[o],
                            g = r || this.dataLayer.tagOption[o],
                            c = r || g[this.config.RESTART] || !g[this.config.RESTART] && utis.checkIndex(this.tagsFired, o) < 0;
                        if (c)
                            if (0 !== l.templateId && "custom" !== t) {
                                var u = atmTemplates[l.templateId].code,
                                    h = atmCodeLoad[atmTemplates[l.templateId].type_id];
                                h(), r ? this.runCode(!1, u, l.parameter) : this.runCode(g[this.config.DOCUMENT_WRITE], u, l.parameter), s.push(o), this.tagsFired.push(o)
                            } else if (0 === l.templateId && "template" !== t) {
                            u = l.code;
                            this.runCode(g[this.config.DOCUMENT_WRITE], u), s.push(o), this.tagsFired.push(o)
                        }
                        s.length && (atmDataLayer[atmDataLayer.length - 1].tagID = atmDataLayer[atmDataLayer.length - 1].tagID || [], atmDataLayer[atmDataLayer.length - 1].tagID = atmDataLayer[atmDataLayer.length - 1].tagID.concat(s))
                    }
            },
            checkRuleFunction: {
                CONTAINS: function(e, t) {
                    return "string" == typeof e ? e.indexOf(t) > -1 : utis.checkIndex(e, t) > -1
                },
                DOES_NOT_CONTAINS: function(e, t) {
                    return "string" == typeof e ? -1 == e.indexOf(t) : -1 == utis.checkIndex(e, t)
                },
                EQUALS: function(e, t) {
                    return e == t
                },
                DOES_NOT_EQUALS: function(e, t) {
                    return e != t
                },
                STARTS_WITH: function(e, t) {
                    return "string" == typeof e ? 0 == e.indexOf(t) : !!e.length && e[0] == t
                },
                DOES_NOT_START_WITH: function(e, t) {
                    return "string" == typeof e ? 0 != e.indexOf(t) : !!e.length && e[0] != t
                },
                ENDS_WITH: function(e, t) {
                    return "string" == typeof e ? e.indexOf(t) + t.length == e.length : !!e.length && e[e.length - 1] == t
                },
                DOES_NOT_END_WITH: function(e, t) {
                    return "string" == typeof e ? e.indexOf(t) + t.length != e.length : !!e.length && e[e.length - 1] != t
                },
                LESS_THAN: function(e, t) {
                    return e = Number(e), t = Number(t), !isNaN(e) && !isNaN(t) && e < t
                },
                LESS_OR_EQUAL: function(e, t) {
                    return e = Number(e), t = Number(t), !isNaN(e) && !isNaN(t) && e <= t
                },
                GREATER_THAN: function(e, t) {
                    return e = Number(e), t = Number(t), !isNaN(e) && !isNaN(t) && e > t
                },
                GREATER_OR_EQUAL: function(e, t) {
                    return e = Number(e), t = Number(t), !isNaN(e) && !isNaN(t) && e >= t
                },
                IS_EXISTS: function(e, t, r) {
                    if ("Has Element ID" === r) {
                        var a = document.getElementById(t);
                        return null !== a
                    }
                    if ("Has Cookie" === r) {
                        var i = utis.getCookie(t);
                        return void 0 !== i
                    }
                },
                MATCH_CSS_SELECTOR: function(e, t) {
                    if (!document.querySelectorAll) return !1;
                    var r = document.querySelectorAll(t);
                    if (ell = r.length, !ell || !e) return !1;
                    for (var a = 0; a < ell; a++)
                        if (r[a] == e) return !0;
                    return !1
                },
                DOES_NOT_MATCH_CSS_SELECTOR: function(e, t) {
                    if (!document.querySelectorAll) return !1;
                    var r = document.querySelectorAll(t),
                        a = r.length,
                        i = 0;
                    if (!a || !e) return !1;
                    for (var n = 0; n < a; n++) r[n] == e && i++;
                    return !i
                },
                MATCH_REGEX: function(e, t) {
                    return t = RegExp(t, "g"), "string" == typeof e && null !== e.match(t)
                },
                MATCH_REGEX_IGNORE_CASE: function(e, t) {
                    return t = RegExp(t, "gi"), "string" == typeof e && null !== e.match(t)
                },
                DOES_NOT_MATCH_REGEX: function(e, t) {
                    return t = RegExp(t, "g"), "string" == typeof e && null === e.match(t)
                },
                err: function() {
                    return !1
                }
            },
            checkRule: function(e, t, r, a) {
                return r = r || "", t = t || "", "number" == typeof r && (r = r.toString()), this.checkRuleFunction[e] && this.checkRuleFunction[e](r, t, a) || !1
            },
            setVariableType: {
                STRING: function(e, t) {
                    e.variableData[e.variables[t].name] = "string" == typeof e.variables[t].value ? e.variables[t].value : ""
                },
                DATA_LAYER: function(e, t) {
                    var r = utis.strToUni(e.variables[t].name);
                    e.variableData[e.variables[t].name] = e.dataLayer[e.config.DEFAULT].hasOwnProperty(r) ? e.dataLayer[e.config.DEFAULT][r] : ""
                },
                CUSTOM_DATALAYER: function(e, t) {
                    e.variableData[e.variables[t].name] = e.getCustomDataLayer(e.variables[t].value) || ""
                },
                DOM_TEXT: function(e, t) {
                    e.variableData[e.variables[t].name] = document.getElementById(e.variables[t].value)
                },
                COOKIE_VALUE: function(e, t) {
                    e.variableData[e.variables[t].name] = utis.getCookie(e.variables[t].value) || ""
                },
                ARRAY: function(e, t) {
                    try {
                        e.variableData[e.variables[t].name] = new Function("return " + e.variables[t].value)() || ""
                    } catch (r) {
                        e.variableData[e.variables[t].name] = [], utis.error(r, "variable", e.variables[t].value)
                    }
                },
                URL_QUERY: function(e, t) {
                    e.variableData[e.variables[t].name] = utis.getUrlParam(e.variables[t].value) || ""
                },
                JAVASCRIPT_VARIABLE: function(e, t) {
                    try {
                        e.variableData[e.variables[t].name] = new Function("return " + e.variables[t].value)() || void 0
                    } catch (r) {
                        e.variableData[e.variables[t].name] = void 0
                    }
                },
                Datalayer: function(e, t) {}
            },
            setVariable: function() {
                var e = this.variables.length;
                if (e)
                    for (var t = 0; t < e; t++) this.setVariableType[this.variables[t].type] && this.setVariableType[this.variables[t].type](this, t)
            },
            getVariable: function(e, t) {
                var r = e,
                    a = [];
                if ("" === r || null == r) return 0;
                if ("string" == typeof r && (a = utis.getFromBetween.get(r, "{{", "}}")), 0 === a.length && "TEXT" === t) return r;
                if (0 === a.length && "INTEGER" === t) return NaN !== parseFloat(r) ? parseFloat(r) : r;
                var i = a.length;
                if (i)
                    for (var n = 0; n < i; n++) "string" == typeof r && (r = r.replace("{{" + a[n] + "}}", this.variableData[a[n]])), "object" == typeof this.variableData[a[n]] && (r = this.variableData[a[n]]);
                return a = [], "TEXT" === t || "OBJECT" === t ? r : "INTEGER" === t ? NaN !== parseFloat(r) ? parseFloat(r) : r : void 0
            },
            triggerClassify: {
                PAGE_VIEW: function(e, t) {
                    e.triggers[t].rule.length ? (e.pvWithRule.push(e.triggers[t]), e.pageView.push(e.triggers[t])) : (e.pvNoRule.push(e.triggers[t].id), e.pageView.unshift(e.triggers[t]))
                },
                DOM_READY: function(e, t) {
                    e.doms.push(e.triggers[t])
                },
                WINDOW_LOADED: function(e, t) {
                    e.windowLoaded.push(e.triggers[t])
                },
                CLICK_ELEMENT: function(e, t) {
                    e.clickElements.push(e.triggers[t])
                },
                SCROLL_DEPTHS: function(e, t) {
                    e.scrollElements.push(e.triggers[t])
                },
                HISTORY_CHANGE: function(e, t) {
                    e.historyChanges.push(e.triggers[t])
                },
                JAVASCRIPT_ERROR: function(e, t) {
                    e.javascriptError.push(e.triggers[t])
                },
                ELEMENT_VISIBILITY: function(e, t) {
                    e.elementVisibility.push(e.triggers[t])
                },
                LINK_CLICK: function(e, t) {
                    e.justLink.push(e.triggers[t])
                },
                CUSTOM_EVENT: function(e, t) {
                    e.customEvents.push(e.triggers[t])
                },
                TIME_LOAD: function(e, t) {
                    e.timeLoad.push(e.triggers[t])
                },
                err: function() {}
            },
            setData: function(e) {
                this.triggers = e.trigger, this.tags = e.tag, this.variables = e.variable, this.templates = e.template, window.previewTags = this.tags, window.triggersList = this.triggers;
                for (var t = this.templates.length, r = this.tags.length, a = this.triggers.length, i = Math.max(t, r, a), n = 0; n < i; n++) {
                    if (n < t) {
                        var s = this.templates[n],
                            o = s.id;
                        atmTemplates[o] = {}, atmTemplates[o].code = s.code, atmTemplates[o].type_id = s.type_id, atmCodeLoad[s.type_id] = s.code_load
                    }
                    if (n < a && this.triggerClassify[this.triggers[n].type_name] && this.triggerClassify[this.triggers[n].type_name](this, n), n < r) {
                        var l = this.tags[n];
                        o = l.id;
                        atmTags[o] = {}, atmTags[o].templateId = l.template_id, atmTags[o].code = l.code, atmTags[o].parameter = l.parameter, atmTags[o].option = l.option;
                        for (var g = l.firing.length, c = 0; c < g; c++) atmTriggers[l.firing[c]] = atmTriggers[l.firing[c]] || [], 2 == l.template_id ? atmTriggers[l.firing[c]].unshift(o) : atmTriggers[l.firing[c]].push(o)
                    }
                }
            },
            checkAutoSettingRule: function() {
                var e = this.triggers.length;
                if (e)
                    for (var t = 0; t < e; t++) this.checkTriggerRule(this.triggers[t], !0, t)
            },
            runTriggerPageview: function() {
                window.atmError = window.atmError || [], this.dataLayerPush(), this.atmDataLayerPush({
                    event: "atm.pageView",
                    time: 1 * new Date
                });
                for (var e = this.pvNoRule, t = e.length, r = 0; r < t; r++) this.runTagWithTriggerId(e[r], "template", !0);
                this.checkAutoSettingRule(), this.checkTagOption(), this.checkTrigger(this.pvWithRule, "template")
            }
        },
        utis = {
            mergeObjects: function() {
                for (var e = {}, t = 0; t < arguments.length; t++)
                    for (x in arguments[t]) e[x] = arguments[t][x];
                return e
            },
            random: function() {
                return "_" + (Math.random() + 1 * new Date).toString(36).replace(".", "")
            },
            strToUni: function(e) {
                if ("" === e || null == e) return e;
                var t = e;
                t = t.toLowerCase(), t = t.replace(/\à|\á|\ạ|\ả|\ã|\â|\ầ|\ấ|\ậ|\ẩ|\ẫ|\ă|\ằ|\ắ|\ặ|\ẳ|\ẵ/g, "a"), t = t.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e"), t = t.replace(/ì|í|ị|ỉ|ĩ/g, "i"), t = t.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o"), t = t.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u"), t = t.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y"), t = t.replace(/đ/g, "d"), t = t.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g, " "), t = t.replace(/ + /g, " "), t = t.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "");
                for (var r = t.replace(/[^a-zA-Z ]/g, "").split(" "), a = r.length, i = 0; i < a; i++) r[i] = 0 === i ? r[i].toLowerCase() : r[i].charAt(0).toUpperCase() + r[i].slice(1).toLowerCase();
                return r.join("")
            },
            getCookie: function(e) {
                if (document.cookie && (e += "=", decodedCookie = document.cookie.split("; "), decodedCookie.length))
                    for (var t = 0; t < decodedCookie.length; t++) {
                        var r = decodedCookie[t].replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "");
                        if (0 === r.indexOf(e)) return r.substring(e.length, r.length)
                    }
            },
            getCustomDataLayer: function(str) {
                try {
                    var d = "atm.dataLayer." + str;
                    return eval(d)
                } catch (e) {
                    return void this.error(e)
                }
            },
            getFromBetween: {
                results: [],
                string: "",
                getFromBetween: function(e, t) {
                    if (this.string.indexOf(e) < 0 || this.string.indexOf(t) < 0) return !1;
                    var r = this.string.indexOf(e) + e.length,
                        a = this.string.substr(0, r),
                        i = this.string.substr(r),
                        n = a.length + i.indexOf(t);
                    return this.string.substring(r, n)
                },
                removeFromBetween: function(e, t) {
                    if (this.string.indexOf(e) < 0 || this.string.indexOf(t) < 0) return !1;
                    var r = e + this.getFromBetween(e, t) + t;
                    this.string = this.string.replace(r, "")
                },
                getAllResults: function(e, t) {
                    if (!(this.string.indexOf(e) < 0 || this.string.indexOf(t) < 0)) {
                        var r = this.getFromBetween(e, t);
                        this.results.push(r), this.removeFromBetween(e, t), this.string.indexOf(e) > -1 && this.string.indexOf(t) > -1 && this.getAllResults(e, t)
                    }
                },
                get: function(e, t, r) {
                    return this.results = [], this.string = e, null === e || "" === e || void 0 === e ? e : (this.getAllResults(t, r), this.results)
                }
            },
            getSettingValue: function(e, t) {
                for (var r = 0; r < e.length; r++)
                    if (e[r].key === t) return e[r].value
            },
            getUA: function() {
                var e, t = navigator.userAgent,
                    r = t.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
                return /trident/i.test(r[1]) ? (e = /\brv[ :]+(\d+)/g.exec(t) || [], "IE " + (e[1] || "")) : "Chrome" === r[1] && (e = t.match(/\b(OPR|Edge)\/(\d+)/), null != e) ? e.slice(1).join(" ").replace("OPR", "Opera") : (r = r[2] ? [r[1], r[2]] : [navigator.appName, navigator.appVersion, "-?"], null != (e = t.match(/version\/(\d+)/i)) && r.splice(1, 1, e[1]), r.join(" "))
            },
            sendLog: function(e, t) {},
            errorType: {
                element: function(e) {
                    return console.error("Error at clicked element"), e.target || void 0
                },
                rule: function(e) {
                    return console.error("Error at trigger's rule"), JSON.stringify(e)
                },
                variable: function(e) {
                    return console.error("Error at variables"), e
                },
                code: function(e) {
                    return console.error("Error at template code"), e.toString()
                },
                custom: function(e) {
                    return console.error("Error at custom code"), e
                },
                customevent: function(e) {
                    return console.error("Error at custom event"), JSON.stringify(e)
                },
                d: function(e) {
                    return console.error("Loi tag manager"), e
                }
            },
            error: function(e, t, r) {
                this.errorType[t] ? this.sendLog(e, this.errorType[t](r)) : this.sendLog(e, this.errorType.d(r)), window.atmError.push({
                    message: e.message,
                    stack: e.stack,
                    error: e
                })
            },
            checkIndex: function(e, t) {
                if (!e.length) return -1;
                if (Array.prototype.indexOf) return e.indexOf(t);
                for (var r = e.length, a = 0; a < r; a++)
                    if (e[a] === t) return a;
                return -1
            },
            getUrlParam: function(e) {
                for (var t = window.location.search.substring(1) || "", r = t.split("&"), a = r.length, i = 0; i < a; i++)
                    if (0 === r[i].indexOf(e)) return decodeURI(r[i].split("=")[1]) || "";
                return null
            },
            dupArr: function(e) {
                for (var t = [], r = 0; r < e.length; r++) t[r] = e[r];
                return t
            }
        },
        paramTemp = [],
        r = utis.random();
    window.atmRandomString = r;
    var getParameter = function(e, t) {
        var r = utis.getSettingValue(paramTemp, e);
        return "true" === t ? r ? r += "." : r = "" : "false" === t && (r = r || ""), r
    };;
    var d = {
        "tag": [{
            "id": 8241,
            "name": "Admicro Analytics",
            "code": "",
            "template_id": 6,
            "parameter": [{
                "key": "domain",
                "value": "nhapkhautrungquoc.vn",
                "type": "TEXT"
            }, {
                "key": "domain_id",
                "value": "6098",
                "type": "INTEGER"
            }],
            "option": [{
                "key": "canBeRestarted",
                "value": "true",
                "type": "BOOL"
            }, {
                "key": "useDocumentWrite",
                "value": "false",
                "type": "BOOL"
            }, {
                "key": "loadCoreAfter",
                "value": "false",
                "type": "BOOL"
            }],
            "dependence": [],
            "firing": [10611]
        }, {
            "id": 8242,
            "name": "Admicro Retareting",
            "code": "",
            "template_id": 8,
            "parameter": [{
                "key": "retargeting_id",
                "value": "9454",
                "type": "INTEGER"
            }],
            "option": [{
                "key": "canBeRestarted",
                "value": "true",
                "type": "BOOL"
            }, {
                "key": "useDocumentWrite",
                "value": "false",
                "type": "BOOL"
            }, {
                "key": "loadCoreAfter",
                "value": "false",
                "type": "BOOL"
            }],
            "dependence": [],
            "firing": [10611]
        }, {
            "id": 8243,
            "name": "Admicro Info",
            "code": "",
            "template_id": 14,
            "parameter": [],
            "option": [{
                "key": "canBeRestarted",
                "value": "true",
                "type": "BOOL"
            }, {
                "key": "useDocumentWrite",
                "value": "false",
                "type": "BOOL"
            }, {
                "key": "loadCoreAfter",
                "value": "false",
                "type": "BOOL"
            }],
            "dependence": [],
            "firing": [10611]
        }],
        "trigger": [{
            "type_name": "PAGE_VIEW",
            "id": 10611,
            "setting": [],
            "autoSettingRule": [],
            "rule": []
        }, {
            "type_name": "DOM_READY",
            "id": 10612,
            "setting": [],
            "autoSettingRule": [],
            "rule": []
        }, {
            "type_name": "WINDOW_LOADED",
            "id": 10613,
            "setting": [],
            "autoSettingRule": [],
            "rule": []
        }],
        "variable": [{
            "name": "Click ID",
            "type": "DATA_LAYER"
        }, {
            "name": "Has Cookie",
            "type": "DATA_LAYER"
        }, {
            "name": "Visitor Number",
            "type": "DATA_LAYER"
        }, {
            "name": "Page URL",
            "type": "DATA_LAYER"
        }, {
            "name": "Click URL",
            "type": "DATA_LAYER"
        }, {
            "name": "Click Classes",
            "type": "DATA_LAYER"
        }, {
            "name": "Click Element",
            "type": "DATA_LAYER"
        }, {
            "name": "Form Classes",
            "type": "DATA_LAYER"
        }, {
            "name": "Form Element",
            "type": "DATA_LAYER"
        }, {
            "name": "Form ID",
            "type": "DATA_LAYER"
        }, {
            "name": "Has Element ID",
            "type": "DATA_LAYER"
        }, {
            "name": "Form URL",
            "type": "DATA_LAYER"
        }, {
            "name": "Page Path",
            "type": "DATA_LAYER"
        }, {
            "name": "Page Hostname",
            "type": "DATA_LAYER"
        }, {
            "name": "Click Text",
            "type": "DATA_LAYER"
        }, {
            "name": "Referrer",
            "type": "DATA_LAYER"
        }, {
            "name": "Scroll Depth Units",
            "type": "DATA_LAYER"
        }],
        "template": [{
            "name": "Tracking PageView",
            "id": 6,
            "type_id": 4,
            "code": function() {
                window.admicro_analytics_q = window.admicro_analytics_q || [];
                window.admicro_analytics_q.push({
                    event: "pageviews",
                    domain: getParameter('domain'),
                    id: +getParameter('domain_id')
                });
            },
            "code_load": function() {
                window['admicroAnalyticsObject'] = 'admicro_analytics';
                window['admicro_analytics'] = window['admicro_analytics'] || function() {
                    (window['admicro_analytics_q'] = window['admicro_analytics_q'] || []).push(arguments);
                };
                window['admicro_analytics'].t = 1 * new Date();
                var a = document.createElement("script");
                a.type = "text/javascript";
                a.async = !0;
                a.src = "//static.amcdn.vn/core/analytics.js";
                var b = document.getElementsByTagName("script")[0];
                b.parentNode.insertBefore(a, b);
            }
        }, {
            "name": "Retargeting",
            "id": 8,
            "type_id": 5,
            "code": function() {
                window.admicro_cpa_q = window.admicro_cpa_q || [];
                window.admicro_cpa_q.push({
                    event: "retargeting",
                    id: getParameter('retargeting_id')
                });
            },
            "code_load": function() {
                var a = ["//static.amcdn.vn/cpa/amc-core.min.js"];
                for (var i = 0; i < a.length; i++) {
                    var b = document.createElement("script");
                    b.type = "text/javascript";
                    b.async = !0;
                    b.src = a[i];
                    var c = document.getElementsByTagName("script")[0];
                    c.parentNode.insertBefore(b, c);
                }
            }
        }, {
            "name": "Tracking Admicro Info",
            "id": 14,
            "type_id": 9,
            "code": function() {},
            "code_load": function() {
                function getinfoAdm() {
                    var k = function() {
                            try {
                                if (!("localStorage" in window) || null === window.localStorage) return !1;
                                try {
                                    localStorage.setItem("_admstorage", ""), localStorage.removeItem("_admstorage")
                                } catch (a) {
                                    return !1
                                }
                                return !0
                            } catch (a) {
                                return !1
                            }
                        }(),
                        e = {
                            version: "1.0.0",
                            paramFlash: {},
                            lcStorage: {
                                timestamp: "timestamp_",
                                get_exprises: function(a, c, d, b) {
                                    return c = (a += "").indexOf(c, d), d = a.length - 1, -1 != c ? (-1 == (b = a.indexOf(b, c)) && (b = d), a.substring(c, b)) : ""
                                },
                                get_item: function(a, c) {
                                    var d, b = localStorage.getItem(a),
                                        f = (new Date).getTime(),
                                        g = this.timestamp;
                                    return "" == b || null == b ? "" : -1 == b.indexOf("timestamp_") ? b : (endchar = "_azs" == a ? ";" : ",", "" == (d = (d = this.get_exprises(b, g, 0, endchar)).replace(g, "")) || isNaN(parseInt(d)) || parseInt(d) < f ? "" : b.replace(g + d + endchar, ""))
                                }
                            },
                            getCookie: function(a) {
                                try {
                                    return 0 < document.cookie.length && (c_start = document.cookie.indexOf(a + "="), -1 != c_start) ? (c_start = c_start + a.length + 1, c_end = document.cookie.indexOf(";", c_start), -1 == c_end && (c_end = document.cookie.length), unescape(document.cookie.substring(c_start, c_end))) : ""
                                } catch (c) {
                                    return ""
                                }
                            },
                            get: function(a) {
                                var c = "",
                                    d = "";
                                if ("__ui" != a && "__uid" != a && "__create" != a || (d = a, a = "__uif"), k ? ("__R" != a && "__RC" != a && "__uif" != a && "__create" != a && "__uid" != a || (c = this.getCookie(a)), null != c && "" != c || (c = this.lcStorage.get_item(a))) : c = this.getCookie(a), "" != d && "" != c)
                                    for (var b = 0, f = (a = c.split("|")).length; b < f; b++)
                                        if (-1 != a[b].indexOf(d + ":")) {
                                            c = a[b].replace(d + ":", "");
                                            break
                                        } return c
                            },
                            getParam: function() {
                                try {
                                    var a = document.domain + "",
                                        c = "";
                                    !i.any() || "toquoc.vn" != a && "truyenhinhvov.vn" != a && "sport5.vn" != a || (a = "m." + a);
                                    void 0 !== r[a] && (c = "&dmi=" + r[a]);
                                    var d = this.get("__create") || this.getCookie("__create"),
                                        b = this.get("__uid") || this.getCookie("__uid");
                                    return 30 < b.length && (b = ""), "" == b && (d = ""), 11 < d.length && "" != b && (d = Math.floor((new Date).getTime() / 1E3)), "&ce=1&lc=" + this.get("__RC") + "&cr=" + d + "&ui=" + b + "&dg=" + (this.get("__uidac") || this.getCookie("__uidac")) + c
                                } catch (f) {
                                    return ""
                                }
                            },
                            getInfoParam: function() {
                                return "&ce=1&guie=1&__uid=" + this.get("__uid") + "&__create=" + this.get("__create")
                            }
                        },
                        h = 0;
                    try {
                        h = admicro_analytics_q[0].id
                    } catch (a) {}
                    return {
                        uid: e.get("__uid") || e.getCookie("__uid"),
                        dg: e.get("__uidac") || e.getCookie("__uidac"),
                        lc: e.get("__RC") || e.getCookie("__RC"),
                        dmn: top.location.hostname,
                        ce: 1,
                        cr: e.get("__create") || e.getCookie("__create"),
                        p: top.location.pathname,
                        dmi: h,
                        domainlog: "contineljs.com"
                    }
                }
                window.getinfoAdm = getinfoAdm;
            }
        }]
    };
    atm.setData(d);
    var s = window.location.search;
    if (s.indexOf("atm_preview") > 0) {
        window._atm_debug_ = true;
        var m = new RegExp("[?&]uid=([^&#]*)").exec(s);
        if (document.currentScript) {
            var d = document.currentScript.src,
                w = document.getElementsByTagName("script")[0],
                g = document.createElement("script");
            d = d.replace("corejs", "previewjs");
            var u = s.indexOf("atm_debug") > 0 ? "debug" : (new Date) * 1;
            return d = d.replace(".js", m[1] + ".js?" + u), g.src = d, g.async = !0, void w.parentNode.insertBefore(g, w)
        }
        alert("Trinh duyet khong ho tro preview")
    };
    atm.runTriggerPageview();;;;;;;;;;;
    window.atmEndTime = (new Date) * 1;
    atm.init();
})();