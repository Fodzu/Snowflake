document.addEventListener('DOMContentLoaded', function () {
    var links = document.querySelectorAll('.navbar a');
    var body = document.body;

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

            // Add the 'fade-in' class to trigger the fade-in transition
            body.classList.add('fade-in');
        }
    });
});
