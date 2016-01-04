$(document).ready (function () {
    $('#gallery').jqCoolGallery ({
        galleryTileWidth: 216,							// width of gallery tiles
        galleryTileHeight: 150,							// height of gallery tiles
        galleryColumnCount: 4,							// eliminates right margin in last column
        galleryTooltip: 'Click To Open This Gallery',	// tooltip for gallery tiles
        imageAreaWidth: 675,							// width of image area
        imageAreaHeight: 450,							// height of image area
        imageAreaPadding: '0 15px 0 0',					// padding between image area and panel
        panelAreaWidth: 240,							// panel area width
        thumbWidth: 50,									// thumb width
        thumbHeight: 50,								// thumb height
        thumbStyle:'list',								// list style thumbnails
        thumbLocation:'top',							// put thumbnails on top of slideshows
        debug: true										// sends debug messages to console
    });
});