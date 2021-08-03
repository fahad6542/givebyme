/* 
 * Added by Fahad
 * fields must match the database  * 
 */
/* AUTOMATED FILE. DO NOT EDIT. */
function once(t) {
    var e = self[t];
    return self[t] = function() {
        return self[t] = function() {
            return e
        }, e = e.apply(this, arguments)
    }
}

function chain() {
    var t = Array.prototype.slice.call(arguments);
    return function() {
        var e = arguments;
        t.forEach(function(t) {
            e = t.apply(this, e)
        }, this)
    }
}

function multi() {
    var t = Array.prototype.slice.call(arguments),
        e = function() {
            var e = arguments,
                n = this;
            t.forEach(function(t) {
                t.apply(this, e)
            }, n)
        };
    return e.add = function(n) {
        return t.push(n), e
    }, e
}

function when(t) {
    var e, n = setInterval(function() {
        self[t] && (e(), clearInterval(n))
    }, 20);
    return {
        run: function(t) {
            e = t
        }
    }
}

function template_parse(t) {
    self.Tpl = self.Tpl || {};
    var e = {};
    if (0 === arguments.length) return $("#template script").each(function() {
        e[$(this).data("id")] = _.template(this.innerHTML)
    }), _.extend(Tpl, e), e
}

function debounce(t, e, n) {
    var i;
    return function() {
        var a = this,
            o = arguments,
            r = function() {
                i = null, n || t.apply(a, o)
            },
            s = n && !i;
        clearTimeout(i), i = setTimeout(r, e), s && t.apply(a, o)
    }
}

function lazyLoadImages() {
    $("img.lazy").lazyload({
        effect: "fadeIn"
    })
}

function setTrackingProperty(t, e) {}

function trackEvent(t, e) {}

function splitFullName(t) {
    var e, n = [];
    return e = t.split(" "), n.first_name = e.slice(0, e.length - 1).join(" "), n.last_name = e.slice(-1).join(" "), n
}

function splitargs(t) {
    var e = {};
    return _.each(t.split("&"), function(t) {
        var n = t.split("=");
        e[n[0]] = n[1]
    }), e
}

function joinargs(t) {
    var e = [];
    for (var n in t) e.push([n, t[n]].join("="));
    return e.join("&")
}

function map2tuple(t) {
    var e = [];
    for (var n in t) e.push([n, t[n]]);
    return e
}

function tuple2map(t) {
    for (var e = {}, n = 0; n < t.length; n++) e[t[n][0]] = t[n][1];
    return e
}

function validateUrl(t) {
    var e = new RegExp(/(^https?:\/\/[a-z0-9-_.]+\.|^[a-z0-9-_.]+\.)[a-z]{2,4}([\/?].*)?$/i);
    return e.test(t)
}

function validateEmail(t) {
    var e = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return e.test(t)
}

function validatePassword(t) {
    return !(t.length < 8) && (valid = !0, !0)
}

function signupRedirect(t, e, n) {
    $.ajax({
        url: "/user/setRedirectAction",
        type: "post",
        data: {
            redirect_page: t,
            redirect_action: e,
            redirect_value: n,
            redirect_path: "/user/signup"
        },
        success: function(t) {
            window.location = t
        }
    })
}

function setRedirect(t, e, n, i, a, o) {
    $.ajax({
        url: "/user/setRedirectAction",
        type: "post",
        data: {
            redirect_page: t,
            redirect_action: e,
            redirect_value: n,
            redirect_path: i,
            redirect_return_action: a,
            redirect_return_value: o
        },
        success: function(t) {
            window.location = t
        }
    })
}

function injectGoogleTagManager() {
    ! function(t, e, n, i, a) {
        t[i] = t[i] || [], t[i].push({
            "gtm.start": (new Date).getTime(),
            event: "gtm.js"
        });
        var o = e.getElementsByTagName(n)[0],
            r = e.createElement(n),
            s = "dataLayer" != i ? "&l=" + i : "";
        r.async = !0, r.src = "https://www.googletagmanager.com/gtm.js?id=" + a + s, o.parentNode.insertBefore(r, o)
    }(window, document, "script", "dataLayer", "GTM-MRZSMP")
}

function showPopup(t, e, n) {
    var i = "popup-" + t,
        a = "#" + i;
    if (_.isObject(e) ? (n = e, e = n.addPopupClass) : n = n || {}, document.getElementById(i) || console.log("Can't find popup id " + a + ". Running the code anyway."), n.template)
        for (var o in n.template) $("." + o.replace(/^\./, ""), a).html(n.template[o]);
    return $(a).fadeIn("fast"), "undefined" != typeof e && $(a).addClass(e), $(a)
}

function hidePopup(t) {
    t ? $("#popup-" + t).fadeOut("fast") : $(".fixed-popup").fadeOut("fast")
}

function closePopupClicks() {
    $("body").on("click", ".fixed-popup", function(t) {
        var e = $(t.target);
        if (e.hasClass("dismissable") || e.hasClass("close") || e.hasClass("icon-close") || e.hasClass("btn-close")) return hidePopup(), !1
    })
}

function req(t, e, n) {
    req[t] = self[e] || req[t] || (document.body.appendChild(document.createElement("script")).src = t);
    var i = setInterval(function() {
        self[e] && (n(e), clearInterval(i))
    }, 20)
}

function add_js(t, e) {
    e = e || {}, add_js[t] || ($("<script />").attr($.extend(e, {
        async: "true",
        type: "text/javascript",
        src: t
    })).appendTo(document.body), add_js[t] = !0)
}

function stub() {
    var t = {};
    return _.each(_.toArray(arguments), function(e) {
        t[e] = function(n) {
            return _.isFunction(n) ? (t[e].cb.push(n), t) : _.map(t[e].cb, function(t) {
                t(n)
            })
        }, t[e].cb = []
    }), t
}

function fb_login(t) {
    FB.login(function(e) {
        if ("connected" === e.status) {
            var n = e.authResponse.userID,
                i = e.authResponse.accessToken;
            processFacebookAuth(n, i)
        }
        "undefined" != typeof t && t()
    }, {
        scope: "email,user_friends"
    })
}

function loadGlobalRedactor(t) {
    var e = ["endContainer", "endOffset", "startContainer", "startOffset"];
    $(".js-redactor").data("redactor") || $(".js-redactor").each(function() {
        var t = this.id || this.getAttribute("name"),
            n = {
                initCallback: function() {
                    this.lastRange = {}, this.doRestore = !1, _redactors[t] = this
                },
                uploadCrossDomain: !0,
                imageUpload: "/company/uploadCustomCompanyImage/" + $("#company_id").val(),
                minHeight: 300,
                maxHeight: 800,
                buttons: ["formatting", "|", "orderedlist", "unorderedlist", "alignment", "|", "bold", "italic", "underline", "|", "|", "image"]
            };
        $(this).redactor(n);
        var i = _redactors[t];
        i.focus = function(t) {
            return (i.doRestore || t) && (i.range.setStart(i.lastRange.startContainer, i.lastRange.startOffset), i.range.setEnd(i.lastRange.endContainer, i.lastRange.endOffset), i.doRestore = !1), i.range
        }, i.$editor.mousedown(function() {
            i.doRestore = !1
        }).blur(function() {
            $.each(e, function(t, e) {
                i.lastRange[e] = i.range[e]
            }), i.doRestore = !0
        });
        var a = i.$editor;
        a._focus = a.focus, a.focus = function() {
            a._focus(), i.focus()
        }
    })
}

function attachDateControls(t) {
    t = t || ".js-currently-date", $(t).on("focus", function() {
        if ($(this).siblings(".field-helper").hide(), !$(this).hasClass("hasDatepicker")) {
            var t = $(this).data("range") || "2015:2018";
            $(this).datepicker({
                yearRange: t,
                beforeShow: function(t, e) {
                    $("#ui-datepicker-div").addClass("datepicker-yyyy-mm-dd")
                }
            }).show()
        }
    })
}

function processFacebookAuth(t, e) {
    $("#loading").show(), FB.api("/me?fields=id,email,first_name,last_name", function(n) {
        var i = n;
        return i && i.email && "" != i.email.trim() ? void $.ajax({
            url: "/auth/authFacebook",
            type: "POST",
            data: {
                facebookId: t,
                token: e,
                user: i
            }
        }).done(function(t) {
            var e = window.location.pathname;
            t && e.indexOf("contribution") === -1 ? window.location.href = t : (window.location.hash = "", window.location.reload())
        }) : (alert('Please grant email permission to continue. Go to https://www.facebook.com/settings?tab=applications and remove Crowdfunder from the "Logged In With Facebook" section before you try again.'), window.location.reload(), !1)
    })
}

function requestQualification(t) {
    $.post("/user/request-qualification", function(e) {
        "ok" == e.result && (t.text("Qualification Requested"), t.attr("disabled", !0), $(t).closest(".popup-inner").find(".skip-qualification-request-btn").remove())
    })
}

function saveInvestorPhoneNumber(t, e) {
    $.ajax({
        type: "POST",
        url: "/user/saveInvestorPhoneNumber",
        data: {
            phone: e
        }
    }).done(function(e) {
        return clearErrorMessage(), parseddata = $.parseJSON(e), parseddata.result ? ($(t).closest(".popup-inner").find(".js-phone-field").remove(), requestQualification(t)) : $.each(parseddata.fields, function(t, e) {
            if (!e.status) {
                var n = $(e.message_target);
                displayFieldMessage(n, e.message)
            }
        }), !1
    })
}
var crowdfunder = [],
    _fmt = {},
    server_environment = "development";
"www.crowdfunder.com" === window.location.host && (server_environment = "production"), String.prototype.ucfirst = function() {
    return this.charAt(0).toUpperCase() + this.slice(1)
}, _fmt.money = _fmt.money || function() {
    var t = .12. toLocaleString().charAt(1),
        e = "." === t ? "," : ".";
    return function(n, i) {
        if (_.isString(n) && ("$" == n.charAt(0) || "$" == n.charAt(1))) return n;
        var a, o = parseFloat(n, 10),
            r = o < -.005;
        return r || (o = Math.abs(o)), a = o.toFixed(2).slice(+r), 0 === o ? "txt" == i ? "$0.00" : "&mdash;" : (r ? "-$" : "$") + a.slice(0, -3).replace(/(?=(?!^)(?:\d{3})+(?!\d))/g, e) + t + a.slice(-2)
    }
}(), _fmt.email = function(t) {
    return t.indexOf("a href=") !== -1 ? t : '<a href="mailto:' + t + '">' + t + "</a>"
};
var server_environment = "development";
"www.crowdfunder.com" === window.location.host && (server_environment = "production"), $(".is-money").keydown(function(t) {
    var e = t.which ? t.which : t.keyCode;
    return !(46 != e && 110 != e && 190 != e && e > 31 && (e < 48 || e > 57) && (e < 96 || e > 105))
}).blur(function() {
    $(this).formatCurrency({
        colorize: !1,
        negativeFormat: "-%s%n",
        roundToDecimalPlace: 2,
        symbol: ""
    })
}), $(".is-percent").keydown(function(t) {
    var e = t.which ? t.which : t.keyCode;
    return !(46 != e && 110 != e && 190 != e && e > 31 && (e < 48 || e > 57) && (e < 96 || e > 105))
}), $(".is-numeric").keydown(function(t) {
    var e = t.which ? t.which : t.keyCode;
    return !(46 != e && 110 != e && 190 != e && e > 31 && (e < 48 || e > 57) && (e < 96 || e > 105))
}), $(".noKeyDown").keydown(function(t) {
    return !1
});
var country_list;
$(document).ready(function() {
    injectGoogleTagManager(), $("#popup-follow-similar-investors-message").on("click", ".follow-similar-investor-btn, .skip-similar-investor-btn, .close", function() {
        $.ajax({
            url: "/followed-similar-investors",
            type: "post"
        })
    }), $(".email-not-verified-banner").on("click", ".resend-email-confirmation.resend-active", function() {
        var t = $(this);
        $.ajax({
            url: "/resend-email-verification",
            type: "post",
            data: {
                user_id: t.data("user-id")
            }
        }), $(t).html("Sent! Check your inbox").css("background-color", "#00b4cd").removeClass("resend-active")
    }), $(".plan-expired").on("click", ".expired-banner-close", function() {
        $(".plan-expired").hide(), $.ajax({
            url: "/legacy-plan-expired",
            type: "post"
        })
    }), lazyLoadImages(), "undefined" != typeof displayModal && (showPopup(displayModal), displayModal = null), $(document).on("submit", "form.form-user-login, form#signup-login-form", function(t) {
        var e = "Please enter your email and password to login. New User? Create your free crowdfunder account on our signup page.",
            n = !1,
            i = {};
        return $.each($(this).serializeArray(), function(t, e) {
            i[e.name] = $.trim(e.value)
        }), i.email && i.password && (validateEmail(i.email) ? (n = !0, $.ajax({
            url: "/user/validateLogin",
            type: "post",
            dataType: "json",
            data: i,
            success: function(t) {
                t.result && t.redirect_page ? (t.user_id && t.user_member_type && setTrackingProperty("Member Type", t.user_member_type), window.location = t.redirect_page) : (t.require_captcha && $(".js-cf-login-captcha").show(), e = t.message, displayErrorMessage(Array(e), ".login-error"), $(".login-error").addClass(".message_type"))
            }
        })) : e = "Invaild Email Address"), n || displayErrorMessage(Array(e), ".login-error"), !1
    }), $("#header-main .nav .raise a").on("click", function() {
        var t = "Button Click - Nav Bar: " + $(this).text();
        _gaTracker("send", "event", "User Signup", t, window.location.href)
    }), $("#nav-login").click(function() {
        return $("#header-login").dialog({
            dialogClass: "header-login s2014",
            width: 710,
            draggable: !1,
            resizable: !1,
            modal: !1,
            position: {
                my: "right+48 top+15",
                at: "center bottom",
                of: "#nav-login"
            },
            open: function(t, e) {
                clearErrorMessage()
            },
            close: function(t, e) {
                clearErrorMessage()
            }
        }), !1
    }), $(".close-login").click(function() {
        return $("#header-login").dialog("close"), !1
    }), $(".debug-switch").click(function() {
        var t = $(this).attr("debug-state"),
            e = "true" != t;
        $.post("/site/switchDebugMode", {
            debug_mode: e
        }, function(t) {
            $(".debug-switch").attr("debug-state", t), "false" == t ? ($(".debug-enable").removeClass("hidden"), $(".debug-disable").addClass("hidden")) : "true" == t && ($(".debug-enable").addClass("hidden"), $(".debug-disable").removeClass("hidden"))
        })
    }), $("#header-main #login").click(function() {
        _gaTracker("send", "event", "Login", "Login Attempt", "Top Navigation")
    }), $("#header-main .accredited-signin a").click(function() {
        _gaTracker("send", "event", "User Signup", "Signup Attempt", "Signup Link - Top Navigation")
    });
    var t = $("#header-notifications"),
        e = $("#notification-panel"),
        n = ($("#notification-panel ul"), function() {
            return e.is(":visible")
        });
    $("#notification-button").on("click", function() {
        return n() ? a() : i(), !1
    }), $(document).on("click", function() {
        n() && a()
    });
    var i = function() {
            e.fadeIn(100), t.addClass("active")
        },
        a = function() {
            e.fadeOut(50), t.removeClass("active")
        };
    $(".mobile-menu-btn").on("click", function() {
        $(".nav").toggleClass("show")
    }), $("#account-link").on("click", function() {
        if ($(".mobile-menu-btn").is(":visible")) return $("#logged_in_dropdown").toggleClass("show"), !1
    }), $(".js-raise-capital").on("click", function() {
        return $("#popup-select-company").length > 0 ? (showPopup("select-company", "dismissable"), !1) : void _gaTracker("send", "event", "User Signup", "Signup Attempt", "Signup Link - Raise Capital")
    }), $(".country-location-lookup").length > 0 && $.get("/geo/getCountryList", function(t) {
        country_list = JSON.parse(t)
    }), $(".location-lookup").on("blur", function() {
        if ("" == $(this).val().trim()) $(this).attr("data-locationid", ""), $(this).val(""), $(this).siblings(".location_label").val(""), $(this).siblings(".location_id").val(""), $(this).siblings(".location_state").val(""), $(this).siblings(".location_city").val(""), $(this).siblings(".location_country").val(""), $(this).siblings(".location_country_name").val(""), $(this).siblings(".location_country_id").val("");
        else if ("" == $(this).attr("data-locationid")) {
            var t = $(this).siblings(".location_id").val(),
                e = $(this).siblings(".location_state").val(),
                n = $(this).siblings(".location_city").val(),
                i = $(this).siblings(".location_country").val(),
                a = (n ? n : "") + (e ? ", " + e : "") + (i ? ", " + i : "");
            if (!a) var a = $(this).siblings(".location_label").val();
            $(this).attr("data-locationid", t), $(this).val(a)
        }
        var o = $(this).siblings(".location_country_id").val(),
            r = $(this).siblings(".location_country_name").val();
        if ("" != o && $(this).parents("fieldset").find(".country_location_id").val() != o) {
            var s = $(this).parents("fieldset").find(".country-location-lookup");
            s.attr("data-locationid", o), s.siblings(".country_location_id").val(o), s.siblings(".location_country").val(r), s.val(r)
        }
    }), $(".country-location-lookup").on("blur", function() {
        if ("" == $(this).attr("data-locationid") || "" == $(this).val()) {
            var t = $(this).siblings(".location_country").val();
            $(this).attr("data-locationid", $(this).siblings(".country_location_id").val());
            var e = t;
            $(this).val(e)
        }
        if ($(this).parents("fieldset").find(".location_country_id").val() != $(this).attr("data-locationid")) {
            var n = $(this).parents("fieldset").find(".location-lookup");
            n.attr("data-locationid", ""), n.val(""), n.siblings(".location_id").val(""), n.siblings(".location_state").val(""), n.siblings(".location_city").val(""), n.siblings(".location_country").val(""), n.siblings(".location_country_name").val(""), n.siblings(".location_country_id").val("")
        }
    }), getCountries = function(t, e) {
        var n, i = [],
            t = t.toUpperCase(),
            a = t.split(" ");
        $.each(country_list, function(t, e) {
            if (n = !1, $.each(a, function(t, i) {
                    if (i = i.trim(), "" != i) return e.short_name.toUpperCase().indexOf(i) > -1 || e.long_name.toUpperCase().indexOf(i) > -1 ? void(n = !0) : (n = !1, !1)
                }), n && i.push(e), 17 === i.length) return !1
        }), e(i)
    }, closePopupClicks()
}), $(function() {
    $(".popup-link").click(function() {
        var t, e = $(this).data("popup"),
            n = $(this).data("yes");
        e && (t = showPopup(e), n && $(".button-yes", t).attr("href", n))
    }), $(".post-then-reload").click(function() {
        var t = $(this).data("href");
        t && remote.post(t).always(function() {
            window.location.reload()
        })
    })
}), "production" == server_environment && (_linkedin_data_partner_id = "27991", function() {
    var t = document.getElementsByTagName("script")[0],
        e = document.createElement("script");
    e.type = "text/javascript", e.async = !0, e.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js", t.parentNode.insertBefore(e, t)
}()), crowdfunder.scrollTo = function(t, e) {
    if (!$(t).hasClass("ui-accordion-header")) {
        var n = $(t).parents(".ui-accordion-content").prev(".ui-accordion-header");
        0 == n.length && (n = $(t).prev(".ui-accordion-header")), n.length > 0 && n.click()
    }
    t && $(t).length && $("html, body").animate({
        scrollTop: $(t).offset().top - 90
    }, function() {
        "function" == typeof e && e()
    }), t || $("html, body").animate({
        scrollTop: 0
    }, function() {
        "function" == typeof e && e()
    })
}, $.fn.clearForm = function() {
    return this.find("*").each(function() {
        var t = this.type,
            e = this.tagName.toLowerCase();
        return "form" == e ? $(":input", this).clearForm() : ("redactor-editor" == this.className && (this.innerText = ""), void("text" == t || "password" == t || "textarea" == e ? (this.value = "", this.text = "", void 0 != this.dataset.defaultValue && (this.value = this.dataset.defaultValue)) : "checkbox" == t || "radio" == t ? (this.checked = this.defaultChecked, "undefined" != typeof this.labels && $(this.labels[0]).removeClass("checked"), 1 != this.defaultChecked ? $(this).removeAttr("checked") : "undefined" != typeof this.labels && $(this.labels[0]).addClass("checked")) : "select" == e ? this.selectedIndex = 0 : "img" == e && void 0 != this.dataset.placeholderSrc ? this.src = this.dataset.placeholderSrc : void 0 != this.dataset.defaultProperty && (this.attributes[this.dataset.defaultProperty] = this.dataset.defaultProperty)))
    })
};
var remote = function() {
        function t(n, i, a, o) {
            e.lock = !0, _.isArray(n) && (n = n.join("/")), n = (e.base + n).replace(/^\/+/, "/"), $[a || "post"](n, i, function(t) {
                t.res || t.result ? o.then(t.data) : o.fail("data" in t ? t.data : t)
            }, "json").fail(o.fail).always(function() {
                if (e.ix++, console.log("r:" + n + (void 0 === i ? "" : ":" + JSON.stringify(i))), e.lock = !1, o.always(), e.queue.length) {
                    var a = e.queue.shift();
                    t.apply(this, a)
                }
            })
        }

        function e(e, n, i) {
            var a = stub("then", "fail", "always");
            return t(e, n, i, a), a
        }
        return e.base = "", e.queue = [], e.lock = !1, e.ix = 0, $.each(["get", "post", "delete", "put", "patch"], function(t, n) {
            e[n] = function(t, i, a) {
                return e(t, i, n, a)
            }
        }), e
    }(),
    _redactors = {},
    ajaxInput = function() {
        function t(t) {
            var n = e[t],
                i = n.dom,
                a = $(i).val(),
                o = n.ix++;
            "last" in n && n.last === a || (n.last = a, _.each(n.cb, function(t) {
                t(a, o)
            }))
        }
        var e = {},
            n = 0;
        return function(i, a) {
            var o = n++;
            return 0 === arguments.length ? e : (_.isString(i) && (o = i), e[o] || (e[o] = {
                dom: i,
                cb: [],
                ix: 0,
                last: "",
                timeout: 300
            }, e[o].poll = setInterval(function() {
                e[o].handler || t(o)
            }, e[o].timeout), $(i).on("keydown keyup", function() {
                var n = e[o];
                n.handler && (clearTimeout(n.handler), delete n.handler), n.handler = setTimeout(function() {
                    t(o), delete n.handler
                }, n.timeout)
            })), void e[o].cb.push(a))
        }
    }();
once("processFacebookAuth"),
    function() {
        var t = function() {
            if ("undefined" != typeof cf_adroll_tracking && cf_adroll_tracking && !cf_adroll_loaded) return void setTimeout(t, 500);
            var e = $("#js_redirect_to_url");
            e.length > 0 && "undefined" != e.val() && (window.location = e.val())
        };
        window.addEventListener ? window.addEventListener("load", t, !1) : window.attachEvent("onload", t)
    }(), $(document).on("click", ".js-show-request-qualification-popup", function(t) {
        t.preventDefault(), showPopup("qualification-request")
    }), $(document).on("click", "#js-request-qualification", function(t) {
        var e = $(this);
        return $(this).closest(".popup-inner").find("input[name=investor_phone_number]").length > 0 ? (saveInvestorPhoneNumber(e, $(this).closest(".popup-inner").find("input[name=investor_phone_number]").val()), !1) : (requestQualification(e), !1)
    });

