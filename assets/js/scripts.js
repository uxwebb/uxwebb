console.log("scripts.js");

// VANTA
//////////////////////////
// VANTA.FOG({
//   el: "#hero-wrapper",
//   mouseControls: true,
//   touchControls: true,
//   gyroControls: false,
//   minHeight: 200.0,
//   minWidth: 200.0,
//   highlightColor: 0x0,
//   midtoneColor: 0xff4bda,
//   lowlightColor: 0xa341ff,
//   blurFactor: 0.65,
//   speed: 0.6,
//   zoom: 0.4,
// });

VANTA.FOG({
  el: "#hero-wrapper",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.0,
  minWidth: 200.0,
  highlightColor: 0x0,
  midtoneColor: 0x1aebd2,
  lowlightColor: 0x000000,
  blurFactor: 0.43,
  speed: 0.5,
  zoom: 0.3,
});

// SPLT
//////////////////////////
splt({
  reveal: true,
});

anime({
  targets: ".reveal",
  translateY: [0, 50],
  direction: "reverse",
  loop: 1,
  delay: anime.stagger(200),
  opacity: 0,
  duration: 1500,
  easing: "cubicBezier(.71,-0.77,.43,1.67)",
});

anime({
  targets: ".revealBG",
  translateY: [0, -50],
  direction: "reverse",
  loop: 1,
  delay: anime.stagger(0),
  opacity: 0,
  duration: 1500,
  easing: "cubicBezier(.71,-0.77,.43,1.67)",
});

// AJAX
jQuery(".post-link").on("click", function (e) {
  e.preventDefault();

  var post_id = jQuery(this).data("id"),
    projectTitle = jQuery(this).data("title"),
    projectSlug = jQuery(this).data("slug"),
    ajaxURL = "/wp-admin/admin-ajax.php";

  jQuery.ajax({
    type: "POST",
    url: ajaxURL,
    context: this,
    data: { action: "load-content", post_id: post_id },
    beforeSend: function () {
      console.log("beforesend");
    },
    success: function (response) {
      console.log("success");
      console.log(response, "respons");
      console.log(projectSlug);
      console.log(projectTitle);
      jQuery("#project-container").html(response);
    },
    error: function (xhr) {
      console.log("error");
    },
    complete: function () {
      console.log("complete");
    },
  });
});
