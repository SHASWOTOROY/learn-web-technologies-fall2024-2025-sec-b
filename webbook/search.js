$(document).ready(function() {
    // Clear all input fields on page load
    $('input').val('');

    // Keyup event for the .search input field
    $('.search').keyup(function() {
        if ($(this).val().length > 0) {
            var search_term = $(this).val(); // Fix typo in variable name
            $.post("include/search.php", {
                search: search_term // Fix typo in parameter name
            }, function(data) {
                $('.results').html(data); // Populate the .results div with data
            });
        } else {
            $('.results').html(''); // Clear the results when input is empty
        }
    });
});
