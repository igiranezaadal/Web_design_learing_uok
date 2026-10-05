const button = document.getElementById("button");

button.addEventListener("click", (event) => {
    const ripple = document.createElement("span");
    ripple.classList.add("ripple");
    
    const rect = button.getBoundingClientRect();
    
    const x = event.clientX - rect.left;
    const y = event.clientY - rect.top;
    
    // Using backticks for template literals
    ripple.style.left = `${x}px`;
    ripple.style.top = `${y}px`;
    
    button.appendChild(ripple);
    
    ripple.addEventListener("animationend", () => {
        ripple.remove();
    });
});
