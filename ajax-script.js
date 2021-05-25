$(document).on('click', '.button', function () {
    var fullname = $('.fullname').val();
    var email = $('.email').val();
    var city = $('.city').val();
    var country = $('.country').val();



    $.ajax({
        method: "POST",
        url: "http://192.168.0.28/AIS_WEBAPI/php-script.php",
        data: { Fullname: fullname, Email: email, City: city, Country: country },
        success: function (data) {
            alert("InsertSuccesfully!");
        }
    });
});

// Update
$(document).on('click', '.updateButton', function () {
    var fullname = $('.fullName').val();
    var email = $('.email').val();
    var city = $('.city').val();
    var country = $('.country').val();
    $.ajax({
        method: "POST",
        url: "http://192.168.0.28/AIS_WEBAPI/php-script.php",
        data: { Fullname: fullName, Email: email, City: city, Country: country },
        success: function (data) {
            window.location.replace("userform.php");
        }
    });
});



    // $.ajax({
    //     type: 'GET',
    //     url: 'http://192.168.0.28/AIS_WEBAPI/php-script.php',
    //     dataType: 'json',
    //     success: function (data) {
    //         console.log('ok');
    //         console.log('success ', data);



    //          $.each(data, function (i, user) {
    //         var rows = "<tr>" +
    //           "<td>" + user.fullName + "</td>" +
    //           "<td>" + user.emailAddress + "</td>" +
    //           "<td>" + user.city + "</td>" +
    //           "<td>" + user.country + "</td>" +
    //           "<input type='hidden' value=" + user.id + ">" +
    //           "<td>" + "<a type='button' href='update.php?ID="+user.id+" &FullName="+user.fullName+"&EmailAddress="+user.emailAddress+"&City="+user.city+"&Country="+user.country+"'class='btn btn-warning editButton'>" + "Edit" + "</a>" +
    //           "</td>" +
    //           "<td>" + "<a type='button' class='btn btn-danger deleteBtn'>" + "Delete" + "</a>" +
    //           "</td>" +
    //           "</tr>";
    //         $('#tableBody').prepend(rows);
    //       });
          // $('.deleteBtn').on("click", function () {
          //   var id = $(this).parent().prev().prev().val();
          //   $.ajax({
          //     type: "post",
          //     data: {
          //       ID: id,
          //     },
          //     url: 'http://192.168.0.1:8081/web-api/database.php',
          //     success: function (data) {
          //       alert(data);
          //     }
          //   })
          // })
    

    //     }


    // });





