const pageSections = document.querySelectorAll("article .alignwide");
const pageRootElement = document.querySelectorAll("main");

const pageObserver = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
        if(!entry.isIntersecting) {
            return;
        } {
            entry.target.classList.add("show", entry.isIntersecting)
        }
    })
}, {
    threshold: 0.4,
});

pageSections.forEach(section => {
    pageObserver.observe(section);
})