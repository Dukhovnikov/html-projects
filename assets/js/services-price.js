// function openTab(event, tabName) {
//   let tabcontent;
//   let tablinks;

//   tabcontent = document.getElementsByClassName('tabcontent');

//   for (let i = 0; i < tabcontent.length; i++) {
//     tabcontent[i].style.display = "none";
//   }

//   tablinks = document.getElementsByClassName('tablinks');
//   for (let i = 0; i < tablinks.length; i++) {
//     tablinks[i].className = tablinks[i].className.replace("active", '');
//   }

//   document.getElementsById(tabName).style.display = "block";
//   event.currentTarget.className += "active";
// }

$(document).ready(function(){
  $(".nav-tabs a").click(function(){
      $(this).tab('show');
  });
});