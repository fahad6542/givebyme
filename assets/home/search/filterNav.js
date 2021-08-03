/* AUTOMATED FILE. DO NOT EDIT. */
$(document).ready(function() {
    /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && ($(".browse-filters-mobile").hide(), $(document).on("click tap", ".browse-tabs a", function() {
        selected_tab_id = $(this).attr("href"), $(".browse-filters-mobile").hide(), $(selected_tab_id).show(), $(".browse-tabs a").css("background-color", "#F2EFEF"), $(this).css("background-color", "#F8F9F9")
    }), $(document).on("click tap", ".browse-filter-less", function() {
        $(".browse-filters-mobile").hide(), $(".browse-tabs a").css("background-color", "#F2EFEF")
    }), $("body").on("click tap", ".search-criteria", function() {
        "Hide Criteria" == $(this).text() ? ($(this).text("Show Criteria "), $(".browse-keyword-list").hide()) : ($(this).text("Hide Criteria"), $(".browse-keyword-list").show())
    }), $("img.lazy").lazyload({
        threshold: 500
    }))
});