function saveResult(e) {
    $.ajax({
        url: e + "&save=1&random_seed=" + random_seed,
        success: function(e) {
            browse_id = e
        }
    })
}

function buildURI(e, t, o) {
    "filter-category" == e ? buildCategoryURI(t, o) : "filter-industry" == e ? buildIndustryURI(t, o) : "filter-sort" == e && buildSortURI(t, o), createURI()
}

function buildSortURI(e, t) {
    sorts.indexOf(e);
    sorts = [], sorts.push(e)
}

function createURI(e, t) {
    var o = $(".browse-keywords-item"),
        a = void 0 == $("#browse-name-search").val() ? "" : $("#browse-name-search").val().trim(),
        i = $(".location-item");
    1 === o.length && e;
    var r = $(".sort_by.selected").data("sort-by");
    o.length > 1 && e && (active_tab = void 0);
    var n = $(".browse-filter-form").find(".industry:checkbox:checked"),
        s = $(".browse-filter-form").find(".deal_type:checkbox:checked"),
        l = $(".browse-filter-form").find(".stage:checkbox:checked"),
        c = $(".browse-filter-form").find(".js-funded:checkbox:checked").length > 0,
        d = active_tab,
        u = $(".browse-filter-form").find('input[name="static_location"]:checked'),
        f = $(".browse-tabs").find("li.ui-tabs-active").data("tab-id");
    if (d = "?q=filter", "undefined" == typeof active_tab || r || browseAlert || a) {
        if ("undefined" != typeof f && (d += "&ft=" + f), browseAlert && (d += "&alert=1"), sorts.length > 0) {
            var h = encodeURIComponent(sorts);
            d += "&order_by=" + h
        }
        if (r && (d += "&sort_by=" + r), search_term && search_term.length > 0 && !t && (d += "&search_term=" + encodeURIComponent(search_term)), a && a.length > 0 && "" != a && e !== a && !t && (d += "&search_term=" + encodeURIComponent(a)), c && "funded" != e && !t && (d += "&funded=1"), n && n.length > 0 && !t) {
            var m = [];
            $.each([n], function() {
                $.each($(this), function() {
                    var t = encodeURIComponent($(this).data("industry-id"));
                    t != e && t != custom_industry && m.indexOf(t) == -1 && m.push(t)
                })
            }), m.length > 0 && (d += "&industry=" + m.join())
        }
        var p = [];
        if (custom_location && custom_location.length > 0 && custom_location != e && !t && (p.push(encodeURIComponent(custom_location)), $("#location_id").attr("value", "")), (u && u.length > 0 || i && i.length > 0) && !t && $.each([i, u], function() {
                $.each($(this), function() {
                    if ($(this).find(".js-keyword-delete").length > 0) var t = $(this).find(".js-keyword-delete").data("keyword");
                    else var t = $(this).data("location_id");
                    var o = $(".browse-filter-form").find('input[data-location_id="' + t + '"]');
                    t != e && t != custom_location && p.indexOf(t) == -1 && (0 == o.length || o.length > 0 && o.prop("checked")) && p.push(t)
                })
            }), p.length > 0 && (d += "&location=" + p.join()), custom_location = "", s && s.length > 0 && !t) {
            var v = [];
            s.each(function() {
                var t = encodeURIComponent($(this).data("deal_type_id"));
                t != e && v.push(t)
            }), v.length > 0 && (d += "&deal_type=" + v.join())
        }
        if (l && l.length > 0 && !t) {
            var b = [];
            l.each(function() {
                var t = encodeURIComponent($(this).data("stage"));
                t != e && b.push(t)
            }), b.length > 0 && (d += "&cat=" + b.join())
        }
    }
    var g = History.getState().url.replace(rootUrl, ""),
        w = g.split("?")[0].split("/"),
        y = w[0];
    d.indexOf("search_term") > -1 ? (g.indexOf("deals") > -1 && (d = rootUrl + "deals" + d), (g.indexOf("investors") > -1 || g.indexOf("people") > -1) && (d = rootUrl + "people" + d)) : (g.indexOf("investors") > -1 || g.indexOf("people") > -1) && (0 === o.length || 1 === o.length && e || t) ? (e || t || (y = active_tab), d = rootUrl + y) : d = d === active_tab && "" != active_tab ? rootUrl + y + "/" + d : "?q=filter" != d || pageNumber && 1 != pageNumber ? rootUrl + (y.indexOf("http") === -1 ? y : "") + d : rootUrl, pageNumber && 1 !== pageNumber && (d += "&page=" + pageNumber), History.pushState(null, null, d), browseAlert = !1
}

function isScrolledIntoView(e) {
    if (0 == $(e).length) return !1;
    var t = $(window).scrollTop(),
        o = t + $(window).height(),
        a = $(e).offset().top,
        i = a + $(e).height();
    return o >= a && t <= i
}

function showMore(e, t, o) {
    var a = History.getState(),
        i = a.url,
        r = i.replace(rootUrl, "");
    e += 1, isLoading = !0, $("#browse-loading").show(), $.ajax({
        url: "/" + r + "&template=false&random_seed=" + random_seed,
        data: {
            entities_only: !0,
            page: e
        },
        type: "POST"
    }).done(function(t) {
        if (t) {
            $(t).hide().appendTo(contentSelector).fadeIn(600), $(contentSelector).filter(":first").data("page", e);
            var o = $(contentSelector).filter(":first").find(".card").filter(":last").attr("data-more-results");
            0 == o && $(".browse-show-more").addClass("hidden")
        } else $(".browse-show-more").addClass("hidden"), $(contentSelector).filter(":first").append("")
    }).fail(function() {
        $(contentSelector).filter(":first").append("")
    }).always(function() {
        isLoading = !1, $("#browse-loading").hide()
    })
}

function attachInfinitScroll() {
    var e = null;
    $(window).on("scroll", function() {
        isScrolledIntoView($(".browse-show-more")) === !0 && (e && clearTimeout(e), e = setTimeout(handleScroll, 200))
    })
}

function handleScroll() {
    scrollTimer = null;
    var e = $(contentSelector).filter(":first").find(".card").filter(":last").attr("data-more-results");
    0 == e || isLoading || $(".browse-show-more").trigger("click")
}

function changePage() {
    var e = $(".pagination").data("pages"),
        t = $(".pagination").find(".pagination-list.active").first().find("a").first().data("page"),
        o = $(".pagination").find("a[data-page=" + t + "]").first();
    for ($(".changePage").parent("li").removeClass("active"), o.parent("li").addClass("active"), i = t; i <= t + 2; i++) $("#pageNumber" + i).removeClass("hidden");
    for (i = t; i >= t - 2; i--) $("#pageNumber" + i).removeClass("hidden");
    if (t - 4 > 1 && e >= 9)
        for ($(".ellipsis-start").removeClass("hidden"), i = t - 3; i > 1; i--) $("#pageNumber" + i).addClass("hidden");
    else {
        for (i = 1; i <= 7; i++) $("#pageNumber" + i).removeClass("hidden");
        $(".ellipsis-start").addClass("hidden")
    }
    if (t + 4 < e && e >= 9) $(".ellipsis-end").removeClass("hidden");
    else {
        for (i = e; i > e - 7; i--) $("#pageNumber" + i).removeClass("hidden");
        $(".ellipsis-end").addClass("hidden")
    }
    $("#pageNumber" + e).removeClass("hidden"), $("#pageNumber1").removeClass("hidden")
}
var search_term = "",
    custom_industry = "",
    custom_location, sorts = [],
    cache = {},
    isLoading = !1,
    type = null,
    value = null,
    activate_filter = "?q=filter",
    active_tab = "",
    random_seed = Math.floor(1e3 * Math.random()),
    searchUrl;
results = "#browse", contentSelector = "#results", sideBarSelector = "#filter-options", containerSelector = ".browse-results .container", $container = $(containerSelector).filter(":first"), $content = $(contentSelector).filter(":first"), $window = $(window), $body = $(document.body), rootUrl = History.getRootUrl(), scrollOptions = {
    duration: 800,
    easing: "swing"
};
var browseAlert = !1,
    pageNumber = 1,
    save_result = $(".deal-search").length > 0,
    browse_id, documentHtml = function(e) {
        var t = String(e).replace(/<\!DOCTYPE[^>]*>/i, "").replace(/<(html|head|body|title|meta|script|style)([\s\>])/gi, '<div class="document-$1"$2').replace(/<\/(html|head|body|title|meta|script|style)\>/gi, "</div>");
        return t
    };
$(function() {
    $(document).on("click", ".browse-sort a", function() {
        return $(".sort_by").removeClass("selected"), $(this).addClass("selected"), createURI(), !1
    }), $(document).on("click", ".deal-alert", function() {
        browseAlert = !0, createURI();
        var e = $("<div class='save-notification'></div>").text("Alert Saved");
        return $("#header-main").before(e), $(".save-notification").hide(), $(".save-notification").fadeIn(), setTimeout(function() {
            $(".save-notification").fadeOut()
        }, 2e3), !1
    }), $(document).on("submit", "#search-filtered-results, .browse-filter-form", function(e) {
        e.preventDefault(), active_tab = void 0, search_term = $("input#search-term").val(), custom_location = $(this).find("#location_id").attr("value"), $(".browse-flags").find("li").removeClass("active"), search_term && search_term.length > 0 || custom_industry && custom_industry.length > 1 || custom_location && custom_location.length > 1 || $(this).find("input:checkbox:checked").length > 0 || $(this).find("input:radio:checked").length > 0 || custom_location.length > 0 ? (createURI(), "production" == server_environment && _gaTracker("send", "event", "Browse", "Search Query", search_term.toLowerCase())) : ($(".flag-trending").addClass("active"), createURI(void 0, !0)), $(this).find(".browse-filter-dropdown").slideUp("fast")
    }), $(document).on("mousedown", ".deal-card-link", function(e) {
        e.preventDefault();
        var t = $(this).data("deal_id");
        $.ajax({
            url: "discover/saveBrowseClick",
            type: "post",
            data: {
                deal_id: t,
                browse_id: browse_id
            },
            success: function(e) {}
        })
    }), $(document).on("click", ".js-keyword-delete", function(e) {
        e.preventDefault();
        var t = $(this).siblings(".browse-keyword-label").text();
        ($(this).data("keyword") || 0 === $(this).data("keyword")) && (t = $(this).data("keyword")), createURI(t)
    }), $(document).on("click", ".browse-keywords-clear", function(e) {
        e.preventDefault(), createURI(void 0, !0)
    });
    var e = History.getState().url.replace(rootUrl, ""),
        t = e.indexOf("?q=filter") === -1 ? History.getState().url + "?q=filter" : "";
    save_result && saveResult(t)
}), $(document).on("click", '.browse-filter-dropdown input[type="radio"]', function(e) {
    $(this).parents(".browse-filter-dropdown").find('input[type="text"]').val($(this).parent("label").text().trim()), $(this).parents(".browse-filter-dropdown").find("#location_id").length > 0 && $(this).parents(".browse-filter-dropdown").find("#location_id").attr("value", $(this).data("location_id"))
}), $(document).on("input", ".location-lookup", function(e) {
    $(this).parents(".browse-filter-dropdown").find('input[type="radio"]').attr("checked", !1)
}), $(document).on("click", '.browse-filter-form input[type="checkbox"]', function(e) {
    $(this).parents("form").submit()
}), $(document).on("blur", ".location-lookup", function(e) {
    var t = $(this).parents(".browse-filter-dropdown").find("#location_id").attr("value");
    $(this).parents(".browse-filter-dropdown").find('input[type="radio"]').each(function(e) {
        $(this).data("location_id") == t && $(this).attr("checked", !0)
    })
}), $(document).on("focus", "#user_location", function() {
    $("#browse-locations").toggleClass("js-show"), $("#locations-tab").toggleClass("js-show")
}), $(document).on("focusout", "#user_location", function() {
    $("#browse-locations").removeClass("js-show"), $("#locations-tab").removeClass("js-show")
}), $(document).on("click tap", ".browse-filter-clear", function(e) {
    e.preventDefault(), $(this).parents(".browse-filters").find("input").val(""), $(this).parents(".browse-filters").find('input[type="radio"]').attr("checked", !1), $(this).parents(".browse-filters").find('input[type="checkbox"]').attr("checked", !1), $(this).parents(".browse-filters").data("item-selector") && $($(this).parents(".browse-filters").data("item-selector")).remove(), $(this).parents("form").submit()
}), $(document).on("click", ".browse-filter-select", function(e) {
    $(this).siblings(".browse-filter-dropdown").is(":visible") ? $(this).siblings(".browse-filter-dropdown").slideUp("fast") : $(this).siblings(".browse-filter-dropdown").slideDown("fast")
}), $(document).on("keydown", ".js-industries", function() {
    var e = $(this);
    $(this).autocomplete({
        minLength: 1,
        autoFocus: !0,
        selectFirst: !0,
        delay: 100,
        cache: !0,
        source: function(t, o) {
            $(e).attr("data-industry_id", "");
            var a = t.term.trim();
            a.length < 1 || (e.siblings(".autocomplete-loading").show(), $.ajax({
                url: "/company/getIndustries",
                type: "POST",
                dataType: "json",
                data: {
                    q: a
                },
                success: function(t) {
                    e.siblings(".autocomplete-loading").hide(), o($.map(t, function(e) {
                        if (e.industry_id) return {
                            label: e.name,
                            value: e.name,
                            industry_id: e.industry_id
                        }
                    }))
                }
            }))
        },
        select: function(t, o) {
            $(this).attr("data-industry_id", o.item.industry_id), $(this).val(o.item.value), $(e).parents("form").submit()
        }
    })
}), History.Adapter.bind(window, "statechange", function() {
    var e = History.getState(),
        t = e.url.replace(/ & /g, "%20%26%20");
    t.replace(rootUrl, "");
    $content.addClass("loading"), $content.animate({
        opacity: 0
    }, 800), $("#browse-loading").show(), t = t.indexOf("?q=filter") === -1 && t.indexOf("people") === -1 && t.indexOf("investors") === -1 ? t + "?q=filter" : t, $.ajax({
        url: t + "&template=true&random_seed=" + random_seed,
        success: function(e, o, a) {
            $.get("/lavnicapital/getMeta", function(t) {
                if (t) {
                    e = JSON.parse(t);
                    for (key in e)
                        if ("og:image" != key) {
                            "title" == key && $("title").html(e[key]);
                            var o = $('meta[name="' + key + '"]');
                            o.length > 0 && o.attr("content", e[key]);
                            var o = $('meta[property="' + key + '"]');
                            o.length > 0 && o.attr("content", e[key])
                        }
                }
            }), $("#browse-loading").hide();
            var i = $(documentHtml(e));
            $dataContent = i.find(results).filter(":first"), $content.stop(!0, !0), $(results).replaceWith(i).css("opacity", 100), $(contentSelector).hide().fadeIn(600), $("#browse-name-search").focus();
            var r = $("#browse-name-search").val();
            $("#browse-name-search").val(""), $("#browse-name-search").val(r), $content.ScrollTo && $content.ScrollTo(scrollOptions), $content.removeClass("loading"), $(".overlay").hide(), search_term = "", lazyLoadImages(), save_result && saveResult(t), changePage()
        }
    })
}), $(document).on("click", ".browse-flags li", function() {
    $(this).hasClass("active") || $(".browse-keywords-item").remove(), $(".browse-flags").find("li").removeClass("active"), $(".results-tab").addClass("hidden"), $(this).addClass("active"), $("." + $(this).data("results-class")).length > 0 ? $("." + $(this).data("results-class")).removeClass("hidden") : (active_tab = $(".browse-flags li.active").data("tab"), random_seed = Math.floor(1e3 * Math.random()), createURI())
});
var lastTime = 0,
    numberOfChars = 0,
    totalTime = 0;
$(document).on("keyup", "#browse-name-search", function(e) {
    currentTime = Date.now(), totalTime += currentTime - lastTime, numberOfChars++;
    var t = 1e-9 / (numberOfChars / totalTime);
    return "undefined" != typeof delayedRequest && clearTimeout(delayedRequest), 13 == e.which || "" == $(this).val() ? (numberOfChars = 0, totalTime = 0, currentTime = 0, createURI(), !1) : (delayedRequest = setTimeout(function() {
        numberOfChars = 0, totalTime = 0, lastTime = 0, createURI()
    }, t), void(lastTime = currentTime))
}), $(document).on("click", ".browse-show-more", function() {
    var e = $(contentSelector).filter(":first").data("page");
    showMore(e)
}), $(document).on("keydown", "#search-term", function() {
    if (!$(this).hasClass("js-autocomplete-off")) {
        var e = $(this),
            t = !!$(this).data("people") && $(this).data("people");
        $(this).autocomplete({
            minLength: 1,
            autoFocus: !1,
            selectFirst: !0,
            delay: 300,
            cache: !0,
            source: function(o, a) {
                var i = o.term.trim();
                return i in cache ? void a($.map(cache[i], function(e) {
                    if (e.search_term) return {
                        value: e.search_term
                    }
                })) : void(i.length < 1 || (e.siblings(".autocomplete-loading").show(), $.ajax({
                    url: "/discover/getSearchTerms",
                    type: "POST",
                    dataType: "json",
                    data: {
                        search_term: i,
                        peopleSearch: t
                    },
                    success: function(t) {
                        e.siblings(".autocomplete-loading").hide(), cache[i] = t, a($.map(t, function(e) {
                            if (e.search_term) return {
                                value: e.search_term
                            }
                        }))
                    }
                })))
            },
            select: function(t, o) {
                e.val(o.item.value), $("#search-filtered-results").submit()
            }
        })
    }
}), $(".browse-results").on("click", ".company-follow", function() {
    var e = $(this),
        t = $(this).attr("data-following");
    return "0" == t && ($.ajax({
        url: "/company/toggleCompanyFollower",
        type: "POST",
        data: {
            company_id: e.attr("data-company-id"),
            is_follower: t
        },
        success: function(e, t, o) {
            return 2 == e ? (window.location = "/user/signup", !1) : void(e && _gaTracker("send", "event", "Event Stream", "User Followed Company", window.location.href))
        }
    }), $(e).html("Following"), $(e).attr("data-following", 1), $(e).addClass("following-company")), !1
}), $(document).on("click", ".changePage", function() {
    return window.scrollTo(0, 0), pageNumber = $(this).data("page"), $(".overlay").show(), createURI(), pageNumber = 1, !1
}), changePage();