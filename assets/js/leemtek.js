// Add dropdown class to main-menu when sub-menu class is present.
(function() {
    // Add bootstrap dropdown elements to main-menu.
    var idMainMenu = document.getElementById("main-menu");
    idMainMenu.getElementsByClassName("menu-item-object-page").addClass += "dropdown";
    // idMainMenu.getElementsByClassName("")
    
    /**
      * Creates an entry in "events" at Google Analytics
      * @param {string} strCategory - Sets the category.
      * @param {string} strLabel - The description or label.
      */
    var trackOutboundLink = function(strCategory, strLabel) {
        gtag('event', 'click', {
            'event_category': strCategory,
            'event_label': strLabel,
            'transport_type': 'beacon',
            'event_callback': function(){document.location = strLabel;}
        });
    }
});
