window.onload = function() {
    console.log("Windows loaded.");

    var modal = document.getElementById("video-modal");
    var launchButton = document.getElementById("launch-video-button");
    var closeButton = document.getElementById("video-modal-close");

    launchButton.onclick = function() {
        modal.style.display = "block";
    }

    closeButton.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

}