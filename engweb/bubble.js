window.addEventListener('load', function() {
  setTimeout(function() {
    document.querySelector('.bubble-container').innerHTML = '';
  }, 10000);

  createBubbles();
});

function createBubbles() {
  const bubbleContainer = document.querySelector('.bubble-container');
  const numBubbles = 20; // Number of bubbles to create

  for (let i = 0; i < numBubbles; i++) {
    setTimeout(function() {
      const bubble = document.createElement('div');
      bubble.className = 'bubble';
      bubble.style.left = Math.random() * 100 + 'vw';
      bubbleContainer.appendChild(bubble);

      setTimeout(function() {
        bubble.remove();
      }, 6000);
    }, i * 500); // Delay each bubble creation by 500ms
  }
}
