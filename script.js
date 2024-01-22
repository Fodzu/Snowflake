document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            document.body.classList.add('transition-fade');

            setTimeout(function () {
                window.location.href = link.href;
            }, 500);
        });
    });
});
