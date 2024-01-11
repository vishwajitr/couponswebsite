$(document).ready(function() {    
    var debounceTimer;

    $('#headerSearch').on('keypress', function() {
        clearTimeout(debounceTimer); // Clear the previous timer
        document.getElementById('resultsList').innerHTML = "";
        var inputValue = $(this).val();
        debounceTimer = setTimeout(function() {
        callAPI(inputValue); // Make the API call after the debounce delay
        }, 300); // Adjust the debounce delay (in milliseconds) as needed
    });

    function callAPI(value) {
        var query = document.getElementById('headerSearch').value;

        if (value) {
            $.ajax({
                url: siteUrl+'/wp-json/wp/v2/store?per_page=10&search=' + encodeURIComponent(query),
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    var results = '';
                    $.each(response, function(index, item) {
                        console.log(item);
                        results += '<li><a href="' + siteUrl + '/post?q=' + item['slug'] + '">' + item['title']['rendered'] + '</a></li>';
                    });
                    $('#resultsList').html(results);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Error occurred during API call:', textStatus, errorThrown);
                    console.log('Response:', jqXHR.responseText);
                }
            });           
        }
    }
    

});