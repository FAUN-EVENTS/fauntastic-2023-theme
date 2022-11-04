"use strict";
( function() {
    if (window.matchMedia("(max-width: 1150px)").matches) {
        
    }

    var nav = document.getElementById('main-nav'), button, menu;
    if ( !nav ) {
        return;
    }

    button = nav.getElementsByTagName('button')[0];
    menu   = nav.getElementsByTagName('ul')[0];
    if ( !button ) {
        return;
    }

    // Hide button if menu is missing or empty.
    if ( !menu || !menu.childNodes.length ) {
        button.style.display = 'none';
        return;
    }

    button.onclick = function() {
        if ( -1 !== button.className.indexOf( 'toggled-on' ) ) {
            menu.style.display="none"
            button.className = button.className.replace( ' toggled-on', '' );
            menu.className = menu.className.replace( ' toggled-on', '' );
        } else {
            menu.style.display="flex"
            button.className += ' toggled-on';
            menu.className += ' toggled-on';
        }
    };
    } )(jQuery);