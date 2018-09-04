/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var resizeTime = 100;     // total duration of the resize effect, 0 is instant
var resizeDelay = 100;

function resize(maxWidth, maxHeight) {
    var image = $('img[usemap]'),
            imgWidth = image.width(),
            imgHeight = image.height(),
            newWidth = 0,
            newHeight = 0;

    if (imgWidth / maxWidth > imgHeight / maxHeight) {
        newWidth = maxWidth;
    } else {
        newHeight = maxHeight;
    }
    image.mapster('resize', newWidth, newHeight, resizeTime);
}

function onWindowResize() {

    var curWidth = $("#map_container").width(),
            curHeight = $("#map_container").height(),
            checking = false;
    if (checking) {
        return;
    }
    checking = true;
    window.setTimeout(function () {
        var newWidth = $("#map_container").width(), newHeight = $("#map_container").height();
        if (newWidth === curWidth && newHeight === curHeight) {
            resize(newWidth, newHeight);
        }
        checking = false;
    }, resizeDelay);
}

$(window).bind('resize', onWindowResize);
$(window).bind('load', onWindowResize);

var inArea;
var map = $('img[usemap]');
var initial_opts = {
    showToolTip: true,
    toolTipClose: ["tooltip-click", "area-click"],
    fillOpacity: 0,
    fillColor: "d42e16",
    stroke: true,
    strokeColor: "3320FF",
    strokeOpacity: 0.8,
    strokeWidth: 2,
    isSelectable: false

};

opts = $.extend({}, initial_opts);


// Bind to the image 'mouseover' and 'mouseout' events to activate or deactivate ALL the areas, like the
// original demo. Check whether an area has been activated with "inArea" - IE<9 fires "onmouseover" 
// again for the image when entering an area, so all areas would stay highlighted when entering
// a specific area in those browsers otherwise. It makes no difference for other browsers.
function init() {
    map.mapster('unbind')
            .mapster(opts)
            .bind('mouseover', function () {
                if (!inArea) {
                    map.mapster('set', true, 'all');
                }
            }).bind('mouseout', function () {
        if (!inArea) {
            map.mapster('set', false, 'all');
        }
    });
}