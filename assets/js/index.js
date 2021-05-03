$("#registerForm").submit(function(event){
  event.preventDefault();
  let d = $(this).serializeArray();
  $.ajax({
    url:"inc/register.inc.php",
    type:"POST",
    data:d,
    success:(d)=>{
      if (d) {
        $("#err").html(d);
      }
    },
    error:(d)=>{
      if (d) {
        $("#err").html(`<div class=\"error\">There was a problem with the Ajax call. Please try again later!</div>`);
      }
    }
  })
});
