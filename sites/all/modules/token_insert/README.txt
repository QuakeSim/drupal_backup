$Id:

Description
===========
This module allows you to insert tokens into a textarea. It supports both plain text and wysiwyg textareas. The format used for the insert is compatible with Token filter.

This module contains three modules:

- Token insert UI: Allows you to select which tokens are available for the insert, by default all tokens are shown. This module doesn't have to be enabled to use the others.
- Token insert (text): Add a fieldset under each textarea, works for both plain text fields and wysiwyg fields.
- Token insert (wysiwyg): Adds an extra button to wysiwyg editors and opens a popup to select the token to insert.

Dependencies
============
-Token
- For Token insert (wysiwyg): 
  - JQuery update 6.x-2.0
  - JQuery UI
  - Jquery UI Dialog, you'll need http://jquery-ui.googlecode.com/files/jquery-ui-1.7.3.zip

Recommended
===========
- Token filter

Thanks to
=========
- Attiks
- Jelle

