document.addEventListener("DOMContentLoaded", function () {
    const franchiseSelect = document.getElementById("franchiseSelect");
    const franchiseImage = document.getElementById("franchiseImage");

    const franchiseImages = {
        "Pokemon": "../pokemon_card_backside.png",
        "Yu-Gi-Oh!": "../yugioh_card_backside.png",
        "Magic: The Gathering": "../magic_card_backside.png",
    };

    const initialFranchise = franchiseSelect.value;
    franchiseImage.src = franchiseImages[initialFranchise] ||
        franchiseImages["Pokemon"];

    franchiseSelect.addEventListener("change", function () {
        const selectedFranchise = this.value;
        franchiseImage.src = franchiseImages[selectedFranchise] ||
            franchiseImages["Pokemon"];
    });
});
