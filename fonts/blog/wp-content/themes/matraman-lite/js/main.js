(function($) {

  'use strict';

$(document).ready(function () {

    $(function() {
        $('.sm-clean').smartmenus({
            mainMenuSubOffsetX: 5,
            mainMenuSubOffsetY: -5,
            subMenusSubOffsetX: 5,
            subMenusSubOffsetY: -5
        });
    });


    $(".post").fitVids();
});

})( jQuery );