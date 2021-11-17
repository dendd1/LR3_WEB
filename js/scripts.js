var catalog_btn_1 = document.getElementById('catalog_btn_1');
var catalog_btn_2 = document.getElementById('catalog_btn_2');
var catalog_btn_3 = document.getElementById('catalog_btn_3');
var catalog_btn_4 = document.getElementById('catalog_btn_4');


catalog_btn_1.onclick = change_catalog_active_btn_1;
catalog_btn_2.onclick = change_catalog_active_btn_2;
catalog_btn_3.onclick = change_catalog_active_btn_3;
catalog_btn_4.onclick = change_catalog_active_btn_4;

function change_catalog_active_btn_1()
{
      document.getElementById('catalog_btn_1').classList.add('catalog_btn_active');
      document.getElementById('catalog_btn_2').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_3').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_4').classList.remove('catalog_btn_active');
}
function change_catalog_active_btn_2()
{
      document.getElementById('catalog_btn_1').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_2').classList.add('catalog_btn_active');
      document.getElementById('catalog_btn_3').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_4').classList.remove('catalog_btn_active');
}
function change_catalog_active_btn_3()
{
      document.getElementById('catalog_btn_1').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_2').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_3').classList.add('catalog_btn_active');
      document.getElementById('catalog_btn_4').classList.remove('catalog_btn_active');
}
function change_catalog_active_btn_4()
{
      document.getElementById('catalog_btn_1').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_2').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_3').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_4').classList.add('catalog_btn_active');
}          
function show(state)
{
      document.getElementById('window_reg_auth').style.display = state;	
      document.getElementById('gray_mask').style.display = state; 		
}

function show_auth(state)
{
      document.getElementById('window_auth_reg').style.display = state;	
      document.getElementById('gray_mask').style.display = state; 		
}

function show_laptop_menu(state)
{
      document.getElementById('header_laptop_menu').style.display = state;	
      document.getElementById('gray_mask').style.display = state; 		
}



jQuery(document).ready(function($) {
      $('#scroll').lightSlider({
            auto:true,
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('#autoWidth').removeClass('cS-hidden');
            } 
        }); 
        
});


jQuery(document).ready(function($) {
      $('#autoWidth').lightSlider({
            
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('#autoWidth').removeClass('cS-hidden');
            } 
        }); 
        
});


jQuery(document).ready(function($) {
      $('#laptop_scroll').lightSlider({
            auto:true,
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('#autoWidth').removeClass('cS-hidden');
            } 
        }); 
        
});
// 1


function info_out(){
      document.getElementById('name1').style.background = "rgb(255, 255, 255)";
      document.getElementById('name2').style.background = "rgb(255, 255, 255)";
      document.getElementById('pass1').style.background = "rgb(255, 255, 255)";
      document.getElementById('pass2').style.background = "rgb(255, 255, 255)";
      document.getElementById('email1').style.background = "rgb(255, 255, 255)";
      document.getElementById('email2').style.background = "rgb(255, 255, 255)";
      document.getElementById('pass1').style.background = "rgb(255, 255, 255)";
      document.getElementById('pass2').style.background = "rgb(255, 255, 255)";


      
      
      var name_1 = name1.value.trim();
      var name_2 = name2.value.trim();
      var email_1 = email1.value.trim();
      var email_2 = email2.value.trim();
      var pass_1 = pass1.value.trim();
      var pass_2 = pass2.value.trim();
      var tel_1 = tel.value.trim();

      var re = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
      var myMail = document.getElementById('email1').value;
      var valid = re.test(myMail);
      
      


      // console.log("Имя = " + name_1);
      // console.log("Фамилия = " + name_2);
      // console.log("Почта = " + email_1);
      // console.log("Пароль = " + email_2);
      // console.log("Телефон = " + pass_1);
      // console.log("Телефон = " + pass_2);
      if (valid){
            if(chbox.checked && name_1 !== "" && name_2 !== "" 
            && email_1 == email_2 && 
            pass_1 == pass_2 && pass_1 !== "") {
                  console.log("Имя = " + name_1);
                  console.log("Фамилия = " + name_2);
                  console.log("Почта = " + email_1);
                  console.log("Пароль = " + pass_1);
                  if(tel_1 !== ""){
                        console.log("Телефон = " + tel_1);
                  }
                  else{
                        console.log("Телефон = отсутствует");
                  }
                  if(radio1.checked){
                        console.log("Пол = мужской");
                  }
                  else{
                        console.log("Пол = женский");
                  }
            }
            else{
                  
                  if(name_1 == ""){
                        document.getElementById('name1').style.background = "rgb(255, 199, 199)";  
                  }
                  if(name_2 == ""){
                        document.getElementById('name2').style.background = "rgb(255, 199, 199)";  
                  }
                  if(email_1 !== email_2 || (email_1 == "" || email_2 == "")){
                        document.getElementById('email1').style.background = "rgb(255, 199, 199)";
                        document.getElementById('email2').style.background = "rgb(255, 199, 199)";  
                  }
                  if(pass_1 !== pass_2 || (pass_1 == "" || pass_1 == "")){
                        document.getElementById('pass1').style.background = "rgb(255, 199, 199)";
                        document.getElementById('pass2').style.background = "rgb(255, 199, 199)";  
                  }
            }
      }
      else {
            document.getElementById('email1').style.background = "rgb(255, 199, 199)";
            document.getElementById('email2').style.background = "rgb(255, 199, 199)";
            console.log("Неверный маил")
            if(name_1 == ""){
                  document.getElementById('name1').style.background = "rgb(255, 199, 199)";  
            }
            if(name_2 == ""){
                  document.getElementById('name2').style.background = "rgb(255, 199, 199)";  
            }
            if(pass_1 !== pass_2 || (pass_1 == "" || pass_1 == "")){
                  document.getElementById('pass1').style.background = "rgb(255, 199, 199)";
                  document.getElementById('pass2').style.background = "rgb(255, 199, 199)";  
            }
      }
       
}
