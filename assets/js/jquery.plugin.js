/*
 * Copyright (c) 2018.
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 */
;(function ($, window, document ) {

    'use strict';

    var $visibleContents, $hiddenContents,
        $icons;

    var init = function () {

        $visibleContents = $('.collapsible-content--visible');
        $hiddenContents = $visibleContents.next();
        $icons = $visibleContents.find('.collapsible-content--icon');

        $visibleContents.on('click', clickHandler);

    }


    var clickHandler = function (event) {

        //Need to know which one was clicked, get an index and
        //then grab the hidden content and
        //check if it's visible

        var index = $visibleContents.index( this ),
            $hiddenContent = $($hiddenContents[ index ]),
            isHiddenContentShowing = $hiddenContent.is(':visible');

        if (isHiddenContentShowing ) {
            $hiddenContent.slideUp();
        } else {
            $hiddenContent.slideDown();
        }

        changeIcon( index, isHiddenContentShowing );
        // if hiddenContent hidden, display down arrow (first in array)
        // if hiddenContent showing, display up arrow (second in array)

    }

    function changeIcon( index, isHiddenContentShowing ) {

        var $iconElement = $($icons[ index ]),
        showIcon = $iconElement.data('showIcon'),
        hideIcon = $iconElement.data('hideIcon'),
        removeClass, addClass;

        if ( isHiddenContentShowing ) {

            addClass = showIcon;
            removeClass = hideIcon;


        } else {

            addClass = hideIcon;
            removeClass = showIcon;

        }

        $iconElement
            .removeClass (removeClass)
            .addClass (addClass);

    }

    $(document).ready(function(){

        init();

    });


})(jQuery, window, document );

