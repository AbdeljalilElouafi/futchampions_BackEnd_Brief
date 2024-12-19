const occupiedPositions = {
    LW: false,
    ST: false,
    RW: false,
    LM: false,
    CM: false,
    LB: false,
    CB: false,
    RCB: false,
    RB: false,
    GK: false,
};

const positionsMap = {
    "LW": "player-card1",
    "ST": "player-card2",
    "RW": "player-card3",
    "LM": "player-card4",
    "CM": "player-card5",
    "RM": "player-card6",
    "LB": "player-card7",
    "CB": "player-card8",
    "RCB": "player-card9",
    "RB": "player-card10",
    "GK": "player-card11",
};

let modifyingPosition = null;


document.getElementById('position').addEventListener('change', function () {
    const selectedPosition = this.value;
    const gkStats = document.getElementById('gkStats');
    const gkStats2 = document.getElementById('gkStats2');
    const gkStats3 = document.getElementById('gkStats3');
    const playerStats = document.getElementById('playerStats');
    const playerStats2 = document.getElementById('playerStats2');
    const playerStats3 = document.getElementById('playerStats3');

    
    if (selectedPosition === 'GK') {
        gkStats.classList.remove('hidden');
        gkStats2.classList.remove('hidden');
        gkStats3.classList.remove('hidden');
        playerStats.classList.add('hidden');
        playerStats2.classList.add('hidden');
        playerStats3.classList.add('hidden');
    } else {
        gkStats.classList.add('hidden');
        gkStats2.classList.add('hidden');
        gkStats3.classList.add('hidden');
        playerStats.classList.remove('hidden');
        playerStats2.classList.remove('hidden');
        playerStats3.classList.remove('hidden');
    }
});


function validateForm() {
    let valid = true;

    const formFields = [
        { id: 'name', regex: /^[a-zA-Z\s]{2,15}$/, errorId: 'nameError', message: 'Name must be 2-15 characters long and contain only letters' },
        { id: 'photo', regex: /^(https?:\/\/.*\.(?:png|jpg|jpeg|gif|bmp|webp|svg))$/i, errorId: 'photoError', message: 'Please enter a valid photo URL.' },
        { id: 'nationality', regex: /^[a-zA-Z\s]{2,50}$/, errorId: 'nationalityError', message: 'Nationality must be valid and contain only letters.' },
        { id: 'flag', regex: /^(https?:\/\/.*\.(?:png|jpg|jpeg|gif|bmp|webp|svg))$/i, errorId: 'flagError', message: 'Please enter a valid flag URL.' },
        { id: 'club', regex: /^[a-zA-Z\s]{2,50}$/, errorId: 'clubError', message: 'Club name must be valid and contain only letters.' },
        { id: 'logo', regex: /^(https?:\/\/.*\.(?:png|jpg|jpeg|gif|bmp|webp|svg))$/i, errorId: 'logoError', message: 'Please enter a valid logo URL.' },
        { id: 'rating', regex: /^(?:[1-9][0-9]?|100)$/, errorId: 'ratingError', message: 'Rating must be between 0 and 100.' }
    ];

    
    formFields.forEach(field => {
        const inputElement = document.getElementById(field.id);
        const errorElement = document.getElementById(field.errorId);
        const value = inputElement.value;

        if (!field.regex.test(value)) {
            showError(inputElement, errorElement, field.message);
            valid = false;
        } else {
            hideError(inputElement, errorElement);
        }
    });

    return valid;  
}

function showError(inputElement, errorElement, message) {
    
    errorElement.textContent = message;
    errorElement.style.display = 'block'; 
    inputElement.classList.add('invalid'); 
    inputElement.classList.remove('valid'); 
}

function hideError(inputElement, errorElement) {
    
    errorElement.style.display = 'none'; 
    inputElement.classList.remove('invalid'); 
    inputElement.classList.add('valid'); 
}
