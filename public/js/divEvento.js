function toggleDiv(element) {
    element.style.display = (element.style.display === "none") ? "block" : "none";
}

function confirmDiv(element) {
    var description = element.value;
    confirm("Confirmation: " + description);
    toggleDiv(element.parentNode);
}
