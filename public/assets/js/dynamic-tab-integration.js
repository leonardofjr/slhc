(function ($) {
    // On Load 
    setActiveTab('.tabs li:nth-child(1)');
    showTabContent('.tabs_content', 'tabs li:nth-child(1)')

    // On Click
    $('.tabs').children().click(function () {
        if (!$(this).hasClass('active')) {
            setActiveTab($(this));
            showTabContent('.tabs_content', $(this));
        }
    })
}(jQuery));


function setActiveTab(e) {
    // Removing active class from siblings
    $(e).siblings().removeClass('active');
    // Adding active class to current selection
    $(e).addClass('active');

}

function hideTabContent(e) {
    // Hiding all tab content as a precaution
    $(e).children().slideUp();
}
function showTabContent(e, listItem) {
    hideTabContent(e);
    // Displaying content to the corresponding selection
    $(e).children().eq($(listItem).index()).slideDown();
}