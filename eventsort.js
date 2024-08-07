$(function() {
  // Get date and event elements
  var dateElements = $('.date');
  var eventElements = $('.event-item');

  // Parse dates
  dateElements.each(function() {
    var dateText = $(this).text();
    var dateObject = new Date(dateText);

    // Check if the date object is valid
    if (isNaN(dateObject.getTime())) {
      console.error('Invalid date: ' + dateText);
    } else {
      $(this).data('date', dateObject);
    }
  });

  // Sort elements by date
  eventElements.sort(function(a, b) {
    var dateA = $(a).find('.date').data('date');
    var dateB = $(b).find('.date').data('date');
    return dateA - dateB;
  });

  // Append sorted elements to the events section
  eventElements.each(function() {
    $(this).insertAfter($('#sortAsc'));
  });

  // Add click event handlers for sorting
  $('#sortAsc').click(function() {
    eventElements.sort(function(a, b) {
      var dateA = $(a).find('.date').data('date');
      var dateB = $(b).find('.date').data('date');
      return dateA - dateB;
    });

    eventElements.each(function() {
      $(this).insertAfter($('#sortAsc'));
    });
  });

  $('#sortDesc').click(function() {
    eventElements.sort(function(a, b) {
      var dateA = $(a).find('.date').data('date');
      var dateB = $(b).find('.date').data('date');
      return dateB - dateA;
    });

    eventElements.each(function() {
      $(this).insertBefore($('#sortDesc'));
    });
  });
});

