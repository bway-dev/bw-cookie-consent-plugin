document.addEventListener("DOMContentLoaded", function (event) {
  let mainDiv = document.createElement("div");
  mainDiv.classList.add("bw-cookie-consent");
  let el = '<div class="wrapper">';
  el += '      <div class="context">';
  el += "          <h1>" + main_public_params.str_title + "</h1>";
  el += "          <p>" + main_public_params.str_sentence1 + "</p>";
  el +=
    "          <p>" +
    main_public_params.str_sentence2 +
    ' <a href="#" class="more-options">' +
    main_public_params.str_options +
    "</a>.</p>";
  el += "      </div>";
  el += '      <div class="actions">';
  el +=
    '          <a href="#" class="consent without-analytics">' +
    main_public_params.str_button1 +
    "</a>";
  el +=
    '          <a href="#" class="consent accept">' +
    main_public_params.str_button2 +
    "</a>";
  el += "      </div>";
  el += "  </div>";

  mainDiv.innerHTML = el;

  const consentCookiesStatus = localStorage.getItem("bw-cookie-consent");

  if (!consentCookiesStatus || consentCookiesStatus !== "allowed") {
    document.body.appendChild(mainDiv);
  } else if (consentCookiesStatus && consentCookiesStatus == "allowed") {
    useAnalytics();
  }

  const consentBox = document.querySelector(".bw-cookie-consent"),
    moreOptions = document.querySelector(".bw-cookie-consent .more-options"),
    consentAction = document.querySelector(
      ".bw-cookie-consent .consent.accept"
    ),
    consentActionWithout = document.querySelector(
      ".bw-cookie-consent .consent.without-analytics"
    );

  if (consentBox) {
    consentBox.addEventListener("click", function (e) {
      e.preventDefault();
      if (e.target.classList.contains("more-options")) {
        showActions();
      } else if (e.target.classList.contains("accept")) {
        allowCookies();
      } else if (e.target.classList.contains("without-analytics")) {
        allowCookiesWithoutAnalytics();
      }
    });
  }

  // moreOptions.addEventListener("click", showActions);
  // consentAction.addEventListener("click", allowCookies);
  // consentActionWithout.addEventListener("click", allowCookiesWithoutAnalytics);

  function showActions() {
    consentActionWithout.style.display = "inline-block";
  }

  function allowCookies() {
    localStorage.setItem("bw-cookie-consent", "allowed");
    consentBox.style.display = "none";
    useAnalytics();
  }

  function allowCookiesWithoutAnalytics() {
    localStorage.setItem("bw-cookie-consent", "allowed-without-analytics");
    consentBox.style.display = "none";
  }

  function useAnalytics() {
    const analyticsScript = document.getElementById("analytics-js");
    if (analyticsScript) {
      analyticsScript.setAttribute("type", "text/javascript");
      analyticsScript.setAttribute("src", analyticsScript.getAttribute("src"));
    }
  }
});
