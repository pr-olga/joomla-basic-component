jQuery(document).ready(function() {

  jQuery('#alias_search').typeahead({
    source: function(alias, process) {
      return jQuery.ajax({
        data: {
          [token]: "1",
          task: "typeaheadsearchalias",
          format: "json",
          alias: alias,
        },
        method: "POST",
        dataType: 'JSON',
        success: function(data2) {
          // console.log(data2);
          return process(data2);
        }
      });
    }
  });
});