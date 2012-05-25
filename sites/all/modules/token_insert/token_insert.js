
// General Insert API functions.
(function ($) {
Drupal.tokeninsert = {
  /**
   * Insert content into a textarea at the current cursor position.
   *
   * @param editor
   *   The DOM object of the textarea that will receive the text.
   * @param content
   *   The string to be inserted.
   */
  insertAtCursor: function(editor, content) {
    // IE support.
    if (document.selection) {
      editor.focus();
      sel = document.selection.createRange();
      sel.text = content;
    }

    // Mozilla/Firefox/Netscape 7+ support.
    else if (editor.selectionStart || editor.selectionStart == '0') {
      var startPos = editor.selectionStart;
      var endPos = editor.selectionEnd;
      editor.val(editor.val().substring(0, startPos)+ content + editor.val().substring(endPos, editor.val().length));
    }

    // Fallback, just add to the end of the content.
    else {
      editor.val(editor.val() + content);
    }
  }
};
})(jQuery);
