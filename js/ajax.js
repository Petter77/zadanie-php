$(document).ready(function () {
    let offset = 0;
    let limit = 3;
    let allDataDisplayed = false;

    function loadData() {
        let container = $('#middle-section');
        let loadMoreButton = $('#load-more');

        $.ajax({
            url: 'scripts/ajaxScripts.php',
            type: 'POST',
            data: {offset: offset},
            dataType: 'json',
            success: function (data) {
                if (data.length === 0) {
                    container.append('<p style="text-align: center">No more data to display.</p>');
                    loadMoreButton.hide();
                    allDataDisplayed = true;
                } else {
                    data.forEach(function (row) {
                        let postHtml = '<div class="post">' +
                            '<div class="post-upper-content">' +
                            '<div class="post-author">' + row.author + '</div>' +
                            '<div class="date">' + row.date + '</div>' +
                            '</div>' +
                            '<div class="post-content">' + row.content + '</div>' +
                            '<a href="scripts/deletePost.php?remove=' + row.id + '"><div id="removePost">Delete post</div></a>' +
                            '</div>';
                        container.append(postHtml);
                    });
                    offset += limit;
                    loadMoreButton.show();
                }
            }
        });
    }

    $('#load-more').on('click', function () {
        loadData();

        if (allDataDisplayed) {
            $('#load-more').hide();
        }
    });

    loadData();
});