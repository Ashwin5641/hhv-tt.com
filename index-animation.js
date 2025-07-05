// first section animation of text slide

window.addEventListener("DOMContentLoaded", () => {
    const containers = document.querySelectorAll(".first-section-text-slide");

    containers.forEach(container => {
        const words = container.textContent.trim().split(" ");
        container.innerHTML = words
            .map(word => `<span>${word}&nbsp;</span>`)
            .join("");
    });

    gsap.to(".first-section-text-slide span", {
        opacity: 1,
        x: 0,
        duration: 0.2,
        stagger: 0.25,
        ease: "power2.out"
    });
});


// first cards animation of the containers

gsap.registerPlugin(ScrollTrigger);

gsap.from(".first-card-fadein", {
    scrollTrigger: {
        trigger: ".first-cards",
        start: "top 80%",
        toggleActions: "play none none none",
    },
    opacity: 0,
    y: 50,
    duration: 0.6,
    stagger: 0.2,
    ease: "power2.out"
});


// company introduction of the images

gsap.from(".company-intro-images-fadein",{
    scrollTrigger: {
        trigger: ".company-intro-images-fadein",
        start: "top 80%",
        toggleActions: "play none none none",
    },
    opacity: 0,
    x: 50,
    stagger: 0.2,
    ease: "power2.out"
});
