/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */
CKEDITOR.editorConfig = function(config) {

    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';

    /**
     * KcFinder Browse Settings
     * @type {[type]}
     */
    config.filebrowserBrowseUrl 		= _BASE_URL_ + 'kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl 	= _BASE_URL_ + 'kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl 	= _BASE_URL_ + 'kcfinder/browse.php?opener=ckeditor&type=flash';

    /**
     * KcFinder Upload Settings
     * @type {[type]}
     */
    config.filebrowserUploadUrl 		= _BASE_URL_ + 'kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl 	= _BASE_URL_ + 'kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl 	= _BASE_URL_ + 'kcfinder/upload.php?opener=ckeditor&type=flash';


		config.extraPlugins = 'wordcount,notification';
};
