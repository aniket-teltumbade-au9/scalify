/**
 * Initializes and animates a continuous two-row carousel of location cards.
 * @param {Array<Object>} locations - An array of location objects, each with 'id', 'address', and 'image' properties.
 */
function initLocationCarousel(locations) {
    const topRowTrack = document.getElementById('top-row-track');
    const bottomRowTrack = document.getElementById('bottom-row-track');
    const carouselContainer = document.querySelector('.carousel-container');

    // Make sure the required elements exist
    if (!topRowTrack || !bottomRowTrack || !carouselContainer) {
        console.error("Carousel elements not found. Please check your HTML structure.");
        return;
    }

    const scrollSpeed = 0.5; // Pixels per frame, adjust for faster/slower
    let animationFrameId;

    // Clone buffer to ensure continuous flow without jumps
    const CLONE_FACTOR = 3; // Clone the entire list 3 times
    let combinedLocations = [];

    // Function to get the current computed card width, height, and margin
    function getCardDimensions() {
        const tempCard = document.createElement('div');
        tempCard.className = 'location-card';
        topRowTrack.appendChild(tempCard);
        const cardStyle = window.getComputedStyle(tempCard);
        const width = parseFloat(cardStyle.width);
        const height = parseFloat(cardStyle.height);
        const marginRight = parseFloat(cardStyle.marginRight);
        topRowTrack.removeChild(tempCard);
        return { width, height, marginRight };
    }

    // Prepare the combined (original + cloned) locations for seamless looping
    function prepareLocationsForLoop() {
        combinedLocations = [];
        for (let i = 0; i < CLONE_FACTOR; i++) {
            combinedLocations.push(...locations);
        }
    }

    // Render cards into the two rows and update dynamic dimensions
    function renderRows() {
        topRowTrack.innerHTML = '';
        bottomRowTrack.innerHTML = '';

        combinedLocations.forEach((location, index) => {
            const card = document.createElement('div');
            card.className = 'location-card';
            card.innerHTML = `
                <img src="${location.image}" alt="${location.location}" class="absolute inset-0 w-full h-full object-cover" onerror="this.onerror=null;this.src='https://placehold.co/400x250/CCCCCC/666666?text=Image+Error';">
                    <div class="w-auto relative inline-flex flex-wrap rounded-tr-2xl pt-3 pointer-events-none pr-5 | lg:rounded-tr-3xl lg:pr-8 bg-white | dark:bg-grayDark-600">
                        <svg id="Layer_1" class="w-10 h-10 fill-current absolute -bottom-px right-px transform translate-x-full rotate-180 text-white dark:text-grayDark-600" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve"><path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z"></path>
                        </svg>
                        <svg id="Layer_1" class="w-10 h-10 fill-current absolute top-px left-0 transform -translate-y-full rotate-180 text-white dark:text-grayDark-600" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve"><path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z"></path>
                        </svg>
                    <div class="dark:text-white ml-5">
                        ${location.location}
                    </div>
                    </div>
            `;

            if (index % 2 === 0) {
                topRowTrack.appendChild(card);
            } else {
                bottomRowTrack.appendChild(card);
            }
        });
        updateCarouselDimensions();
    }

    // Function to set dynamic dimensions for carousel container and bottom row
    function updateCarouselDimensions() {
        const { width: cardWidth, height: cardHeight, marginRight: cardMargin } = getCardDimensions();
        carouselContainer.style.height = `calc(2 * ${cardHeight}px + ${cardMargin}px)`;
        const staggeredOffset = -(cardWidth / 2 + cardMargin);
        bottomRowTrack.style.transform = `translateX(${staggeredOffset}px)`;
        bottomRowTrack.style.top = `calc(${cardHeight}px + ${cardMargin}px)`;
    }

    let topScrollPosition = 0;
    let bottomScrollPosition = 0;

    // Animation loop for continuous scrolling
    function animateCarousel() {
        topScrollPosition -= scrollSpeed;
        bottomScrollPosition -= scrollSpeed;

        const { width: cardWidth, marginRight: cardMargin } = getCardDimensions();
        const fullCardWidth = cardWidth + cardMargin;
        const totalContentWidth = (combinedLocations.length / 2) * fullCardWidth;

        if (topScrollPosition <= -totalContentWidth / CLONE_FACTOR) {
            topScrollPosition += totalContentWidth / CLONE_FACTOR;
        }
        if (bottomScrollPosition <= -totalContentWidth / CLONE_FACTOR) {
            bottomScrollPosition += totalContentWidth / CLONE_FACTOR;
        }

        topRowTrack.style.transform = `translateX(${topScrollPosition}px)`;
        const { width: currentCardWidth, marginRight: currentCardMargin } = getCardDimensions();
        const staggeredOffset = -(currentCardWidth / 2 + currentCardMargin);
        bottomRowTrack.style.transform = `translateX(${bottomScrollPosition + staggeredOffset}px)`;

        animationFrameId = requestAnimationFrame(animateCarousel);
    }

    // Start and stop animation functions
    function startCarousel() {
        if (!animationFrameId) {
            animateCarousel();
        }
    }

    function stopCarousel() {
        cancelAnimationFrame(animationFrameId);
        animationFrameId = null;
    }

    // Initial setup and event listeners
    function setup() {
        prepareLocationsForLoop();
        renderRows();
        startCarousel();

        window.addEventListener('resize', () => {
            stopCarousel();
            renderRows();
            topScrollPosition = 0;
            bottomScrollPosition = 0;
            startCarousel();
        });
    }

    // Run the setup when the function is called
    setup();
}