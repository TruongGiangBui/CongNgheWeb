function display()
{
	document.getElementById("title").innerText="You don't recently blog";
	if (localStorage.getItem("title") != null) {
		time = new Date().getTime();
		setuptime = localStorage.getItem("time");
		if (time - setuptime > 24 * 60 * 60 * 1000) {
			alert("Cookie is expired")
		} else {
			document.getElementById("title").innerText = unescape(localStorage.getItem("title"));
			document.getElementById("content").innerText = unescape(localStorage.getItem("content"));
		}
	}
}
display();

window.onload = setupRefresh;

function setupRefresh() {
    setInterval("refreshFrame();", 500);
}
function refreshFrame() {
	if (document.getElementById("title").innerText != unescape(localStorage.getItem("title"))) {
		location.reload();
	}
}