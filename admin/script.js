$(document).ready(function () {
  $("a").click(function () {
    var id = $(this).attr("id");
    var val = $(this).text();
    if (id === "res_code") {
      showpopup();
      // $('#loginform').append('<div>'+id+'</div>');
      $("#h").text(val);
      $(".ele").empty();
      $(".ele").append(
        '<input type="email" required id="email" name="email" placeholder="User Email..." />'
      );
      $(".ele").append(
        '<input type="text" id="code" name="code" required placeholder="Desired 6 digit code" maxlength="6" >'
      );
      $(".ele").append(
        '<input type="submit" name="' + id + '" id="submit" value="Reset" >'
      );
    } else if (id === "edit_aadr") {
      showpopup();
      $("#h").text(val);
      $(".ele").empty();
      $(".ele").append(
        '<input type="email" required id="email" name="email" placeholder="User Email..." />'
      );
      $(".ele").append(
        '<input type="text" id="phn" name="phn" required placeholder="Mobile No.">'
      );
      $(".ele").append(
        '<input type="text" id="aaddr" name="aadr" required placeholder="Aadhaar No." >'
      );
      $(".ele").append(
        '<input type="submit" name="' + id + '" id="submit" value="Submit"  >'
      );
    } else if (id === "res_email") {
      showpopup();
      $("#h").text(val);
      $(".ele").empty();
      $(".ele").append(
        '<input type="email" required id="email" name="email" placeholder="User Email..." />'
      );
      $(".ele").append(
        '<input type="submit" name="' + id + '" id="submit" value="Resend" >'
      );
    } else if (id === "upload_files") {
      showpopup();
      $("#h").text(val);
      $(".ele").empty();
      $(".ele").append(
        '<input type="email" required id="email" name="email" placeholder="User Email..." />'
      );
      $(".ele").append(
        '<input type="submit" name="' + id + '" id="submit" value="Upload" >'
      );
    } else if (id === "allow_edit") {
      showpopup();
      $("#h").text(val);
      $(".ele").empty();
      $(".ele").append(
        '<input type="email" required id="email" name="email" placeholder="User Email..." />'
      );
      $(".ele").append(
        '<input type="submit" name="' + id + '" id="submit" value="Allow" >'
      );
    } else if (id === "edit") {
      showpopup();
      $("#h").text(val);
      $(".ele").empty();
      $(".ele").append(
        '<input type="email" required id="email" name="email" placeholder="User Email..." />'
      );
      $(".ele").append(
        '<input type="submit" name="' + id + '" id="submit" value="Proceed" >'
      );
    } else if (id === "fx_phd") {
      showpopup();
      $("#h").text(val);
      $(".ele").empty();
      $(".ele").append(
        '<input type="submit" name="' + id + '" id="submit" value="Go To Fix" >'
      );
    } else if (id === "gen_pdf") {
      showpopup();
      $("#h").text(val);
      $(".ele").empty();
      $(".ele").append(
        '<input type="submit" name="' + id + '" id="submit" value="Generate" >'
      );
    } else if (id === "up_excel") {
      showpopup();
      $("#h").text(val);
      $(".ele").empty();

      $(".ele").append(
        ' <input  name="c-down" type="checkbox"/><span>Download</span><br><br>'
      );

      $(".ele").append(
        ' <input  name="c-mail" type="checkbox"/><span>Mail to Admin</span><br><br>'
      );

      $(".ele").append(
        '<input type="submit" name="' +
          id +
          '" id="submit" value="Update Excel" >'
      );
    } else if (id === "exit") {
      location = "../layout/logout.php";
    }
  });
  $("#close").click(function () {
    hidepopup();
  });

  $("#file").click(function () {
    $("#file").css("background-color", "rgb(127, 130, 221)");
    $("#file").css("color", "white");
    $("#files").css("background-color", "rgb(127, 130, 221)");
    $(".table").fadeOut();
    $(".table").css({ visibility: "hidden" });
    $("#files").fadeIn();
    $("#files").css({ visibility: "visible" });
  });

  $("#ent").click(function () {
    $("#ent").css("background-color", "rgb(157, 190, 168);");
    $("#ent").css("color", "white");
    $(".table").css("background-color", "rgb(157, 190, 168);");
    $("#files").fadeOut();
    $("#files").css({ visibility: "hidden" });
    $(".table").fadeIn();
    $(".table").css({ visibility: "visible" });
  });
});

function showpopup() {
  $("#popup").fadeIn();
  $("#popup").css({ visibility: "visible" });
}

function hidepopup() {
  $("#popup").fadeOut();
  $("#popup").css({ visibility: "hidden" });
}
