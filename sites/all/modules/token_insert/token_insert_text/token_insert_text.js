
/**
 * Behavior to add "Insert" buttons.
 */
(function ($) {
Drupal.behaviors.TokenInsertText = {
  attach: function(context) {
    if (typeof(insertTextarea) == 'undefined') {
      insertTextarea = $('#edit-body-und-0-value').get(0) || false;
    }

    // Add the click handler to the insert button.
    if(!(typeof(Drupal.settings.token_insert) == 'undefined')){
      for(var key in Drupal.settings.token_insert.buttons){
        $("#" + key, context).click(insert);
      }
    }
   // $('.token-insert-text-button', context).click(insert);

    function insert() {
      var field = $(this).attr('id');
      var selectbox = field.replace('button', 'select');
      var content = '[' + $('#' + selectbox ).val() + ']';
      Drupal.tokeninsert.insertAtCursor($('#' + Drupal.settings.token_insert.buttons[field]), content);
      return false;
    }
  }
};
})(jQuery);

