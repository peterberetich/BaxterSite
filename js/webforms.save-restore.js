/**
 * webforms.save-restore - version 1.0.1
 *
 * https://github.com/bcorreia/webforms.save-restore
 * Bruno Correia - mail@bcorreia.com
 *
 */
var webforms = (function() {
    return {
        save: function(event) {
            event.preventDefault();

            var form = $(this).closest("form"),
                key = form.attr("data-role"),
                fields = form.find( $(':input').not(':input[type="password"]') ).serializeArray();

            localStorage.setItem(key, JSON.stringify(fields));
        },
        restore: function(event) {
            event.preventDefault();

            var form = $(this).closest("form"),
                key = form.attr("data-role"),
                fields = $.parseJSON(localStorage.getItem(key));

            if ( fields === null ) {
                return false; // nothing to restore
            }

            form.find(":input").removeAttr("checked");
            $.each(fields, function(index, val) {
                var type = form.find(":input[name='"+val.name+"']").prop("type");

                switch(type) {
                    case "select-one": case "select-multiple":
                        form.find(":input[name='"+val.name+"'] option[value='"+val.value+"']").attr("selected", "selected");
                    break;

                    case "radio": case "checkbox":
                        form.find(":input[name='"+val.name+"'][value='"+val.value+"']").attr("checked", "checked");
                    break;

                    default:
                        form.find(":input[name='"+val.name+"']").val(val.value);
                }
            });
        },
        clean: function() {
            var key = $(this).attr("data-role");
            localStorage.removeItem(key);
        }
    }
}());