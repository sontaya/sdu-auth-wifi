$(document).ready(function(){


      var validResponse;
      $.validator.addMethod(
        "validCitizenID",
        function(value, element){
          var strTmp = new String(value);
          var iSumDigit = 0;
          var iCheckDigit = 0;
          strTmp = $.trim(strTmp)
          strExcep = "1234567891011";
          if ( strTmp.length != 13 ){
            $.validator.messages.validCitizenID = 'กรุณาระบุหมายเลขบัตรประชาชน 13 หลักไม่ต้องเว้นวรรค';
            return false;
          }
          if ((strTmp.charCodeAt(0) == 48) || (strTmp.charCodeAt(0) == 57) ){
            $.validator.messages.validCitizenID = 'กรุณาระบุหมายเลขบัตรประชาชนเป็นตัวเลขเท่านั้น';
            return false;
          }

          for( var i = 0; i < strTmp.length - 1; i++ ) {
            if ( !((strTmp.charCodeAt(i)>=48) && (strTmp.charCodeAt(i)<=57)) ){
              $.validator.messages.validCitizenID = 'กรุณาระบุหมายเลขบัตรประชาชนที่ถูกต้อง';
              return false;
            }
            if (i != 12) {
              iSumDigit += parseInt(strTmp.charAt(i),10) * (13 - i);
            }
          }
          iCheckDigit = parseInt(strTmp.charAt(12),10);
          iSumDigit = (iSumDigit % 11);
          if (iSumDigit == 0)
            iSumDigit = 1;
          else if (iSumDigit == 1)
            iSumDigit = 0;
          else
            iSumDigit = (11 - iSumDigit);

          if (iCheckDigit != iSumDigit){
            $.validator.messages.validCitizenID = 'กรุณาระบุหมายเลขบัตรประชาชนที่ถูกต้อง';
            return false;
          }else{

          }

          return true;
        }
      );


      $("#m_login_signup_submit").click(function (l) {
        l.preventDefault();
        var t = $(this);

        r = $(this).closest("form");

        r.validate({
          rules: {
            regis_idcard: {
              validCitizenID: true,
            },
            regis_name: {
              required: !0
            },
            regis_surname: {
              required: !0
            },
            regis_email: {
              required: !0,
              email: !0
            }
            // agree: {
            //   required: !0
            // }
          },
          messages:{
            regis_name: "กรุณาระบุ",
            regis_surname: "กรุณาระบุ",
            regis_email: "กรุณาระบุอีเมล์ให้ถูกต้อง"
          },
        }), r.valid() && (t.addClass("m-loader m-loader--right m-loader--light").attr("disabled", !0),
          do_submit(t)
        )
      });


      $("#btn_capture").click(function(){
        var formData = {
          'account_user' : $("#account_user").html(),
          'account_password' : $("#account_password").html(),
          'account_expire' : $("#account_expire").html()
        };


        // console.log(formData);

        $.ajax({
          url: base_url+'aucc2020/register_info',
          dataType: 'text',
          data: formData,
          type: 'post',
          success: function (ReturnData)
          {

            // console.log(ReturnData);
            // window.location.href= base_url + 'aucc2020/register_info_download';
            window.open(
              base_url + 'aucc2020/register_info_download',
              '_blank' // <- This is what makes it open in a new window.
            );

          },
          error: function (request, status, message) {
              console.log('Ajax Error!! ' + status + ' : ' + message);
          },
        });

      });


});




function do_submit(t)
{

  var formFields = $("#FrmRadiusRegister").serializeArray();

  var FrmRadiusRegisterData = new FormData();
  $.each(formFields, function( i, field ) {
    FrmRadiusRegisterData.append(field.name, field.value);
    console.log(field.value);
  });



  $.ajax({
        url: base_url+'aucc2020/do_register',
        dataType: 'json',
        data: FrmRadiusRegisterData,
        type: 'POST',
        contentType:false,
        cache: false,
        processData:false,
        success: function (ReturnData)
        {

          $("#account_user").html(ReturnData.login_user);
          $("#account_password").html(ReturnData.login_password);
          $("#account_expire").html(ReturnData.login_expire);

          setTimeout(function () {
            t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled", !1);
            $(".m-login__signup").hide();
            $(".m-login__AccountInfo").fadeIn('slow');
          }, 2e3);

        },
        error: function (request, status, message) {
            console.log('Ajax Error!! ' + status + ' : ' + message);
        },
    });

}


function makepwd() {
  var text = "";
  var possible = "abcdefghijklmnopqrstuvwxyz0123456789";

  for (var i = 0; i < 5; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}


function getScreen() {
  // console.log('getScreen: '+ base_url);
  // console.log(document.querySelector("#capture"));
  // #wifi-account-info

  // console.log(document.querySelector("#capture"));

  // html2canvas(document.querySelector("#capture")).then(
  //   canvas => {document.body.appendChild(canvas);

    // console.log(canvas.toDataURL("image/png"));
    // var dataURL = canvas.toDataURL("image/png");

    //   $.ajax({
    //     type: "POST",
    //     url: base_url+'aucc2020/canvas_download',
    //     data: {
    //       imgBase64: dataURL
    //     }
    //   }).done(function(returnData) {
    //     console.log(returnData);
    //   });
  // });

  // html2canvas($('#capture'), {
  //   onrendered: function (canvas) {
  //       var canvasImg = canvas.toDataURL("image/jpg");
  //       console.log(canvasImg);
  //       $('#canvasImg').html('<img src="'+canvasImg+'" alt="">');
  //   }
  // });

  // $("#canvasImg").html(document.querySelector("#capture"));
}

