document.addEventListener('DOMContentLoaded', function () {
    var body = document.body;

    // Remove the 'transition-fade' class to initiate the fade-in transition
    body.classList.remove('transition-fade');

    // Adding the fade-in class after a small delay to allow fade-out to complete
    setTimeout(function () {
        body.classList.add('fade-in');
    }, 500); // Adjust the delay time as needed (500ms in this example)

    var links = document.querySelectorAll('.navbar a');

    links.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();

            // Add the 'transition-fade' class to initiate the fade-out transition
            body.classList.add('transition-fade');

            // Get the target page URL
            var targetPage = link.getAttribute('href');

            // Wait for the transition to complete before navigating to the new page
            setTimeout(function () {
                window.location.href = targetPage;
            }, 500); // Adjust the timeout to match your transition duration
        });
    });

    // Add an event listener to remove the 'transition-fade' class on page load
    window.addEventListener('pageshow', function (event) {
        if (event.persisted) {
            // Remove the 'transition-fade' class to initiate the fade-in transition
            body.classList.remove('transition-fade');
        }
    });
});
