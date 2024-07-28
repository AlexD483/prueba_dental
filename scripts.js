document.addEventListener('DOMContentLoaded', () => {
    const stars = document.querySelectorAll('.star');
    const commentInput = document.getElementById('comment');
    const submitButton = document.getElementById('submit-comment');
    const commentsContainer = document.getElementById('comments-container');
    const ratingCounts = {
        1: 0,
        2: 0,
        3: 0,
        4: 0,
        5: 0
    };
    let totalRatings = 0;
    let selectedRating = 0;

    stars.forEach(star => {
        star.addEventListener('click', () => {
            selectedRating = star.getAttribute('data-value');
            stars.forEach(s => s.classList.remove('selected'));
            for (let i = 0; i < selectedRating; i++) {
                stars[i].classList.add('selected');
            }
        });

        star.addEventListener('mouseover', () => {
            stars.forEach(s => s.classList.remove('selected'));
            for (let i = 0; i < star.getAttribute('data-value'); i++) {
                stars[i].classList.add('selected');
            }
        });

        star.addEventListener('mouseout', () => {
            stars.forEach(s => s.classList.remove('selected'));
            for (let i = 0; i < selectedRating; i++) {
                stars[i].classList.add('selected');
            }
        });
    });

    submitButton.addEventListener('click', () => {
        const commentText = commentInput.value.trim();
        if (selectedRating) {
            const commentElement = document.createElement('div');
            commentElement.classList.add('comment');
            commentElement.innerHTML = `
                <p>${commentText ? commentText : 'Calificación sin comentario'}</p>
                <div class="user-rating">${'★'.repeat(selectedRating)}</div>
            `;
            commentsContainer.appendChild(commentElement);
            commentInput.value = '';
            stars.forEach(star => star.classList.remove('selected'));
            ratingCounts[selectedRating]++;
            totalRatings++;
            updateRatingStats();
            updateAverageRating();
            selectedRating = 0;
        } else {
            alert('Por favor, selecciona una calificación.');
        }
    });

    function updateRatingStats() {
        // No es necesario actualizar los contadores individuales en este caso
    }

    function updateAverageRating() {
        let totalScore = 0;
        for (let rating in ratingCounts) {
            totalScore += ratingCounts[rating] * rating;
        }
        const averageRating = totalScore / totalRatings;
        document.getElementById('average-rating').innerText = averageRating.toFixed(1);
        document.getElementById('average-stars').innerHTML = getStarRatingHTML(averageRating);
        updateRatingBars();
    }

    function getStarRatingHTML(averageRating) {
        const fullStars = Math.floor(averageRating);
        const halfStar = averageRating % 1 >= 0.5 ? '★' : '';
        const emptyStars = 5 - fullStars - (halfStar ? 1 : 0);
        return '★'.repeat(fullStars) + halfStar + '☆'.repeat(emptyStars);
    }

    function updateRatingBars() {
        for (let rating in ratingCounts) {
            const percentage = totalRatings ? (ratingCounts[rating] / totalRatings) * 100 : 0;
            document.getElementById(`bar-${rating}`).style.width = `${percentage}%`;
        }
    }
});

