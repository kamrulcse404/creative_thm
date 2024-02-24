jQuery(document).ready(function($) {
    let items = $(".carousel .carousel-item");

    items.each(function() {
        const minPerSlide = 7;
        let next = $(this).next();

        for (var i = 1; i < minPerSlide; i++) {
            if (!next.length) {
                // wrap carousel by using first child
                next = items.first();
            }

            let cloneChild = next.clone(true);
            $(this).append(cloneChild.children(":first"));
            next = next.next();
        }
    });
});

jQuery(document).ready(function ($) {
    var itemsToShow = 2;
    var itemsToShowIncrement = 2;

    $(".myCard").slice(0, itemsToShow).fadeIn();

    $(".load-more").click(function () {
        var totalVisibleItems = $(".myCard:visible").length;
        $(".myCard")
            .slice(totalVisibleItems, totalVisibleItems + itemsToShowIncrement)
            .fadeIn();

        if ($(".myCard:hidden").length === 0) {
            $(".load-more").hide();
        }
    });

    if ($(".myCard:hidden").length === 0) {
        $(".load-more").hide();
    }
});
