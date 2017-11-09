/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
  config.allowedContent = true;
  config.filebrowserBrowseUrl = '../redaktur/kcfinder/browse.php?opener=ckeditor&type=files';
  config.filebrowserImageBrowseUrl = '../redaktur/kcfinder/browse.php?opener=ckeditor&type=images';
  config.filebrowserFlashBrowseUrl = '../redaktur/kcfinder/browse.php?opener=ckeditor&type=flash';
  config.filebrowserUploadUrl = ',../redaktur/kcfinder/upload.php?opener=ckeditor&type=files';
  config.filebrowserImageUploadUrl = '../redaktur/kcfinder/upload.php?opener=ckeditor&type=images';
  config.filebrowserFlashUploadUrl = '../redaktur/kcfinder/upload.php?opener=ckeditor&type=flash';
};
