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

gsap.from(".company-intro-images-fadein", {
    scrollTrigger: {
        trigger: ".company-intro-images-fadein",
        start: "top 90%",
        toggleActions: "play none none none",
    },
    opacity: 0,
    x: -50,
    stagger: 0.2,
    ease: "power2.out"
});


gsap.from(".intro-company-text-fadein", {
    scrollTrigger: {
        trigger: ".intro-comapany-text-fadein",
        start: "top 80%",
    },
    opacity: 0,
    x: 50,
    stagger: 0.2,
    ease: "power2.out"
});

window.addEventListener("DOMContentLoaded", () => {
    const containers = document.querySelectorAll(".intro-company-text-onebyone");

    containers.forEach(container => {
        const words = container.textContent.trim().split(" ");
        container.innerHTML = words
            .map(word => `<span style="opacity: 0; display: inline-block; transform: translateX(-20px);">${word}&nbsp;</span>`)
            .join("");

        // Create scroll-triggered animation for this container
        gsap.to(container.querySelectorAll("span"), {
            scrollTrigger: {
                trigger: container,
                start: "top 80%", // Adjust as needed
                toggleActions: "play none none none"
            },
            opacity: 1,
            x: 0,
            duration: 0.2,
            stagger: 0.25,
            ease: "power2.out"
        });
    });
});


// products card animation for the texts and containers

gsap.from(".products-content > *", {
    scrollTrigger: {
        trigger: ".products-content",
        start: "top 80%",
    },
    opacity: 0,
    x: -40,
    duration: 1,
    stagger: 0.5,
    ease: "power2.out"
});

gsap.from(".product-cards .card", {
    scrollTrigger: {
        trigger: ".products-wrapper",
        start: "top 85%",
    },
    opacity: 0,
    y: 50,
    duration: 1,
    stagger: {
        each: 0.15,
        from: "start"
    },
    ease: "power2.out"
});