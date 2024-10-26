// Fungsi untuk menampilkan alert
function showAlert(message, buttonText, callback) {
    var alertBox = $("<div>").addClass("alert alert-warning alert-dismissible fade show");
    alertBox.html(message + " <button type='button' class='btn btn-primary'>" + buttonText + "</button>");
    alertBox.find("button").on("click", function() {
        callback();
        alertBox.alert("close");
    });
    $("body").append(alertBox);
}

$(document).ready(function() {
    $('.save-button').click(function() {

        const cardBody = $(this).closest('.card-body');
        const title = cardBody.find('.card-title').text();
        const imgSrc = cardBody.find('img').attr('src');
        const description = cardBody.find('.card-text').text();


        const savedCard = `
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="${imgSrc}" class="card-img-top" alt="${title}">
                    <div class="card-body">
                        <h5 class="card-title">${title}</h5>
                        <p class="card-text">${description}</p>
                    </div>
                </div>
            </div>
        `;


        $('#saved-items').append(savedCard);
    });
});